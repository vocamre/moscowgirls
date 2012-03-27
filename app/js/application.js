$(function()
{
	$('.btn-ank-ch').click(function(){
		$('.btn-ank').removeClass('no-act');
	});
	
	$('.last-file').click(function(){
		$('.send-b').removeClass('no-act');
	});
	
	$('.btn-popup').click(function(){
		$('body').prepend('<div class="popup" style="width:'+ $('body').width() +'px; height:'+ $('body').height() +'px;"></div>');
		$('.popup-mes').show();
	})
	
	$('.popup-mes span').click(function(){
		$('.popup').hide();
		$('.popup-mes').hide();
	})
	
	$('a.lightbox').lightBox(); 

});