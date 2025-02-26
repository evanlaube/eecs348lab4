
function verifyPassword() {
    const password = document.getElementById("password").value;
    const verify = document.getElementById("verify").value;

    if(password.length < 8) {
        alert("Password must be at least 8 characters!");
    } else{
        if(password == verify) {
            alert("Password is valid and matches verification!");
        } else {
            alert("Passwords do not match!");
        }
    }
}
