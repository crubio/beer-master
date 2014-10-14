$(document).ready(function () {

    // States object we'll use for the select options (thanks to github for this object)
    var states = [
        {
            "name": "Alabama",
            "abbreviation": "AL"
        },
        {
            "name": "Alaska",
            "abbreviation": "AK"
        },
        {
            "name": "American Samoa",
            "abbreviation": "AS"
        },
        {
            "name": "Arizona",
            "abbreviation": "AZ"
        },
        {
            "name": "Arkansas",
            "abbreviation": "AR"
        },
        {
            "name": "California",
            "abbreviation": "CA"
        },
        {
            "name": "Colorado",
            "abbreviation": "CO"
        },
        {
            "name": "Connecticut",
            "abbreviation": "CT"
        },
        {
            "name": "Delaware",
            "abbreviation": "DE"
        },
        {
            "name": "District Of Columbia",
            "abbreviation": "DC"
        },
        {
            "name": "Federated States Of Micronesia",
            "abbreviation": "FM"
        },
        {
            "name": "Florida",
            "abbreviation": "FL"
        },
        {
            "name": "Georgia",
            "abbreviation": "GA"
        },
        {
            "name": "Guam",
            "abbreviation": "GU"
        },
        {
            "name": "Hawaii",
            "abbreviation": "HI"
        },
        {
            "name": "Idaho",
            "abbreviation": "ID"
        },
        {
            "name": "Illinois",
            "abbreviation": "IL"
        },
        {
            "name": "Indiana",
            "abbreviation": "IN"
        },
        {
            "name": "Iowa",
            "abbreviation": "IA"
        },
        {
            "name": "Kansas",
            "abbreviation": "KS"
        },
        {
            "name": "Kentucky",
            "abbreviation": "KY"
        },
        {
            "name": "Louisiana",
            "abbreviation": "LA"
        },
        {
            "name": "Maine",
            "abbreviation": "ME"
        },
        {
            "name": "Marshall Islands",
            "abbreviation": "MH"
        },
        {
            "name": "Maryland",
            "abbreviation": "MD"
        },
        {
            "name": "Massachusetts",
            "abbreviation": "MA"
        },
        {
            "name": "Michigan",
            "abbreviation": "MI"
        },
        {
            "name": "Minnesota",
            "abbreviation": "MN"
        },
        {
            "name": "Mississippi",
            "abbreviation": "MS"
        },
        {
            "name": "Missouri",
            "abbreviation": "MO"
        },
        {
            "name": "Montana",
            "abbreviation": "MT"
        },
        {
            "name": "Nebraska",
            "abbreviation": "NE"
        },
        {
            "name": "Nevada",
            "abbreviation": "NV"
        },
        {
            "name": "New Hampshire",
            "abbreviation": "NH"
        },
        {
            "name": "New Jersey",
            "abbreviation": "NJ"
        },
        {
            "name": "New Mexico",
            "abbreviation": "NM"
        },
        {
            "name": "New York",
            "abbreviation": "NY"
        },
        {
            "name": "North Carolina",
            "abbreviation": "NC"
        },
        {
            "name": "North Dakota",
            "abbreviation": "ND"
        },
        {
            "name": "Northern Mariana Islands",
            "abbreviation": "MP"
        },
        {
            "name": "Ohio",
            "abbreviation": "OH"
        },
        {
            "name": "Oklahoma",
            "abbreviation": "OK"
        },
        {
            "name": "Oregon",
            "abbreviation": "OR"
        },
        {
            "name": "Palau",
            "abbreviation": "PW"
        },
        {
            "name": "Pennsylvania",
            "abbreviation": "PA"
        },
        {
            "name": "Puerto Rico",
            "abbreviation": "PR"
        },
        {
            "name": "Rhode Island",
            "abbreviation": "RI"
        },
        {
            "name": "South Carolina",
            "abbreviation": "SC"
        },
        {
            "name": "South Dakota",
            "abbreviation": "SD"
        },
        {
            "name": "Tennessee",
            "abbreviation": "TN"
        },
        {
            "name": "Texas",
            "abbreviation": "TX"
        },
        {
            "name": "Utah",
            "abbreviation": "UT"
        },
        {
            "name": "Vermont",
            "abbreviation": "VT"
        },
        {
            "name": "Virgin Islands",
            "abbreviation": "VI"
        },
        {
            "name": "Virginia",
            "abbreviation": "VA"
        },
        {
            "name": "Washington",
            "abbreviation": "WA"
        },
        {
            "name": "West Virginia",
            "abbreviation": "WV"
        },
        {
            "name": "Wisconsin",
            "abbreviation": "WI"
        },
        {
            "name": "Wyoming",
            "abbreviation": "WY"
        }
    ];
    var stateSelect = $('#stateSelect');
    // Populate the select options with states
    $.each(states, function(index){
        var option = $('<option></option>').text(this.name);
        // Default to California
        if (index == "5") {
            option.attr('selected', 'selected');
        }
        stateSelect.append(option);
    });

    // Init geocoder
    var geocoder = new google.maps.Geocoder;

    // Listener for the form submit
    $('form').on('submit', function(e){
        e.preventDefault();

        // Clear display errors
        // Remove any existing errors
        $(".error-alert").empty();
        $(".error-field").removeClass("error-field");

        // Get the form data
        var formData = getFormData($(this));

        // Get any errors that might have been input
        var errors = validateForm(formData);

        if (errors.length) {
            displayErrors(errors);
        }
        else {
            displayMap(formData);
        }

    });

    function getFormData(formData) {
        return formData.serializeArray();
    }

    // Validate the form data object
    function validateForm(formData) {
        var errorArray = [];
        $.each(formData, function(key,data){
            // Check for empty or spaces
            if (checkForEmpty(data)) {
                errorArray.push(checkForEmpty(data));
            }
            // For the zip, check that its numeric
            if (data.name == 'zipCode') {
                if (validateZip(data)) {
                    errorArray.push(validateZip(data));
                }
            }
        });
        return errorArray;
    }

    // Check for an empty field or whitespace
    function checkForEmpty(data) {
        if (data.value === "" && data.name !== "apt") {
            return data.name+" is empty";
        }
        else {
            return false;
        }
    }

    // Validate a proper zip code
    function validateZip(data) {
        validZip = new RegExp("^\\d{5}(-\\d{4})?$"); // borrowed from stackoverflow
        if (validZip.test(data.value)) {
            return false;
        }
        else {
            return data.name + " " + data.value +" is invalid";
        }   
    }

    // Handles displaying the errors
    function displayErrors(errors) {

        $.each(errors, function(key,value){
            // The first word of the error is the id
            var chunks = value.split(" "),
                label = $("label[for='"+chunks[0]+"']").html();

            errorMessage = value.replace(chunks[0], label);

            $(".error-alert").append("<span>" + errorMessage + "</span>");
            // Highlight the field with errors
            $("#"+chunks[0]).addClass("error-field");
        })
    }

    // Geocoder callback function
    function getGeocoderResult(address, callback) {
        var coordinates;
        geocoder.geocode(address, function(results, status){
            coord_obj = results[0].geometry.location;
            coordinates = [coord_obj.k, coord_obj.A];
            callback(coordinates);
        });
    }

    function displayMap(formData) {
        // Setup the address
        var addressString;
        $.each(formData, function(key, data){
            if (key == 0) {
                addressString = data.value + " ";
            }
            else {
                addressString += data.value + " ";
            }
        });

        getGeocoderResult({address: addressString}, function(coords){
            var mapOptions = {
                zoom: 15,
                center: new google.maps.LatLng(coords[0], coords[1]),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            console.log(map);
        });
    }
    
});