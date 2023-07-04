<?php
/**
 * Rim
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
 * Rim Class Doc Comment
 *
 * @category Class
 * @package  WheelSizeApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Rim implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Rim';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'designation' => 'string',
        'diameter' => 'float',
        'width' => 'float',
        'offset' => 'int',
        'backspacing' => 'int',
        'weight' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'designation' => null,
        'diameter' => null,
        'width' => null,
        'offset' => null,
        'backspacing' => null,
        'weight' => null
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
        'designation' => 'designation',
        'diameter' => 'diameter',
        'width' => 'width',
        'offset' => 'offset',
        'backspacing' => 'backspacing',
        'weight' => 'weight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'designation' => 'setDesignation',
        'diameter' => 'setDiameter',
        'width' => 'setWidth',
        'offset' => 'setOffset',
        'backspacing' => 'setBackspacing',
        'weight' => 'setWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'designation' => 'getDesignation',
        'diameter' => 'getDiameter',
        'width' => 'getWidth',
        'offset' => 'getOffset',
        'backspacing' => 'getBackspacing',
        'weight' => 'getWeight'
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
        $this->container['designation'] = isset($data['designation']) ? $data['designation'] : null;
        $this->container['diameter'] = isset($data['diameter']) ? $data['diameter'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['backspacing'] = isset($data['backspacing']) ? $data['backspacing'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['designation'] === null) {
            $invalidProperties[] = "'designation' can't be null";
        }
        if ((mb_strlen($this->container['designation']) < 1)) {
            $invalidProperties[] = "invalid value for 'designation', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['diameter'] === null) {
            $invalidProperties[] = "'diameter' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['backspacing'] === null) {
            $invalidProperties[] = "'backspacing' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
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
     * Gets designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->container['designation'];
    }

    /**
     * Sets designation
     *
     * @param string $designation 17 ⨯ 6.5J
     *
     * @return $this
     */
    public function setDesignation($designation)
    {

        if ((mb_strlen($designation) < 1)) {
            throw new \InvalidArgumentException('invalid length for $designation when calling Rim., must be bigger than or equal to 1.');
        }

        $this->container['designation'] = $designation;

        return $this;
    }

    /**
     * Gets diameter
     *
     * @return float
     */
    public function getDiameter()
    {
        return $this->container['diameter'];
    }

    /**
     * Sets diameter
     *
     * @param float $diameter 17
     *
     * @return $this
     */
    public function setDiameter($diameter)
    {
        $this->container['diameter'] = $diameter;

        return $this;
    }

    /**
     * Gets width
     *
     * @return float
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param float $width 6.6
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int $offset 43
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets backspacing
     *
     * @return int
     */
    public function getBackspacing()
    {
        return $this->container['backspacing'];
    }

    /**
     * Sets backspacing
     *
     * @param int $backspacing 126
     *
     * @return $this
     */
    public function setBackspacing($backspacing)
    {
        $this->container['backspacing'] = $backspacing;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float $weight 19.18
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

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

