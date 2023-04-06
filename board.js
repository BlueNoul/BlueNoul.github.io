/* Form validation */
function validateForm() {
    var name = document.forms["myForm"]["name"].value;
    var email = document.forms["myForm"]["email"].value;
    var message = document.forms["myForm"]["message"].value;
    if (name == "" || email == "" || message == "") {
        alert("All fields must be filled out");
        return false;
    }
}
