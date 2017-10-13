

function showMovie(n) {
    var i;
    var x = document.getElementsByClassName("movie");
    if (n > x.length) {movieCount = 1;} 
    if (n < 1) {movieCount = x.length;} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    x[movieCount-1].style.display = "block"; 
}

function plusmovie(n) {
    showMovie(movieCount += n);
}
var movieCount = 1;
  showMovie(movieCount);
//carousel code adapted from W3School https://www.w3schools.com/w3css/w3css_slideshow.asp

var booking = new Object(); 
var elem = document.forms[0].elements[0];
booking[elem.id] = elem.value;



// Get the cart
var cart = document.getElementById('myCart');

// checkout
var checkout = document.getElementById("checkout");

// Get the <span> element that closes the shopping cart
var span = document.getElementsByClassName("close")[0];

// When the user clicks the checkout button, open the schopping cart 
checkout.onclick = function() {
    cart.style.display = "block";
}

// When the user clicks on <span> (x), close the shopping cart
span.onclick = function() {
    cart.style.display = "none";
}

// When the user clicks anywhere outside of the cart, close it
window.onclick = function(event) {
    if (event.target == cart) {
        cart.style.display = "none";
    }
}
