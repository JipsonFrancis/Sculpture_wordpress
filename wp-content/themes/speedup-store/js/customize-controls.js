( function( api ) {

	// Extends our custom "speedup-store" section.
	api.sectionConstructor['speedup-store'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );