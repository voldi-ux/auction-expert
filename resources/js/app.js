import "./bootstrap";
import "../css/app.css";
import "flowbite";
import AuctionManager from "./auction/AuctionManager";
import Chart from "chart.js/auto";
import { createBuble } from "./charts/buble";
import { createBarChart } from "./charts/bar";
import { createDoghnut } from "./charts/doughnut";
import { createLine } from "./charts/line";
import { createScatter } from "./charts/scatter";

window.chart = Chart;
window.auction = AuctionManager;

window.createBuble = createBuble;
window.createBar = createBarChart;
window.createDoughnut = createDoghnut;
window.createLine = createLine;
window.createScatter = createScatter;



