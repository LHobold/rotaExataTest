<?php

/**
 *
 * Validate if username and password are correct
 *
 * @param    string  $username The username received from the form
 * @param    string  $password The password received from the form
 * @param    array  $accounts An associative array containing user as key and password as value
 * @param    string  $secret The secret thats going to be used to hash and compare the given password with the stored
 * @return   boolean Returns true if login is successfull, or false, if is not
 *
 */
function validateLogin($username, $password, $accounts, $secret)
{

    // Check if there is an user with the inputed username
    if (!array_key_exists($username, $accounts)) {
        return false;
    }

    // The hashed password stored at autenticacao.txt
    $storedHashedPassword = $accounts[$username];

    // The user's input password peppered
    $passwordPeppered = hash_hmac("sha256", $password, $secret);

    // Verifies if password matches
    if (!password_verify($passwordPeppered, $storedHashedPassword)) {
        return false;
    }

    return true;
}
