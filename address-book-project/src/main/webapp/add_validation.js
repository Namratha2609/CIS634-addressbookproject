function validate() {
    let name = document.forms["contact"]["name"].value;
    if (name == "") {
        alert("Name must be filled out");
        return false;
    }

    let address = document.forms["contact"]["address"].value;
    if (address == "") {
        alert("Address must be filled out");
        return false;
    }

    let email = document.forms["contact"]["email"].value;
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
    let phone = document.forms["contact"]["phone"].value;
    if (phone == "") {
        alert("Phone must be filled out");
        return false;
    }
}