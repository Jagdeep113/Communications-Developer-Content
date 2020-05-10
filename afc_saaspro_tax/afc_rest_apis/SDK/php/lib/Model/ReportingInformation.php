<?php
/**
 * ReportingInformation
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
 * ReportingInformation Class Doc Comment
 *
 * @category Class
 * @description Tax rate override information.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportingInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportingInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acct' => 'string',
        'custref' => 'string',
        'invn' => 'string',
        'bcyc' => 'string',
        'ccycd' => 'string',
        'ccydesc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'acct' => null,
        'custref' => null,
        'invn' => null,
        'bcyc' => null,
        'ccycd' => null,
        'ccydesc' => null
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
        'acct' => 'acct',
        'custref' => 'custref',
        'invn' => 'invn',
        'bcyc' => 'bcyc',
        'ccycd' => 'ccycd',
        'ccydesc' => 'ccydesc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acct' => 'setAcct',
        'custref' => 'setCustref',
        'invn' => 'setInvn',
        'bcyc' => 'setBcyc',
        'ccycd' => 'setCcycd',
        'ccydesc' => 'setCcydesc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acct' => 'getAcct',
        'custref' => 'getCustref',
        'invn' => 'getInvn',
        'bcyc' => 'getBcyc',
        'ccycd' => 'getCcycd',
        'ccydesc' => 'getCcydesc'
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
        $this->container['acct'] = isset($data['acct']) ? $data['acct'] : null;
        $this->container['custref'] = isset($data['custref']) ? $data['custref'] : null;
        $this->container['invn'] = isset($data['invn']) ? $data['invn'] : null;
        $this->container['bcyc'] = isset($data['bcyc']) ? $data['bcyc'] : null;
        $this->container['ccycd'] = isset($data['ccycd']) ? $data['ccycd'] : null;
        $this->container['ccydesc'] = isset($data['ccydesc']) ? $data['ccydesc'] : null;
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
     * Gets acct
     *
     * @return string|null
     */
    public function getAcct()
    {
        return $this->container['acct'];
    }

    /**
     * Sets acct
     *
     * @param string|null $acct Account id
     *
     * @return $this
     */
    public function setAcct($acct)
    {
        $this->container['acct'] = $acct;

        return $this;
    }

    /**
     * Gets custref
     *
     * @return string|null
     */
    public function getCustref()
    {
        return $this->container['custref'];
    }

    /**
     * Sets custref
     *
     * @param string|null $custref Customer reference
     *
     * @return $this
     */
    public function setCustref($custref)
    {
        $this->container['custref'] = $custref;

        return $this;
    }

    /**
     * Gets invn
     *
     * @return string|null
     */
    public function getInvn()
    {
        return $this->container['invn'];
    }

    /**
     * Sets invn
     *
     * @param string|null $invn Invoice Number reference
     *
     * @return $this
     */
    public function setInvn($invn)
    {
        $this->container['invn'] = $invn;

        return $this;
    }

    /**
     * Gets bcyc
     *
     * @return string|null
     */
    public function getBcyc()
    {
        return $this->container['bcyc'];
    }

    /**
     * Sets bcyc
     *
     * @param string|null $bcyc Bill Cycle reference
     *
     * @return $this
     */
    public function setBcyc($bcyc)
    {
        $this->container['bcyc'] = $bcyc;

        return $this;
    }

    /**
     * Gets ccycd
     *
     * @return string|null
     */
    public function getCcycd()
    {
        return $this->container['ccycd'];
    }

    /**
     * Sets ccycd
     *
     * @param string|null $ccycd Currency code for invoice
     *
     * @return $this
     */
    public function setCcycd($ccycd)
    {
        $this->container['ccycd'] = $ccycd;

        return $this;
    }

    /**
     * Gets ccydesc
     *
     * @return string|null
     */
    public function getCcydesc()
    {
        return $this->container['ccydesc'];
    }

    /**
     * Sets ccydesc
     *
     * @param string|null $ccydesc Currency description
     *
     * @return $this
     */
    public function setCcydesc($ccydesc)
    {
        $this->container['ccydesc'] = $ccydesc;

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


