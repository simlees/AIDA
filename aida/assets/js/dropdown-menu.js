$(function(){

	var menuIsShowing = false;
	var $dropdownMenu = $('div.main-nav-dropdown');
	var $menuButton = $('a#main-menu-button');

	$(document).on('click', function(event) {

		if ($(event.target).closest($menuButton).length) {
			if (!menuIsShowing){
				event.preventDefault();
				$($dropdownMenu).css('display','inline-block');
				menuIsShowing = true;
			} else {
				$($dropdownMenu).css('display','none');
				menuIsShowing = false;
			}
		}
		else if ($(event.target).closest($dropdownMenu).length){
			console.log("submenu");
		} else {
			$($dropdownMenu).css('display','none');
		}

	});

});
