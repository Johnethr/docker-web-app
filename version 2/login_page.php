<?php
// post request values to variables
$uname = $_POST["uname"];
$pword = $_POST["psw"];

// generating a password hash

$pwordhsh=password_hash("#Itzthebozz20",PASSWORD_DEFAULT);

$vpword=password_verify($_POST["psw"],$pwordhsh);

if ($uname == "ADMIN" && $psw == 1) {
    echo "Login successful!";
    echo "Welcome Admin";
    } 
    else {
    echo "Login failed.";

}