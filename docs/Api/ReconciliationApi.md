# SyncopePhpClient\ReconciliationApi

All URIs are relative to *http://syncope-vm.apache.org:9080/syncope/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pull**](ReconciliationApi.md#pull) | **POST** /reconciliation/pull | Pulls the given user, group or any object from the External Resource into Syncope.
[**push**](ReconciliationApi.md#push) | **POST** /reconciliation/push | Pushes the given user, group or any object in Syncope onto the External Resource.
[**status**](ReconciliationApi.md#status) | **GET** /reconciliation | Gets current attributes on Syncope and on the given External Resource, related to given user, group or  any object.


# **pull**
> pull($anyTypeKind, $anyKey, $resourceKey, $xSyncopeDomain, $pullTaskTO)

Pulls the given user, group or any object from the External Resource into Syncope.

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


$apiInstance = new SyncopePhpClient\Api\ReconciliationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$anyTypeKind = 'anyTypeKind_example'; // string | anyTypeKind
$anyKey = 'anyKey_example'; // string | user, group or any object: if value looks like a UUID then it is interpreted as key, otherwise as  a (user)name
$resourceKey = 'resourceKey_example'; // string | resource key
$xSyncopeDomain = 'Master'; // string | pull specification
$pullTaskTO = new \SyncopePhpClient\Model\PullTaskTO(); // \SyncopePhpClient\Model\PullTaskTO | 

try {
    $apiInstance->pull($anyTypeKind, $anyKey, $resourceKey, $xSyncopeDomain, $pullTaskTO);
} catch (Exception $e) {
    echo 'Exception when calling ReconciliationApi->pull: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **anyTypeKind** | **string**| anyTypeKind |
 **anyKey** | **string**| user, group or any object: if value looks like a UUID then it is interpreted as key, otherwise as  a (user)name |
 **resourceKey** | **string**| resource key |
 **xSyncopeDomain** | **string**| pull specification | [default to &#39;Master&#39;]
 **pullTaskTO** | [**\SyncopePhpClient\Model\PullTaskTO**](../Model/PullTaskTO.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **push**
> push($anyTypeKind, $anyKey, $resourceKey, $xSyncopeDomain, $pushTaskTO)

Pushes the given user, group or any object in Syncope onto the External Resource.

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


$apiInstance = new SyncopePhpClient\Api\ReconciliationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$anyTypeKind = 'anyTypeKind_example'; // string | anyTypeKind
$anyKey = 'anyKey_example'; // string | user, group or any object: if value looks like a UUID then it is interpreted as key, otherwise as  a (user)name
$resourceKey = 'resourceKey_example'; // string | resource key
$xSyncopeDomain = 'Master'; // string | push specification
$pushTaskTO = new \SyncopePhpClient\Model\PushTaskTO(); // \SyncopePhpClient\Model\PushTaskTO | 

try {
    $apiInstance->push($anyTypeKind, $anyKey, $resourceKey, $xSyncopeDomain, $pushTaskTO);
} catch (Exception $e) {
    echo 'Exception when calling ReconciliationApi->push: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **anyTypeKind** | **string**| anyTypeKind |
 **anyKey** | **string**| user, group or any object: if value looks like a UUID then it is interpreted as key, otherwise as  a (user)name |
 **resourceKey** | **string**| resource key |
 **xSyncopeDomain** | **string**| push specification | [default to &#39;Master&#39;]
 **pushTaskTO** | [**\SyncopePhpClient\Model\PushTaskTO**](../Model/PushTaskTO.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **status**
> status($anyTypeKind, $anyKey, $resourceKey, $xSyncopeDomain)

Gets current attributes on Syncope and on the given External Resource, related to given user, group or  any object.

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


$apiInstance = new SyncopePhpClient\Api\ReconciliationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$anyTypeKind = 'anyTypeKind_example'; // string | anyTypeKind
$anyKey = 'anyKey_example'; // string | user, group or any object: if value looks like a UUID then it is interpreted as key, otherwise as  a (user)name
$resourceKey = 'resourceKey_example'; // string | resource key
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->status($anyTypeKind, $anyKey, $resourceKey, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling ReconciliationApi->status: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **anyTypeKind** | **string**| anyTypeKind |
 **anyKey** | **string**| user, group or any object: if value looks like a UUID then it is interpreted as key, otherwise as  a (user)name |
 **resourceKey** | **string**| resource key |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

