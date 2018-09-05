# SyncopePhpClient\SchemasApi

All URIs are relative to *http://syncope-vm.apache.org:9080/syncope/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSchema**](SchemasApi.md#createSchema) | **POST** /schemas/{type} | Creates a new schema.
[**deleteSchema**](SchemasApi.md#deleteSchema) | **DELETE** /schemas/{type}/{key} | Deletes the schema matching the given type and key.
[**readSchema**](SchemasApi.md#readSchema) | **GET** /schemas/{type}/{key} | Returns schema matching the given type and key.
[**searchSchema**](SchemasApi.md#searchSchema) | **GET** /schemas/{type} | Returns a list of schemas matching the given query.
[**updateSchema**](SchemasApi.md#updateSchema) | **PUT** /schemas/{type}/{key} | Updates the schema matching the given type and key.


# **createSchema**
> createSchema($type, $xSyncopeDomain, $schemaTO)

Creates a new schema.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SyncopePhpClient\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | type for schema to be created
$xSyncopeDomain = 'Master'; // string | schema to be created
$schemaTO = new \SyncopePhpClient\Model\SchemaTO(); // \SyncopePhpClient\Model\SchemaTO | 

try {
    $apiInstance->createSchema($type, $xSyncopeDomain, $schemaTO);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->createSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| type for schema to be created |
 **xSyncopeDomain** | **string**| schema to be created | [default to &#39;Master&#39;]
 **schemaTO** | [**\SyncopePhpClient\Model\SchemaTO**](../Model/SchemaTO.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSchema**
> deleteSchema($type, $key, $xSyncopeDomain)

Deletes the schema matching the given type and key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SyncopePhpClient\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | type for schema to be deleted
$key = 'key_example'; // string | name of schema to be deleted
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->deleteSchema($type, $key, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->deleteSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| type for schema to be deleted |
 **key** | **string**| name of schema to be deleted |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readSchema**
> readSchema($type, $key, $xSyncopeDomain)

Returns schema matching the given type and key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SyncopePhpClient\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | actual SchemaTO
$key = 'key_example'; // string | type for schemas to be read
$xSyncopeDomain = 'Master'; // string | name of schema to be read

try {
    $apiInstance->readSchema($type, $key, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->readSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| actual SchemaTO |
 **key** | **string**| type for schemas to be read |
 **xSyncopeDomain** | **string**| name of schema to be read | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchSchema**
> searchSchema($type, $xSyncopeDomain, $anyTypeClass, $keyword)

Returns a list of schemas matching the given query.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SyncopePhpClient\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | actual SchemaTO
$xSyncopeDomain = 'Master'; // string | 
$anyTypeClass = array('anyTypeClass_example'); // string[] | query conditions
$keyword = 'keyword_example'; // string | 

try {
    $apiInstance->searchSchema($type, $xSyncopeDomain, $anyTypeClass, $keyword);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->searchSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| actual SchemaTO |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **anyTypeClass** | [**string[]**](../Model/string.md)| query conditions | [optional]
 **keyword** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSchema**
> updateSchema($key, $type, $xSyncopeDomain, $schemaTO)

Updates the schema matching the given type and key.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure HTTP basic authorization: Bearer
$config = SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new SyncopePhpClient\Api\SchemasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | Schema's key
$type = 'type_example'; // string | updated schema to be stored
$xSyncopeDomain = 'Master'; // string | type for schema to be deleted
$schemaTO = new \SyncopePhpClient\Model\SchemaTO(); // \SyncopePhpClient\Model\SchemaTO | 

try {
    $apiInstance->updateSchema($key, $type, $xSyncopeDomain, $schemaTO);
} catch (Exception $e) {
    echo 'Exception when calling SchemasApi->updateSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Schema&#39;s key |
 **type** | **string**| updated schema to be stored |
 **xSyncopeDomain** | **string**| type for schema to be deleted | [default to &#39;Master&#39;]
 **schemaTO** | [**\SyncopePhpClient\Model\SchemaTO**](../Model/SchemaTO.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

