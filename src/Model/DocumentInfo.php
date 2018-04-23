<?php
/**
 * DocumentInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Sufel\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SUFEL
 *
 * Sufel API for Companies.
 *
 * OpenAPI spec version: 2.0
 * Contact: giansalex@gmail.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Sufel\Client\Model;

use \ArrayAccess;
use \Sufel\Client\ObjectSerializer;

/**
 * DocumentInfo Class Doc Comment
 *
 * @category Class
 * @package  Sufel\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tipo' => 'string',
        'serie' => 'string',
        'correlativo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tipo' => null,
        'serie' => null,
        'correlativo' => null
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
        'tipo' => 'tipo',
        'serie' => 'serie',
        'correlativo' => 'correlativo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tipo' => 'setTipo',
        'serie' => 'setSerie',
        'correlativo' => 'setCorrelativo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tipo' => 'getTipo',
        'serie' => 'getSerie',
        'correlativo' => 'getCorrelativo'
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
        $this->container['tipo'] = isset($data['tipo']) ? $data['tipo'] : null;
        $this->container['serie'] = isset($data['serie']) ? $data['serie'] : null;
        $this->container['correlativo'] = isset($data['correlativo']) ? $data['correlativo'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tipo'] === null) {
            $invalidProperties[] = "'tipo' can't be null";
        }
        if ($this->container['serie'] === null) {
            $invalidProperties[] = "'serie' can't be null";
        }
        if ($this->container['correlativo'] === null) {
            $invalidProperties[] = "'correlativo' can't be null";
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
     * Gets tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->container['tipo'];
    }

    /**
     * Sets tipo
     *
     * @param string $tipo tipo
     *
     * @return $this
     */
    public function setTipo($tipo)
    {
        $this->container['tipo'] = $tipo;

        return $this;
    }

    /**
     * Gets serie
     *
     * @return string
     */
    public function getSerie()
    {
        return $this->container['serie'];
    }

    /**
     * Sets serie
     *
     * @param string $serie serie
     *
     * @return $this
     */
    public function setSerie($serie)
    {
        $this->container['serie'] = $serie;

        return $this;
    }

    /**
     * Gets correlativo
     *
     * @return string
     */
    public function getCorrelativo()
    {
        return $this->container['correlativo'];
    }

    /**
     * Sets correlativo
     *
     * @param string $correlativo correlativo
     *
     * @return $this
     */
    public function setCorrelativo($correlativo)
    {
        $this->container['correlativo'] = $correlativo;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

