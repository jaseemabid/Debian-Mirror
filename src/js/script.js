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
		$.getJSON('api/api.php?lastupdate',function(data){
			$('div#last-update time').attr('datetime',data.date);
			$("time.timeago").timeago();
		});
	});
})(jQuery,this);
