<?php
/**
 * PlatformInfo
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
 * PlatformInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenEuropa\SyncopePhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PlatformInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PlatformInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'version' => 'string',
        'buildNumber' => 'string',
        'selfRegAllowed' => 'bool',
        'pwdResetAllowed' => 'bool',
        'pwdResetRequiringSecurityQuestions' => 'bool',
        'propagationTaskExecutor' => 'string',
        'anyObjectWorkflowAdapter' => 'string',
        'userWorkflowAdapter' => 'string',
        'groupWorkflowAdapter' => 'string',
        'anyObjectProvisioningManager' => 'string',
        'userProvisioningManager' => 'string',
        'groupProvisioningManager' => 'string',
        'virAttrCache' => 'string',
        'passwordGenerator' => 'string',
        'anySearchDAO' => 'string',
        'connIdLocations' => 'string[]',
        'anyTypes' => 'string[]',
        'userClasses' => 'string[]',
        'anyTypeClasses' => 'string[]',
        'resources' => 'string[]',
        'entitlements' => 'string[]',
        'javaImplInfos' => '\OpenEuropa\SyncopePhpClient\Model\JavaImplInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'version' => null,
        'buildNumber' => null,
        'selfRegAllowed' => null,
        'pwdResetAllowed' => null,
        'pwdResetRequiringSecurityQuestions' => null,
        'propagationTaskExecutor' => null,
        'anyObjectWorkflowAdapter' => null,
        'userWorkflowAdapter' => null,
        'groupWorkflowAdapter' => null,
        'anyObjectProvisioningManager' => null,
        'userProvisioningManager' => null,
        'groupProvisioningManager' => null,
        'virAttrCache' => null,
        'passwordGenerator' => null,
        'anySearchDAO' => null,
        'connIdLocations' => null,
        'anyTypes' => null,
        'userClasses' => null,
        'anyTypeClasses' => null,
        'resources' => null,
        'entitlements' => null,
        'javaImplInfos' => null
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
        'version' => 'version',
        'buildNumber' => 'buildNumber',
        'selfRegAllowed' => 'selfRegAllowed',
        'pwdResetAllowed' => 'pwdResetAllowed',
        'pwdResetRequiringSecurityQuestions' => 'pwdResetRequiringSecurityQuestions',
        'propagationTaskExecutor' => 'propagationTaskExecutor',
        'anyObjectWorkflowAdapter' => 'anyObjectWorkflowAdapter',
        'userWorkflowAdapter' => 'userWorkflowAdapter',
        'groupWorkflowAdapter' => 'groupWorkflowAdapter',
        'anyObjectProvisioningManager' => 'anyObjectProvisioningManager',
        'userProvisioningManager' => 'userProvisioningManager',
        'groupProvisioningManager' => 'groupProvisioningManager',
        'virAttrCache' => 'virAttrCache',
        'passwordGenerator' => 'passwordGenerator',
        'anySearchDAO' => 'anySearchDAO',
        'connIdLocations' => 'connIdLocations',
        'anyTypes' => 'anyTypes',
        'userClasses' => 'userClasses',
        'anyTypeClasses' => 'anyTypeClasses',
        'resources' => 'resources',
        'entitlements' => 'entitlements',
        'javaImplInfos' => 'javaImplInfos'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version' => 'setVersion',
        'buildNumber' => 'setBuildNumber',
        'selfRegAllowed' => 'setSelfRegAllowed',
        'pwdResetAllowed' => 'setPwdResetAllowed',
        'pwdResetRequiringSecurityQuestions' => 'setPwdResetRequiringSecurityQuestions',
        'propagationTaskExecutor' => 'setPropagationTaskExecutor',
        'anyObjectWorkflowAdapter' => 'setAnyObjectWorkflowAdapter',
        'userWorkflowAdapter' => 'setUserWorkflowAdapter',
        'groupWorkflowAdapter' => 'setGroupWorkflowAdapter',
        'anyObjectProvisioningManager' => 'setAnyObjectProvisioningManager',
        'userProvisioningManager' => 'setUserProvisioningManager',
        'groupProvisioningManager' => 'setGroupProvisioningManager',
        'virAttrCache' => 'setVirAttrCache',
        'passwordGenerator' => 'setPasswordGenerator',
        'anySearchDAO' => 'setAnySearchDAO',
        'connIdLocations' => 'setConnIdLocations',
        'anyTypes' => 'setAnyTypes',
        'userClasses' => 'setUserClasses',
        'anyTypeClasses' => 'setAnyTypeClasses',
        'resources' => 'setResources',
        'entitlements' => 'setEntitlements',
        'javaImplInfos' => 'setJavaImplInfos'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version' => 'getVersion',
        'buildNumber' => 'getBuildNumber',
        'selfRegAllowed' => 'getSelfRegAllowed',
        'pwdResetAllowed' => 'getPwdResetAllowed',
        'pwdResetRequiringSecurityQuestions' => 'getPwdResetRequiringSecurityQuestions',
        'propagationTaskExecutor' => 'getPropagationTaskExecutor',
        'anyObjectWorkflowAdapter' => 'getAnyObjectWorkflowAdapter',
        'userWorkflowAdapter' => 'getUserWorkflowAdapter',
        'groupWorkflowAdapter' => 'getGroupWorkflowAdapter',
        'anyObjectProvisioningManager' => 'getAnyObjectProvisioningManager',
        'userProvisioningManager' => 'getUserProvisioningManager',
        'groupProvisioningManager' => 'getGroupProvisioningManager',
        'virAttrCache' => 'getVirAttrCache',
        'passwordGenerator' => 'getPasswordGenerator',
        'anySearchDAO' => 'getAnySearchDAO',
        'connIdLocations' => 'getConnIdLocations',
        'anyTypes' => 'getAnyTypes',
        'userClasses' => 'getUserClasses',
        'anyTypeClasses' => 'getAnyTypeClasses',
        'resources' => 'getResources',
        'entitlements' => 'getEntitlements',
        'javaImplInfos' => 'getJavaImplInfos'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['buildNumber'] = isset($data['buildNumber']) ? $data['buildNumber'] : null;
        $this->container['selfRegAllowed'] = isset($data['selfRegAllowed']) ? $data['selfRegAllowed'] : null;
        $this->container['pwdResetAllowed'] = isset($data['pwdResetAllowed']) ? $data['pwdResetAllowed'] : null;
        $this->container['pwdResetRequiringSecurityQuestions'] = isset($data['pwdResetRequiringSecurityQuestions']) ? $data['pwdResetRequiringSecurityQuestions'] : null;
        $this->container['propagationTaskExecutor'] = isset($data['propagationTaskExecutor']) ? $data['propagationTaskExecutor'] : null;
        $this->container['anyObjectWorkflowAdapter'] = isset($data['anyObjectWorkflowAdapter']) ? $data['anyObjectWorkflowAdapter'] : null;
        $this->container['userWorkflowAdapter'] = isset($data['userWorkflowAdapter']) ? $data['userWorkflowAdapter'] : null;
        $this->container['groupWorkflowAdapter'] = isset($data['groupWorkflowAdapter']) ? $data['groupWorkflowAdapter'] : null;
        $this->container['anyObjectProvisioningManager'] = isset($data['anyObjectProvisioningManager']) ? $data['anyObjectProvisioningManager'] : null;
        $this->container['userProvisioningManager'] = isset($data['userProvisioningManager']) ? $data['userProvisioningManager'] : null;
        $this->container['groupProvisioningManager'] = isset($data['groupProvisioningManager']) ? $data['groupProvisioningManager'] : null;
        $this->container['virAttrCache'] = isset($data['virAttrCache']) ? $data['virAttrCache'] : null;
        $this->container['passwordGenerator'] = isset($data['passwordGenerator']) ? $data['passwordGenerator'] : null;
        $this->container['anySearchDAO'] = isset($data['anySearchDAO']) ? $data['anySearchDAO'] : null;
        $this->container['connIdLocations'] = isset($data['connIdLocations']) ? $data['connIdLocations'] : null;
        $this->container['anyTypes'] = isset($data['anyTypes']) ? $data['anyTypes'] : null;
        $this->container['userClasses'] = isset($data['userClasses']) ? $data['userClasses'] : null;
        $this->container['anyTypeClasses'] = isset($data['anyTypeClasses']) ? $data['anyTypeClasses'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['entitlements'] = isset($data['entitlements']) ? $data['entitlements'] : null;
        $this->container['javaImplInfos'] = isset($data['javaImplInfos']) ? $data['javaImplInfos'] : null;
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
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets buildNumber
     *
     * @return string|null
     */
    public function getBuildNumber()
    {
        return $this->container['buildNumber'];
    }

    /**
     * Sets buildNumber
     *
     * @param string|null $buildNumber buildNumber
     *
     * @return $this
     */
    public function setBuildNumber($buildNumber)
    {
        $this->container['buildNumber'] = $buildNumber;

        return $this;
    }

    /**
     * Gets selfRegAllowed
     *
     * @return bool|null
     */
    public function getSelfRegAllowed()
    {
        return $this->container['selfRegAllowed'];
    }

    /**
     * Sets selfRegAllowed
     *
     * @param bool|null $selfRegAllowed selfRegAllowed
     *
     * @return $this
     */
    public function setSelfRegAllowed($selfRegAllowed)
    {
        $this->container['selfRegAllowed'] = $selfRegAllowed;

        return $this;
    }

    /**
     * Gets pwdResetAllowed
     *
     * @return bool|null
     */
    public function getPwdResetAllowed()
    {
        return $this->container['pwdResetAllowed'];
    }

    /**
     * Sets pwdResetAllowed
     *
     * @param bool|null $pwdResetAllowed pwdResetAllowed
     *
     * @return $this
     */
    public function setPwdResetAllowed($pwdResetAllowed)
    {
        $this->container['pwdResetAllowed'] = $pwdResetAllowed;

        return $this;
    }

    /**
     * Gets pwdResetRequiringSecurityQuestions
     *
     * @return bool|null
     */
    public function getPwdResetRequiringSecurityQuestions()
    {
        return $this->container['pwdResetRequiringSecurityQuestions'];
    }

    /**
     * Sets pwdResetRequiringSecurityQuestions
     *
     * @param bool|null $pwdResetRequiringSecurityQuestions pwdResetRequiringSecurityQuestions
     *
     * @return $this
     */
    public function setPwdResetRequiringSecurityQuestions($pwdResetRequiringSecurityQuestions)
    {
        $this->container['pwdResetRequiringSecurityQuestions'] = $pwdResetRequiringSecurityQuestions;

        return $this;
    }

    /**
     * Gets propagationTaskExecutor
     *
     * @return string|null
     */
    public function getPropagationTaskExecutor()
    {
        return $this->container['propagationTaskExecutor'];
    }

    /**
     * Sets propagationTaskExecutor
     *
     * @param string|null $propagationTaskExecutor propagationTaskExecutor
     *
     * @return $this
     */
    public function setPropagationTaskExecutor($propagationTaskExecutor)
    {
        $this->container['propagationTaskExecutor'] = $propagationTaskExecutor;

        return $this;
    }

    /**
     * Gets anyObjectWorkflowAdapter
     *
     * @return string|null
     */
    public function getAnyObjectWorkflowAdapter()
    {
        return $this->container['anyObjectWorkflowAdapter'];
    }

    /**
     * Sets anyObjectWorkflowAdapter
     *
     * @param string|null $anyObjectWorkflowAdapter anyObjectWorkflowAdapter
     *
     * @return $this
     */
    public function setAnyObjectWorkflowAdapter($anyObjectWorkflowAdapter)
    {
        $this->container['anyObjectWorkflowAdapter'] = $anyObjectWorkflowAdapter;

        return $this;
    }

    /**
     * Gets userWorkflowAdapter
     *
     * @return string|null
     */
    public function getUserWorkflowAdapter()
    {
        return $this->container['userWorkflowAdapter'];
    }

    /**
     * Sets userWorkflowAdapter
     *
     * @param string|null $userWorkflowAdapter userWorkflowAdapter
     *
     * @return $this
     */
    public function setUserWorkflowAdapter($userWorkflowAdapter)
    {
        $this->container['userWorkflowAdapter'] = $userWorkflowAdapter;

        return $this;
    }

    /**
     * Gets groupWorkflowAdapter
     *
     * @return string|null
     */
    public function getGroupWorkflowAdapter()
    {
        return $this->container['groupWorkflowAdapter'];
    }

    /**
     * Sets groupWorkflowAdapter
     *
     * @param string|null $groupWorkflowAdapter groupWorkflowAdapter
     *
     * @return $this
     */
    public function setGroupWorkflowAdapter($groupWorkflowAdapter)
    {
        $this->container['groupWorkflowAdapter'] = $groupWorkflowAdapter;

        return $this;
    }

    /**
     * Gets anyObjectProvisioningManager
     *
     * @return string|null
     */
    public function getAnyObjectProvisioningManager()
    {
        return $this->container['anyObjectProvisioningManager'];
    }

    /**
     * Sets anyObjectProvisioningManager
     *
     * @param string|null $anyObjectProvisioningManager anyObjectProvisioningManager
     *
     * @return $this
     */
    public function setAnyObjectProvisioningManager($anyObjectProvisioningManager)
    {
        $this->container['anyObjectProvisioningManager'] = $anyObjectProvisioningManager;

        return $this;
    }

    /**
     * Gets userProvisioningManager
     *
     * @return string|null
     */
    public function getUserProvisioningManager()
    {
        return $this->container['userProvisioningManager'];
    }

    /**
     * Sets userProvisioningManager
     *
     * @param string|null $userProvisioningManager userProvisioningManager
     *
     * @return $this
     */
    public function setUserProvisioningManager($userProvisioningManager)
    {
        $this->container['userProvisioningManager'] = $userProvisioningManager;

        return $this;
    }

    /**
     * Gets groupProvisioningManager
     *
     * @return string|null
     */
    public function getGroupProvisioningManager()
    {
        return $this->container['groupProvisioningManager'];
    }

    /**
     * Sets groupProvisioningManager
     *
     * @param string|null $groupProvisioningManager groupProvisioningManager
     *
     * @return $this
     */
    public function setGroupProvisioningManager($groupProvisioningManager)
    {
        $this->container['groupProvisioningManager'] = $groupProvisioningManager;

        return $this;
    }

    /**
     * Gets virAttrCache
     *
     * @return string|null
     */
    public function getVirAttrCache()
    {
        return $this->container['virAttrCache'];
    }

    /**
     * Sets virAttrCache
     *
     * @param string|null $virAttrCache virAttrCache
     *
     * @return $this
     */
    public function setVirAttrCache($virAttrCache)
    {
        $this->container['virAttrCache'] = $virAttrCache;

        return $this;
    }

    /**
     * Gets passwordGenerator
     *
     * @return string|null
     */
    public function getPasswordGenerator()
    {
        return $this->container['passwordGenerator'];
    }

    /**
     * Sets passwordGenerator
     *
     * @param string|null $passwordGenerator passwordGenerator
     *
     * @return $this
     */
    public function setPasswordGenerator($passwordGenerator)
    {
        $this->container['passwordGenerator'] = $passwordGenerator;

        return $this;
    }

    /**
     * Gets anySearchDAO
     *
     * @return string|null
     */
    public function getAnySearchDAO()
    {
        return $this->container['anySearchDAO'];
    }

    /**
     * Sets anySearchDAO
     *
     * @param string|null $anySearchDAO anySearchDAO
     *
     * @return $this
     */
    public function setAnySearchDAO($anySearchDAO)
    {
        $this->container['anySearchDAO'] = $anySearchDAO;

        return $this;
    }

    /**
     * Gets connIdLocations
     *
     * @return string[]|null
     */
    public function getConnIdLocations()
    {
        return $this->container['connIdLocations'];
    }

    /**
     * Sets connIdLocations
     *
     * @param string[]|null $connIdLocations connIdLocations
     *
     * @return $this
     */
    public function setConnIdLocations($connIdLocations)
    {
        $this->container['connIdLocations'] = $connIdLocations;

        return $this;
    }

    /**
     * Gets anyTypes
     *
     * @return string[]|null
     */
    public function getAnyTypes()
    {
        return $this->container['anyTypes'];
    }

    /**
     * Sets anyTypes
     *
     * @param string[]|null $anyTypes anyTypes
     *
     * @return $this
     */
    public function setAnyTypes($anyTypes)
    {
        $this->container['anyTypes'] = $anyTypes;

        return $this;
    }

    /**
     * Gets userClasses
     *
     * @return string[]|null
     */
    public function getUserClasses()
    {
        return $this->container['userClasses'];
    }

    /**
     * Sets userClasses
     *
     * @param string[]|null $userClasses userClasses
     *
     * @return $this
     */
    public function setUserClasses($userClasses)
    {
        $this->container['userClasses'] = $userClasses;

        return $this;
    }

    /**
     * Gets anyTypeClasses
     *
     * @return string[]|null
     */
    public function getAnyTypeClasses()
    {
        return $this->container['anyTypeClasses'];
    }

    /**
     * Sets anyTypeClasses
     *
     * @param string[]|null $anyTypeClasses anyTypeClasses
     *
     * @return $this
     */
    public function setAnyTypeClasses($anyTypeClasses)
    {
        $this->container['anyTypeClasses'] = $anyTypeClasses;

        return $this;
    }

    /**
     * Gets resources
     *
     * @return string[]|null
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param string[]|null $resources resources
     *
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

        return $this;
    }

    /**
     * Gets entitlements
     *
     * @return string[]|null
     */
    public function getEntitlements()
    {
        return $this->container['entitlements'];
    }

    /**
     * Sets entitlements
     *
     * @param string[]|null $entitlements entitlements
     *
     * @return $this
     */
    public function setEntitlements($entitlements)
    {
        $this->container['entitlements'] = $entitlements;

        return $this;
    }

    /**
     * Gets javaImplInfos
     *
     * @return \OpenEuropa\SyncopePhpClient\Model\JavaImplInfo[]|null
     */
    public function getJavaImplInfos()
    {
        return $this->container['javaImplInfos'];
    }

    /**
     * Sets javaImplInfos
     *
     * @param \OpenEuropa\SyncopePhpClient\Model\JavaImplInfo[]|null $javaImplInfos javaImplInfos
     *
     * @return $this
     */
    public function setJavaImplInfos($javaImplInfos)
    {
        $this->container['javaImplInfos'] = $javaImplInfos;

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


