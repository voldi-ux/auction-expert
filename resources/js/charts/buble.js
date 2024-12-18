import Chart from "chart.js/auto";

const data = {
    datasets: [
        {
            label: "First Dataset",
            data: Array(10)
                .fill(0)
                .map((ele) => ({
                    x: Math.floor(Math.random() * 100),
                    y: Math.floor(Math.random() * 100),
                    r: Math.floor(Math.random() * 40),
                })),
            backgroundColor: "rgb(255, 99, 132)",
        },
    ],
};

const config = {
    type: "bubble",
    data: data,
    options: {},
};


export function createBuble(ele) { 
    new Chart(ele, config)
}