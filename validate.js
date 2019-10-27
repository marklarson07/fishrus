

// Validating user inputs

function validateUsername (field){
    return (field=="") ? "No Username entered.\n" : "";
}
function validateName (field){
    return (field=="") ? "No Name entered.\n" : "";
}
function validatePassword(field){
    return (field == "") ? "No Password was entered.\n" : "";
}

function validatePassword2(field){
    return (field == "") ? "No Password2 was entered.\n" : "";
}

function comparePasswords(pass1, pass2){
    if((pass1==pass2) && (pass1!="")) return "";
    else return "Your Passwords do not match\n";
}
