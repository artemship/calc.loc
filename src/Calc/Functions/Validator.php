<?php


namespace Calc\Functions;


class Validator
{
    public static function checkEmail(string $email): bool
    {
        return preg_match('/^\S+@\S+\.\S+$/i', trim($email)) ? true : false;
    }

    public static function checkName(string $name): bool
    {
        $upperString = mb_strtoupper($name);
        return preg_match('/^[A-ZА-Я-]+$/', trim($upperString)) ? true : false;
    }



}