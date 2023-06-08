# Symmetric Encryption with Custom Key (SEWCK)

SEWCK is a PHP script that uses symmetric encryption with a custom key to encrypt and decrypt plain text data. The script uses the AES-256 encryption algorithm in CBC mode to ensure secure encryption of the data.

## Installation

1. Clone or download the repository to your local machine.
2. Ensure that you have PHP installed on your machine. You can check if PHP is installed by running the command `php -v` in your terminal or command prompt.
3. Open a terminal or command prompt and navigate to the directory where you cloned or downloaded the repository.
4. Run the script using the command `php script.php`.

## Usage

When you run the script, you will be prompted to choose between encryption and decryption. Enter `1` to encrypt data or `2` to decrypt data.

### Encryption

If you choose to encrypt data, you will be prompted to enter the text to encrypt and the encryption key. The script will then generate a random initialization vector (IV), encrypt the plain text using AES-256 encryption, and output the encrypted data.

### Decryption

If you choose to decrypt data, you will be prompted to enter the encrypted data and the decryption key. The script will then decode the encrypted data from Base64 format, extract the IV and cipher text, decrypt the cipher text using AES-256 encryption, and output the decrypted data.

## Contributing

If you find a bug or have a suggestion for improvement, please open an issue or submit a pull request on GitHub.

## License

This script is licensed under the GNU General Public License v3.0. See the [LICENSE](LICENSE) file for details.
