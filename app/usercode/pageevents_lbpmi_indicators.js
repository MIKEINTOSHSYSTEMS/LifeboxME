
Runner.pages.PageSettings.addPageEvent( 
	"public.lbpmi_indicators", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		
// Place event code here.
// Use "Add Action" button to add code snippets.
// Get control once
var dataSourceCtrl = Runner.getControl(pageid, "indicator_type");

// Helper: hide all period fields
function hideAllPeriods() {
    pageObj.hideField("formula");
    pageObj.hideField("numerator_description");
    pageObj.hideField("denominator_description");
}

// Initial state
hideAllPeriods();

switch (dataSourceCtrl.getValue()) {
    case "FORMULA":
        pageObj.showField("formula");
        break;

    case "NUMERATOR":
        pageObj.showField("numerator_description");
        break;

    case "DENOMINATOR":
        pageObj.showField("denominator_description");
        break;

}

// One change handler
dataSourceCtrl.on("change", function () {
    hideAllPeriods();

    switch (this.getValue()) {
        case "FORMULA":
            pageObj.showField("formula");
            break;

        case "NUMERATOR":
            pageObj.showField("numerator_description");
            break;

        case "DENOMINATOR":
            pageObj.showField("denominator_description");
            break;

    }
});






});


Runner.pages.PageSettings.addPageEvent( 
	"public.lbpmi_indicators", 
	"edit", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		
// Place event code here.
// Use "Add Action" button to add code snippets.
// Get control once
var dataSourceCtrl = Runner.getControl(pageid, "indicator_type");

// Helper: hide all period fields
function hideAllPeriods() {
    pageObj.hideField("formula");
    pageObj.hideField("numerator_description");
    pageObj.hideField("denominator_description");
}

// Initial state
hideAllPeriods();

switch (dataSourceCtrl.getValue()) {
    case "FORMULA":
        pageObj.showField("formula");
        break;

    case "NUMERATOR":
        pageObj.showField("numerator_description");
        break;

    case "DENOMINATOR":
        pageObj.showField("denominator_description");
        break;

}

// One change handler
dataSourceCtrl.on("change", function () {
    hideAllPeriods();

    switch (this.getValue()) {
        case "FORMULA":
            pageObj.showField("formula");
            break;

        case "NUMERATOR":
            pageObj.showField("numerator_description");
            break;

        case "DENOMINATOR":
            pageObj.showField("denominator_description");
            break;

    }
});






});







