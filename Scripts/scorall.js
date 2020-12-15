//<!--Scorall Area-->


$(document).ready(function () {
    $('.left').waypoint(function (direction) {
        $('.left').addClass(('animated fadeInLeft'))
    }, {
        offset: '600px',
    });
});

$(document).ready(function () {
    $('.right').waypoint(function (direction) {
        $('.right').addClass(('animated fadeInRight'))
    }, {
        offset: '600px',
    });
});



window.addEventListener("scroll", function () {
    var navbar = document.querySelector("nav");
    navbar.classList.toggle("sticky", window.scrollY > 0);
})


document.onkeydown = function (e) {
    if (e.keyCode == 123) {
        return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
        return false;
    }

    if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
        return false;
    }

    if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
        return false;
    }
}

$(document).ready(function () {
    $('.part').waypoint(function (direction) {
        $('.part').addClass('animated zoomIn')
    }, {
        offset: '400px'
    });
});


$(document).ready(function () {
    $('.ds').waypoint(function (direction) {
        $('.ds').addClass(('animated bounceIn'))
    }, {
        offset: '300px',
    });
});



// $(function () {
//     $('a[href*=\\#]:not([href=\\#])').on('click', function () {
//         var target = $(this.hash);
//         target = target.length ? target : $('[name=' + this.hash.substr(1) + ']');
//         if (target.length) {
//             $('html,body').animate({
//                 scrollTop: target.offset().top
//             }, 2000);
//             return false;
//         }
//     });
// });
//<!--Scorall Area-->



//<!--loading Sript-->
// var preloader = document.getElementById('loading');

// function myFunction() {
//     preloader.style.display = 'none';
// }
  //  <!--loading Sript-->
