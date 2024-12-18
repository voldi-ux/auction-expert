import Chart from "chart.js/auto";

const labels = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
];
const data = {
    labels: labels,
    datasets: [
        {
            label: "My First Dataset",
            data: [65, 59, 80, 81, 56, 55, 40, 30,59, 60, 71, 60, 81],
            fill: false,
            borderColor: "rgb(75, 192, 192)",
            tension: 0.1,
        },
    ],
};

const config = {
    type: "line",
    data: data,
};

export function createLine(ele) { 
    new Chart(ele, config)
}