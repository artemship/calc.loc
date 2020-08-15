<?php


namespace Calc\Functions;


class Generator
{
    public static function password($length = 8)
    {
        $chars = "qazxswedcvfrtgbnhyujmkiop123456789QAZXSWEDCVFRTGBNHYUJMKLP";
        $length = intval($length);
        $size = strlen($chars) - 1;
        $password = "";
        while ($length--) $password .= $chars[rand(0, $size)];
        return $password;
    }

}