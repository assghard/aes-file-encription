<?php

namespace Assghard\AesFileEncription;

use Assghard\AesFileEncription\AESCryptFileLib;
use Assghard\AesFileEncription\Aes256\MCryptAES256Implementation;

class FileEncryptionLibrary {
    
    public static $extention = '.aes';

    public static function encryptFile($file, $password = '@dm1N') {
        $mcrypt = new MCryptAES256Implementation($file, $password);
        $lib = new AESCryptFileLib($mcrypt);
        $encryptedFilename = $file.self::$extention;
        
        return $lib->encryptFile($file, $password, $encryptedFilename);
    }
    
    public static function dencryptFile($file, $password = '@dm1N') {
        $mcrypt = new MCryptAES256Implementation($file, $password);
        $lib = new AESCryptFileLib($mcrypt);
        // work in progress
    }
    
}
