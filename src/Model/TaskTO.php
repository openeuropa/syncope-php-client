<?php
/**
 * TaskTO
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
 * TaskTO Class Doc Comment
 *
 * @category Class
 * @package  SyncopePhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TaskTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = '@class';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaskTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'class' => 'string',
        'key' => 'string',
        'start' => '\DateTime',
        'end' => '\DateTime',
        'latestExecStatus' => 'string',
        'executions' => '\SyncopePhpClient\Model\ExecTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'class' => null,
        'key' => null,
        'start' => 'date-time',
        'end' => 'date-time',
        'latestExecStatus' => null,
        'executions' => null
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
        'class' => '@class',
        'key' => 'key',
        'start' => 'start',
        'end' => 'end',
        'latestExecStatus' => 'latestExecStatus',
        'executions' => 'executions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'class' => 'setClass',
        'key' => 'setKey',
        'start' => 'setStart',
        'end' => 'setEnd',
        'latestExecStatus' => 'setLatestExecStatus',
        'executions' => 'setExecutions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'class' => 'getClass',
        'key' => 'getKey',
        'start' => 'getStart',
        'end' => 'getEnd',
        'latestExecStatus' => 'getLatestExecStatus',
        'executions' => 'getExecutions'
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
        $this->container['class'] = isset($data['class']) ? $data['class'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['latestExecStatus'] = isset($data['latestExecStatus']) ? $data['latestExecStatus'] : null;
        $this->container['executions'] = isset($data['executions']) ? $data['executions'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('@class', self::$attributeMap);
        $this->container[$discriminator] = static::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['class'] === null) {
            $invalidProperties[] = "'class' can't be null";
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
     * Gets class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->container['class'];
    }

    /**
     * Sets class
     *
     * @param string $class class
     *
     * @return $this
     */
    public function setClass($class)
    {
        $this->container['class'] = $class;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime|null
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime|null $start start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     *
     * @return \DateTime|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     *
     * @param \DateTime|null $end end
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets latestExecStatus
     *
     * @return string|null
     */
    public function getLatestExecStatus()
    {
        return $this->container['latestExecStatus'];
    }

    /**
     * Sets latestExecStatus
     *
     * @param string|null $latestExecStatus latestExecStatus
     *
     * @return $this
     */
    public function setLatestExecStatus($latestExecStatus)
    {
        $this->container['latestExecStatus'] = $latestExecStatus;

        return $this;
    }

    /**
     * Gets executions
     *
     * @return \SyncopePhpClient\Model\ExecTO[]|null
     */
    public function getExecutions()
    {
        return $this->container['executions'];
    }

    /**
     * Sets executions
     *
     * @param \SyncopePhpClient\Model\ExecTO[]|null $executions executions
     *
     * @return $this
     */
    public function setExecutions($executions)
    {
        $this->container['executions'] = $executions;

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


