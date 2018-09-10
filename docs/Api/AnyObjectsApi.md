# OpenEuropa\SyncopePhpClient\AnyObjectsApi

All URIs are relative to *http://syncope-vm.apache.org:9080/syncope/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**associateAnyObject**](AnyObjectsApi.md#associateAnyObject) | **POST** /anyObjects/{key}/associate/{action} | Executes resource-related operations on given entity.
[**createAnyObject**](AnyObjectsApi.md#createAnyObject) | **POST** /anyObjects | Creates a new any object.
[**deassociateAnyObject**](AnyObjectsApi.md#deassociateAnyObject) | **POST** /anyObjects/{key}/deassociate/{action} | Executes resource-related operations on given entity.
[**deleteAnyObject**](AnyObjectsApi.md#deleteAnyObject) | **DELETE** /anyObjects/{key} | Deletes any object matching provided key.
[**deleteAnyObjectAttribute**](AnyObjectsApi.md#deleteAnyObjectAttribute) | **DELETE** /anyObjects/{key}/{schemaType}/{schema} | Deletes the attribute, owned by the given any object, for the given schema type and schema.
[**readAnyObject**](AnyObjectsApi.md#readAnyObject) | **GET** /anyObjects/{key} | Reads the any object matching the provided key.
[**readAnyObjectAttribute**](AnyObjectsApi.md#readAnyObjectAttribute) | **GET** /anyObjects/{key}/{schemaType}/{schema} | Reads the attribute, owned by the given any object, for the given schema type and schema.   Note that for the UserService, GroupService and AnyObjectService subclasses, if the key parameter  looks like a UUID then it is interpreted as as key, otherwise as a (user)name.
[**readAnyObjectAttributeForSchema**](AnyObjectsApi.md#readAnyObjectAttributeForSchema) | **GET** /anyObjects/{key}/{schemaType} | Reads the list of attributes owned by the given any object for the given schema type.   Note that for the UserService, GroupService and AnyObjectService subclasses, if the key parameter  looks like a UUID then it is interpreted as as key, otherwise as a (user)name.
[**searchAnyObject**](AnyObjectsApi.md#searchAnyObject) | **GET** /anyObjects | Returns a paged list of any objects matching the given query.
[**updateAnyObject**](AnyObjectsApi.md#updateAnyObject) | **PUT** /anyObjects/{key} | Updates any object matching the provided key.
[**updateAnyObjectAttribute**](AnyObjectsApi.md#updateAnyObjectAttribute) | **PUT** /anyObjects/{key}/{schemaType}/{schema} | Adds or replaces the attribute, owned by the given any object, for the given schema type and schema.
[**updateAnyObjectPartial**](AnyObjectsApi.md#updateAnyObjectPartial) | **PATCH** /anyObjects/{key} | Updates any object matching the provided key.


# **associateAnyObject**
> associateAnyObject($key, $action, $xSyncopeDomain, $associationPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AnyObjectsApi(
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
    $apiInstance->associateAnyObject($key, $action, $xSyncopeDomain, $associationPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
} catch (Exception $e) {
    echo 'Exception when calling AnyObjectsApi->associateAnyObject: ', $e->getMessage(), PHP_EOL;
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

# **createAnyObject**
> \OpenEuropa\SyncopePhpClient\Model\ProvisioningResult createAnyObject($xSyncopeDomain, $anyObjectTO, $prefer, $xSyncopeNullPriorityAsync)

Creates a new any object.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AnyObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 
$anyObjectTO = new \OpenEuropa\SyncopePhpClient\Model\AnyObjectTO(); // \OpenEuropa\SyncopePhpClient\Model\AnyObjectTO | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $result = $apiInstance->createAnyObject($xSyncopeDomain, $anyObjectTO, $prefer, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnyObjectsApi->createAnyObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **anyObjectTO** | [**\OpenEuropa\SyncopePhpClient\Model\AnyObjectTO**](../Model/AnyObjectTO.md)|  |
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

# **deassociateAnyObject**
> deassociateAnyObject($key, $action, $xSyncopeDomain, $deassociationPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AnyObjectsApi(
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
    $apiInstance->deassociateAnyObject($key, $action, $xSyncopeDomain, $deassociationPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
} catch (Exception $e) {
    echo 'Exception when calling AnyObjectsApi->deassociateAnyObject: ', $e->getMessage(), PHP_EOL;
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

# **deleteAnyObject**
> \OpenEuropa\SyncopePhpClient\Model\ProvisioningResult deleteAnyObject($key, $xSyncopeDomain, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AnyObjectsApi(
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
    $result = $apiInstance->deleteAnyObject($key, $xSyncopeDomain, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnyObjectsApi->deleteAnyObject: ', $e->getMessage(), PHP_EOL;
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

# **deleteAnyObjectAttribute**
> deleteAnyObjectAttribute($key, $schemaType, $schema, $xSyncopeDomain)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AnyObjectsApi(
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
    $apiInstance->deleteAnyObjectAttribute($key, $schemaType, $schema, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling AnyObjectsApi->deleteAnyObjectAttribute: ', $e->getMessage(), PHP_EOL;
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

# **readAnyObject**
> readAnyObject($key, $xSyncopeDomain)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AnyObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | if value looks like a UUID then it is interpreted as key, otherwise as a (user)name
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->readAnyObject($key, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling AnyObjectsApi->readAnyObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| if value looks like a UUID then it is interpreted as key, otherwise as a (user)name |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readAnyObjectAttribute**
> readAnyObjectAttribute($key, $schemaType, $schema, $xSyncopeDomain)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AnyObjectsApi(
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
    $apiInstance->readAnyObjectAttribute($key, $schemaType, $schema, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling AnyObjectsApi->readAnyObjectAttribute: ', $e->getMessage(), PHP_EOL;
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

# **readAnyObjectAttributeForSchema**
> readAnyObjectAttributeForSchema($key, $schemaType, $xSyncopeDomain)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AnyObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | any object key or name
$schemaType = 'schemaType_example'; // string | schema type
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->readAnyObjectAttributeForSchema($key, $schemaType, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling AnyObjectsApi->readAnyObjectAttributeForSchema: ', $e->getMessage(), PHP_EOL;
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

# **searchAnyObject**
> searchAnyObject($xSyncopeDomain, $page, $size, $orderby, $realm, $details, $fiql)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AnyObjectsApi(
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
    $apiInstance->searchAnyObject($xSyncopeDomain, $page, $size, $orderby, $realm, $details, $fiql);
} catch (Exception $e) {
    echo 'Exception when calling AnyObjectsApi->searchAnyObject: ', $e->getMessage(), PHP_EOL;
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

# **updateAnyObject**
> \OpenEuropa\SyncopePhpClient\Model\ProvisioningResult updateAnyObject($key, $xSyncopeDomain, $anyObjectTO, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

Updates any object matching the provided key.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AnyObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | Any Object's key
$xSyncopeDomain = 'Master'; // string | 
$anyObjectTO = new \OpenEuropa\SyncopePhpClient\Model\AnyObjectTO(); // \OpenEuropa\SyncopePhpClient\Model\AnyObjectTO | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$ifMatch = 'ifMatch_example'; // string | When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed.
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $result = $apiInstance->updateAnyObject($key, $xSyncopeDomain, $anyObjectTO, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnyObjectsApi->updateAnyObject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Any Object&#39;s key |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **anyObjectTO** | [**\OpenEuropa\SyncopePhpClient\Model\AnyObjectTO**](../Model/AnyObjectTO.md)|  |
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

# **updateAnyObjectAttribute**
> updateAnyObjectAttribute($schema, $key, $schemaType, $xSyncopeDomain, $attrTO)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AnyObjectsApi(
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
    $apiInstance->updateAnyObjectAttribute($schema, $key, $schemaType, $xSyncopeDomain, $attrTO);
} catch (Exception $e) {
    echo 'Exception when calling AnyObjectsApi->updateAnyObjectAttribute: ', $e->getMessage(), PHP_EOL;
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

# **updateAnyObjectPartial**
> \OpenEuropa\SyncopePhpClient\Model\ProvisioningResult updateAnyObjectPartial($key, $xSyncopeDomain, $anyObjectPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

Updates any object matching the provided key.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AnyObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | Any Object's key
$xSyncopeDomain = 'Master'; // string | 
$anyObjectPatch = new \OpenEuropa\SyncopePhpClient\Model\AnyObjectPatch(); // \OpenEuropa\SyncopePhpClient\Model\AnyObjectPatch | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$ifMatch = 'ifMatch_example'; // string | When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed.
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $result = $apiInstance->updateAnyObjectPartial($key, $xSyncopeDomain, $anyObjectPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnyObjectsApi->updateAnyObjectPartial: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Any Object&#39;s key |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **anyObjectPatch** | [**\OpenEuropa\SyncopePhpClient\Model\AnyObjectPatch**](../Model/AnyObjectPatch.md)|  |
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

