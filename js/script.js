$(document).ready(function(){
	$("ul.dropdown ul").hide();

	$("ul.dropdown li").click(function(){
		$("ul.dropdown ul").toggle();
	});
	
	$('.card div').hide();
	$('.active-div').show();
	
	$(".card-next").click(function(){
		nextDiv = $('.active-div').next();
		
		$('.active-div').fadeOut(600).removeClass('active-div');
		nextDiv.fadeIn(600).addClass('active-div');
	});
});