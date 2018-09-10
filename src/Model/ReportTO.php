<?php
/**
 * ReportTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenEuropa\SyncopePhpClient
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

namespace OpenEuropa\SyncopePhpClient\Model;

use \ArrayAccess;
use \OpenEuropa\SyncopePhpClient\ObjectSerializer;

/**
 * ReportTO Class Doc Comment
 *
 * @category Class
 * @package  OpenEuropa\SyncopePhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'start' => '\DateTime',
        'end' => '\DateTime',
        'key' => 'string',
        'name' => 'string',
        'cronExpression' => 'string',
        'latestExecStatus' => 'string',
        'lastExec' => '\DateTime',
        'nextExec' => '\DateTime',
        'active' => 'bool',
        'template' => 'string',
        'reportlets' => 'string[]',
        'executions' => '\OpenEuropa\SyncopePhpClient\Model\ExecTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'start' => 'date-time',
        'end' => 'date-time',
        'key' => null,
        'name' => null,
        'cronExpression' => null,
        'latestExecStatus' => null,
        'lastExec' => 'date-time',
        'nextExec' => 'date-time',
        'active' => null,
        'template' => null,
        'reportlets' => null,
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
        'start' => 'start',
        'end' => 'end',
        'key' => 'key',
        'name' => 'name',
        'cronExpression' => 'cronExpression',
        'latestExecStatus' => 'latestExecStatus',
        'lastExec' => 'lastExec',
        'nextExec' => 'nextExec',
        'active' => 'active',
        'template' => 'template',
        'reportlets' => 'reportlets',
        'executions' => 'executions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start' => 'setStart',
        'end' => 'setEnd',
        'key' => 'setKey',
        'name' => 'setName',
        'cronExpression' => 'setCronExpression',
        'latestExecStatus' => 'setLatestExecStatus',
        'lastExec' => 'setLastExec',
        'nextExec' => 'setNextExec',
        'active' => 'setActive',
        'template' => 'setTemplate',
        'reportlets' => 'setReportlets',
        'executions' => 'setExecutions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start' => 'getStart',
        'end' => 'getEnd',
        'key' => 'getKey',
        'name' => 'getName',
        'cronExpression' => 'getCronExpression',
        'latestExecStatus' => 'getLatestExecStatus',
        'lastExec' => 'getLastExec',
        'nextExec' => 'getNextExec',
        'active' => 'getActive',
        'template' => 'getTemplate',
        'reportlets' => 'getReportlets',
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
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['cronExpression'] = isset($data['cronExpression']) ? $data['cronExpression'] : null;
        $this->container['latestExecStatus'] = isset($data['latestExecStatus']) ? $data['latestExecStatus'] : null;
        $this->container['lastExec'] = isset($data['lastExec']) ? $data['lastExec'] : null;
        $this->container['nextExec'] = isset($data['nextExec']) ? $data['nextExec'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['reportlets'] = isset($data['reportlets']) ? $data['reportlets'] : null;
        $this->container['executions'] = isset($data['executions']) ? $data['executions'] : null;
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets cronExpression
     *
     * @return string|null
     */
    public function getCronExpression()
    {
        return $this->container['cronExpression'];
    }

    /**
     * Sets cronExpression
     *
     * @param string|null $cronExpression cronExpression
     *
     * @return $this
     */
    public function setCronExpression($cronExpression)
    {
        $this->container['cronExpression'] = $cronExpression;

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
     * Gets lastExec
     *
     * @return \DateTime|null
     */
    public function getLastExec()
    {
        return $this->container['lastExec'];
    }

    /**
     * Sets lastExec
     *
     * @param \DateTime|null $lastExec lastExec
     *
     * @return $this
     */
    public function setLastExec($lastExec)
    {
        $this->container['lastExec'] = $lastExec;

        return $this;
    }

    /**
     * Gets nextExec
     *
     * @return \DateTime|null
     */
    public function getNextExec()
    {
        return $this->container['nextExec'];
    }

    /**
     * Sets nextExec
     *
     * @param \DateTime|null $nextExec nextExec
     *
     * @return $this
     */
    public function setNextExec($nextExec)
    {
        $this->container['nextExec'] = $nextExec;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets template
     *
     * @return string|null
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param string|null $template template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets reportlets
     *
     * @return string[]|null
     */
    public function getReportlets()
    {
        return $this->container['reportlets'];
    }

    /**
     * Sets reportlets
     *
     * @param string[]|null $reportlets reportlets
     *
     * @return $this
     */
    public function setReportlets($reportlets)
    {
        $this->container['reportlets'] = $reportlets;

        return $this;
    }

    /**
     * Gets executions
     *
     * @return \OpenEuropa\SyncopePhpClient\Model\ExecTO[]|null
     */
    public function getExecutions()
    {
        return $this->container['executions'];
    }

    /**
     * Sets executions
     *
     * @param \OpenEuropa\SyncopePhpClient\Model\ExecTO[]|null $executions executions
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


