//parallax code

$(window).ready( function() { 

  $(window).stellar();

});



//All of this code goes to my hamburger.//
(function(){
    var $mainWrapper = $("#main-wrapper");
    $('.menu-icon').click(function(){
        $(this).toggleClass('active');
        $mainWrapper.toggleClass('active');
    });
})();
$(".nav-btn").click(function(){
      $("#sidebar").toggleClass("active");
      $("#content").toggleClass("active");
      $(".nav-btn").toggleClass("active");
});

// //Smooth Scrolling
$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 2000);
    return false;
});