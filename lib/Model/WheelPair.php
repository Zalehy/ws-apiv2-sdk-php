<?php
/**
 * WheelPair
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
 * WheelPair Class Doc Comment
 *
 * @category Class
 * @package  WheelSizeApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WheelPair implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WheelPair';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_stock' => 'bool',
        'showing_fp_only' => 'bool',
        'is_recommended_for_winter' => 'bool',
        'is_runflat_tires' => 'bool',
        'is_pressed_steel_rims' => 'bool',
        'front' => '\WheelSizeApiClient\Model\Wheel',
        'rear' => '\WheelSizeApiClient\Model\Wheel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_stock' => null,
        'showing_fp_only' => null,
        'is_recommended_for_winter' => null,
        'is_runflat_tires' => null,
        'is_pressed_steel_rims' => null,
        'front' => null,
        'rear' => null
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
        'is_stock' => 'is_stock',
        'showing_fp_only' => 'showing_fp_only',
        'is_recommended_for_winter' => 'is_recommended_for_winter',
        'is_runflat_tires' => 'is_runflat_tires',
        'is_pressed_steel_rims' => 'is_pressed_steel_rims',
        'front' => 'front',
        'rear' => 'rear'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_stock' => 'setIsStock',
        'showing_fp_only' => 'setShowingFpOnly',
        'is_recommended_for_winter' => 'setIsRecommendedForWinter',
        'is_runflat_tires' => 'setIsRunflatTires',
        'is_pressed_steel_rims' => 'setIsPressedSteelRims',
        'front' => 'setFront',
        'rear' => 'setRear'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_stock' => 'getIsStock',
        'showing_fp_only' => 'getShowingFpOnly',
        'is_recommended_for_winter' => 'getIsRecommendedForWinter',
        'is_runflat_tires' => 'getIsRunflatTires',
        'is_pressed_steel_rims' => 'getIsPressedSteelRims',
        'front' => 'getFront',
        'rear' => 'getRear'
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
        $this->container['is_stock'] = isset($data['is_stock']) ? $data['is_stock'] : null;
        $this->container['showing_fp_only'] = isset($data['showing_fp_only']) ? $data['showing_fp_only'] : null;
        $this->container['is_recommended_for_winter'] = isset($data['is_recommended_for_winter']) ? $data['is_recommended_for_winter'] : null;
        $this->container['is_runflat_tires'] = isset($data['is_runflat_tires']) ? $data['is_runflat_tires'] : null;
        $this->container['is_pressed_steel_rims'] = isset($data['is_pressed_steel_rims']) ? $data['is_pressed_steel_rims'] : null;
        $this->container['front'] = isset($data['front']) ? $data['front'] : null;
        $this->container['rear'] = isset($data['rear']) ? $data['rear'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['is_stock'] === null) {
            $invalidProperties[] = "'is_stock' can't be null";
        }
        if ($this->container['showing_fp_only'] === null) {
            $invalidProperties[] = "'showing_fp_only' can't be null";
        }
        if ($this->container['is_recommended_for_winter'] === null) {
            $invalidProperties[] = "'is_recommended_for_winter' can't be null";
        }
        if ($this->container['is_runflat_tires'] === null) {
            $invalidProperties[] = "'is_runflat_tires' can't be null";
        }
        if ($this->container['is_pressed_steel_rims'] === null) {
            $invalidProperties[] = "'is_pressed_steel_rims' can't be null";
        }
        if ($this->container['front'] === null) {
            $invalidProperties[] = "'front' can't be null";
        }
        if ($this->container['rear'] === null) {
            $invalidProperties[] = "'rear' can't be null";
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
     * Gets is_stock
     *
     * @return bool
     */
    public function getIsStock()
    {
        return $this->container['is_stock'];
    }

    /**
     * Sets is_stock
     *
     * @param bool $is_stock Original Equipment (OE)
     *
     * @return $this
     */
    public function setIsStock($is_stock)
    {
        $this->container['is_stock'] = $is_stock;

        return $this;
    }

    /**
     * Gets showing_fp_only
     *
     * @return bool
     */
    public function getShowingFpOnly()
    {
        return $this->container['showing_fp_only'];
    }

    /**
     * Sets showing_fp_only
     *
     * @param bool $showing_fp_only Show front pair only
     *
     * @return $this
     */
    public function setShowingFpOnly($showing_fp_only)
    {
        $this->container['showing_fp_only'] = $showing_fp_only;

        return $this;
    }

    /**
     * Gets is_recommended_for_winter
     *
     * @return bool
     */
    public function getIsRecommendedForWinter()
    {
        return $this->container['is_recommended_for_winter'];
    }

    /**
     * Sets is_recommended_for_winter
     *
     * @param bool $is_recommended_for_winter Recommended for winter
     *
     * @return $this
     */
    public function setIsRecommendedForWinter($is_recommended_for_winter)
    {
        $this->container['is_recommended_for_winter'] = $is_recommended_for_winter;

        return $this;
    }

    /**
     * Gets is_runflat_tires
     *
     * @return bool
     */
    public function getIsRunflatTires()
    {
        return $this->container['is_runflat_tires'];
    }

    /**
     * Sets is_runflat_tires
     *
     * @param bool $is_runflat_tires Runflat Tires
     *
     * @return $this
     */
    public function setIsRunflatTires($is_runflat_tires)
    {
        $this->container['is_runflat_tires'] = $is_runflat_tires;

        return $this;
    }

    /**
     * Gets is_pressed_steel_rims
     *
     * @return bool
     */
    public function getIsPressedSteelRims()
    {
        return $this->container['is_pressed_steel_rims'];
    }

    /**
     * Sets is_pressed_steel_rims
     *
     * @param bool $is_pressed_steel_rims Pressed Steel Rims
     *
     * @return $this
     */
    public function setIsPressedSteelRims($is_pressed_steel_rims)
    {
        $this->container['is_pressed_steel_rims'] = $is_pressed_steel_rims;

        return $this;
    }

    /**
     * Gets front
     *
     * @return \WheelSizeApiClient\Model\Wheel
     */
    public function getFront()
    {
        return $this->container['front'];
    }

    /**
     * Sets front
     *
     * @param \WheelSizeApiClient\Model\Wheel $front front
     *
     * @return $this
     */
    public function setFront($front)
    {
        $this->container['front'] = $front;

        return $this;
    }

    /**
     * Gets rear
     *
     * @return \WheelSizeApiClient\Model\Wheel
     */
    public function getRear()
    {
        return $this->container['rear'];
    }

    /**
     * Sets rear
     *
     * @param \WheelSizeApiClient\Model\Wheel $rear rear
     *
     * @return $this
     */
    public function setRear($rear)
    {
        $this->container['rear'] = $rear;

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

