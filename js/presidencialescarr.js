jQuery(document).ready(function(){
	jQuery('#preslide').carouFredSel({
		items: {
			visible: 3
		},
		scroll: {
			items: 1,
			fx: "directscroll",
			easing: "quadratic",
			duration: 750
		},
		pagination: {
			container: "#prepags"
		}
	});
});