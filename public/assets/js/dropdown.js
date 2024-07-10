// main menu arrow button handle
(function (document) {
    var divs = document.getElementsByClassName("arrow-div");
    Array.from(divs).forEach(function (div) {
        div.addEventListener("click", function (event) {
            const clickedElement = event.currentTarget;
            const arrows = clickedElement.getElementsByClassName("arrow");
            Array.from(arrows).forEach(function (arrow) {
                arrow.classList.toggle('open');
            });
        });
    });
})(document);

// add classes at menu
const activePage = window.location.pathname;
document.querySelectorAll('nav a').forEach(link => {
    if (link.href.includes(`${activePage}`)) {
        link.classList.add('active');
    }
})
document.querySelectorAll('mobile-side-menu a').forEach(mlink => {
    if (mlink.href.includes(`${activePage}`)) {
        mlink.classList.add('active');
    }
})


const currentPath = window.location.pathname;
const currentNav = currentPath.slice(1).split('/');
const primaryNavMap = {
    'template': '#nav-side-menu .template',
    'config': '#nav-side-menu .masterData',
    'user-mgt': '#nav-side-menu .userData',
    'petition': '#nav-side-menu .petition',
};
const mobileNavMap = {
    'template': '#mobile-side-menu .template',
    'config': '#mobile-side-menu .masterData',
    'user-mgt': '#mobile-side-menu .userData',
    'petition': '#mobile-side-menu .petition',
};
const selector = primaryNavMap[currentNav[0]];
const mobileSelector = mobileNavMap[currentNav[0]];
const targetNavItem = document.querySelector(selector);
const mobileNavItem = document.querySelector(mobileSelector);
targetNavItem.classList.add('show');
mobileNavItem.classList.add('show');


(function (document) {
    let collapseLia = document.querySelectorAll('.collapse.multi-collapse.show>ul>li>a');

    function selectParent(parent) {
        // if we add a new collapse menu, need to add here
        const pos = {
            petition: 'petition',
            userData: 'userData',
            template: 'template'
        }
        document.getElementById(`${pos[parent]}-arrow`).classList.add('open');
        document.getElementById(`${pos[parent]}-legend`).classList.add('bold');
    }

    collapseLia.forEach(link => {
        if (link.classList.contains(`active`)) {
            let parent = link.parentNode.parentNode.parentNode.id
            selectParent(parent);
        }
    });

})(document);