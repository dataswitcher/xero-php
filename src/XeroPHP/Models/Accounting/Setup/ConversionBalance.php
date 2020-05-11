<?php

namespace XeroPHP\Models\Accounting\Setup;

use XeroPHP\Remote;

class ConversionBalance extends Remote\Model
{
    /**
     * Account code
     *
     * @property string AccountCode
     */

    /**
     * Starting balance for account
     *
     * @property float Balance 
     */

    /**
     * Get the resource uri of the class (Contacts) etc.
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'ConversionBalance';
    }

    /**
     * Get the root node name.  Just the unqualified classname.
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'ConversionBalance';
    }

    /**
     * Get the guid property.
     *
     * @return string
     */
    public static function getGUIDProperty()
    {
        return '';
    }

    /**
     * Get the stem of the API (core.xro) etc.
     *
     * @return string|null
     */
    public static function getAPIStem()
    {
        return Remote\URL::API_CORE;
    }

    /**
     * Get the supported methods.
     */
    public static function getSupportedMethods()
    {
        return [
            Remote\Request::METHOD_POST,
        ];
    }

    /**
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly.
     *
     * @return array
     */
    public static function getProperties()
    {
        return [
            'AccountCode' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Balance' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false],
        ];
    }

    public static function isPageable()
    {
        return false;
    }

    /**
     * @return string
     */
    public function getAccountCode()
    {
        return $this->_data['AccountCode'];
    }

    /**
     * @param string $value
     *
     * @return ConversionBalance
     */
    public function setAccountCode($value)
    {
        $this->propertyUpdated('AccountCode', $value);
        $this->_data['AccountCode'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getBalance()
    {
        return $this->_data['Balance'];
    }

    /**
     * @param string $value
     *
     * @return ConversionBalance
     */
    public function setBalance($value)
    {
        $this->propertyUpdated('Balance', $value);
        $this->_data['Balance'] = $value;

        return $this;
    }
}
