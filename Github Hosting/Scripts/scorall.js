//<!--Scorall Area-->

$(function () {
    $('a[href*=\\#]:not([href=\\#])').on('click', function () {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.substr(1) + ']');
        if (target.length) {
            $('html,body').animate({
                scrollTop: target.offset().top
            }, 2000);
            return false;
        }
    });
});
//<!--Scorall Area-->



//<!--loading Sript-->
var preloader = document.getElementById('loading');

function myFunction() {
    preloader.style.display = 'none';
}
  //  <!--loading Sript-->
