// Side Menu

let menuBtn = document.getElementById("bl-header-hamburger-icon");
let sideMenu = document.getElementById("bl-side-nav");
let closeNav = document.querySelector(".nav-close-btn-icon");
let bgOverlary = document.querySelector(".menu-overlay");
// Function to open the side menu
function openSideMenu() {
    sideMenu.classList.add("active-side-nav");
    bgOverlary.classList.add("active-overlay");
}

// Function to close the side menu
function closeSideMenu() {
    sideMenu.classList.remove("active-side-nav");
    bgOverlary.classList.remove("active-overlay");

    let subItems = document.querySelectorAll(".bl-has-child");
    setTimeout(() => {
        subItems.forEach((item) => {
            const nextSibling = item.nextSibling;
            if (nextSibling) {
                nextSibling.classList.remove('sub-menu-active');
            }
        });
    }, 1000);
}

menuBtn.addEventListener("click", () => {
    openSideMenu();
});

closeNav.addEventListener("click", () => {
    closeSideMenu();
});

// Add event listener to the document to handle clicks outside the side menu
document.addEventListener("click", (event) => {
    const isClickInsideSideMenu = sideMenu.contains(event.target);
    const isClickInsideMenuBtn = menuBtn.contains(event.target);

    if (!isClickInsideSideMenu && !isClickInsideMenuBtn) {
        closeSideMenu();
    }
});


// Side Sub Menu

let subItems = document.querySelectorAll(".bl-has-child");
let subMenuCloseBtn = document.querySelectorAll('.sub-menu-close-btn');
let subMenus = document.querySelectorAll('.sub-menu-wrap');

subItems.forEach((item) => {
    item.addEventListener("click",() => {
        item.nextSibling.classList.add("sub-menu-active")
    })
})

subMenuCloseBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
        subMenus.forEach((menu) => {
            if(menu.classList.contains("sub-menu-active")) {
                menu.classList.remove("sub-menu-active")
            }
        })
    })
})
