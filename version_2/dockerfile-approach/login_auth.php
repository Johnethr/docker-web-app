<?php
// post request values to variables
$uname = $_POST["uname"];
$pword = $_POST["psw"];

// generating a password hash

$pwordhsh=password_hash("#Itzthebozz20",PASSWORD_DEFAULT);

// comparing hash with password
$vpword=password_verify($_POST["psw"],$pwordhsh);

// response
if ($uname == "ADMIN" && $psw == 1) {
    echo "Login successful!";
    echo "Welcome Admin";
    } 
    else {
    echo "Login failed.";

}