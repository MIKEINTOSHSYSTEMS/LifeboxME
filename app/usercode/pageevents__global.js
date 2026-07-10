
Runner.pages.PageSettings.addPageEvent( 
	'<global>', 
	"register", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {

		/**
 * Event: Javascript OnLoad (Register Page)
 * Context: Provides live, non-blocking DOM feedback during email input.
 */

const allowedDomains = ['lifebox.org', 'merqconsultancy.org', 'merqconsultancy.com'];
const emailCtrl = Runner.getControl(pageid, 'email');

if (emailCtrl) {
    // 1. Inject a dedicated feedback span directly below the input element
    const $inputEl = $(emailCtrl.valueElem);
    $inputEl.after('<span id="domain-feedback" style="display:block; margin-top:5px; font-weight:bold; font-size: 0.85em; transition: color 0.3s ease;"></span>');
    const $feedback = $('#domain-feedback');

    // 2. Bind the event listener to trigger on keystrokes
    emailCtrl.on('keyup', function() {
        let val = this.getValue().trim();
        
        // Wait until they actually type an '@' symbol
        if (!val || !val.includes('@')) {
            $feedback.text('Awaiting organizational domain...').css('color', '#6c757d'); // Bootstrap secondary gray
            return;
        }
        
        // Extract the domain strictly from the end of the string
        let parts = val.split('@');
        let currentDomain = parts[parts.length - 1].toLowerCase();

        // Evaluate against the array and update DOM
        if (allowedDomains.includes(currentDomain)) {
            $feedback.text('✓ Authorized domain detected.').css('color', '#198754'); // Bootstrap success green
        } else {
        //    $feedback.text('❌ Unauthorized domain. Allowed: lifebox.org, merqconsultancy.org/com').css('color', '#dc3545'); // Bootstrap danger red
            $feedback.text('❌ Unauthorized domain. Allowed: Only lifebox.org Users!' ).css('color', '#dc3545'); // Bootstrap danger red
        }
    });
}

// Place event code here.
// Use "Add Action" button to add code snippets.

	});




