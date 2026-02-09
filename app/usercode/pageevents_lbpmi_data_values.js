
Runner.pages.PageSettings.addPageEvent( 
	"public.lbpmi_data_values", 
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
    pageObj.hideField("period_week");
    pageObj.hideField("period_day");
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

    case "Weekly":
        pageObj.showField("period_year");
        pageObj.showField("period_week");
        break;

    case "Daily":
        pageObj.showField("period_day");
        break;
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

        case "Weekly":
            pageObj.showField("period_year");
            pageObj.showField("period_week");
            break;

        case "Daily":
            pageObj.showField("period_day");
            break;
    }
});






});


Runner.pages.PageSettings.addPageEvent( 
	"public.lbpmi_data_values", 
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
    pageObj.hideField("period_week");
    pageObj.hideField("period_day");
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

    case "Weekly":
        pageObj.showField("period_year");
        pageObj.showField("period_week");
        break;

    case "Daily":
        pageObj.showField("period_day");
        break;
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

        case "Weekly":
            pageObj.showField("period_year");
            pageObj.showField("period_week");
            break;

        case "Daily":
            pageObj.showField("period_day");
            break;
    }
});






});







