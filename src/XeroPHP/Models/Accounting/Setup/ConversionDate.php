<?php

namespace XeroPHP\Models\Accounting\Setup;

use XeroPHP\Remote;

class ConversionDate extends Remote\Model
{
    /**
     * Starting month of conversion
     *
     * @property int Month
     */

    /**
     * Starting year of conversion
     *
     * @property int Year
     */

    /**
     * Get the resource uri of the class (Contacts) etc.
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'ConversionDate';
    }

    /**
     * Get the root node name.  Just the unqualified classname.
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'ConversionDate';
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
            'Month' => [false, self::PROPERTY_TYPE_INT, null, false, false],
            'Year' => [false, self::PROPERTY_TYPE_INT, null, false, false],
        ];
    }

    public static function isPageable()
    {
        return false;
    }

    /**
     * @return string
     */
    public function getMonth()
    {
        return $this->_data['Month'];
    }

    /**
     * @param string $value
     *
     * @return ConversionDate
     */
    public function setMonth($value)
    {
        $this->propertyUpdated('Month', $value);
        $this->_data['Month'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getYear()
    {
        return $this->_data['Year'];
    }

    /**
     * @param string $value
     *
     * @return ConversionDate
     */
    public function setYear($value)
    {
        $this->propertyUpdated('Year', $value);
        $this->_data['Year'] = $value;

        return $this;
    }
}
