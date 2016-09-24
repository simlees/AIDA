$(function(){

	$(document).on('click', function(event) {

		if ($(event.target).closest('a#main-menu-button').length) {
			event.preventDefault();
			$('div.main-nav-dropdown').css('display','inline-block');
		}
		else if ($(event.target).closest('div.main-nav-dropdown').length){
			console.log("submenu");
		} else {
			$('div.main-nav-dropdown').css('display','none');
		}

	});

});
