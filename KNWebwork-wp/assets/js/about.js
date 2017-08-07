jQuery(document).ready(function($) {
$("#comp-list li").each(function( index ){
    	var secs
    	if(index===0){
    		secs=1000;
    	}
    	else{
    		secs=(index*1000)+1000;
    	}
    	$( this ).fadeIn(secs);
    	
    })

});