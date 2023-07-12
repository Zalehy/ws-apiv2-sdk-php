<?php
/**
 * ModelsData
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
 * ModelsData Class Doc Comment
 *
 * @category Class
 * @package  WheelSizeApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ModelsData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ModelsData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'slug' => 'string',
        'name' => 'string',
        'name_en' => 'string',
        'regions' => 'string[]',
        'year_ranges' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'slug' => 'slug',
        'name' => null,
        'name_en' => null,
        'regions' => null,
        'year_ranges' => null
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
        'slug' => 'slug',
        'name' => 'name',
        'name_en' => 'name_en',
        'regions' => 'regions',
        'year_ranges' => 'year_ranges'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'slug' => 'setSlug',
        'name' => 'setName',
        'name_en' => 'setNameEn',
        'regions' => 'setRegions',
        'year_ranges' => 'setYearRanges'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'slug' => 'getSlug',
        'name' => 'getName',
        'name_en' => 'getNameEn',
        'regions' => 'getRegions',
        'year_ranges' => 'getYearRanges'
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
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name_en'] = isset($data['name_en']) ? $data['name_en'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
        $this->container['year_ranges'] = isset($data['year_ranges']) ? $data['year_ranges'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['slug'] === null) {
            $invalidProperties[] = "'slug' can't be null";
        }
        if ((mb_strlen($this->container['slug']) < 1)) {
            $invalidProperties[] = "invalid value for 'slug', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[-a-zA-Z0-9_]+$/", $this->container['slug'])) {
            $invalidProperties[] = "invalid value for 'slug', must be conform to the pattern /^[-a-zA-Z0-9_]+$/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name_en'] === null) {
            $invalidProperties[] = "'name_en' can't be null";
        }
        if ((mb_strlen($this->container['name_en']) < 1)) {
            $invalidProperties[] = "invalid value for 'name_en', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['regions'] === null) {
            $invalidProperties[] = "'regions' can't be null";
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
     * Gets slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug Model slug name (e.g. `outlander`)
     *
     * @return $this
     */
    public function setSlug($slug)
    {

        if ((mb_strlen($slug) < 1)) {
            throw new \InvalidArgumentException('invalid length for $slug when calling ModelsData., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[-a-zA-Z0-9_]+$/", $slug))) {
            throw new \InvalidArgumentException("invalid value for $slug when calling ModelsData., must conform to the pattern /^[-a-zA-Z0-9_]+$/.");
        }

        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Model name (e.g. `Outlander`)
     *
     * @return $this
     */
    public function setName($name)
    {

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ModelsData., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_en
     *
     * @return string
     */
    public function getNameEn()
    {
        return $this->container['name_en'];
    }

    /**
     * Sets name_en
     *
     * @param string $name_en Original english name. Use it along with _**`lang`**_ query parameter
     *
     * @return $this
     */
    public function setNameEn($name_en)
    {

        if ((mb_strlen($name_en) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name_en when calling ModelsData., must be bigger than or equal to 1.');
        }

        $this->container['name_en'] = $name_en;

        return $this;
    }

    /**
     * Gets regions
     *
     * @return string[]
     */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
     * Sets regions
     *
     * @param string[] $regions regions
     *
     * @return $this
     */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;

        return $this;
    }

    /**
     * Gets year_ranges
     *
     * @return string[]
     */
    public function getYearRanges()
    {
        return $this->container['year_ranges'];
    }

    /**
     * Sets year_ranges
     *
     * @param string[] $year_ranges year_ranges
     *
     * @return $this
     */
    public function setYearRanges($year_ranges)
    {
        $this->container['year_ranges'] = $year_ranges;

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


