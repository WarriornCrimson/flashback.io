window.addEventListener('scroll', function() {
    var stillNavbar = document.getElementById('header');
    var scrollPosition = window.scrollY;

    var scrollThreshold = 200;

            if (scrollPosition > scrollThreshold) {
                stillNavbar.classList.add('active');
            } else {
                stillNavbar.classList.remove('active');
            }
});
 
// window.addEventListener('scroll', function() {
//     var stillNavbar = document.getElementById('op'); 
//     var scrollPosition = window.scrollY;

//     var scrollThreshold = 200;

//             if (scrollPosition > scrollThreshold) {
//                 stillNavbar.classList.add('active');
//             } else {
//                 stillNavbar.classList.remove('active');
//             }
// });