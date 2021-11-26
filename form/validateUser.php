<?php

include_once "./utils/validateLogin.php";

// The secret key used to hash the password, it would ideally be stored in an environmental variable.
$secret = "ThisIsNotAVerySafeKeyToBeUsedAsASecretKey";


// Grabs account and password from autenticacao.txt as an associative array to facilitate the authentication
$accounts = array();
foreach (file("./data/autenticacao.txt", FILE_IGNORE_NEW_LINES) as $line) {
    list($key, $value) = explode(' ', $line, 2) + array(NULL, NULL);

    if ($value !== NULL) {
        $accounts[$key] = $value;
    }
}

$username = $_POST["Username"];
$password = $_POST["Password"];


$success = validateLogin($username, $password, $accounts, $secret);

if (!$success) {;
    return header("location: index.html?invalid=true");
}

header("location: home.html");
