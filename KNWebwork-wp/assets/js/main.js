jQuery(document).ready(function ($) {
    
checkSmall();

$(window).on('resize', checkSmall);


function checkSmall(){
		if($('#screen-is-small').is(':visible')){
			$('#main-nav').removeClass('expanded-nav');
			$('#main-nav').removeClass('fixed-nav');
			$('#main-nav').addClass('mobile-nav');
			$('#main-nav').addClass('mobile-nav-closed');
		}
		else{
			$('#main-nav').addClass('expanded-nav');
			$('#main-nav').addClass('fixed-nav');
			$('#main-nav').removeClass('mobile-nav');
			$('#main-nav').removeClass('mobile-nav-closed');
		}
	}

$('#main-nav').removeClass('hidden');


$('#toggle-links').click(function(){
	$('.mobile-nav').toggleClass('mobile-nav-closed');

});


    /***Portfolio Page Animations***/
    $('h1#port-title').fadeIn(1000);
    $('#port-bfs').fadeIn(2000);
    $('#port-pancho').fadeIn(2500);
   
	
    
    
    /***About Page Animations***/
    

});