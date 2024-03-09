// Landing Page (index.php)

AOS.init();

var selling = document.getElementById('selling');
var buying = document.getElementById('buying');
var exchange = document.getElementById('exchange');
var rent = document.getElementById('rent');
// var donate = document.getElementById('donate');

var selling_instructions = document.getElementById('selling-page');
var buying_instructions = document.getElementById('buying-page');
var exchange_instructions = document.getElementById('exchange-page');
var renting_instructions = document.getElementById('renting-page');
// var donate_instructions = document.getElementById('donate-page');

selling.addEventListener("click", function () {
    selling_instructions.style.display = "flex";
    buying_instructions.style.display = "none";
    exchange_instructions.style.display = "none";
    renting_instructions.style.display = "none";
    donate_instructions.style.display = "none";

    selling.style.borderBottom = "2px solid #003060";
    buying.style.borderBottom = "none";
    exchange.style.borderBottom = "none";
    rent.style.borderBottom = "none";
    // donate.style.borderBottom = "none";
});

buying.addEventListener("click", function () {
    selling_instructions.style.display = "none";
    buying_instructions.style.display = "flex";
    exchange_instructions.style.display = "none";
    renting_instructions.style.display = "none";
    donate_instructions.style.display = "none";

    selling.style.borderBottom = "none";
    buying.style.borderBottom = "2px solid #003060";
    exchange.style.borderBottom = "none";
    rent.style.borderBottom = "none";
    // donate.style.borderBottom = "none";
});

exchange.addEventListener("click", function () {
    selling_instructions.style.display = "none";
    buying_instructions.style.display = "none";
    exchange_instructions.style.display = "flex";
    renting_instructions.style.display = "none";
    donate_instructions.style.display = "none";

    selling.style.borderBottom = "none";
    buying.style.borderBottom = "none";
    exchange.style.borderBottom = "2px solid #003060";
    rent.style.borderBottom = "none";
    // donate.style.borderBottom = "none";
});

rent.addEventListener("click", function () {
    selling_instructions.style.display = "none";
    buying_instructions.style.display = "none";
    exchange_instructions.style.display = "none";
    renting_instructions.style.display = "flex";
    donate_instructions.style.display = "none";

    selling.style.borderBottom = "none";
    buying.style.borderBottom = "none";
    exchange.style.borderBottom = "none";
    rent.style.borderBottom = "2px solid #003060";
    // donate.style.borderBottom = "none";
});

// donate.addEventListener("click", function () {
//     selling_instructions.style.display = "none";
//     buying_instructions.style.display = "none";
//     exchange_instructions.style.display = "none";
//     renting_instructions.style.display = "none";
//     donate_instructions.style.display = "flex";

//     selling.style.borderBottom = "none";
//     buying.style.borderBottom = "none";
//     exchange.style.borderBottom = "none";
//     rent.style.borderBottom = "none";
//     donate.style.borderBottom = "2px solid #003060";
// })