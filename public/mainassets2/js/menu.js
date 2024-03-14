
document.addEventListener("DOMContentLoaded", function () {
    var topMenu = document.getElementById("navbar-nav");
    var topMenuHeight = topMenu.offsetHeight;
    menuScroll(topMenu, topMenuHeight);
});

function menuScroll(topMenu, offset) {
    var topOffset = offset || 0;
    var menuItems = Array.from(topMenu.querySelectorAll("a")).filter(function (item) {
        return item.getAttribute("href").includes("#");
    });
    var lastId;

    var scrollItems = Array.from(menuItems).map(function (item) {
        var href = item.getAttribute("href");
        var target = document.querySelector(href);
        if (target) {
            return target;
        }

    });
  


    window.addEventListener("scroll", function () {
        var nm = document.documentElement.scrollTop || document.body.scrollTop;
        var nw = document.body.scrollTop;
        var fromTop = (nm > nw ? nm : nw) + topOffset;

        var current = scrollItems.filter(function (item) {
            return item.offsetTop <= fromTop;
        });

        current = current[current.length - 1];
        var id = current ? current.id : "";
        if (lastId !== id) {
            lastId = id;
            menuItems.forEach(function (item) {
                var href = item.getAttribute("href");
                var targetId = href.substring(1);
                var target = document.getElementById(targetId);
                if (targetId === id) {
                    item.classList.add("active");
                } else {
                    item.classList.remove("active");
                }
            });
        }
    });
}
