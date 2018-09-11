# OpenEuropa\SyncopePhpClient\RelationshipTypesApi

All URIs are relative to *http://syncope-vm.apache.org:9080/syncope/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create1**](RelationshipTypesApi.md#create1) | **POST** /relationshipTypes | Creates a new relationshipType.
[**delete1**](RelationshipTypesApi.md#delete1) | **DELETE** /relationshipTypes/{key} | Deletes the relationshipType matching the provided key.
[**list18**](RelationshipTypesApi.md#list18) | **GET** /relationshipTypes | Returns a list of all relationshipTypes.
[**read19**](RelationshipTypesApi.md#read19) | **GET** /relationshipTypes/{key} | Returns relationshipType with matching key.
[**update1**](RelationshipTypesApi.md#update1) | **PUT** /relationshipTypes/{key} | Updates the relationshipType matching the provided key.


# **create1**
> create1($xSyncopeDomain, $relationshipTypeTO)

Creates a new relationshipType.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\RelationshipTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | relationshipType to be created
$relationshipTypeTO = new \OpenEuropa\SyncopePhpClient\Model\RelationshipTypeTO(); // \OpenEuropa\SyncopePhpClient\Model\RelationshipTypeTO | 

try {
    $apiInstance->create1($xSyncopeDomain, $relationshipTypeTO);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipTypesApi->create1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**| relationshipType to be created | [default to &#39;Master&#39;]
 **relationshipTypeTO** | [**\OpenEuropa\SyncopePhpClient\Model\RelationshipTypeTO**](../Model/RelationshipTypeTO.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete1**
> delete1($key, $xSyncopeDomain)

Deletes the relationshipType matching the provided key.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\RelationshipTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | relationshipType key to be deleted
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->delete1($key, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipTypesApi->delete1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| relationshipType key to be deleted |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **list18**
> list18($xSyncopeDomain)

Returns a list of all relationshipTypes.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\RelationshipTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->list18($xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipTypesApi->list18: ', $e->getMessage(), PHP_EOL;
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

# **read19**
> read19($key, $xSyncopeDomain)

Returns relationshipType with matching key.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\RelationshipTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | relationshipType key to be read
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->read19($key, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipTypesApi->read19: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| relationshipType key to be read |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update1**
> update1($key, $xSyncopeDomain, $relationshipTypeTO)

Updates the relationshipType matching the provided key.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\RelationshipTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | RelationshipType's key
$xSyncopeDomain = 'Master'; // string | relationshipType key to be deleted
$relationshipTypeTO = new \OpenEuropa\SyncopePhpClient\Model\RelationshipTypeTO(); // \OpenEuropa\SyncopePhpClient\Model\RelationshipTypeTO | 

try {
    $apiInstance->update1($key, $xSyncopeDomain, $relationshipTypeTO);
} catch (Exception $e) {
    echo 'Exception when calling RelationshipTypesApi->update1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| RelationshipType&#39;s key |
 **xSyncopeDomain** | **string**| relationshipType key to be deleted | [default to &#39;Master&#39;]
 **relationshipTypeTO** | [**\OpenEuropa\SyncopePhpClient\Model\RelationshipTypeTO**](../Model/RelationshipTypeTO.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

