$(function(){
	
	$('.dropdown .nav-link').click(function(event) {
		window.location.href = $(this).attr('href');
	});
	
	$('.dropdown .nav-link').hover(
		function() {
			$(this).parent().addClass('show');
	}, 	function(){
			$(this).parent().removeClass('show');
	})
	$('.dropdown .dropdown-menu').hover(
		function() {
			$(this).parent().addClass('show');
	}, 	function(){
			$(this).parent().removeClass('show');
	})
})

/*$(function(){
	
	$('.dropdown .nav-link').click(function(event) {
		window.location.href = $(this).attr('href');
	});
	
	$('.dropdown .nav-link').hover(function(event) {
		$(this).parent().addClass('show');
	
	}, function(){
		$(this).next().hover(function() {
			return false;
		
		}, function() {
			if($(this).prev().is(":hover")){
				$(this).prev().hover(function(){
					return false
				
				}, function(){
					$(this).parent().removeClass('show');

				})
			}else{
				$(this).parent().removeClass('show');
			}
		
		});
	});	
})
*/