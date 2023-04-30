/* Form validation */
function validateForm() {
    var username = document.forms["myForm"]["username"].value;
    var password = document.forms["myForm"]["password"].value;
    if (username == "" || password == "") {
        alert("Both fields must be filled out");
        return false;
    }
}
