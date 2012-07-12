jQuery(document).ready(function() {

	$('.carousel').carousel();
	
	$('.js-enabled').memu({ 
		icon: {
			inset: true,		// create an inset where there is no icon
			margin: {		// specify the margins of the icon (put them how it's right for you
				top: 4,
				right: 10
			}
		},
		width: 150,			// the width of the (drop down) items
		rootWidth: 75,			// the width of the (root) items
		height: 25			// the height of the items
	});
	
});