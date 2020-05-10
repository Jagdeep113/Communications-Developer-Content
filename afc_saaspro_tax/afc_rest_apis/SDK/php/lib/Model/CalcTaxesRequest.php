<?php
/**
 * CalcTaxesRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SaasPro
 *
 * APIs to interface with communications tax engine.<br />The API requires Basic authentication.<br />Users with access to multiple clients must also set request header parameter for <code>client_id</code>.<br />Set <code>client_profile_id</code> to specify profile to be used for taxation.
 *
 * The version of the OpenAPI document: v2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CalcTaxesRequest Class Doc Comment
 *
 * @category Class
 * @description Request body for tax calculation API.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CalcTaxesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CalcTaxesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cfg' => '\OpenAPI\Client\Model\RequestConfig',
        'cmpn' => '\OpenAPI\Client\Model\CompanyData',
        'inv' => '\OpenAPI\Client\Model\Invoice[]',
        'ovr' => '\OpenAPI\Client\Model\TaxOverride[]',
        'sovr' => '\OpenAPI\Client\Model\SafeHarborOverride[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'cfg' => null,
        'cmpn' => null,
        'inv' => null,
        'ovr' => null,
        'sovr' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'cfg' => 'cfg',
        'cmpn' => 'cmpn',
        'inv' => 'inv',
        'ovr' => 'ovr',
        'sovr' => 'sovr'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cfg' => 'setCfg',
        'cmpn' => 'setCmpn',
        'inv' => 'setInv',
        'ovr' => 'setOvr',
        'sovr' => 'setSovr'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cfg' => 'getCfg',
        'cmpn' => 'getCmpn',
        'inv' => 'getInv',
        'ovr' => 'getOvr',
        'sovr' => 'getSovr'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['cfg'] = isset($data['cfg']) ? $data['cfg'] : null;
        $this->container['cmpn'] = isset($data['cmpn']) ? $data['cmpn'] : null;
        $this->container['inv'] = isset($data['inv']) ? $data['inv'] : null;
        $this->container['ovr'] = isset($data['ovr']) ? $data['ovr'] : null;
        $this->container['sovr'] = isset($data['sovr']) ? $data['sovr'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets cfg
     *
     * @return \OpenAPI\Client\Model\RequestConfig|null
     */
    public function getCfg()
    {
        return $this->container['cfg'];
    }

    /**
     * Sets cfg
     *
     * @param \OpenAPI\Client\Model\RequestConfig|null $cfg cfg
     *
     * @return $this
     */
    public function setCfg($cfg)
    {
        $this->container['cfg'] = $cfg;

        return $this;
    }

    /**
     * Gets cmpn
     *
     * @return \OpenAPI\Client\Model\CompanyData|null
     */
    public function getCmpn()
    {
        return $this->container['cmpn'];
    }

    /**
     * Sets cmpn
     *
     * @param \OpenAPI\Client\Model\CompanyData|null $cmpn cmpn
     *
     * @return $this
     */
    public function setCmpn($cmpn)
    {
        $this->container['cmpn'] = $cmpn;

        return $this;
    }

    /**
     * Gets inv
     *
     * @return \OpenAPI\Client\Model\Invoice[]|null
     */
    public function getInv()
    {
        return $this->container['inv'];
    }

    /**
     * Sets inv
     *
     * @param \OpenAPI\Client\Model\Invoice[]|null $inv List of invoices to process.
     *
     * @return $this
     */
    public function setInv($inv)
    {
        $this->container['inv'] = $inv;

        return $this;
    }

    /**
     * Gets ovr
     *
     * @return \OpenAPI\Client\Model\TaxOverride[]|null
     */
    public function getOvr()
    {
        return $this->container['ovr'];
    }

    /**
     * Sets ovr
     *
     * @param \OpenAPI\Client\Model\TaxOverride[]|null $ovr Tax rate overrides.
     *
     * @return $this
     */
    public function setOvr($ovr)
    {
        $this->container['ovr'] = $ovr;

        return $this;
    }

    /**
     * Gets sovr
     *
     * @return \OpenAPI\Client\Model\SafeHarborOverride[]|null
     */
    public function getSovr()
    {
        return $this->container['sovr'];
    }

    /**
     * Sets sovr
     *
     * @param \OpenAPI\Client\Model\SafeHarborOverride[]|null $sovr Safe harbor overrides for USF taxes.
     *
     * @return $this
     */
    public function setSovr($sovr)
    {
        $this->container['sovr'] = $sovr;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


