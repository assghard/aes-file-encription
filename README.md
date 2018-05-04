# PHP7+ AES file encription vendor package (work in progress !!!)

Vendor PHP package. Working on PHP 7+

> Based on AES File Encryption: https://github.com/philios33/PHP-AES-File-Encryption



> Installation: Run composer require assghard/aes-file-encription --prefer-dist in console


## Security elements


##### AES:
###### 256(); // smth
> comment

## How to use
### Encrypt file:
1. Add library to use: use Assghard\AesFileEncription\FileEncriptionLibrary;
2. $encrypted_file = FileEncriptionLibrary::encryptFile($file_to_encrypt, $_PASSWORD);
 - $file_to_encrypt - relative path to file with filename
 - $encrypted_file - relative path to encrypted file with filename
 - $_PASSWORD (optional) - password/key to encryption security


## Deprecated functions
 - mcrypt_encrypt: This function has been DEPRECATED as of PHP 7.1.0. Relying on this function is highly discouraged.


Source: PHP AES File Encryption (https://github.com/philios33/PHP-AES-File-Encryption)
=============

PHP implementation of the open source aes crypt file format

File specification is described here
https://www.aescrypt.com/aes_file_format.html

##Introduction
There are many PHP AES implementations available online which offer AES encryption for data streams.  It is possible to utilise these low level libraries to encrypt files, but unless you do everything correctly you can end up with an insecure (or broken) library.  This library works at a higher level, depending on a low level AES encryption engine (which you can configure), and implementing the open source aes crypt file format.

##Problems
There are many problems to solve when implementing file encryption using a low level library such as mycrpt.  Many people incorrectly think you can just encrypt data and shove it in a file.  Alas, it is not that simple.

The open source file format handles many issues such as null bytes trimming, file integrity and fast password checking.  It even comes with file extension identifiers which allows arbitrary data to be tagged within the AES file (unencrypted).

This library makes it easier for users who are only interested in encrypting and decrypting .aes files with passwords.  Other technicalities such as file structure, versions & encryption keys are transparent to the user.

##Requirements
1. PHP 5
2. An AES 256 bit Encryption Implementation (you can use the included mcrypt implementation or some other)
If you don't have mcrypt available, you only need to implement the AES256Implementation interface using whatever library you want.

##Usage (see example_usage.php)
1. Include the AESCryptFileLib.php class
2. Construct an instance of the library using an AES256 implementation
3. Call the public functions

##Compatibility
This library writes version 2 of the file specification defined at https://www.aescrypt.com/aes_file_format.html
Backwards compatibility with the older two versions (reading old .aes files) is untested.
Output .aes files are fully compatible with any software using the AES Crypt standard file format.

##To do
1. Test reading files stored in version 0 and 1 formats.

##License
I believe that open source software should be free for everyone and non restrictive. My code is based on a completely free to use open source file format which I did not invent. I will choose MIT since it seems to be the least restrictive license out there.
