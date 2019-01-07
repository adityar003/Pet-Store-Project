function formvalidate(){
    var email = document.forms["LoginForm"]["email"];
    var password = document.forms["LoginForm"]["password"];

    if (email.value == "")
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }

    if (email.value.indexOf("@", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }

    if (email.value.indexOf(".", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }

    if (password.value == "")
    {
        window.alert("Please enter your password");
        password.focus();
        return false;
    }

    return true;
}