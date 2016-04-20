
// Menus

	var drawerNormal = {'max-width' : '20em'};
	var drawerEnlarge = {'max-width' : '80em'};


	// Burger Button

	$('a#mMenuButton').click(function() {
		$(this).toggleClass('openMenu');
		if ($('.drawer').hasClass('openContent')) {
			$('.drawer').animate(drawerNormal,'slow').removeClass('openContent');
		} else {
			$('a#mMenuButton > .notificationsIcon').fadeToggle('fast');
			$('.drawer, body').toggleClass('openMenu');
		}
	});


	// Ajax interceptor

	$('a.ajaxMenu').click(function(e){
		$('.drawer').animate(drawerEnlarge,'slow').addClass('openContent');
		$('#indiceManual').fadeOut();

		e.preventDefault();
		var link = $(this).attr('href');
		$('.drawer .contentContainer').replaceWith('<div class="contentContainer">Cargando</div>');
		if ($(this).hasClass('indexButton')) {
			$('.drawer .contentContainer').load(link+' article .content');
			$('#indiceManual').fadeIn();
		} else {
			$('.drawer .contentContainer').load(link+' article');
		}

	});


	// Close .drawer if clicked ESC

	$(document).keyup(function(e) {
		if (e.keyCode === 27) {
			if ($('.drawer').hasClass('openMenu')) {
				$('.drawer').animate(drawerNormal,'slow').removeClass('openContent');
				$('a#mMenuButton > .notificationsIcon').fadeToggle('fast');
				$('.drawer, body, a#mMenuButton').removeClass('openMenu');
			}

			// Close by Steps
			// if ($('.drawer').hasClass('openMenu')) {
			// 	if ($('.drawer').hasClass('openContent')) {
			// 		$('.drawer').animate(drawerNormal,'slow').removeClass('openContent');
			// 	} else {
			// 		$('a#mMenuButton > .notificationsIcon').fadeToggle('fast');
			// 		$('.drawer').toggleClass('openMenu');
			// 	}
			// }
		}
	});


	$('.menuOverlay').click(function(){
		if ($('.drawer').hasClass('openMenu')) {
			$('.drawer').animate(drawerNormal,'slow').removeClass('openContent');
			$('a#mMenuButton > .notificationsIcon').fadeToggle('fast');
			$('.drawer, body, a#mMenuButton').removeClass('openMenu');
		}
	});








	// Rearrange timeline
	$( document ).ready(function() {
		$('section.year').each(function() {
		  $( this ).find('li.article').appendTo($(this).find('ul.articles'));
		});
	});
