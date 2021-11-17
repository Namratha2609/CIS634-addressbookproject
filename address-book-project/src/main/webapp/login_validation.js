function validate() {
    let uname = document.forms["login"]["Uname"].value;
    if (uname == "") {
        alert("Username must be filled out");
        return false;
    }

    let pass = document.forms["login"]["Pass"].value;
    if (pass == "") {
        alert("Password must be filled out");
        return false;
    }
}