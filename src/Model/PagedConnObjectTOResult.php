<?php
/**
 * PagedConnObjectTOResult
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
 * PagedConnObjectTOResult Class Doc Comment
 *
 * @category Class
 * @package  SyncopePhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PagedConnObjectTOResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PagedConnObjectTOResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'next' => 'string',
        'pagedResultsCookie' => 'string',
        'remainingPagedResults' => 'int',
        'allResultsReturned' => 'bool',
        'result' => '\SyncopePhpClient\Model\ConnObjectTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'next' => 'uri',
        'pagedResultsCookie' => null,
        'remainingPagedResults' => 'int32',
        'allResultsReturned' => null,
        'result' => null
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
        'next' => 'next',
        'pagedResultsCookie' => 'pagedResultsCookie',
        'remainingPagedResults' => 'remainingPagedResults',
        'allResultsReturned' => 'allResultsReturned',
        'result' => 'result'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'next' => 'setNext',
        'pagedResultsCookie' => 'setPagedResultsCookie',
        'remainingPagedResults' => 'setRemainingPagedResults',
        'allResultsReturned' => 'setAllResultsReturned',
        'result' => 'setResult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'next' => 'getNext',
        'pagedResultsCookie' => 'getPagedResultsCookie',
        'remainingPagedResults' => 'getRemainingPagedResults',
        'allResultsReturned' => 'getAllResultsReturned',
        'result' => 'getResult'
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
        $this->container['next'] = isset($data['next']) ? $data['next'] : null;
        $this->container['pagedResultsCookie'] = isset($data['pagedResultsCookie']) ? $data['pagedResultsCookie'] : null;
        $this->container['remainingPagedResults'] = isset($data['remainingPagedResults']) ? $data['remainingPagedResults'] : null;
        $this->container['allResultsReturned'] = isset($data['allResultsReturned']) ? $data['allResultsReturned'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
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
     * Gets next
     *
     * @return string|null
     */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
     * Sets next
     *
     * @param string|null $next next
     *
     * @return $this
     */
    public function setNext($next)
    {
        $this->container['next'] = $next;

        return $this;
    }

    /**
     * Gets pagedResultsCookie
     *
     * @return string|null
     */
    public function getPagedResultsCookie()
    {
        return $this->container['pagedResultsCookie'];
    }

    /**
     * Sets pagedResultsCookie
     *
     * @param string|null $pagedResultsCookie pagedResultsCookie
     *
     * @return $this
     */
    public function setPagedResultsCookie($pagedResultsCookie)
    {
        $this->container['pagedResultsCookie'] = $pagedResultsCookie;

        return $this;
    }

    /**
     * Gets remainingPagedResults
     *
     * @return int|null
     */
    public function getRemainingPagedResults()
    {
        return $this->container['remainingPagedResults'];
    }

    /**
     * Sets remainingPagedResults
     *
     * @param int|null $remainingPagedResults remainingPagedResults
     *
     * @return $this
     */
    public function setRemainingPagedResults($remainingPagedResults)
    {
        $this->container['remainingPagedResults'] = $remainingPagedResults;

        return $this;
    }

    /**
     * Gets allResultsReturned
     *
     * @return bool|null
     */
    public function getAllResultsReturned()
    {
        return $this->container['allResultsReturned'];
    }

    /**
     * Sets allResultsReturned
     *
     * @param bool|null $allResultsReturned allResultsReturned
     *
     * @return $this
     */
    public function setAllResultsReturned($allResultsReturned)
    {
        $this->container['allResultsReturned'] = $allResultsReturned;

        return $this;
    }

    /**
     * Gets result
     *
     * @return \SyncopePhpClient\Model\ConnObjectTO[]|null
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param \SyncopePhpClient\Model\ConnObjectTO[]|null $result result
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

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


