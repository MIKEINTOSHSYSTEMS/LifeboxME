// app\include\runnerJS\controls\EditTelephone.js
Runner.controls.EditTelephone = Runner.extend(Runner.controls.Control,{
	constructor: function(cfg){		
		this.addEvent(["change", "keyup"]);		
		Runner.controls.EditTelephone.superclass.constructor.call(this, cfg);
		if (this.getFieldSetting("required")===true) { this.addValidation("IsRequired"); }
                
                var input = document.querySelector("input#"+this.valContId);

                // set custom placeholder
                input.setAttribute("placeholder", "Please enter a valid working phone number");

                // initialize intl-tel-input plugin
                this.iti = window.intlTelInput(input, {
                  // allowDropdown: false,
                  autoHideDialCode: false,
                  autoPlaceholder: "off",
                  // dropdownContainer: document.body,
                  // excludeCountries: ["us"],
                  // formatOnDisplay: false,
                  // geoIpLookup: function(callback) {
                  //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                  //     var countryCode = (resp && resp.country) ? resp.country : "";
                  //     callback(countryCode);
                  //   });
                  // },
                  // hiddenInput: "full_number",
                  // initialCountry: "auto",
                  initialCountry: this.getFieldSetting('initialCountry'),
                  // localizedCountries: { "es": "España" },
                  nationalMode: false,
                  // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                  placeholderNumberType: "MOBILE",
                  preferredCountries: [this.getFieldSetting('preferredCountries') ],
                  // separateDialCode: true,
                  utilsScript: "plugins/controles/telephone/js/utils.js"
                  });

                var self = this;

                // prevent letters and special characters while typing
//                $(input).on("input", function () {
//                  this.value = this.value.replace(/[^0-9+]/g, '').substring(0, 13);
//                });

                // Auto Convert formatting for Ethiopian phone numbers and also keeps the validation intact with prevent letters and special chars
                $(input).on("input", function () {

                  // allow only numbers and +
                  this.value = this.value.replace(/[^0-9+]/g, '').substring(0, 13);

                  if (self.iti) {

                    var country = self.iti.getSelectedCountryData();

                    // apply only for Ethiopia
                    if (country && country.iso2 === "et") {

                      var val = this.value;

                      // already in international format
                      if (val.startsWith("+251")) {
                        this.value = val;
                      }
                      // starts with 0 → convert to +251
                      else if (val.startsWith("0") && val.length >= 9) {
                        this.value = "+251" + val.substring(1);
                      }
                      // starts with 7 or 9 → convert to +251
                      else if (val.startsWith("7") || val.startsWith("9")) {
                        this.value = "+251" + val;
                      }

                    }
                  }

                });

                // live validation using intl-tel-input
                $(input).on("keyup blur change", function () {

                    if(self.iti){

                        var val = $(input).val();

                        // allow empty value if not required
                        if(val === ""){
                            self.markValid();
                            return;
                        }

                        if(!self.iti.isValidNumber()){
                            self.markInvalid("Invalid phone number");
                        }else{
                            self.markValid();
                        }

                    }

                });
 
	}, 

	getForSubmit: function(){
		if (!this.appearOnPage()){ return []; }

                var number = this.getValue();

                // save phone in international format if plugin exists
                if(this.iti){
                    number = this.iti.getNumber();
                }

		return [this.valueElem.clone().val(number)];
	}
});

Runner.controls.constants["EditTelephone"] = "EditTelephone";