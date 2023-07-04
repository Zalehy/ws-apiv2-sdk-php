<?php
/**
 * Difference
 *
 * PHP version 5
 *
 * @category Class
 * @package  WheelSizeApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Wheel Fitment API
 *
 * The Wheel Fitment API provides a programmatic gateway to the comprehensive database and services of www.wheel-size.com. This API is expertly designed to retrieve detailed information regarding the vehicle fitment database for rims and tires, encompassing both original equipment (OE) and  aftermarket fitments, along with plus/minus sizing fitment data. Our offerings are further diversified  by including a multitude of country-specific and language-specific options.  We take pride in the extensive coverage of our fitment data, which nearly spans 100% for vehicles manufactured since the year 2000. Moreover, to ensure the utmost accuracy and relevance of the information we provide, our fitment data is meticulously updated on a daily basis.
 *
 * OpenAPI spec version: v2
 * Contact: info@wheel-size.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace WheelSizeApiClient\Model;

use \ArrayAccess;
use \WheelSizeApiClient\ObjectSerializer;

/**
 * Difference Class Doc Comment
 *
 * @category Class
 * @package  WheelSizeApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Difference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Difference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        's_relative' => 'float',
        's_absolute' => 'float',
        'do_relative' => 'float',
        'do_absolute' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        's_relative' => null,
        's_absolute' => null,
        'do_relative' => null,
        'do_absolute' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        's_relative' => 's_relative',
        's_absolute' => 's_absolute',
        'do_relative' => 'do_relative',
        'do_absolute' => 'do_absolute'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        's_relative' => 'setSRelative',
        's_absolute' => 'setSAbsolute',
        'do_relative' => 'setDoRelative',
        'do_absolute' => 'setDoAbsolute'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        's_relative' => 'getSRelative',
        's_absolute' => 'getSAbsolute',
        'do_relative' => 'getDoRelative',
        'do_absolute' => 'getDoAbsolute'
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
        return self::$swaggerModelName;
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
        $this->container['s_relative'] = isset($data['s_relative']) ? $data['s_relative'] : null;
        $this->container['s_absolute'] = isset($data['s_absolute']) ? $data['s_absolute'] : null;
        $this->container['do_relative'] = isset($data['do_relative']) ? $data['do_relative'] : null;
        $this->container['do_absolute'] = isset($data['do_absolute']) ? $data['do_absolute'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['s_relative'] === null) {
            $invalidProperties[] = "'s_relative' can't be null";
        }
        if ($this->container['s_absolute'] === null) {
            $invalidProperties[] = "'s_absolute' can't be null";
        }
        if ($this->container['do_relative'] === null) {
            $invalidProperties[] = "'do_relative' can't be null";
        }
        if ($this->container['do_absolute'] === null) {
            $invalidProperties[] = "'do_absolute' can't be null";
        }
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
     * Gets s_relative
     *
     * @return float
     */
    public function getSRelative()
    {
        return $this->container['s_relative'];
    }

    /**
     * Sets s_relative
     *
     * @param float $s_relative -7.14
     *
     * @return $this
     */
    public function setSRelative($s_relative)
    {
        $this->container['s_relative'] = $s_relative;

        return $this;
    }

    /**
     * Gets s_absolute
     *
     * @return float
     */
    public function getSAbsolute()
    {
        return $this->container['s_absolute'];
    }

    /**
     * Sets s_absolute
     *
     * @param float $s_absolute -17
     *
     * @return $this
     */
    public function setSAbsolute($s_absolute)
    {
        $this->container['s_absolute'] = $s_absolute;

        return $this;
    }

    /**
     * Gets do_relative
     *
     * @return float
     */
    public function getDoRelative()
    {
        return $this->container['do_relative'];
    }

    /**
     * Sets do_relative
     *
     * @param float $do_relative 1.47
     *
     * @return $this
     */
    public function setDoRelative($do_relative)
    {
        $this->container['do_relative'] = $do_relative;

        return $this;
    }

    /**
     * Gets do_absolute
     *
     * @return float
     */
    public function getDoAbsolute()
    {
        return $this->container['do_absolute'];
    }

    /**
     * Sets do_absolute
     *
     * @param float $do_absolute 10
     *
     * @return $this
     */
    public function setDoAbsolute($do_absolute)
    {
        $this->container['do_absolute'] = $do_absolute;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


