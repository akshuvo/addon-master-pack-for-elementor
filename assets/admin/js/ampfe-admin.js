jQuery(function($){
	$(document).ready(function(){

		// Tab controlling
	    $('.am-tab-nav a').on('click',function(e){
	    	e.preventDefault();
	    	var targetDiv = $(this).attr('href');

    		if(!$(this).parent().hasClass('active')){
                $(this).parent().addClass('active').siblings().removeClass('active');
              
            }
            $('.am-tab-container').find(targetDiv).addClass('active').siblings().removeClass('active');
    	});

	});
});