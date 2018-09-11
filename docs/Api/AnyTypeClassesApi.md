# OpenEuropa\SyncopePhpClient\AnyTypeClassesApi

All URIs are relative to *http://syncope-vm.apache.org:9080/syncope/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAnyTypeClass**](AnyTypeClassesApi.md#createAnyTypeClass) | **POST** /anyTypeClasses | Creates a new anyTypeClass.
[**deleteAnyTypeClass**](AnyTypeClassesApi.md#deleteAnyTypeClass) | **DELETE** /anyTypeClasses/{key} | Deletes the anyTypeClass matching the provided key.
[**listAnyTypeClass**](AnyTypeClassesApi.md#listAnyTypeClass) | **GET** /anyTypeClasses | Returns a list of all anyTypeClasss.
[**readAnyTypeClass**](AnyTypeClassesApi.md#readAnyTypeClass) | **GET** /anyTypeClasses/{key} | Returns anyTypeClass with matching key.
[**updateAnyTypeClass**](AnyTypeClassesApi.md#updateAnyTypeClass) | **PUT** /anyTypeClasses/{key} | Updates the anyTypeClass matching the provided key.


# **createAnyTypeClass**
> createAnyTypeClass($xSyncopeDomain, $anyTypeClassTO)

Creates a new anyTypeClass.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AnyTypeClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | anyTypeClass to be created
$anyTypeClassTO = new \OpenEuropa\SyncopePhpClient\Model\AnyTypeClassTO(); // \OpenEuropa\SyncopePhpClient\Model\AnyTypeClassTO | 

try {
    $apiInstance->createAnyTypeClass($xSyncopeDomain, $anyTypeClassTO);
} catch (Exception $e) {
    echo 'Exception when calling AnyTypeClassesApi->createAnyTypeClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**| anyTypeClass to be created | [default to &#39;Master&#39;]
 **anyTypeClassTO** | [**\OpenEuropa\SyncopePhpClient\Model\AnyTypeClassTO**](../Model/AnyTypeClassTO.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAnyTypeClass**
> deleteAnyTypeClass($key, $xSyncopeDomain)

Deletes the anyTypeClass matching the provided key.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AnyTypeClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | anyTypeClass key to be deleted
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->deleteAnyTypeClass($key, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling AnyTypeClassesApi->deleteAnyTypeClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| anyTypeClass key to be deleted |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAnyTypeClass**
> listAnyTypeClass($xSyncopeDomain)

Returns a list of all anyTypeClasss.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AnyTypeClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->listAnyTypeClass($xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling AnyTypeClassesApi->listAnyTypeClass: ', $e->getMessage(), PHP_EOL;
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

# **readAnyTypeClass**
> readAnyTypeClass($key, $xSyncopeDomain)

Returns anyTypeClass with matching key.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AnyTypeClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | anyTypeClass key to be read
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->readAnyTypeClass($key, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling AnyTypeClassesApi->readAnyTypeClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| anyTypeClass key to be read |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAnyTypeClass**
> updateAnyTypeClass($key, $xSyncopeDomain, $anyTypeClassTO)

Updates the anyTypeClass matching the provided key.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AnyTypeClassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | AnyTypeClass's key
$xSyncopeDomain = 'Master'; // string | anyTypeClass key to be deleted
$anyTypeClassTO = new \OpenEuropa\SyncopePhpClient\Model\AnyTypeClassTO(); // \OpenEuropa\SyncopePhpClient\Model\AnyTypeClassTO | 

try {
    $apiInstance->updateAnyTypeClass($key, $xSyncopeDomain, $anyTypeClassTO);
} catch (Exception $e) {
    echo 'Exception when calling AnyTypeClassesApi->updateAnyTypeClass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| AnyTypeClass&#39;s key |
 **xSyncopeDomain** | **string**| anyTypeClass key to be deleted | [default to &#39;Master&#39;]
 **anyTypeClassTO** | [**\OpenEuropa\SyncopePhpClient\Model\AnyTypeClassTO**](../Model/AnyTypeClassTO.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

