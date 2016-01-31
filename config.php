<?php
//MYSQL Databse Details
$DB = new stdClass();
$DB->host = 'localhost'; //Database Host
$DB->name = 'voting'; //Database Name
$DB->user = 'root'; //Database Username
$DB->pass = 'root'; //Database Password


//Admin User Details
$USER = new stdClass();
$USER->name = 'admin'; //Username for admin
/*
* Create admin password.
* Run gen_password.php in the command line, php gen_password.php {PASSWORD}.
* Replace {PASSWORD} with your password you want to login with.
* Copy the Salt into $USER->salt and the Hashed Password snd Salt into $USER->password.
* password is admin1
*/
$USER->password = '5879999658901ef8fb73d67c0dda168f';
$USER->salt = 'wun3Lahthief1shi';
//Copy or rename this file to config.php once the file is setup.
//password is admin1
