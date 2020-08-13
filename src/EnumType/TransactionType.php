<?php

namespace WebIT\EnumType;

/**
 * This class stands for TransactionType EnumType
 * @subpackage Enumerations
 * @author Fahad Yousaf Mahar
 * @url    https://github.com/FahadYousafMahar/EasyPaisaWSDL
 */
class TransactionType
{
    /**
     * Constant for value 'OTC'
     * @return string 'OTC'
     */
    const VALUE_OTC = 'OTC';
    /**
     * Constant for value 'MA'
     * @return string 'MA'
     */
    const VALUE_MA = 'MA';
    /**
     * Constant for value 'ATM'
     * @return string 'ATM'
     */
    const VALUE_ATM = 'ATM';
    /**
     * Constant for value 'CC'
     * @return string 'CC'
     */
    const VALUE_CC = 'CC';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_OTC
     * @uses self::VALUE_MA
     * @uses self::VALUE_ATM
     * @uses self::VALUE_CC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OTC,
            self::VALUE_MA,
            self::VALUE_ATM,
            self::VALUE_CC,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
