$(function()
{
	$('.btn-ank-ch').click(function(){
		$('.btn-ank').removeClass('no-act');
	});
	
	$('.last-file').click(function(){
		$('.send-b').removeClass('no-act');
	});
	
	$('a.lightbox').lightBox(); 

});