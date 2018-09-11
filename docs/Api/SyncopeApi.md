# OpenEuropa\SyncopePhpClient\SyncopeApi

All URIs are relative to *http://syncope-vm.apache.org:9080/syncope/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**batch**](SyncopeApi.md#batch) | **GET** /batch | Gets batch results, in case asynchronous was requested.
[**batch1**](SyncopeApi.md#batch1) | **POST** /batch | Requests for batch execution.
[**numbers**](SyncopeApi.md#numbers) | **GET** /numbers | Provides some numbers about the managed entities (users, groups, any objects...).
[**platform**](SyncopeApi.md#platform) | **GET** /platform | Provides information summary about platform configuration (workflow adapters, provisioning managers, validators,  actions, correlation rules, reportlets, ...).
[**readUserTypeExtension**](SyncopeApi.md#readUserTypeExtension) | **GET** /userTypeExtension/{groupName} | Extracts User type extension information, for the provided group.
[**searchAssignableGroups**](SyncopeApi.md#searchAssignableGroups) | **POST** /assignableGroups/{realm} | Returns the list of Groups, according to provided paging instructions, assignable to Users and Any Objects of  the provided Realm.
[**system**](SyncopeApi.md#system) | **GET** /system | Provides information about the underlying system (Operating System, CPU / memory usage, ...).


# **batch**
> batch($xSyncopeDomain)

Gets batch results, in case asynchronous was requested.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\SyncopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->batch($xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling SyncopeApi->batch: ', $e->getMessage(), PHP_EOL;
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
 - **Accept**: multipart/mixed

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **batch1**
> batch1($xSyncopeDomain, $prefer, $uNKNOWNBASETYPE)

Requests for batch execution.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\SyncopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 
$prefer = 'prefer_example'; // string | Allows client to specify a preference to process the batch request asynchronously
$uNKNOWNBASETYPE = new \OpenEuropa\SyncopePhpClient\Model\UNKNOWN_BASE_TYPE(); // \OpenEuropa\SyncopePhpClient\Model\UNKNOWN_BASE_TYPE | 

try {
    $apiInstance->batch1($xSyncopeDomain, $prefer, $uNKNOWNBASETYPE);
} catch (Exception $e) {
    echo 'Exception when calling SyncopeApi->batch1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **prefer** | **string**| Allows client to specify a preference to process the batch request asynchronously | [optional]
 **uNKNOWNBASETYPE** | [**\OpenEuropa\SyncopePhpClient\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: multipart/mixed
 - **Accept**: multipart/mixed

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **numbers**
> numbers($xSyncopeDomain)

Provides some numbers about the managed entities (users, groups, any objects...).

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\SyncopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->numbers($xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling SyncopeApi->numbers: ', $e->getMessage(), PHP_EOL;
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

# **platform**
> platform($xSyncopeDomain)

Provides information summary about platform configuration (workflow adapters, provisioning managers, validators,  actions, correlation rules, reportlets, ...).

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\SyncopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->platform($xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling SyncopeApi->platform: ', $e->getMessage(), PHP_EOL;
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

# **readUserTypeExtension**
> readUserTypeExtension($groupName, $xSyncopeDomain)

Extracts User type extension information, for the provided group.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\SyncopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupName = 'groupName_example'; // string | group name
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->readUserTypeExtension($groupName, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling SyncopeApi->readUserTypeExtension: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupName** | **string**| group name |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchAssignableGroups**
> searchAssignableGroups($realm, $xSyncopeDomain, $term, $page, $size)

Returns the list of Groups, according to provided paging instructions, assignable to Users and Any Objects of  the provided Realm.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\SyncopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$realm = 'realm_example'; // string | groups search term
$xSyncopeDomain = 'Master'; // string | 
$term = 'term_example'; // string | of the User and Any Objects assignable to the returned Groups
$page = 1; // int | search page
$size = 25; // int | search page size

try {
    $apiInstance->searchAssignableGroups($realm, $xSyncopeDomain, $term, $page, $size);
} catch (Exception $e) {
    echo 'Exception when calling SyncopeApi->searchAssignableGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **realm** | **string**| groups search term |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **term** | **string**| of the User and Any Objects assignable to the returned Groups | [optional]
 **page** | **int**| search page | [optional] [default to 1]
 **size** | **int**| search page size | [optional] [default to 25]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **system**
> system($xSyncopeDomain)

Provides information about the underlying system (Operating System, CPU / memory usage, ...).

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\SyncopeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->system($xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling SyncopeApi->system: ', $e->getMessage(), PHP_EOL;
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

