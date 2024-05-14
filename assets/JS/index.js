const btnSearch = document.querySelector(".js-button-search");
const search = document.querySelector(".js-search");
const navmenu = document.querySelector(".js-navmenu");
document.addEventListener("DOMContentLoaded", function() {


    // Thêm vào giỏ hàng
    var cartIcons = document.querySelectorAll('.add-cart-action');
    cartIcons.forEach(function(icon) {
        icon.addEventListener('click', async function() {
            // Lấy tên sản phẩm từ thuộc tính data-product-name của biểu tượng trái tim
            // alert(icon.dataset.productId);
            var formData = new FormData();
            formData.append('themgiohang', 'themgiohang');
            formData.append('id', icon.dataset.productId);


            const response = await fetch(`pages/main/addtocart.php`, {
                method: "POST",
                body: formData,
            });
            console.log(Toastify);
            Toastify({
                text: "Thêm sản phẩm vào giỏ hàng thành công",
                duration: 3000,
                position: 'center',
            }).showToast();
            console.log('Thành công');
        });
    });
});

function showSearch() {
    search.classList.add("show");
}

function hideSearch() {
    search.classList.remove("show");
}

btnSearch.addEventListener("click", showSearch);

navmenu.addEventListener("click", hideSearch);

btnSearch.addEventListener("click", function(event) {
    event.stopPropagation();
});

search.addEventListener("click", function(event) {
    event.stopPropagation();
});

// todo sticky menu
window.addEventListener("scroll", function() {
    var navMenu = document.querySelector(".js-navmenu");
    navMenu.classList.toggle("sticky", window.scrollY > 0);
});

//todo quảng cáo
const adv = document.querySelector(".js-adv");
const btnClose = document.querySelector(".js-close-adv");

function showAdv() {
    adv.classList.add("open");
}

function hideAdv() {
    adv.classList.remove("open");
}

setTimeout(showAdv, 3000);
btnClose.addEventListener("click", hideAdv);

// todo go to top
window.addEventListener("scroll", function() {
    var goTop = document.querySelector(".js-top");
    goTop.classList.toggle("open", window.scrollY > 0);
});