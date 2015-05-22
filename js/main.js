//parallax code

$(window).ready( function() { 

  $(window).stellar();

});


//Mobile responsive navbar code
// $(function() {
// 			var pull 		= $('#pull');
// 				menu 		= $('nav ul');
// 				menuHeight	= menu.height();

// 			$(pull).on('click', function(e) {
// 				e.preventDefault();
// 				menu.slideToggle();
// 			});

// 			$(window).resize(function(){
//         		var w = $(window).width();
//         		if(w > 320 && menu.is(':hidden')) {
//         			menu.removeAttr('style');
//         		}
//     		});
// 		});

//Smooth Scrolling
// $('a').click(function(){
//     $('html, body').animate({
//         scrollTop: $( $(this).attr('href') ).offset().top
//     }, 2000);
//     return false;
// });