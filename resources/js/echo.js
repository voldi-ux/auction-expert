import Echo from "laravel-echo";

import Pusher from "pusher-js";
window.Pusher = Pusher;

export default new Echo({
    broadcaster: "pusher",
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true,
    enableLogging: true,
});


// window.Echo.channel("testChannel").on("test", function (e) { 
//     alert("event")

//     console.log("event")
// });



// window.Echo.connector.pusher.connection.bind("connecting", (payload) => {
//     /**
//      * All dependencies have been loaded and Channels is trying to connect.
//      * The connection will also enter this state when it is trying to reconnect after a connection failure.
//      */

//     console.log("connecting...");
// });

// window.Echo.connector.pusher.connection.bind("connected", (payload) => {
//     /**
//      * The connection to Channels is open and authenticated with your app.
//      */

//     console.log("connected!", payload);
// });

// window.Echo.connector.pusher.connection.bind("unavailable", (payload) => {
//     /**
//      *  The connection is temporarily unavailable. In most cases this means that there is no internet connection.
//      *  It could also mean that Channels is down, or some intermediary is blocking the connection. In this state,
//      *  pusher-js will automatically retry the connection every 15 seconds.
//      */

//     console.log("unavailable", payload);
// });

// window.Echo.connector.pusher.connection.bind("failed", (payload) => {
//     /**
//      * Channels is not supported by the browser.
//      * This implies that WebSockets are not natively available and an HTTP-based transport could not be found.
//      */

//     console.log("failed", payload);
// });

// window.Echo.connector.pusher.connection.bind("disconnected", (payload) => {
//     /**
//      * The Channels connection was previously connected and has now intentionally been closed
//      */

//     console.log("disconnected", payload);
// });

// window.Echo.connector.pusher.connection.bind("message", (payload) => {
//     /**
//      * Ping received from server
//      */

//     console.log("message", payload);
// });