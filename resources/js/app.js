import './bootstrap';
import "../css/app.css";
import "flowbite";
import Alpine from 'alpinejs';
import AuctionManager  from './auction/AuctionManager';
window.Alpine = Alpine;
window.auction = AuctionManager;

Alpine.start();
