/*
	Main script for the Debian Mirror website.
	Author : Jaseem Abid
*/

;(function($, window){
	$(document).ready(function(){
		$('#navbar').scrollspy();	
		$('div#screenshots').carousel({
			interval: 2000
		});
	});
})(jQuery,this);
