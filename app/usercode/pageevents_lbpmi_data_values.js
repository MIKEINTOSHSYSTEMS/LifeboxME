
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





// Get controls For Add Page
var dataElementCtrl = Runner.getControl(pageid, "data_element_id");
var valueTypeCtrl = Runner.getControl(pageid, "value_type");

// Make value_type read-only (already set in properties, but just in case)
if (valueTypeCtrl) {
    valueTypeCtrl.makeReadonly();
    
    // Style it as informational
    if (valueTypeCtrl.input) {
        valueTypeCtrl.input.style.backgroundColor = "#f8f9fa";
        valueTypeCtrl.input.style.color = "#495057";
        valueTypeCtrl.input.style.fontWeight = "bold";
        valueTypeCtrl.input.style.borderLeft = "3px solid #0d6efd";
    }
}

// When data element changes, automatically fetch and set value_type
if (dataElementCtrl) {
    dataElementCtrl.on("change", function() {
        var selectedId = this.getValue();
        
        if (!selectedId) {
            valueTypeCtrl.setValue("");
            return;
        }
        
        // Show loading
        valueTypeCtrl.setValue("Loading...");
        
        // Use PHPRunner's built-in lookup (this is the only "API" call we need)
        ajaxCall({
            data: {
                t: 'lbpmi_data_elements',
                a: 'lookup',
                field: 'value_type',
                key: selectedId
            },
            success: function(response) {
                if (response && response.value) {
                    // Set the value_type field - this will be saved to database!
                    valueTypeCtrl.setValue(response.value);
                    
                    // Add hint to value field
                    var valueField = Runner.getControl(pageid, "value");
                    if (valueField && valueField.input) {
                        valueField.input.title = "Expected type: " + response.value;
                        valueField.input.placeholder = getPlaceholder(response.value);
                    }
                }
            },
            error: function() {
                valueTypeCtrl.setValue("ERROR");
            }
        });
    });
    
    // Trigger on page load if data_element already selected
    if (dataElementCtrl.getValue()) {
        dataElementCtrl.trigger("change");
    }
}

// Helper function for placeholders
function getPlaceholder(valueType) {
    var type = (valueType || '').toUpperCase();
    switch(type) {
        case 'NUMBER': return "Enter number (e.g., 123.45)";
        case 'PERCENTAGE': return "Enter percentage (e.g., 25.5)";
        case 'INTEGER': return "Enter whole number";
        case 'TEXT': return "Enter text";
        case 'BOOLEAN': return "Enter 0/1 or true/false";
        case 'DATE': return "Enter date (YYYY-MM-DD)";
        default: return "Enter value";
    }
}
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





// Get controls For Edit Page
var dataElementCtrl = Runner.getControl(pageid, "data_element_id");
var valueTypeCtrl = Runner.getControl(pageid, "value_type");

// Make value_type read-only (already set in properties, but just in case)
if (valueTypeCtrl) {
    valueTypeCtrl.makeReadonly();
    
    // Style it as informational
    if (valueTypeCtrl.input) {
        valueTypeCtrl.input.style.backgroundColor = "#f8f9fa";
        valueTypeCtrl.input.style.color = "#495057";
        valueTypeCtrl.input.style.fontWeight = "bold";
        valueTypeCtrl.input.style.borderLeft = "3px solid #0d6efd";
    }
}

// When data element changes, automatically fetch and set value_type
if (dataElementCtrl) {
    dataElementCtrl.on("change", function() {
        var selectedId = this.getValue();
        
        if (!selectedId) {
            valueTypeCtrl.setValue("");
            return;
        }
        
        // Show loading
        valueTypeCtrl.setValue("Loading...");
        
        // Use PHPRunner's built-in lookup (this is the only "API" call we need)
        ajaxCall({
            data: {
                t: 'lbpmi_data_elements',
                a: 'lookup',
                field: 'value_type',
                key: selectedId
            },
            success: function(response) {
                if (response && response.value) {
                    // Set the value_type field - this will be saved to database!
                    valueTypeCtrl.setValue(response.value);
                    
                    // Add hint to value field
                    var valueField = Runner.getControl(pageid, "value");
                    if (valueField && valueField.input) {
                        valueField.input.title = "Expected type: " + response.value;
                        valueField.input.placeholder = getPlaceholder(response.value);
                    }
                }
            },
            error: function() {
                valueTypeCtrl.setValue("ERROR");
            }
        });
    });
    
    // Trigger on page load if data_element already selected
    if (dataElementCtrl.getValue()) {
        dataElementCtrl.trigger("change");
    }
}

// Helper function for placeholders
function getPlaceholder(valueType) {
    var type = (valueType || '').toUpperCase();
    switch(type) {
        case 'NUMBER': return "Enter number (e.g., 123.45)";
        case 'PERCENTAGE': return "Enter percentage (e.g., 25.5)";
        case 'INTEGER': return "Enter whole number";
        case 'TEXT': return "Enter text";
        case 'BOOLEAN': return "Enter 0/1 or true/false";
        case 'DATE': return "Enter date (YYYY-MM-DD)";
        default: return "Enter value";
    }
}
});







