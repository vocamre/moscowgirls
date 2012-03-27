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



  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11412577-28']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

