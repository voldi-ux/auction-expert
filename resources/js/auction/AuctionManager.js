import axios from "axios";
import echo from "../echo.js";

class AuctionManager {
    #registered = false;

    async placeBid(auctionId, amount) {
        let answ = confirm("Are you sure you want to bid " + "R " + amount);
        if (answ) {
            try {
                let res = await axios.post(`/buyer/place-bid/${auctionId}`, {
                    amount,
                });
                
                if (res.data.message) { 
                    alert(res.data.message);
                    return {topBid: null};
                }
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
        let topCard = document.getElementById(`card-top-amount-${auctionId}`);
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
            topCard.innerHTML = `R ${numberFormat(topBid)} `;
            //somehow when the content is changed, a new text element is added since it is not needed, it must be removed
            if (top.nextElementSibling) { 
                top.nextElementSibling.style.display = "none";

            }

            if (topCard.nextElementSibling) { 
                topCard.nextElementSibling.style.display = "none";
            }
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

    registerTop(topEle) {
        if (topEle) {
            let auctionId = topEle.getAttribute("auction-id");
            console.log(auctionId)
            echo.channel(`auction-${auctionId}`).on("bid", function ({data}) {
                console.log(data);
                 const numberFormat = new Intl.NumberFormat().format;
                topEle.innerHTML = `R ${numberFormat(data.topBid)} `;
                topEle.setAttribute("value", data.topBid);

                topEle.nextElementSibling && (topEle.nextElementSibling.style.display =
                    "none");
            });
        }
    }

    registerAuctions() {
        if (this.#registered) return;
        let auctions = document.getElementsByClassName("auction-container");

        for (let container of auctions) {
            this.registerAuctionView(container);
        }

        this.#registered = true;
    }

    registerAuctionView(container) {
        
        let auctionId = container.getAttribute("auction-id");
        let topEle = container.querySelector(`#top-bid-${auctionId}`);
        this.registerTop(topEle)
        echo.channel(`auction-${auctionId}`).on("bid", function ({ data }) {
             const numberFormat = new Intl.NumberFormat().format;
            let auto_bids = container.querySelectorAll(
                `.auto-bid-${auctionId}`
            );
            
             

            let { bids } = data;

            for (let i = 0; i < auto_bids.length; i++) {
                let bidEle = auto_bids[i]; 
                let value = bids[i + 1];
                bidEle.innerHTML = `R ${numberFormat(value)} `;
                bidEle.setAttribute("value", value);
            }
        });
    }
}

export default new AuctionManager();
