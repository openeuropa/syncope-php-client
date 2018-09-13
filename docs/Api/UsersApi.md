# OpenEuropa\SyncopePhpClient\UsersApi

All URIs are relative to *http://syncope-vm.apache.org:9080/syncope/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**associateUser**](UsersApi.md#associateUser) | **POST** /users/{key}/associate/{action} | Executes resource-related operations on given entity.
[**createUser**](UsersApi.md#createUser) | **POST** /users | Creates a new user.
[**deassociateUser**](UsersApi.md#deassociateUser) | **POST** /users/{key}/deassociate/{action} | Executes resource-related operations on given entity.
[**deleteUser**](UsersApi.md#deleteUser) | **DELETE** /users/{key} | Deletes any object matching provided key.
[**deleteUserAttribute**](UsersApi.md#deleteUserAttribute) | **DELETE** /users/{key}/{schemaType}/{schema} | Deletes the attribute, owned by the given any object, for the given schema type and schema.
[**readUser**](UsersApi.md#readUser) | **GET** /users/{key} | Reads the any object matching the provided key.
[**readUserAttribute**](UsersApi.md#readUserAttribute) | **GET** /users/{key}/{schemaType}/{schema} | Reads the attribute, owned by the given any object, for the given schema type and schema.   Note that for the UserService, GroupService and AnyObjectService subclasses, if the key parameter  looks like a UUID then it is interpreted as as key, otherwise as a (user)name.
[**readUserAttributes**](UsersApi.md#readUserAttributes) | **GET** /users/{key}/{schemaType} | Reads the list of attributes owned by the given any object for the given schema type.   Note that for the UserService, GroupService and AnyObjectService subclasses, if the key parameter  looks like a UUID then it is interpreted as as key, otherwise as a (user)name.
[**searchUser**](UsersApi.md#searchUser) | **GET** /users | Returns a paged list of any objects matching the given query.
[**statusUpdate**](UsersApi.md#statusUpdate) | **POST** /users/{key}/status | Performs a status update on given user.
[**updateUser**](UsersApi.md#updateUser) | **PUT** /users/{key} | Updates user matching the provided key.
[**updateUserAttribute**](UsersApi.md#updateUserAttribute) | **PUT** /users/{key}/{schemaType}/{schema} | Adds or replaces the attribute, owned by the given any object, for the given schema type and schema.
[**updateUser_0**](UsersApi.md#updateUser_0) | **PATCH** /users/{key} | Updates user matching the provided key.


# **associateUser**
> associateUser($key, $action, $xSyncopeDomain, $associationPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\UsersApi(
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
    $apiInstance->associateUser($key, $action, $xSyncopeDomain, $associationPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->associateUser: ', $e->getMessage(), PHP_EOL;
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

# **createUser**
> \OpenEuropa\SyncopePhpClient\Model\ProvisioningResult createUser($xSyncopeDomain, $userTO, $prefer, $xSyncopeNullPriorityAsync, $storePassword)

Creates a new user.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 
$userTO = new \OpenEuropa\SyncopePhpClient\Model\UserTO(); // \OpenEuropa\SyncopePhpClient\Model\UserTO | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set
$storePassword = true; // bool | 

try {
    $result = $apiInstance->createUser($xSyncopeDomain, $userTO, $prefer, $xSyncopeNullPriorityAsync, $storePassword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **userTO** | [**\OpenEuropa\SyncopePhpClient\Model\UserTO**](../Model/UserTO.md)|  |
 **prefer** | **string**| Allows client to specify a preference for the result to be returned from the server | [optional] [default to &#39;return-content&#39;]
 **xSyncopeNullPriorityAsync** | **bool**| If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set | [optional] [default to false]
 **storePassword** | **bool**|  | [optional] [default to true]

### Return type

[**\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult**](../Model/ProvisioningResult.md)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deassociateUser**
> deassociateUser($key, $action, $xSyncopeDomain, $deassociationPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\UsersApi(
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
    $apiInstance->deassociateUser($key, $action, $xSyncopeDomain, $deassociationPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deassociateUser: ', $e->getMessage(), PHP_EOL;
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

# **deleteUser**
> \OpenEuropa\SyncopePhpClient\Model\ProvisioningResult deleteUser($key, $xSyncopeDomain, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\UsersApi(
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
    $result = $apiInstance->deleteUser($key, $xSyncopeDomain, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUser: ', $e->getMessage(), PHP_EOL;
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

# **deleteUserAttribute**
> deleteUserAttribute($key, $schemaType, $schema, $xSyncopeDomain)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\UsersApi(
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
    $apiInstance->deleteUserAttribute($key, $schemaType, $schema, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUserAttribute: ', $e->getMessage(), PHP_EOL;
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

# **readUser**
> \OpenEuropa\SyncopePhpClient\Model\UserTO readUser($key, $xSyncopeDomain)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | if value looks like a UUID then it is interpreted as key, otherwise as a (user)name
$xSyncopeDomain = 'Master'; // string | 

try {
    $result = $apiInstance->readUser($key, $xSyncopeDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->readUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| if value looks like a UUID then it is interpreted as key, otherwise as a (user)name |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

[**\OpenEuropa\SyncopePhpClient\Model\UserTO**](../Model/UserTO.md)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readUserAttribute**
> readUserAttribute($key, $schemaType, $schema, $xSyncopeDomain)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\UsersApi(
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
    $apiInstance->readUserAttribute($key, $schemaType, $schema, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->readUserAttribute: ', $e->getMessage(), PHP_EOL;
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

# **readUserAttributes**
> readUserAttributes($key, $schemaType, $xSyncopeDomain)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | any object key or name
$schemaType = 'schemaType_example'; // string | schema type
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->readUserAttributes($key, $schemaType, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->readUserAttributes: ', $e->getMessage(), PHP_EOL;
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

# **searchUser**
> searchUser($xSyncopeDomain, $page, $size, $orderby, $realm, $details, $fiql)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\UsersApi(
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
    $apiInstance->searchUser($xSyncopeDomain, $page, $size, $orderby, $realm, $details, $fiql);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->searchUser: ', $e->getMessage(), PHP_EOL;
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

# **statusUpdate**
> \OpenEuropa\SyncopePhpClient\Model\ProvisioningResult statusUpdate($key, $xSyncopeDomain, $statusPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

Performs a status update on given user.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | User's key
$xSyncopeDomain = 'Master'; // string | 
$statusPatch = new \OpenEuropa\SyncopePhpClient\Model\StatusPatch(); // \OpenEuropa\SyncopePhpClient\Model\StatusPatch | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$ifMatch = 'ifMatch_example'; // string | When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed.
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $result = $apiInstance->statusUpdate($key, $xSyncopeDomain, $statusPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->statusUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| User&#39;s key |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **statusPatch** | [**\OpenEuropa\SyncopePhpClient\Model\StatusPatch**](../Model/StatusPatch.md)|  |
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

# **updateUser**
> \OpenEuropa\SyncopePhpClient\Model\ProvisioningResult updateUser($key, $xSyncopeDomain, $userTO, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

Updates user matching the provided key.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | User's key
$xSyncopeDomain = 'Master'; // string | 
$userTO = new \OpenEuropa\SyncopePhpClient\Model\UserTO(); // \OpenEuropa\SyncopePhpClient\Model\UserTO | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$ifMatch = 'ifMatch_example'; // string | When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed.
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $result = $apiInstance->updateUser($key, $xSyncopeDomain, $userTO, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| User&#39;s key |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **userTO** | [**\OpenEuropa\SyncopePhpClient\Model\UserTO**](../Model/UserTO.md)|  |
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

# **updateUserAttribute**
> updateUserAttribute($schema, $key, $schemaType, $xSyncopeDomain, $attrTO)

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\UsersApi(
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
    $apiInstance->updateUserAttribute($schema, $key, $schemaType, $xSyncopeDomain, $attrTO);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUserAttribute: ', $e->getMessage(), PHP_EOL;
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

# **updateUser_0**
> \OpenEuropa\SyncopePhpClient\Model\ProvisioningResult updateUser_0($key, $xSyncopeDomain, $userPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

Updates user matching the provided key.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | User's key
$xSyncopeDomain = 'Master'; // string | 
$userPatch = new \OpenEuropa\SyncopePhpClient\Model\UserPatch(); // \OpenEuropa\SyncopePhpClient\Model\UserPatch | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$ifMatch = 'ifMatch_example'; // string | When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed.
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $result = $apiInstance->updateUser_0($key, $xSyncopeDomain, $userPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUser_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| User&#39;s key |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **userPatch** | [**\OpenEuropa\SyncopePhpClient\Model\UserPatch**](../Model/UserPatch.md)|  |
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

