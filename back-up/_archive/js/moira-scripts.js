$('document').ready(function(){

    var fadeOutSpeed = 50;
    var fadeInSpeed = 500;
    var currentTime = new Date();
    var currentHour = currentTime.getHours();

    if (currentHour > 14) {
        loadDinner();
    }

    function loadLunch(){
        $('#dinner').fadeOut(fadeOutSpeed, function(){
            $('#lunch').fadeIn(fadeInSpeed);
        });

        $('#menu').removeClass('nighttime');
    }

    function loadDinner(){
        $('#lunch').fadeOut(fadeOutSpeed, function() {
            $('#dinner ').fadeIn(fadeInSpeed);
        });

        $('#menu').addClass('nighttime');
    }

    function scrollToMenuHead() {
        $('html, body').animate({
            scrollTop: $('#menu').offset().top
        }, 1500);
    }

    $('.btn-lunch').on('click touchstart', function(){
        loadLunch();
        scrollToMenuHead();
    });

    $('.btn-dinner').on('click touchstart', function(){
        loadDinner();
        scrollToMenuHead();
    });
})
