<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "jacksblog";

$key = pack('H*', 'aaaaaaaaaaaaa');
$method = 'aes-256-cbc';
$ivlen = openssl_cipher_iv_length($method);
$iv = 7732167840262480;

// Create connection
$mysqli = new mysqli($servername, $username, $password, $db);




// Below is an encryption algorithm - A create user function will not be implemented as this is a demo - but this is used to encrypt the example users password

function encrypt($plaintext)
{
    global $key, $method, $iv;

    
    return openssl_encrypt($plaintext, $method, $key, 0, $iv);
}

function decrypt($ciphertext)
{
    global $key, $method, $iv;

    return openssl_decrypt($ciphertext, $method, $key, 0, $iv);
}
