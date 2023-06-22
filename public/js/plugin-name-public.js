(function ($) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	jQuery(window).load(function () {
		jQuery('.sideOpener').click(function (e) {
			e.preventDefault();
			jQuery(this).parents('.sideMenu').toggleClass('activeSideMenu').find('> .sideMenuDetails').slideToggle();
		});

		// Detect change event of checkboxes
		jQuery('.sideMenuDetails #programmes-categories input[type="checkbox"]').change(function () {
			// Check if the checkbox is checked
			if (!jQuery(this).is(':checked')) {
				// Log the value of the changed checkbox to the console
				let current_cat_id = jQuery(this).attr('id');
				jQuery("#full-cat-posts-" + current_cat_id).css("display", "none");
			} else {
				let current_cat_id = jQuery(this).attr('id');
				jQuery("#full-cat-posts-" + current_cat_id).css("display", "table");
			}
		});

		// Detect change event of checkboxes
		jQuery('.sideMenuDetails #programmes-months input[type="checkbox"]').change(function () {
			// Check if the checkbox is checked
			if (!jQuery(this).is(':checked')) {
				// Log the value of the changed checkbox to the console
				let current_cat_id = jQuery(this).attr('id');
				jQuery("th#month-name-" + current_cat_id).css("display", "none");
				jQuery(".subtitle#programme-month-" + current_cat_id).css("display", "none");
				console.log("#month-name-" + current_cat_id);
			} else {
				let current_cat_id = jQuery(this).attr('id');
				jQuery("th#month-name-" + current_cat_id).css("display", "table-cell");
				jQuery(".subtitle#programme-month-" + current_cat_id).css("display", "table-cell");
				console.log("#month-name-" + current_cat_id);
			}
		});

		// Detect change event of checkboxes
		jQuery('.sideMenuDetails #programmes-levels input[type="checkbox"]').change(function () {
			// Check if the checkbox is checked
			if (!jQuery(this).is(':checked')) {
				// Log the value of the changed checkbox to the console
				let current_cat_id = jQuery(this).attr('id');
				current_cat_id = current_cat_id.toLowerCase();
				jQuery(".row-highlight#current-management-level-" + current_cat_id).css("display", "none");
			} else {
				let current_cat_id = jQuery(this).attr('id');
				current_cat_id = current_cat_id.toLowerCase();
				jQuery(".row-highlight#current-management-level-" + current_cat_id).css("display", "table-row");
			}
		});
	});

})(jQuery);
