<?php

/*
 * Symmetric encryption with custom key (sewck)
 * By PinkOrca
 * Github: https://github.com/PinkOrca-net
*/

// Ask the user what operation they want to perform
echo "What do you want to do?\n";
echo "1. Encrypt\n";
echo "2. Decrypt\n";
$operation = readline("Enter your choice (1 or 2): ");

if ($operation == 1) {
    // Get the plain text and encryption key from the user
    $plain_text = readline("Enter the text to encrypt: ");
    $key = readline("Enter the encryption key: ");

    // Generate a random initialization vector (IV)
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));

    // Encrypt the plain text using AES-256 encryption
    $cipher_text = openssl_encrypt($plain_text, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);

    // Combine the IV and cipher text into a single string
    $encrypted_data = base64_encode($iv . $cipher_text);

    // Print the encrypted data
    echo "Encrypted data: $encrypted_data\n";
} else if ($operation == 2) {
    // Get the encrypted data and decryption key from the user
    $encrypted_data = readline("Enter the encrypted data: ");
    $key = readline("Enter the decryption key: ");

    // Decode the encrypted data from Base64 format
    $encrypted_data = base64_decode($encrypted_data);

    // Extract the IV and cipher text from the encrypted data
    $iv_length = openssl_cipher_iv_length('aes-256-cbc');
    $iv = substr($encrypted_data, 0, $iv_length);
    $cipher_text = substr($encrypted_data, $iv_length);

    // Decrypt the cipher text using AES-256 encryption
    $plain_text = openssl_decrypt($cipher_text, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);

    // Print the decrypted data
    echo "Decrypted data: $plain_text\n";
} else {
    // Invalid input
    echo "Invalid input. Please enter 1 or 2.\n";
    exit(1);
}

?>