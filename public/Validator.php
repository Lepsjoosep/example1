<?php

class Validator
{
    private static $totalValidations = 0;
    public static function validateEmail($email)
    {
        self::$totalValidations++;
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
    public static function validateAge($age)
    {
        self::$totalValidations++;
        return 0 <= $age && $age <= 120;
    }
    public static function validatePassword($password)
    {
        self::$totalValidations++;
        return strlen($password) >= 8;
    }
    public static function getTotalValidations()
    {
        return self::$totalValidations;
    }

}

echo Validator::validateEmail("test@example.com"); // true
echo Validator::validateEmail("invalid-email"); // false
echo Validator::validateAge(25); // true
echo Validator::validateAge(150); // false
echo Validator::validatePassword("secret123"); // true
echo Validator::validatePassword("short"); // false
echo Validator::getTotalValidations(); // 6