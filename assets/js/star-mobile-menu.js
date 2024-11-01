(function($) {
	'use strict';

	/*====================
	Mean Menu JS
	======================*/
	$(document).ready(function () {
		$('header nav').meanmenu();
	});

	$(document).ready(function(){
	    $('header nav').removeAttr("style");
	});

})(jQuery);
