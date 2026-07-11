Runner.buttonEvents['22027'] = function( pageObj, proxy, pageid ) {
	var gid = '22027';
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = gid;
		
	if ( !pageObj.buttonEventBefore[ gid ] ) {
		pageObj.buttonEventBefore[ gid ] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
			// Put your code here.

var keys = pageObj.getSelectedRecordKeys();
if (keys.length === 0) {
    alert("System Notice: Please select at least one facility to delete.");
    return false;
}

params["keys"] = keys;

// Two-Pass State Tracking
if (!window.cascadeForceDelete) {
    params["action"] = "check"; 
} else {
    params["action"] = "force_delete"; 
    window.cascadeForceDelete = false; 
}

return true;

//params["txt"] = "Hello";
//ajax.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;			
		}
	}

	if ( !pageObj.buttonEventAfter[ gid ] ) {
		pageObj.buttonEventAfter[ gid ] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
			// Put your code here.

/**
 * Event: Client After
 * Context: Defensive evaluation of the server response.
 */

// DEFENSIVE SHIELD: Catch silent server crashes (e.g., SQL Fatal Errors)
if (typeof result === "undefined" || !result) {
    alert("System Error: The server crashed during deletion. This is usually caused by a hidden PostgreSQL foreign key constraint that blocked the wipe. Check the Network tab in your browser for the exact SQL error.");
    window.cascadeForceDelete = false; // Disarm
    return false;
}

if (result["status"] === "success") {
    console.log("Wipe successful. Reloading grid.");
    pageObj.clearSelection();
    location.reload();
    
} else if (result["status"] === "warning") {
    var isConfirmed = confirm(result["message"]);
    
    if (isConfirmed) {
        console.log("User confirmed. Arming system for Pass 2.");
        window.cascadeForceDelete = true;
        
        setTimeout(function() {
            if (ctrl && typeof ctrl.click === 'function') {
                ctrl.click(); 
            } else if (this.id) {
                $("#" + this.id).trigger("click"); 
            } else {
                $("a[id^='CascadeDelete']").trigger("click"); 
            }
        }, 300); 
        
    } else {
        console.log("User cancelled. Disarming system.");
        window.cascadeForceDelete = false;
    }
    
} else {
    alert("System Exception: Unable to process deletion request.");
    console.error("Server Response:", result);
}

//var message = result["txt"] + " !!!";
//ajax.setMessage(message);

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

