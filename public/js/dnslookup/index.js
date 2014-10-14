$( document ).ready(function(){

    // Our record types
    // ['a', 'mx', 'spf', 'txt', 'ptr', 'cname', 'whois']

    // Form listener
    $('form').on('submit', function(e){
        e.preventDefault();

        // Handle display errors and all that here

        // Get the data from the form
        var formData = getFormData($(this));

        // Make the AJAX call to the API for DNS query
        var dnsData = getDns(formData);
        
        // If we got some data, display it


    });

    function getDns(formData) {
        // Make the call to the API for lookup
        var dnsData;
        $.ajax({
            beforeSend: function(xhrObj){
                xhrObj.setRequestHeader("Content-Type","application/json");
                xhrObj.setRequestHeader("Accept","application/json");
            },
            url: 'api/dnslookup',
            method: 'GET',
            data: formData
        })
        .done(function(data){
            // Lets render the table
            console.log(data);
            renderTable(data);
        })
        .fail(function(data){
            
        });
    }

    function getFormData(formInput) {
        // Retrieve the select and input fields
        return formInput.serializeArray();
    }

    function renderTable(data) {
        // If the data retrieved was successful build the table
        if (data.success == true) {
            // Build the table for the output
            var $header = $('<h2>' + data.question[0].qtype + ':' + data.question[0].qname + '</h2>');
            var $table = $('<table class="table table-striped table-condensed"></table>');
            var $box = $('<div class="result-box"></div>');

            $.each(data.result, function(index, row){
                $row = '<tr>';
                $.each(row, function(key, value){
                    if (index == 0) {
                        $row += '<th>' + key + '</th>';
                    }
                    else {
                        $row += '<td>' + value + '</td>';
                    }
                })
                $row += '</tr>';
                $table.append($row);
            });
            
            $('.result-set').prepend($box);
            $($box).prepend($table);
            $($box).prepend($header);
        }
    }
});