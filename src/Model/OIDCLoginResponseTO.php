<?php
/**
 * OIDCLoginResponseTO
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
 * OIDCLoginResponseTO Class Doc Comment
 *
 * @category Class
 * @package  SyncopePhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OIDCLoginResponseTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OIDCLoginResponseTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'username' => 'string',
        'logoutSupported' => 'bool',
        'selfReg' => 'bool',
        'accessToken' => 'string',
        'accessTokenExpiryTime' => '\DateTime',
        'attrs' => '\SyncopePhpClient\Model\AttrTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'username' => null,
        'logoutSupported' => null,
        'selfReg' => null,
        'accessToken' => null,
        'accessTokenExpiryTime' => 'date-time',
        'attrs' => null
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
        'username' => 'username',
        'logoutSupported' => 'logoutSupported',
        'selfReg' => 'selfReg',
        'accessToken' => 'accessToken',
        'accessTokenExpiryTime' => 'accessTokenExpiryTime',
        'attrs' => 'attrs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'username' => 'setUsername',
        'logoutSupported' => 'setLogoutSupported',
        'selfReg' => 'setSelfReg',
        'accessToken' => 'setAccessToken',
        'accessTokenExpiryTime' => 'setAccessTokenExpiryTime',
        'attrs' => 'setAttrs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'username' => 'getUsername',
        'logoutSupported' => 'getLogoutSupported',
        'selfReg' => 'getSelfReg',
        'accessToken' => 'getAccessToken',
        'accessTokenExpiryTime' => 'getAccessTokenExpiryTime',
        'attrs' => 'getAttrs'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['logoutSupported'] = isset($data['logoutSupported']) ? $data['logoutSupported'] : null;
        $this->container['selfReg'] = isset($data['selfReg']) ? $data['selfReg'] : null;
        $this->container['accessToken'] = isset($data['accessToken']) ? $data['accessToken'] : null;
        $this->container['accessTokenExpiryTime'] = isset($data['accessTokenExpiryTime']) ? $data['accessTokenExpiryTime'] : null;
        $this->container['attrs'] = isset($data['attrs']) ? $data['attrs'] : null;
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
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets logoutSupported
     *
     * @return bool|null
     */
    public function getLogoutSupported()
    {
        return $this->container['logoutSupported'];
    }

    /**
     * Sets logoutSupported
     *
     * @param bool|null $logoutSupported logoutSupported
     *
     * @return $this
     */
    public function setLogoutSupported($logoutSupported)
    {
        $this->container['logoutSupported'] = $logoutSupported;

        return $this;
    }

    /**
     * Gets selfReg
     *
     * @return bool|null
     */
    public function getSelfReg()
    {
        return $this->container['selfReg'];
    }

    /**
     * Sets selfReg
     *
     * @param bool|null $selfReg selfReg
     *
     * @return $this
     */
    public function setSelfReg($selfReg)
    {
        $this->container['selfReg'] = $selfReg;

        return $this;
    }

    /**
     * Gets accessToken
     *
     * @return string|null
     */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
     * Sets accessToken
     *
     * @param string|null $accessToken accessToken
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;

        return $this;
    }

    /**
     * Gets accessTokenExpiryTime
     *
     * @return \DateTime|null
     */
    public function getAccessTokenExpiryTime()
    {
        return $this->container['accessTokenExpiryTime'];
    }

    /**
     * Sets accessTokenExpiryTime
     *
     * @param \DateTime|null $accessTokenExpiryTime accessTokenExpiryTime
     *
     * @return $this
     */
    public function setAccessTokenExpiryTime($accessTokenExpiryTime)
    {
        $this->container['accessTokenExpiryTime'] = $accessTokenExpiryTime;

        return $this;
    }

    /**
     * Gets attrs
     *
     * @return \SyncopePhpClient\Model\AttrTO[]|null
     */
    public function getAttrs()
    {
        return $this->container['attrs'];
    }

    /**
     * Sets attrs
     *
     * @param \SyncopePhpClient\Model\AttrTO[]|null $attrs attrs
     *
     * @return $this
     */
    public function setAttrs($attrs)
    {
        $this->container['attrs'] = $attrs;

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


