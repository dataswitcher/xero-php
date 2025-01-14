<?php

namespace XeroPHP\Models\Accounting;

use XeroPHP\Remote;
use XeroPHP\Models\Accounting\Setup\ConversionBalance;
use XeroPHP\Models\Accounting\Setup\ConversionDate;

class Setup extends Remote\Model
{

    /**
     * See account.
     *
     * @property Accounts[] Accounts
     */

    /**
     * See conversion dates.
     *
     * @property ConversionDate[] ConversionDate
     */

    /**
     * See conversion balances.
     * 
     * @property ConversionBalances[] ConversionBalances
     */

    /**
     * Get the resource uri of the class (Contacts) etc.
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'Setup';
    }

    /**
     * Get the root node name.  Just the unqualified classname.
     *
     * @return string
     */
    public static function getRootNodeName()
    {
        return 'Setup';
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
            'Accounts' => [false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Account', true, false],
            'ConversionDate' => [false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Setup\\ConversionDate', true, false],
            'ConversionBalances' => [false, self::PROPERTY_TYPE_OBJECT, 'Accounting\\Setup\\ConversionBalance', true, false],
        ];
    }

    public static function isPageable()
    {
        return false;
    }

    /**
     * @return Account[]|Remote\Collection
     */
    public function getAccounts()
    {
        return $this->_data['Accounts'];
    }

    /**
     * @param Account $value
     *
     * @return Setup
     */
    public function addAccount(Account $value)
    {
        $this->propertyUpdated('Accounts', $value);
        if (!isset($this->_data['Accounts'])) {
            $this->_data['Accounts'] = new Remote\Collection();
        }
        $this->_data['Accounts'][] = $value;

        return $this;
    }

    /**
     * @return ConversionDate[]|Remote\Collection
     */
    public function getConversionDate()
    {
        return $this->_data['ConversionDate'];
    }

    /**
     * @param ConversionDate $value
     *
     * @return Setup
     */
    public function addConversionDate(ConversionDate $value)
    {
        $this->propertyUpdated('ConversionDate', $value);
        if (!isset($this->_data['ConversionDate'])) {
            $this->_data['ConversionDate'] = new Remote\Collection();
        }
        $this->_data['ConversionDate'] = $value;

        return $this;
    }

    /**
     * @return ConversionBalances[]|Remote\Collection
     */
    public function getConversionBalances()
    {
        return $this->_data['ConversionBalances'];
    }

    /**
     * @param ConversionDate $value
     *
     * @return Setup
     */
    public function addConversionBalance(ConversionBalance $value)
    {
        $this->propertyUpdated('ConversionBalances', $value);
        if (!isset($this->_data['ConversionBalances'])) {
            $this->_data['ConversionBalances'] = new Remote\Collection();
        }
        $this->_data['ConversionBalances'][] = $value;

        return $this;
    }
}
