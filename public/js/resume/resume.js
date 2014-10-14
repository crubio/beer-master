// LI API functions
var codata = {};

function onLinkedInLoad() {
    // My profile
    IN.API.Profile().ids("nAyBq19HeP").result(displayProfiles);
    var codata = {};
    $('.co-data').each(function(el) {
        var co_id = $(this).data('company-id'); // Should use camel case in JS or I will hate your forever!
        var query = "/companies/" + co_id + ":(id,name,description,industry,logo-url)";
        IN.API.Raw(query)
          .result(processCoResults);
    });

}

// 2. Runs when the viewer has authenticated - set to false for now
function onLinkedInAuth() {
  // IN.API.Profile(17272089).result(displayProfiles);
}

// 2. Runs when the Profile() API call returns successfully - not used
function displayProfiles(profiles) {
  member = profiles.values[0];
  var me_obj = {
    firstName: member.firstName,
    id: member.id
  };
  console.log(me_obj);
  // document.getElementById("profiles").innerHTML = 
  //   "<p id=\"" + member.id + "\">Hello " +  member.firstName + " " + member.lastName + "</p>";
}

function processCoResults(company) {
    // Return the success object
    codata[company.id] = {
        description: company.description,
        id: company.id,
        industry: company.industry,
        logoUrl: company.logoUrl,
        name: company.name    
    }
    console.log(codata[company.id].description);
    $('[data-company-id="'+ company.id +'"]').attr("data-title", codata[company.id].name);
    $('[data-company-id="'+ company.id +'"]').attr("data-content", codata[company.id].description);
}

// Enable pop-over
$('[data-toggle="popover"]').popover({
    trigger: 'hover',
    'placement': 'right',
    'html': true,
    title: function(){
        return $(this).html();
    }
});