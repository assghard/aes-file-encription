<?php
/**
 * Library to simple using AES encryption based on static functions
 * 
 * @package assghard/aes-file-encription
 * @author Ivan Dublianski (assghard) <ivan.dublianski@gmail.com>
 */
namespace Assghard\AesFileEncription;

use Assghard\AesFileEncription\AESCryptFileLib;
use Assghard\AesFileEncription\Aes256\MCryptAES256Implementation;

class FileEncryptionLibrary {
    
    public static $extention = '.aes';

    public static function encryptFile($file, $password = 'password') {
        $lib = self::getEncryptionLibrary($file, $password);
        $encryptedFilename = $file.self::$extention;
        
        return $lib->encryptFile($file, $password, $encryptedFilename);
    }
    
    public static function decryptFile($file, $decryptedFile, $password = 'password') {
        $lib = self::getEncryptionLibrary($file, $password);
        
        return $lib->decryptFile($file, $password, $decryptedFile);
    }
    
    private static function getEncryptionLibrary($file, $password) {
        $mcrypt = new MCryptAES256Implementation($file, $password);
        
        return new AESCryptFileLib($mcrypt);
    }
    
}
