<?php
namespace Dev\Testing;


class ClassDep
{
    const MAIL_KEY = '54w&#fb*&SS3#2zzya84';

    /**
     * @deprecated No longer used by internal code and not recommended.
     *
     * @param string $value
     * @return string $crypttext
     */
    protected function encrypt_hash($value)
    {
        if (!$value) {
            return false;
        }
        $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, MAIL_KEY, $value, MCRYPT_MODE_ECB, $iv);
        return trim(urlencode($crypttext));
    }

    /**
     * @deprecated No longer used by internal code and not recommended.
     *
     * @param string $value
     * @return string $crypttext
     */
    protected function decrypt_hash($value)
    {

        if (!$value) {
            return false;
        }
        $crypttext = urldecode($value);
        $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, MAIL_KEY, $crypttext, MCRYPT_MODE_ECB, $iv);
        return trim($decrypttext);
    }
}