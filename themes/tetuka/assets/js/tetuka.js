
var TUKA = (function($, global, undefined){

	var UNDEF = undefined;

	function setupHeader() {
		// animate search feature on focus
		$('input[type=keyword]').bind({
			focus: function(e) {
				e.preventDefault();

				$(this)
					.data('origwidth', $(this).outerWidth())
					.animate({
						width: 400
					});
			},
			blur: function(e) {
				e.preventDefault();
				$(this)
					.animate({
						width: $(this).data('origwidth') || '100%'
					});
			}
		});

	}

	function setupCarousel() {
		
	}

	function setupFooter() {

	}

	return {
		init: function () {
			setupHeader();
			setupCarousel();
			setupFooter();
		}
	};

}(jQuery, window));

$(document).ready(function(){
	TUKA.init();
});