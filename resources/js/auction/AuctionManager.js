import axios from "axios";

class AuctionManager {
    async placeBid(auctionId, amount) {
        let answ = prompt("Are you sure you want to bid " + "R " + amount);
        if (answ) {
            try {
                let res = await axios.post(`/buyer/place-bid/${auctionId}`, {
                    amount,
                });
                console.log(res.data);
                return res.data;
            } catch (error) {
                alert("could not place your bid at the moment");
            }
        }

        return { topBid: null };
    }

    async quickBid(ele) {
        let auctionId = ele.getAttribute("auction");
        let top = document.getElementById(`top-bid-${auctionId}`);
        let currentTopBid = +top.getAttribute("value");
        let value = +ele.getAttribute("value");

        const numberFormat = new Intl.NumberFormat().format;

        if (currentTopBid >= value) {
            alert("Your Bid amount must be larger than the current top bid");
            return;
        }

        const { topBid, bids } = await this.placeBid(auctionId, value);

        if (topBid) {
            top.innerHTML = `R ${numberFormat(topBid)} `;
            //somehow when the content is changed, a new text element is added since it is not needed, it must be removed
            top.nextElementSibling.style.display = "none";
            top.setAttribute("value", topBid);
            let auto_bids = document.querySelectorAll(`.auto-bid-${auctionId}`);

            for (let i = 1; i <= auto_bids.length; i++) {
                let bidEle = auto_bids[i - 1]; // the nodelist is index based, while the bids aren't
                let value = bids[i];
                bidEle.innerHTML = `R ${numberFormat(value)} `;
                bidEle.setAttribute("value", value);
            }
        }
    }

    bidButton(btn) {
        let auctionId = btn.getAttribute("auction");
        let ele = document.getElementById(`own-bid-${auctionId}`);
        ele.setAttribute("value", ele.value);
        ele.setAttribute("auction", auctionId);
        this.quickBid(ele);
        ele.value = null;
    }
}

export default new AuctionManager();
