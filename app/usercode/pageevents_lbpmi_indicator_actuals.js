
Runner.pages.PageSettings.addPageEvent( 
	"public.lbpmi_indicator_actuals", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.
// Get control once
var dataSourceCtrl = Runner.getControl(pageid, "period_type");

// Helper: hide all period fields
function hideAllPeriods() {
    pageObj.hideField("period_year");
    pageObj.hideField("period_quarter");
    pageObj.hideField("period_month");
   // pageObj.hideField("period_week");
   // pageObj.hideField("period_day");
}

// Initial state
hideAllPeriods();

switch (dataSourceCtrl.getValue()) {
    case "Yearly":
        pageObj.showField("period_year");
        break;

    case "Quarterly":
        pageObj.showField("period_year");
        pageObj.showField("period_quarter");
        break;

    case "Monthly":
        pageObj.showField("period_year");
        pageObj.showField("period_month");
        break;

//    case "Weekly":
//        pageObj.showField("period_year");
//        pageObj.showField("period_week");
//        break;

//    case "Daily":
//        pageObj.showField("period_day");
//        break;
}

// One change handler
dataSourceCtrl.on("change", function () {
    hideAllPeriods();

    switch (this.getValue()) {
        case "Yearly":
            pageObj.showField("period_year");
            break;

        case "Quarterly":
            pageObj.showField("period_year");
            pageObj.showField("period_quarter");
            break;

        case "Monthly":
            pageObj.showField("period_year");
            pageObj.showField("period_month");
            break;

//        case "Weekly":
//            pageObj.showField("period_year");
//            pageObj.showField("period_week");
//            break;

//        case "Daily":
//            pageObj.showField("period_day");
//            break;
    }
});



// Indicators to determine calculated value and checkbox Validation

var dataSourceCtrl = Runner.getControl(pageid, "is_calculated");
var genderSexCtrl = Runner.getControl(pageid, "actual_value");

// On page load: Check if the checkbox is checked
if (dataSourceCtrl.getValue()) { 
    // If checked, show the actual_value field
    pageObj.hideField("actual_value");
} else {
    // If unchecked, hide the actual_value field
    pageObj.showField("actual_value");
}

// Event listener when the checkbox value changes
dataSourceCtrl.on('change', function() {
    // Check if checkbox is checked (truthy value)
    if (this.getValue()) {
        // If checked, show the actual_value field
        pageObj.hideField("actual_value");
    } else {
        // If unchecked, hide the actual_value field
        pageObj.showField("actual_value");
    }  
});


});


Runner.pages.PageSettings.addPageEvent( 
	"public.lbpmi_indicator_actuals", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		// Place event code here.
// Use "Add Action" button to add code snippets.
// Get control once
var dataSourceCtrl = Runner.getControl(pageid, "period_type");

// Helper: hide all period fields
function hideAllPeriods() {
    pageObj.hideField("period_year");
    pageObj.hideField("period_quarter");
    pageObj.hideField("period_month");
   // pageObj.hideField("period_week");
   // pageObj.hideField("period_day");
}

// Initial state
hideAllPeriods();

switch (dataSourceCtrl.getValue()) {
    case "Yearly":
        pageObj.showField("period_year");
        break;

    case "Quarterly":
        pageObj.showField("period_year");
        pageObj.showField("period_quarter");
        break;

    case "Monthly":
        pageObj.showField("period_year");
        pageObj.showField("period_month");
        break;

//    case "Weekly":
//        pageObj.showField("period_year");
//        pageObj.showField("period_week");
//        break;

//    case "Daily":
//        pageObj.showField("period_day");
//        break;
}

// One change handler
dataSourceCtrl.on("change", function () {
    hideAllPeriods();

    switch (this.getValue()) {
        case "Yearly":
            pageObj.showField("period_year");
            break;

        case "Quarterly":
            pageObj.showField("period_year");
            pageObj.showField("period_quarter");
            break;

        case "Monthly":
            pageObj.showField("period_year");
            pageObj.showField("period_month");
            break;

//        case "Weekly":
//            pageObj.showField("period_year");
//            pageObj.showField("period_week");
//            break;

//        case "Daily":
//            pageObj.showField("period_day");
//            break;
    }
});





// Indicators to determine calculated value and checkbox Validation

var dataSourceCtrl = Runner.getControl(pageid, "is_calculated");
var genderSexCtrl = Runner.getControl(pageid, "actual_value");

// On page load: Check if the checkbox is checked
if (dataSourceCtrl.getValue()) { 
    // If checked, show the actual_value field
    pageObj.hideField("actual_value");
} else {
    // If unchecked, hide the actual_value field
    pageObj.showField("actual_value");
}

// Event listener when the checkbox value changes
dataSourceCtrl.on('change', function() {
    // Check if checkbox is checked (truthy value)
    if (this.getValue()) {
        // If checked, show the actual_value field
        pageObj.hideField("actual_value");
    } else {
        // If unchecked, hide the actual_value field
        pageObj.showField("actual_value");
    }  
});


});







