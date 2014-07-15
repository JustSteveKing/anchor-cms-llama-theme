$(document).ready(function(){												

       //Navigation Menu Slider
        $('#nav-expander').on('click',function(e){
      		e.preventDefault();
      		$('body').toggleClass('nav-expanded');
      	});
      	$('#nav-close').on('click',function(e){
      		e.preventDefault();
      		$('body').removeClass('nav-expanded');
      	});

      	// Initialize navgoco with default options
        $(".main-menu").navgoco({
            caret: '<span class="caret"></span>',
            accordion: false,
            openClass: 'open',
            save: true,
            cookie: {
                name: 'navgoco',
                expires: false,
                path: '/'
            },
            slide: {
                duration: 300,
                easing: 'swing'
            }
        });

      });

  jQuery(document).ready(function($){
	$('#search-button').click(function(){
		$('#search').fadeIn('slow');
		$('input').focus();   
	});
	$('#search-close').click(function(){
		$('#search').fadeOut('slow')  
	});
});(jQuery);
	$('.scroll-top').click(function(){
		$('body,html').animate({scrollTop:0},1000);
	})


