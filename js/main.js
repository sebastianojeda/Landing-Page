//parallax code

$(window).ready( function() { 

  $(window).stellar();

});


//Smooth Scrolling
$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 2000);
    return false;
});