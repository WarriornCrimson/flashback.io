
/*navbar to change its background color*/

window.addEventListener('scroll', function() {
    var navbar = document.querySelector('header');
    
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});


/*link to sign*/
function gotosign() {
    window.location.assign("register.php");
}

function gotolog() {
    window.location.assign("login.php");
}