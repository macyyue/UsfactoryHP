import "https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js";
document.addEventListener("DOMContentLoaded",
    function () {
        bodymovin.loadAnimation({
            container: document.getElementById("logo_vertical"),
            renderer: "svg", loop: !1, autoplay: !0, path: "animation/logo-vertical.json"
        }),
            bodymovin.loadAnimation({
                container: document.getElementById("logo_horizontal"),
                renderer: "svg", loop: !1, autoplay: !0, path: "animation/logo-horizontal.json"
            })
    });