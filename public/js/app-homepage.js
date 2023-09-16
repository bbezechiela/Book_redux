var sidebar_width = document.getElementById("sidebar").offsetWidth;
var content_width = document.getElementById("content");

// window.addEventListener("resize", function () {
//     content_width.style.marginLeft = sidebar_width + "px";
// });
// window.addEventListener("load", function () {
//     content_width.style.marginLeft = sidebar_width + "px";
// });

var home_sidebar = document.getElementById("home-side-btn");
var wishlist_sidebar = document.getElementById("wishlist-side-btn");
var my_list = document.getElementById("myList-side-btn");

home_sidebar.addEventListener("click", function() {
    my_list.style.backgroundColor = "#003060";
    home_sidebar.style.backgroundColor = "#2D6092"
    iframe.src = "./homepage-content.php";
});

wishlist_sidebar.addEventListener("click", function() {
    iframe.src = "./wishList.php";
});
my_list.addEventListener("click", function() {
    document.getElementById("home-side-btn").style.backgroundColor = "#003060";
    my_list.style.backgroundColor = "#2D6092";
    iframe.src = "./myList.php";
});

var daily_discover_anchor = document.getElementById("daily-discover-anchor");
var featured_anchor = document.getElementById("featured-anchor");
var recommended_anchor = document.getElementById("recommended-anchor");
var check_this_anchor = document.getElementById("check_this_out-anchor");
var for_sale_anchor = document.getElementById("for_sale-anchor");
var for_exchange_anchor = document.getElementById("for_exchange-anchor")
var for_rent_anchor = document.getElementById("for_rent-anchor");

var iframe = document.getElementById("content-frame");

// daily_discover_anchor.addEventListener("click", function () {
//     iframe.src = "./homepage-content.php#daily-discover";
// });

// featured_anchor.addEventListener("click", function() {
//     iframe.src = "./homepage-content.php#featured";
// })

// recommended_anchor.addEventListener("click", function() {
//     iframe.src = "./homepage-content.php#recommended";
// });

// check_this_anchor.addEventListener("click", function() {
//     iframe.src = "./homepage-content.php#check_this_out";
// });

// for_sale_anchor.addEventListener("click", function() {
//     iframe.src = "./homepage-content.php#for_sale";
// });

// for_exchange_anchor.addEventListener("click", function() {
//     iframe.src = "./homepage-content.php#for_exchange";
// });

// for_rent_anchor.addEventListener("click", function() {
//     iframe.src = "./homepage-content.php#for_rent";
// });


// partial templates
var daily_discover_cards = document.getElementById("daily-discover");
var featured_cards = document.getElementById("featured");
var recommended_cards = document.getElementById("recommended");
var check_this_out_cards = document.getElementById("check_this_out");
var for_sale_cards = document.getElementById("for_sale");
var for_exchange_cards = document.getElementById("for_exchange");
var for_rent_cards = document.getElementById("for_rent");

var daily_discover_btn = document.getElementById("daily-discover-header");
var featured_btn = document.getElementById("featured-header");
var recommended_btn = document.getElementById("recommended-header");
var check_this_btn = document.getElementById("check-this-out-header");
var for_sale_btn = document.getElementById("for-sale-header");
var for_exchange_btn = document.getElementById("for-exchange-header");
var for_rent_btn = document.getElementById("for-rent-header");

daily_discover_btn.addEventListener("click", function () {
    // alert("bitch");
    daily_discover_cards.style.display = "none";
    featured_cards.style.display = "none";
    recommended_cards.style.display = "none";
    check_this_out_cards.style.display = "none";
    for_sale_cards.style.display = "none";
    for_exchange_cards.style.display = "none";
    for_rent_cards.style.display = "none";
    document.getElementById("daily-discovery-content").style.display = "table";
});

featured_btn.addEventListener("click", function () {
    daily_discover_cards.style.display = "none";
    featured_cards.style.display = "none";
    recommended_cards.style.display = "none";
    check_this_out_cards.style.display = "none";
    for_sale_cards.style.display = "none";
    for_exchange_cards.style.display = "none";
    for_rent_cards.style.display = "none";
    document.getElementById("featured-content").style.display = "table";
});

recommended_btn.addEventListener("click", function () {
    daily_discover_cards.style.display = "none";
    featured_cards.style.display = "none";
    recommended_cards.style.display = "none";
    check_this_out_cards.style.display = "none";
    for_sale_cards.style.display = "none";
    for_exchange_cards.style.display = "none";
    for_rent_cards.style.display = "none";
    document.getElementById("recommended-content").style.display = "table";
});

check_this_btn.addEventListener("click", function () {
    daily_discover_cards.style.display = "none";
    featured_cards.style.display = "none";
    recommended_cards.style.display = "none";
    check_this_out_cards.style.display = "none";
    for_sale_cards.style.display = "none";
    for_exchange_cards.style.display = "none";
    for_rent_cards.style.display = "none";
    document.getElementById("check-this-content").style.display = "table";
});

for_sale_btn.addEventListener("click", function () {
    daily_discover_cards.style.display = "none";
    featured_cards.style.display = "none";
    recommended_cards.style.display = "none";
    check_this_out_cards.style.display = "none";
    for_sale_cards.style.display = "none";
    for_exchange_cards.style.display = "none";
    for_rent_cards.style.display = "none";
    document.getElementById("for-sale-content").style.display = "table";
});

for_exchange_btn.addEventListener("click", function () {
    daily_discover_cards.style.display = "none";
    featured_cards.style.display = "none";
    recommended_cards.style.display = "none";
    check_this_out_cards.style.display = "none";
    for_sale_cards.style.display = "none";
    for_exchange_cards.style.display = "none";
    for_rent_cards.style.display = "none";
    document.getElementById("for-exchange-content").style.display = "table";
});

for_rent_btn.addEventListener("click", function () {
    daily_discover_cards.style.display = "none";
    featured_cards.style.display = "none";
    recommended_cards.style.display = "none";
    check_this_out_cards.style.display = "none";
    for_sale_cards.style.display = "none";
    for_exchange_cards.style.display = "none";
    for_rent_cards.style.display = "none";
    document.getElementById("for-rent-content").style.display = "table";
});
