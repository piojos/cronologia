var drawerNormal = {'max-width' : '20em'};
var drawerEnlarge = {'max-width' : '80em'};

$('a#mMenuButton').click(function() {
	$(this).toggleClass('openMenu');
	// $('.drawer').toggleClass('openMenu');
	if ($('.drawer').hasClass('openContent')) {
		// $('.drawer').toggleClass('openMenu');
		$('.drawer').animate(drawerNormal,'slow').removeClass('openContent');
	} else {
		$('a#mMenuButton > .notificationsIcon').fadeToggle('fast');
		$('.drawer').toggleClass('openMenu');
	}
});


$('a.ajaxMenu').click(function(e){
	$('.drawer').animate(drawerEnlarge,'slow').addClass('openContent');

	e.preventDefault();
	var link = jQuery(this).attr('href');
	$('.drawer .contentContainer').replaceWith('<div class="contentContainer">Cargando</div>');
	$('.drawer .contentContainer').load(link+' article');

});
