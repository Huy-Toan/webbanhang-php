// Tabs
$(document).ready(function () {
    $('#tabs-nav li:first-child').addClass('active');
    $('.tab-content').hide();
    $('.tab-content:first').show();

    $('#tabs-nav li').click(function () {
        $('#tabs-nav li').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').hide();

        var activeTab = $(this).find('a').attr('href');
        $(activeTab).fadeIn();
        return false;
    });
});

// Xem nhanh sản phẩm
function xemnhanh(product_id) {
    $.ajax({
        url: "pages/ajax/xemnhanh.php",
        method: "POST",
        dataType: "JSON",
        data: { product_id: product_id },
        success: function (data) {
            $("#title_product").text(data.tensanpham);
            $("#tendanhmuc").text(data.tendanhmuc);
            $("#masp").text(data.masp);
            $("#giasp").text(formatNumber(data.giasp) + ' VNĐ');
            $("#product_image").html(
                '<img width="100%" height="auto" src="admin/modules/quanlysp/uploads/' + data.hinhanh + '">'
            );
            $("#form_data").attr("action", "pages/main/themgiohang.php?idsanpham=" + product_id);
        }
    });
}

function formatNumber(number) {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
}

// Slideshow
let index = 0;
let transitionDelay = 7000;

const slideContainer = document.querySelector(".slideshow");
if (slideContainer) {
    const slides = slideContainer.querySelectorAll(".slide");
    for (let slide of slides) {
        slide.style.transition = `all ${transitionDelay / 1000}s linear`;
    }

    function showSlide(slideNumber) {
        slides.forEach((slide, i) => {
            slide.style.display = i === slideNumber ? "block" : "none";
        });
        index++;
        if (index >= slides.length) index = 0;
    }

    showSlide(index);
    setInterval(() => showSlide(index), transitionDelay);
}

// Đổi mật khẩu - Modal
const doi = document.querySelectorAll('.doimatkhau');
const modal = document.querySelector('.js-modal');
const modalClose = document.querySelector('.js-modal-close');
const modalContainer = document.querySelector('.js-modal-container');

function show() {
    modal.classList.add('open');
}

function remove() {
    modal.classList.remove('open');
}

if (modal) {
    doi.forEach(btn => btn.addEventListener('click', show));
    modalClose?.addEventListener('click', remove);
    modal?.addEventListener('click', remove);
    modalContainer?.addEventListener('click', function (e) {
        e.stopPropagation();
    });
}

// PayPal
if (document.getElementById("paypal-button-container")) {
    paypal.Buttons({
        style: {
            shape: "rect",
            layout: "vertical",
            color: "gold",
            label: "paypal",
        },
        createOrder: function (data, actions) {
            var tien = document.getElementById('tongtien').value;
            return actions.order.create({
                purchase_units: [{
                    amount: { value: tien }
                }]
            });
        },
        onApprove: function (data, actions) {
            return actions.order.capture().then(function (orderData) {
                var transaction = orderData.purchase_units[0].payments.captures[0];
                alert('Transaction ' + transaction.status + ': ' + transaction.id);
                window.location.replace('http://localhost/Motorbikes/WebBanXeMay/index.php?quanly=camon&thanhtoan=paypal');
            });
        },
        onCancel: function (data) {
            window.location.replace('http://localhost/Motorbikes/WebBanXeMay/index.php?quanly=thongtinthanhtoan');
        }
    }).render('#paypal-button-container');
}
