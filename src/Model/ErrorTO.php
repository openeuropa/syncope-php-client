<?php
/**
 * ErrorTO
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
 * ErrorTO Class Doc Comment
 *
 * @category Class
 * @package  OpenEuropa\SyncopePhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ErrorTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ErrorTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => 'int',
        'type' => 'string',
        'elements' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'status' => 'int32',
        'type' => null,
        'elements' => null
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
        'status' => 'status',
        'type' => 'type',
        'elements' => 'elements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'type' => 'setType',
        'elements' => 'setElements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'type' => 'getType',
        'elements' => 'getElements'
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

    const TYPE_ASSOCIATED_ANYS = 'AssociatedAnys';
    const TYPE_ASSOCIATED_RESOURCES = 'AssociatedResources';
    const TYPE_COMPOSITE = 'Composite';
    const TYPE_CONCURRENT_MODIFICATION = 'ConcurrentModification';
    const TYPE_CONNECTOR_EXCEPTION = 'ConnectorException';
    const TYPE_DATA_INTEGRITY_VIOLATION = 'DataIntegrityViolation';
    const TYPE_ENTITY_EXISTS = 'EntityExists';
    const TYPE_GENERIC_PERSISTENCE = 'GenericPersistence';
    const TYPE_HAS_CHILDREN = 'HasChildren';
    const TYPE_INVALID_PRIVILEGE = 'InvalidPrivilege';
    const TYPE_INVALID_IMPLEMENTATION = 'InvalidImplementation';
    const TYPE_INVALID_SECURITY_ANSWER = 'InvalidSecurityAnswer';
    const TYPE_INVALID_ENTITY = 'InvalidEntity';
    const TYPE_INVALID_LOGGER = 'InvalidLogger';
    const TYPE_INVALID_CONN_INSTANCE = 'InvalidConnInstance';
    const TYPE_INVALID_CONN_ID_CONF = 'InvalidConnIdConf';
    const TYPE_INVALID_POLICY = 'InvalidPolicy';
    const TYPE_INVALID_CONF = 'InvalidConf';
    const TYPE_INVALID_PATH = 'InvalidPath';
    const TYPE_INVALID_PROVISION = 'InvalidProvision';
    const TYPE_INVALID_ORG_UNIT = 'InvalidOrgUnit';
    const TYPE_INVALID_REPORT = 'InvalidReport';
    const TYPE_INVALID_REPORT_EXEC = 'InvalidReportExec';
    const TYPE_INVALID_RELATIONSHIP = 'InvalidRelationship';
    const TYPE_INVALID_RELATIONSHIP_TYPE = 'InvalidRelationshipType';
    const TYPE_INVALID_ANY_TYPE = 'InvalidAnyType';
    const TYPE_INVALID_ANY_OBJECT = 'InvalidAnyObject';
    const TYPE_INVALID_GROUP = 'InvalidGroup';
    const TYPE_INVALID_SCHEMA_DEFINITION = 'InvalidSchemaDefinition';
    const TYPE_INVALID_SEARCH_EXPRESSION = 'InvalidSearchExpression';
    const TYPE_INVALID_PAGE_OR_SIZE = 'InvalidPageOrSize';
    const TYPE_INVALID_PROPAGATION_TASK_EXEC_REPORT = 'InvalidPropagationTaskExecReport';
    const TYPE_INVALID_PLAIN_SCHEMA = 'InvalidPlainSchema';
    const TYPE_INVALID_DER_SCHEMA = 'InvalidDerSchema';
    const TYPE_INVALID_VIR_SCHEMA = 'InvalidVirSchema';
    const TYPE_INVALID_MAPPING = 'InvalidMapping';
    const TYPE_INVALID_MEMBERSHIP = 'InvalidMembership';
    const TYPE_INVALID_REALM = 'InvalidRealm';
    const TYPE_INVALID_DYN_REALM = 'InvalidDynRealm';
    const TYPE_INVALID_ROLE = 'InvalidRole';
    const TYPE_INVALID_USER = 'InvalidUser';
    const TYPE_INVALID_EXTERNAL_RESOURCE = 'InvalidExternalResource';
    const TYPE_INVALID_PULL_TASK = 'InvalidPullTask';
    const TYPE_INVALID_REQUEST = 'InvalidRequest';
    const TYPE_INVALID_VALUES = 'InvalidValues';
    const TYPE_NOT_FOUND = 'NotFound';
    const TYPE_REQUIRED_VALUES_MISSING = 'RequiredValuesMissing';
    const TYPE_REST_VALIDATION = 'RESTValidation';
    const TYPE_GROUP_OWNERSHIP = 'GroupOwnership';
    const TYPE_IN_USE = 'InUse';
    const TYPE_SCHEDULING = 'Scheduling';
    const TYPE_DELEGATED_ADMINISTRATION = 'DelegatedAdministration';
    const TYPE_RECONCILIATION = 'Reconciliation';
    const TYPE_UNKNOWN = 'Unknown';
    const TYPE_WORKFLOW = 'Workflow';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ASSOCIATED_ANYS,
            self::TYPE_ASSOCIATED_RESOURCES,
            self::TYPE_COMPOSITE,
            self::TYPE_CONCURRENT_MODIFICATION,
            self::TYPE_CONNECTOR_EXCEPTION,
            self::TYPE_DATA_INTEGRITY_VIOLATION,
            self::TYPE_ENTITY_EXISTS,
            self::TYPE_GENERIC_PERSISTENCE,
            self::TYPE_HAS_CHILDREN,
            self::TYPE_INVALID_PRIVILEGE,
            self::TYPE_INVALID_IMPLEMENTATION,
            self::TYPE_INVALID_SECURITY_ANSWER,
            self::TYPE_INVALID_ENTITY,
            self::TYPE_INVALID_LOGGER,
            self::TYPE_INVALID_CONN_INSTANCE,
            self::TYPE_INVALID_CONN_ID_CONF,
            self::TYPE_INVALID_POLICY,
            self::TYPE_INVALID_CONF,
            self::TYPE_INVALID_PATH,
            self::TYPE_INVALID_PROVISION,
            self::TYPE_INVALID_ORG_UNIT,
            self::TYPE_INVALID_REPORT,
            self::TYPE_INVALID_REPORT_EXEC,
            self::TYPE_INVALID_RELATIONSHIP,
            self::TYPE_INVALID_RELATIONSHIP_TYPE,
            self::TYPE_INVALID_ANY_TYPE,
            self::TYPE_INVALID_ANY_OBJECT,
            self::TYPE_INVALID_GROUP,
            self::TYPE_INVALID_SCHEMA_DEFINITION,
            self::TYPE_INVALID_SEARCH_EXPRESSION,
            self::TYPE_INVALID_PAGE_OR_SIZE,
            self::TYPE_INVALID_PROPAGATION_TASK_EXEC_REPORT,
            self::TYPE_INVALID_PLAIN_SCHEMA,
            self::TYPE_INVALID_DER_SCHEMA,
            self::TYPE_INVALID_VIR_SCHEMA,
            self::TYPE_INVALID_MAPPING,
            self::TYPE_INVALID_MEMBERSHIP,
            self::TYPE_INVALID_REALM,
            self::TYPE_INVALID_DYN_REALM,
            self::TYPE_INVALID_ROLE,
            self::TYPE_INVALID_USER,
            self::TYPE_INVALID_EXTERNAL_RESOURCE,
            self::TYPE_INVALID_PULL_TASK,
            self::TYPE_INVALID_REQUEST,
            self::TYPE_INVALID_VALUES,
            self::TYPE_NOT_FOUND,
            self::TYPE_REQUIRED_VALUES_MISSING,
            self::TYPE_REST_VALIDATION,
            self::TYPE_GROUP_OWNERSHIP,
            self::TYPE_IN_USE,
            self::TYPE_SCHEDULING,
            self::TYPE_DELEGATED_ADMINISTRATION,
            self::TYPE_RECONCILIATION,
            self::TYPE_UNKNOWN,
            self::TYPE_WORKFLOW,
        ];
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['elements'] = isset($data['elements']) ? $data['elements'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets elements
     *
     * @return string[]|null
     */
    public function getElements()
    {
        return $this->container['elements'];
    }

    /**
     * Sets elements
     *
     * @param string[]|null $elements elements
     *
     * @return $this
     */
    public function setElements($elements)
    {
        $this->container['elements'] = $elements;

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


