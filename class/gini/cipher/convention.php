<?php

namespace Gini\Cipher {
    
    class Convention {

        static function encrypt($text, $salt, $base64=false, $mode = 'blowfish') {
            if(!$salt) return $text;
            $code = @openssl_encrypt($text, $mode, $salt, !$base64);
            return $code;
        }

        static function decrypt($code, $salt, $base64=false, $mode = 'blowfish') {
            if(!$salt) return $code;
            $text = @openssl_decrypt($code, $mode, $salt, !$base64);
            return $text;
        }
    
    }
    
}

