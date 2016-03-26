$('a#mMenuButton').click(function() {
	$(this).toggleClass('openMenu');
	$('.drawer').toggleClass('openMenu');
	$('a#mMenuButton > .notificationsIcon').fadeToggle('fast');
});
