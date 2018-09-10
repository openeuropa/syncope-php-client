<?php
/**
 * NumbersInfo
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
 * NumbersInfo Class Doc Comment
 *
 * @category Class
 * @package  SyncopePhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NumbersInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NumbersInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'totalUsers' => 'int',
        'any2ByRealm' => 'map[string,int]',
        'totalGroups' => 'int',
        'anyType1' => 'string',
        'totalAny1' => 'int',
        'anyType2' => 'string',
        'totalAny2' => 'int',
        'totalResources' => 'int',
        'totalRoles' => 'int',
        'confCompleteness' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'totalUsers' => 'int32',
        'any2ByRealm' => 'int32',
        'totalGroups' => 'int32',
        'anyType1' => null,
        'totalAny1' => 'int32',
        'anyType2' => null,
        'totalAny2' => 'int32',
        'totalResources' => 'int32',
        'totalRoles' => 'int32',
        'confCompleteness' => null
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
        'totalUsers' => 'totalUsers',
        'any2ByRealm' => 'any2ByRealm',
        'totalGroups' => 'totalGroups',
        'anyType1' => 'anyType1',
        'totalAny1' => 'totalAny1',
        'anyType2' => 'anyType2',
        'totalAny2' => 'totalAny2',
        'totalResources' => 'totalResources',
        'totalRoles' => 'totalRoles',
        'confCompleteness' => 'confCompleteness'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'totalUsers' => 'setTotalUsers',
        'any2ByRealm' => 'setAny2ByRealm',
        'totalGroups' => 'setTotalGroups',
        'anyType1' => 'setAnyType1',
        'totalAny1' => 'setTotalAny1',
        'anyType2' => 'setAnyType2',
        'totalAny2' => 'setTotalAny2',
        'totalResources' => 'setTotalResources',
        'totalRoles' => 'setTotalRoles',
        'confCompleteness' => 'setConfCompleteness'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'totalUsers' => 'getTotalUsers',
        'any2ByRealm' => 'getAny2ByRealm',
        'totalGroups' => 'getTotalGroups',
        'anyType1' => 'getAnyType1',
        'totalAny1' => 'getTotalAny1',
        'anyType2' => 'getAnyType2',
        'totalAny2' => 'getTotalAny2',
        'totalResources' => 'getTotalResources',
        'totalRoles' => 'getTotalRoles',
        'confCompleteness' => 'getConfCompleteness'
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
        $this->container['totalUsers'] = isset($data['totalUsers']) ? $data['totalUsers'] : null;
        $this->container['any2ByRealm'] = isset($data['any2ByRealm']) ? $data['any2ByRealm'] : null;
        $this->container['totalGroups'] = isset($data['totalGroups']) ? $data['totalGroups'] : null;
        $this->container['anyType1'] = isset($data['anyType1']) ? $data['anyType1'] : null;
        $this->container['totalAny1'] = isset($data['totalAny1']) ? $data['totalAny1'] : null;
        $this->container['anyType2'] = isset($data['anyType2']) ? $data['anyType2'] : null;
        $this->container['totalAny2'] = isset($data['totalAny2']) ? $data['totalAny2'] : null;
        $this->container['totalResources'] = isset($data['totalResources']) ? $data['totalResources'] : null;
        $this->container['totalRoles'] = isset($data['totalRoles']) ? $data['totalRoles'] : null;
        $this->container['confCompleteness'] = isset($data['confCompleteness']) ? $data['confCompleteness'] : null;
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
     * Gets totalUsers
     *
     * @return int|null
     */
    public function getTotalUsers()
    {
        return $this->container['totalUsers'];
    }

    /**
     * Sets totalUsers
     *
     * @param int|null $totalUsers totalUsers
     *
     * @return $this
     */
    public function setTotalUsers($totalUsers)
    {
        $this->container['totalUsers'] = $totalUsers;

        return $this;
    }

    /**
     * Gets any2ByRealm
     *
     * @return map[string,int]|null
     */
    public function getAny2ByRealm()
    {
        return $this->container['any2ByRealm'];
    }

    /**
     * Sets any2ByRealm
     *
     * @param map[string,int]|null $any2ByRealm any2ByRealm
     *
     * @return $this
     */
    public function setAny2ByRealm($any2ByRealm)
    {
        $this->container['any2ByRealm'] = $any2ByRealm;

        return $this;
    }

    /**
     * Gets totalGroups
     *
     * @return int|null
     */
    public function getTotalGroups()
    {
        return $this->container['totalGroups'];
    }

    /**
     * Sets totalGroups
     *
     * @param int|null $totalGroups totalGroups
     *
     * @return $this
     */
    public function setTotalGroups($totalGroups)
    {
        $this->container['totalGroups'] = $totalGroups;

        return $this;
    }

    /**
     * Gets anyType1
     *
     * @return string|null
     */
    public function getAnyType1()
    {
        return $this->container['anyType1'];
    }

    /**
     * Sets anyType1
     *
     * @param string|null $anyType1 anyType1
     *
     * @return $this
     */
    public function setAnyType1($anyType1)
    {
        $this->container['anyType1'] = $anyType1;

        return $this;
    }

    /**
     * Gets totalAny1
     *
     * @return int|null
     */
    public function getTotalAny1()
    {
        return $this->container['totalAny1'];
    }

    /**
     * Sets totalAny1
     *
     * @param int|null $totalAny1 totalAny1
     *
     * @return $this
     */
    public function setTotalAny1($totalAny1)
    {
        $this->container['totalAny1'] = $totalAny1;

        return $this;
    }

    /**
     * Gets anyType2
     *
     * @return string|null
     */
    public function getAnyType2()
    {
        return $this->container['anyType2'];
    }

    /**
     * Sets anyType2
     *
     * @param string|null $anyType2 anyType2
     *
     * @return $this
     */
    public function setAnyType2($anyType2)
    {
        $this->container['anyType2'] = $anyType2;

        return $this;
    }

    /**
     * Gets totalAny2
     *
     * @return int|null
     */
    public function getTotalAny2()
    {
        return $this->container['totalAny2'];
    }

    /**
     * Sets totalAny2
     *
     * @param int|null $totalAny2 totalAny2
     *
     * @return $this
     */
    public function setTotalAny2($totalAny2)
    {
        $this->container['totalAny2'] = $totalAny2;

        return $this;
    }

    /**
     * Gets totalResources
     *
     * @return int|null
     */
    public function getTotalResources()
    {
        return $this->container['totalResources'];
    }

    /**
     * Sets totalResources
     *
     * @param int|null $totalResources totalResources
     *
     * @return $this
     */
    public function setTotalResources($totalResources)
    {
        $this->container['totalResources'] = $totalResources;

        return $this;
    }

    /**
     * Gets totalRoles
     *
     * @return int|null
     */
    public function getTotalRoles()
    {
        return $this->container['totalRoles'];
    }

    /**
     * Sets totalRoles
     *
     * @param int|null $totalRoles totalRoles
     *
     * @return $this
     */
    public function setTotalRoles($totalRoles)
    {
        $this->container['totalRoles'] = $totalRoles;

        return $this;
    }

    /**
     * Gets confCompleteness
     *
     * @return map[string,bool]|null
     */
    public function getConfCompleteness()
    {
        return $this->container['confCompleteness'];
    }

    /**
     * Sets confCompleteness
     *
     * @param map[string,bool]|null $confCompleteness confCompleteness
     *
     * @return $this
     */
    public function setConfCompleteness($confCompleteness)
    {
        $this->container['confCompleteness'] = $confCompleteness;

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

