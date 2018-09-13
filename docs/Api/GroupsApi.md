# OpenEuropa\SyncopePhpClient\GroupsApi

All URIs are relative to *http://syncope-vm.apache.org:9080/syncope/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**associateGroup**](GroupsApi.md#associateGroup) | **POST** /groups/{key}/associate/{action} | Executes resource-related operations on given entity.
[**createGroup**](GroupsApi.md#createGroup) | **POST** /groups | Creates a new group.
[**deassociateGroup**](GroupsApi.md#deassociateGroup) | **POST** /groups/{key}/deassociate/{action} | Executes resource-related operations on given entity.
[**deleteGroup**](GroupsApi.md#deleteGroup) | **DELETE** /groups/{key} | Deletes any object matching provided key.
[**deleteGroupAttribute**](GroupsApi.md#deleteGroupAttribute) | **DELETE** /groups/{key}/{schemaType}/{schema} | Deletes the attribute, owned by the given any object, for the given schema type and schema.
[**own**](GroupsApi.md#own) | **GET** /groups/own | This method allows a user to read his own groups.
[**provisionMembers**](GroupsApi.md#provisionMembers) | **POST** /groups/{key}/members/{action} | (De)provision all members of the given group from / onto all the resources associated to it.
[**readGroup**](GroupsApi.md#readGroup) | **GET** /groups/{key} | Reads the any object matching the provided key.
[**readGroupAttribute**](GroupsApi.md#readGroupAttribute) | **GET** /groups/{key}/{schemaType}/{schema} | Reads the attribute, owned by the given any object, for the given schema type and schema.   Note that for the UserService, GroupService and AnyObjectService subclasses, if the key parameter  looks like a UUID then it is interpreted as as key, otherwise as a (user)name.
[**readGroupAttributeForSchema**](GroupsApi.md#readGroupAttributeForSchema) | **GET** /groups/{key}/{schemaType} | Reads the list of attributes owned by the given any object for the given schema type.   Note that for the UserService, GroupService and AnyObjectService subclasses, if the key parameter  looks like a UUID then it is interpreted as as key, otherwise as a (user)name.
[**searchGroup**](GroupsApi.md#searchGroup) | **GET** /groups | Returns a paged list of any objects matching the given query.
[**updateGroup**](GroupsApi.md#updateGroup) | **PUT** /groups/{key} | Updates group matching the provided key.
[**updateGroupAttribute**](GroupsApi.md#updateGroupAttribute) | **PUT** /groups/{key}/{schemaType}/{schema} | Adds or replaces the attribute, owned by the given any object, for the given schema type and schema.
[**updateGroup_0**](GroupsApi.md#updateGroup_0) | **PATCH** /groups/{key} | Updates group matching the provided key.


# **associateGroup**
> associateGroup($key, $action, $xSyncopeDomain, $associationPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

Executes resource-related operations on given entity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | Entity's key
$action = 'action_example'; // string | Association action
$xSyncopeDomain = 'Master'; // string | 
$associationPatch = new \OpenEuropa\SyncopePhpClient\Model\AssociationPatch(); // \OpenEuropa\SyncopePhpClient\Model\AssociationPatch | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$ifMatch = 'ifMatch_example'; // string | When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed.
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $apiInstance->associateGroup($key, $action, $xSyncopeDomain, $associationPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->associateGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Entity&#39;s key |
 **action** | **string**| Association action |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **associationPatch** | [**\OpenEuropa\SyncopePhpClient\Model\AssociationPatch**](../Model/AssociationPatch.md)|  |
 **prefer** | **string**| Allows client to specify a preference for the result to be returned from the server | [optional] [default to &#39;return-content&#39;]
 **ifMatch** | **string**| When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. | [optional]
 **xSyncopeNullPriorityAsync** | **bool**| If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: multipart/mixed

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGroup**
> \OpenEuropa\SyncopePhpClient\Model\ProvisioningResult createGroup($xSyncopeDomain, $groupTO, $prefer, $xSyncopeNullPriorityAsync)

Creates a new group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 
$groupTO = new \OpenEuropa\SyncopePhpClient\Model\GroupTO(); // \OpenEuropa\SyncopePhpClient\Model\GroupTO | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $result = $apiInstance->createGroup($xSyncopeDomain, $groupTO, $prefer, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **groupTO** | [**\OpenEuropa\SyncopePhpClient\Model\GroupTO**](../Model/GroupTO.md)|  |
 **prefer** | **string**| Allows client to specify a preference for the result to be returned from the server | [optional] [default to &#39;return-content&#39;]
 **xSyncopeNullPriorityAsync** | **bool**| If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set | [optional] [default to false]

### Return type

[**\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult**](../Model/ProvisioningResult.md)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deassociateGroup**
> deassociateGroup($key, $action, $xSyncopeDomain, $deassociationPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

Executes resource-related operations on given entity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | Entity's key
$action = 'action_example'; // string | Deassociation action
$xSyncopeDomain = 'Master'; // string | 
$deassociationPatch = new \OpenEuropa\SyncopePhpClient\Model\DeassociationPatch(); // \OpenEuropa\SyncopePhpClient\Model\DeassociationPatch | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$ifMatch = 'ifMatch_example'; // string | When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed.
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $apiInstance->deassociateGroup($key, $action, $xSyncopeDomain, $deassociationPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deassociateGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Entity&#39;s key |
 **action** | **string**| Deassociation action |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **deassociationPatch** | [**\OpenEuropa\SyncopePhpClient\Model\DeassociationPatch**](../Model/DeassociationPatch.md)|  |
 **prefer** | **string**| Allows client to specify a preference for the result to be returned from the server | [optional] [default to &#39;return-content&#39;]
 **ifMatch** | **string**| When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. | [optional]
 **xSyncopeNullPriorityAsync** | **bool**| If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: multipart/mixed

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroup**
> \OpenEuropa\SyncopePhpClient\Model\ProvisioningResult deleteGroup($key, $xSyncopeDomain, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

Deletes any object matching provided key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | 
$xSyncopeDomain = 'Master'; // string | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$ifMatch = 'ifMatch_example'; // string | When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed.
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $result = $apiInstance->deleteGroup($key, $xSyncopeDomain, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**|  |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **prefer** | **string**| Allows client to specify a preference for the result to be returned from the server | [optional] [default to &#39;return-content&#39;]
 **ifMatch** | **string**| When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. | [optional]
 **xSyncopeNullPriorityAsync** | **bool**| If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set | [optional] [default to false]

### Return type

[**\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult**](../Model/ProvisioningResult.md)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroupAttribute**
> deleteGroupAttribute($key, $schemaType, $schema, $xSyncopeDomain)

Deletes the attribute, owned by the given any object, for the given schema type and schema.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | any object key or name
$schemaType = 'schemaType_example'; // string | schema type
$schema = 'schema_example'; // string | schema
$xSyncopeDomain = 'Master'; // string | any object key or name

try {
    $apiInstance->deleteGroupAttribute($key, $schemaType, $schema, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteGroupAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| any object key or name |
 **schemaType** | **string**| schema type |
 **schema** | **string**| schema |
 **xSyncopeDomain** | **string**| any object key or name | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **own**
> own($xSyncopeDomain)

This method allows a user to read his own groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->own($xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->own: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **provisionMembers**
> provisionMembers($key, $action, $xSyncopeDomain)

(De)provision all members of the given group from / onto all the resources associated to it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | group key
$action = 'action_example'; // string | action type to perform on all group members
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->provisionMembers($key, $action, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->provisionMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| group key |
 **action** | **string**| action type to perform on all group members |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readGroup**
> \OpenEuropa\SyncopePhpClient\Model\GroupTO readGroup($key, $xSyncopeDomain)

Reads the any object matching the provided key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | if value looks like a UUID then it is interpreted as key, otherwise as a (user)name
$xSyncopeDomain = 'Master'; // string | 

try {
    $result = $apiInstance->readGroup($key, $xSyncopeDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->readGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| if value looks like a UUID then it is interpreted as key, otherwise as a (user)name |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

[**\OpenEuropa\SyncopePhpClient\Model\GroupTO**](../Model/GroupTO.md)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readGroupAttribute**
> readGroupAttribute($key, $schemaType, $schema, $xSyncopeDomain)

Reads the attribute, owned by the given any object, for the given schema type and schema.   Note that for the UserService, GroupService and AnyObjectService subclasses, if the key parameter  looks like a UUID then it is interpreted as as key, otherwise as a (user)name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | any object key or name
$schemaType = 'schemaType_example'; // string | schema type
$schema = 'schema_example'; // string | schema
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->readGroupAttribute($key, $schemaType, $schema, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->readGroupAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| any object key or name |
 **schemaType** | **string**| schema type |
 **schema** | **string**| schema |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readGroupAttributeForSchema**
> readGroupAttributeForSchema($key, $schemaType, $xSyncopeDomain)

Reads the list of attributes owned by the given any object for the given schema type.   Note that for the UserService, GroupService and AnyObjectService subclasses, if the key parameter  looks like a UUID then it is interpreted as as key, otherwise as a (user)name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | any object key or name
$schemaType = 'schemaType_example'; // string | schema type
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->readGroupAttributeForSchema($key, $schemaType, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->readGroupAttributeForSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| any object key or name |
 **schemaType** | **string**| schema type |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchGroup**
> searchGroup($xSyncopeDomain, $page, $size, $orderby, $realm, $details, $fiql)

Returns a paged list of any objects matching the given query.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 
$page = 1; // int | query conditions
$size = 25; // int | 
$orderby = 'orderby_example'; // string | 
$realm = '/'; // string | 
$details = true; // bool | 
$fiql = 'fiql_example'; // string | 

try {
    $apiInstance->searchGroup($xSyncopeDomain, $page, $size, $orderby, $realm, $details, $fiql);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->searchGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **page** | **int**| query conditions | [optional] [default to 1]
 **size** | **int**|  | [optional] [default to 25]
 **orderby** | **string**|  | [optional]
 **realm** | **string**|  | [optional] [default to &#39;/&#39;]
 **details** | **bool**|  | [optional] [default to true]
 **fiql** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroup**
> \OpenEuropa\SyncopePhpClient\Model\ProvisioningResult updateGroup($key, $xSyncopeDomain, $groupTO, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

Updates group matching the provided key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | Group's key
$xSyncopeDomain = 'Master'; // string | 
$groupTO = new \OpenEuropa\SyncopePhpClient\Model\GroupTO(); // \OpenEuropa\SyncopePhpClient\Model\GroupTO | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$ifMatch = 'ifMatch_example'; // string | When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed.
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $result = $apiInstance->updateGroup($key, $xSyncopeDomain, $groupTO, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->updateGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Group&#39;s key |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **groupTO** | [**\OpenEuropa\SyncopePhpClient\Model\GroupTO**](../Model/GroupTO.md)|  |
 **prefer** | **string**| Allows client to specify a preference for the result to be returned from the server | [optional] [default to &#39;return-content&#39;]
 **ifMatch** | **string**| When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. | [optional]
 **xSyncopeNullPriorityAsync** | **bool**| If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set | [optional] [default to false]

### Return type

[**\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult**](../Model/ProvisioningResult.md)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroupAttribute**
> updateGroupAttribute($schema, $key, $schemaType, $xSyncopeDomain, $attrTO)

Adds or replaces the attribute, owned by the given any object, for the given schema type and schema.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schema = 'schema_example'; // string | Attribute schema's key
$key = 'key_example'; // string | schema type
$schemaType = 'schemaType_example'; // string | attribute
$xSyncopeDomain = 'Master'; // string | 
$attrTO = new \OpenEuropa\SyncopePhpClient\Model\AttrTO(); // \OpenEuropa\SyncopePhpClient\Model\AttrTO | 

try {
    $apiInstance->updateGroupAttribute($schema, $key, $schemaType, $xSyncopeDomain, $attrTO);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->updateGroupAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **schema** | **string**| Attribute schema&#39;s key |
 **key** | **string**| schema type |
 **schemaType** | **string**| attribute |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **attrTO** | [**\OpenEuropa\SyncopePhpClient\Model\AttrTO**](../Model/AttrTO.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroup_0**
> \OpenEuropa\SyncopePhpClient\Model\ProvisioningResult updateGroup_0($key, $xSyncopeDomain, $groupPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

Updates group matching the provided key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | Group's key
$xSyncopeDomain = 'Master'; // string | 
$groupPatch = new \OpenEuropa\SyncopePhpClient\Model\GroupPatch(); // \OpenEuropa\SyncopePhpClient\Model\GroupPatch | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$ifMatch = 'ifMatch_example'; // string | When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed.
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $result = $apiInstance->updateGroup_0($key, $xSyncopeDomain, $groupPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->updateGroup_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Group&#39;s key |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **groupPatch** | [**\OpenEuropa\SyncopePhpClient\Model\GroupPatch**](../Model/GroupPatch.md)|  |
 **prefer** | **string**| Allows client to specify a preference for the result to be returned from the server | [optional] [default to &#39;return-content&#39;]
 **ifMatch** | **string**| When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. | [optional]
 **xSyncopeNullPriorityAsync** | **bool**| If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set | [optional] [default to false]

### Return type

[**\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult**](../Model/ProvisioningResult.md)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

