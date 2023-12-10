$(document).ready(function () {
    $('.slide-main').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        speed: 500,
       
    });
    $('.item').slick({
        rows:2,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        infinite: true,
        variableWidth: false,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: false,
                    autoplaySpeed: 2000,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: false,
                    autoplaySpeed: 2000,
                }
            },
        ]
    })
    $('.topitems-slide').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        isfinite: true,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: false,
                    autoplaySpeed: 2000,
                }
            },
        ]
    })

});

const $1 = document.querySelector.bind(document);
const $$1 = document.querySelectorAll.bind(document);
const line1 = $1('.cate-tabs-list-line');
const tabActive = $1('.cate-tabs-list-item.active');
const tabs = $$1('.cate-tabs-list-item');
const itemList = $$1('.item-wrapper');
const item1 = $$1('.item');
const cartButton = $$1('.cart-button');
const cart = $1('.cart-container');
const outLine = $1('.outline');
const closeButton = $1('.close-button');
const submenuButton = $1('.submenu-button');
const submenu = $1('.mobile-submenu');
const mobileClose = $1('.mobile-menu-button');
const mobileMenu = $1('.mobile-menu');
const mobileOpen = $1('.mobile-nav-menu');
const submitButton = $1('.submit-close');
const mobileSearchButton = $1('.mobile-nav-search');
const mobileSearch = $1('.mobile-search');
const loginSection = $1('.login-section');
const filterButton = $1('.filter-button');
const shopFilter = $1('.filter-container');
if (line1) {
    line1.style.left = tabActive.offsetLeft + "px";
    line1.style.width = tabActive.offsetWidth + "px";
    line1.style.height = tabActive.offsetHeight + "px";
}


function reMove() {
    item1.forEach((item, index) => {
        while (item.hasChildNodes()) {
            item.removeChild(item.firstChild);
        }
    })
}
tabs.forEach((tab, index) => {
    tab.onclick = function () {
        $('.item').slick('unslick');
        var a = [];
        $1('.cate-tabs-list-item.active').classList.remove("active");
        line1.style.left = this.offsetLeft + "px";
        line1.style.width = this.offsetWidth + "px";
        line1.style.height = this.offsetHeight + "px";
        this.classList.add("active");
        itemList.forEach((item, index) => {
            if (tab.getAttribute("data-filter") == "full") {
                a.push(item);
                reMove();
            }
            else if ((tab.getAttribute("data-filter") == item.getAttribute("data-item"))) {
                a.push(item);
                reMove();
            }
            else { reMove(); }
        })
        a.forEach((item, index) => {
            item1.forEach((item1, index) => {
                item1.appendChild(item);
            })
        })
        if (tab.getAttribute("data-filter") == "full") {
            $('.item').slick({
                rows:2,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                infinite: true,
            })
        }
        // if (item1.childNodes.length == 0) {
        //     item1.innerText = "KHÔNG CÓ SẢN PHẨM"
        // }
    }
})
cartButton.forEach((button, index) => {
    button.onclick = (e) => {
        cart.classList.toggle("active");
        outLine.classList.toggle("active");
    }
})
outLine.onclick = () => {
    cart.classList.remove("active");
    outLine.classList.remove("active");
    mobileMenu.classList.remove("active");
    mobileSearch.classList.remove("active");
    shopFilter.classList.remove("active");
}
closeButton.onclick = () => {
    cart.classList.toggle("active");
    outLine.classList.toggle("active");

}
submenuButton.onclick = () => {
    submenu.classList.toggle("active");
}
mobileClose.onclick = () => {
    mobileMenu.classList.remove("active");
    outLine.classList.remove("active");
}
mobileOpen.onclick = () => {
    mobileMenu.classList.add("active");
    outLine.classList.add("active");
}
submitButton.onclick = () => {
    outLine.classList.remove("active");
    mobileMenu.classList.remove("active");
    document.getElementById(`id01`).style.display = `block`
}
mobileSearchButton.onclick = () => {
    mobileSearch.classList.add("active");
    outLine.classList.add("active");
}
filterButton.onclick = () => {
    outLine.classList.add("active");
    shopFilter.classList.add("active");
}
loginSection.onclick = () => {
    cart.classList.remove("active");
    document.getElementById(`id01`).style.display=`block`;
    outLine.classList.remove("active");
}

var modal1 = document.getElementById('id01');
var modal3 = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
}