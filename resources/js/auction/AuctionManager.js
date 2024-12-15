import axios from "axios";

class AuctionManager { 
  
   async placeBid(auctionId,amount) { 
       let answ =  prompt("Are you sure you want to bid " + "R " + amount)
       if (answ) { 
            try {
                let res = await axios.post(`/buyer/place-bid/${auctionId}`, { amount });
                console.log(res.data)
            return res.data;
            } catch (error) {
                alert("could not place your bid at the moment")
            }
       } 
       
       return {topBid: null}
    }
}


export default (new AuctionManager());