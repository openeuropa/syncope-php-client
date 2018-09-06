<?php
/**
 * SCIMGeneralConf
 *
 * PHP version 5
 *
 * @category Class
 * @package  SyncopePhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Apache Syncope
 *
 * Apache Syncope 2.1.2-SNAPSHOT
 *
 * OpenAPI spec version: 2.1.2-SNAPSHOT
 * Contact: dev@syncope.apache.org
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SyncopePhpClient\Model;

use \ArrayAccess;
use \SyncopePhpClient\ObjectSerializer;

/**
 * SCIMGeneralConf Class Doc Comment
 *
 * @category Class
 * @package  SyncopePhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SCIMGeneralConf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SCIMGeneralConf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'creationDate' => '\DateTime',
        'lastChangeDate' => '\DateTime',
        'bulkMaxOperations' => 'int',
        'bulkMaxPayloadSize' => 'int',
        'filterMaxResults' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'creationDate' => 'date-time',
        'lastChangeDate' => 'date-time',
        'bulkMaxOperations' => 'int32',
        'bulkMaxPayloadSize' => 'int32',
        'filterMaxResults' => 'int32'
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
        'creationDate' => 'creationDate',
        'lastChangeDate' => 'lastChangeDate',
        'bulkMaxOperations' => 'bulkMaxOperations',
        'bulkMaxPayloadSize' => 'bulkMaxPayloadSize',
        'filterMaxResults' => 'filterMaxResults'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'creationDate' => 'setCreationDate',
        'lastChangeDate' => 'setLastChangeDate',
        'bulkMaxOperations' => 'setBulkMaxOperations',
        'bulkMaxPayloadSize' => 'setBulkMaxPayloadSize',
        'filterMaxResults' => 'setFilterMaxResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'creationDate' => 'getCreationDate',
        'lastChangeDate' => 'getLastChangeDate',
        'bulkMaxOperations' => 'getBulkMaxOperations',
        'bulkMaxPayloadSize' => 'getBulkMaxPayloadSize',
        'filterMaxResults' => 'getFilterMaxResults'
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
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['lastChangeDate'] = isset($data['lastChangeDate']) ? $data['lastChangeDate'] : null;
        $this->container['bulkMaxOperations'] = isset($data['bulkMaxOperations']) ? $data['bulkMaxOperations'] : null;
        $this->container['bulkMaxPayloadSize'] = isset($data['bulkMaxPayloadSize']) ? $data['bulkMaxPayloadSize'] : null;
        $this->container['filterMaxResults'] = isset($data['filterMaxResults']) ? $data['filterMaxResults'] : null;
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
     * Gets creationDate
     *
     * @return \DateTime|null
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param \DateTime|null $creationDate creationDate
     *
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets lastChangeDate
     *
     * @return \DateTime|null
     */
    public function getLastChangeDate()
    {
        return $this->container['lastChangeDate'];
    }

    /**
     * Sets lastChangeDate
     *
     * @param \DateTime|null $lastChangeDate lastChangeDate
     *
     * @return $this
     */
    public function setLastChangeDate($lastChangeDate)
    {
        $this->container['lastChangeDate'] = $lastChangeDate;

        return $this;
    }

    /**
     * Gets bulkMaxOperations
     *
     * @return int|null
     */
    public function getBulkMaxOperations()
    {
        return $this->container['bulkMaxOperations'];
    }

    /**
     * Sets bulkMaxOperations
     *
     * @param int|null $bulkMaxOperations bulkMaxOperations
     *
     * @return $this
     */
    public function setBulkMaxOperations($bulkMaxOperations)
    {
        $this->container['bulkMaxOperations'] = $bulkMaxOperations;

        return $this;
    }

    /**
     * Gets bulkMaxPayloadSize
     *
     * @return int|null
     */
    public function getBulkMaxPayloadSize()
    {
        return $this->container['bulkMaxPayloadSize'];
    }

    /**
     * Sets bulkMaxPayloadSize
     *
     * @param int|null $bulkMaxPayloadSize bulkMaxPayloadSize
     *
     * @return $this
     */
    public function setBulkMaxPayloadSize($bulkMaxPayloadSize)
    {
        $this->container['bulkMaxPayloadSize'] = $bulkMaxPayloadSize;

        return $this;
    }

    /**
     * Gets filterMaxResults
     *
     * @return int|null
     */
    public function getFilterMaxResults()
    {
        return $this->container['filterMaxResults'];
    }

    /**
     * Sets filterMaxResults
     *
     * @param int|null $filterMaxResults filterMaxResults
     *
     * @return $this
     */
    public function setFilterMaxResults($filterMaxResults)
    {
        $this->container['filterMaxResults'] = $filterMaxResults;

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
}


