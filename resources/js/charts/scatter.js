import Chart from "chart.js/auto";

const data = {
    datasets: [
        {
            label: "Scatter Dataset",
            data: Array(50).fill(0).map(ele => ({x: Math.floor(Math.random()*100), y : Math.floor(Math.random()*100) })),
            backgroundColor: "rgb(255, 99, 132)",
        },
    ],
};
const config = {
    type: "scatter",
    data: data,
    options: {
        scales: {
            x: {
                type: "linear",
                position: "bottom",
            },
        },
    },
};

export function createScatter(ele) {
    new Chart(ele, config);
}
