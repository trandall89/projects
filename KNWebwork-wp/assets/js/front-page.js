jQuery(document).ready(function($){


// Navbar responds to page scrolling

function checkPosFromTop(){
	if($(window).scrollTop() > 0){
		$('.expanded-nav').addClass('fixed-nav');
	}
	else{
		$('.expanded-nav').removeClass('fixed-nav');
	}
}

$(window).scroll(checkPosFromTop);


});