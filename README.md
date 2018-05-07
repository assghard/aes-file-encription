# PHP7+ AES 256 file encription vendor package

Vendor PHP package. Working on PHP 7+

> Based on AES File Encryption: https://github.com/philios33/PHP-AES-File-Encryption

## Installation
**composer require assghard/aes-file-encription --prefer-dist**

## How to use
Add library to use: **use Assghard\AesFileEncription\FileEncryptionLibrary;**

### Encrypt file:
$encrypted_file = FileEncryptionLibrary::encryptFile($file_to_encrypt, $_PASSWORD);
 - $file_to_encrypt - relative path to file with filename and extension
 - $encrypted_file - relative path to encrypted file with filename and extension
 - $_PASSWORD (optional) - password/key to encryption security

### Decrypt file:
$decrypted_file = pathinfo($filename)['dirname'].'/'.pathinfo($filename)['filename'];
$decryptedFile = FileEncryptionLibrary::decryptFile($encrypted_file, $decrypted_file, $_PASSWORD);

 - $encrypted_file - relative path to encrypted file with filename and extension
 - $decrypted_file - relative path to file which will be decrypted with filename and extension
 - $_PASSWORD (optional) - password/key used for encryption
 - $decryptedFile - relative path to decrypted file with original extension

###### Deprecated functions
 - mcrypt_encrypt: This function has been DEPRECATED as of PHP 7.1.0. Relying on this function is highly discouraged - WORK IN PROGRESS


=========================================================
#### Source: PHP AES File Encryption (https://github.com/philios33/php-aes-file-encryption)

#### PHP implementation of the open source aes crypt file format
File specification is described here 
https://www.aescrypt.com/aes_file_format.html

## Introduction
There are many PHP AES implementations available online which offer AES encryption for data streams.  It is possible to utilise these low level libraries to encrypt files, but unless you do everything correctly you can end up with an insecure (or broken) library.  This library works at a higher level, depending on a low level AES encryption engine (which you can configure), and implementing the open source aes crypt file format.

## Problems
There are many problems to solve when implementing file encryption using a low level library such as mycrpt.  Many people incorrectly think you can just encrypt data and shove it in a file.  Alas, it is not that simple.

The open source file format handles many issues such as null bytes trimming, file integrity and fast password checking.  It even comes with file extension identifiers which allows arbitrary data to be tagged within the AES file (unencrypted).

This library makes it easier for users who are only interested in encrypting and decrypting .aes files with passwords.  Other technicalities such as file structure, versions & encryption keys are transparent to the user.

## Compatibility
This library writes version 2 of the file specification defined at https://www.aescrypt.com/aes_file_format.html
Backwards compatibility with the older two versions (reading old .aes files) is untested.
Output .aes files are fully compatible with any software using the AES Crypt standard file format.