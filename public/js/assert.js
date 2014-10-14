// This is the assert function used for testing things!

// Takes two args, the values and description of the test
function assert(value, desc){
    // Create the output for our testing
    var li = document.createElement("li");
    // Class name will be pass or fail for obv reasons
    li.className = value ? "pass" : "fail";
    // We'll create a node under this list item
    li.appendChild(document.createTextNode('desc'));
    document.getElementById("results").appendChild(li);

    // Test it
    window.onload = function() {
        assert(true, "Test suite is running");
        assert(false, "Fail!");
    }
}