/*price range*/

function showCart(cart) {

    $('#cart .modal-body').html(cart);

    $('#cart').modal("show");

}

function getCart(){
    $.ajax({
        url: "/web/index.php?r=cart%2Fshow",
        type: 'GET',
        success: function (res) {
            if (!res) alert("error!");
            showCart(res);
        },
        error: function (e) {
            console.error(e)
        },

    })
    return false;
}

$('.add-to-cart').on('click', function (e) {
    e.preventDefault();

    let id = $(this).data('id');
    let qty = $("#qty").val();
    $.ajax({
        url: "/web/index.php?r=cart%2Fadd",
        data: {id: id,qty: qty},
        type: 'GET',
        success: function (res) {
            if (!res) alert("error!");
            showCart(res);
        },
        error: function (e) {
            console.error(e)
        },

    })
})

$('#cart .modal-body').on("click", '.del-item', function () {
    let id = $(this).data('id');
    $.ajax({
        url: "/web/index.php?r=cart%2Fdel",
        data: {id: id},
        type: 'GET',
        success: function (res) {
            if (!res) alert("error!");
            showCart(res);
        },
        error: function (e) {
            console.error(e)
        },

    })
});

$('#sl2').slider();

var RGBChange = function () {
    $('#RGB').css('background', 'rgb(' + r.getValue() + ',' + g.getValue() + ',' + b.getValue() + ')')
};


/*scroll to top*/

$(document).ready(function () {
    $(function () {
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            scrollDistance: 300, // Distance from top/bottom before showing element (px)
            scrollFrom: 'top', // 'top' or 'bottom'
            scrollSpeed: 300, // Speed back to top (ms)
            easingType: 'linear', // Scroll to top easing (see http://easings.net/)
            animation: 'fade', // Fade, slide, none
            animationSpeed: 200, // Animation in speed (ms)
            scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
            //scrollTarget: false, // Set a custom target element for scrolling to the top
            scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
            scrollTitle: false, // Set a custom <a> title if required.
            scrollImg: false, // Set true to use image
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
            zIndex: 2147483647 // Z-Index for the overlay
        });
    });
});
