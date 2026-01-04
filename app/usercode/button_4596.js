Runner.buttonEvents['4596'] = function( pageObj, proxy, pageid ) {
	var gid = '4596';
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = gid;
		
	if ( !pageObj.buttonEventBefore[ gid ] ) {
		pageObj.buttonEventBefore[ gid ] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
			// Client-side: Before Button Click
$("#RunJobButton").click(function() {
    // Disable the button to prevent multiple clicks during processing
    $("#RunJobButton").prop('disabled', true).text("Processing...");

    // Make an AJAX request to the current page (url is empty, so it sends to the same page)
    $.ajax({
        type: "POST",  // Send data via POST
        data: { action: 'run_calculation_job' },  // Action to trigger the job
        success: function(response) {
            // Handle the success: reload the page after the function completes
            alert(response.message);  // Show success message (optional)
            location.reload();  // Reload the page to reflect the updated data
        },
        error: function() {
            // Handle any error that occurs during the AJAX request
            alert("An error occurred while processing the request.");
            $("#RunJobButton").prop('disabled', false).text("Run Job");  // Reset the button
        }
    });
});			
		}
	}

	if ( !pageObj.buttonEventAfter[ gid ] ) {
		pageObj.buttonEventAfter[ gid ] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
			// Client-side: After the AJAX Request (success callback)
success: function(response) {
    // Handle the success of the action
    alert(response.message);  // Show success message
    location.reload();  // Reload the page to reflect changes
}
		}
	}

	$('a[data-event=' + gid + ']').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		var rowId = Runner.genId();
		var eventId = gid + "_" + rowId;
		$(this).attr( 'data-event', eventId );
		this.id = this.id + "_" + Runner.genId();
		var buttonObj = new Runner.form.Button({
			id: eventId,
			btnName: gid
		});
		buttonObj.init( {args: [ pageObj, proxy, pageid ]} );
	});

};

