# SyncopePhpClient\RemediationsApi

All URIs are relative to *http://syncope-vm.apache.org:9080/syncope/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**delete1**](RemediationsApi.md#delete1) | **DELETE** /remediations/{key} | Deletes the remediation matching the given key.
[**list19**](RemediationsApi.md#list19) | **GET** /remediations | Returns a list of all remediations.
[**read20**](RemediationsApi.md#read20) | **GET** /remediations/{key} | Returns remediation with matching key.
[**remedy**](RemediationsApi.md#remedy) | **PATCH** /remediations/{remediationKey} | Perform remediation by creating the provided user, group or any object.
[**remedy1**](RemediationsApi.md#remedy1) | **DELETE** /remediations/{remediationKey}/{anyKey} | Perform remediation by creating the provided user, group or any object.
[**remedy2**](RemediationsApi.md#remedy2) | **POST** /remediations/{remediationKey} | Perform remediation by creating the provided user, group or any object.


# **delete1**
> delete1($key, $xSyncopeDomain)

Deletes the remediation matching the given key.

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


$apiInstance = new SyncopePhpClient\Api\RemediationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | key for remediation to be deleted
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->delete1($key, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling RemediationsApi->delete1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| key for remediation to be deleted |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **list19**
> list19($xSyncopeDomain, $page, $size, $orderby)

Returns a list of all remediations.

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


$apiInstance = new SyncopePhpClient\Api\RemediationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 
$page = 1; // int | query conditions
$size = 25; // int | 
$orderby = 'orderby_example'; // string | 

try {
    $apiInstance->list19($xSyncopeDomain, $page, $size, $orderby);
} catch (Exception $e) {
    echo 'Exception when calling RemediationsApi->list19: ', $e->getMessage(), PHP_EOL;
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

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **read20**
> read20($key, $xSyncopeDomain)

Returns remediation with matching key.

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


$apiInstance = new SyncopePhpClient\Api\RemediationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | key of remediation to be read
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->read20($key, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling RemediationsApi->read20: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| key of remediation to be read |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **remedy**
> \SyncopePhpClient\Model\ProvisioningResult remedy($key, $remediationKey, $xSyncopeDomain, $anyPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

Perform remediation by creating the provided user, group or any object.

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


$apiInstance = new SyncopePhpClient\Api\RemediationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | Entity's key
$remediationKey = 'remediationKey_example'; // string | 
$xSyncopeDomain = 'Master'; // string | 
$anyPatch = new \SyncopePhpClient\Model\AnyPatch(); // \SyncopePhpClient\Model\AnyPatch | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$ifMatch = 'ifMatch_example'; // string | When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed.
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $result = $apiInstance->remedy($key, $remediationKey, $xSyncopeDomain, $anyPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemediationsApi->remedy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Entity&#39;s key |
 **remediationKey** | **string**|  |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **anyPatch** | [**\SyncopePhpClient\Model\AnyPatch**](../Model/AnyPatch.md)|  |
 **prefer** | **string**| Allows client to specify a preference for the result to be returned from the server | [optional] [default to &#39;return-content&#39;]
 **ifMatch** | **string**| When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. | [optional]
 **xSyncopeNullPriorityAsync** | **bool**| If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set | [optional] [default to false]

### Return type

[**\SyncopePhpClient\Model\ProvisioningResult**](../Model/ProvisioningResult.md)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **remedy1**
> \SyncopePhpClient\Model\ProvisioningResult remedy1($remediationKey, $anyKey, $xSyncopeDomain, $prefer, $ifMatch, $xSyncopeNullPriorityAsync)

Perform remediation by creating the provided user, group or any object.

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


$apiInstance = new SyncopePhpClient\Api\RemediationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$remediationKey = 'remediationKey_example'; // string | 
$anyKey = 'anyKey_example'; // string | 
$xSyncopeDomain = 'Master'; // string | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$ifMatch = 'ifMatch_example'; // string | When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed.
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $result = $apiInstance->remedy1($remediationKey, $anyKey, $xSyncopeDomain, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemediationsApi->remedy1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **remediationKey** | **string**|  |
 **anyKey** | **string**|  |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **prefer** | **string**| Allows client to specify a preference for the result to be returned from the server | [optional] [default to &#39;return-content&#39;]
 **ifMatch** | **string**| When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. | [optional]
 **xSyncopeNullPriorityAsync** | **bool**| If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set | [optional] [default to false]

### Return type

[**\SyncopePhpClient\Model\ProvisioningResult**](../Model/ProvisioningResult.md)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **remedy2**
> \SyncopePhpClient\Model\ProvisioningResult remedy2($key, $remediationKey, $xSyncopeDomain, $anyTO, $prefer, $xSyncopeNullPriorityAsync)

Perform remediation by creating the provided user, group or any object.

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


$apiInstance = new SyncopePhpClient\Api\RemediationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | Entity's key
$remediationKey = 'remediationKey_example'; // string | 
$xSyncopeDomain = 'Master'; // string | 
$anyTO = new \SyncopePhpClient\Model\AnyTO(); // \SyncopePhpClient\Model\AnyTO | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $result = $apiInstance->remedy2($key, $remediationKey, $xSyncopeDomain, $anyTO, $prefer, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemediationsApi->remedy2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Entity&#39;s key |
 **remediationKey** | **string**|  |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **anyTO** | [**\SyncopePhpClient\Model\AnyTO**](../Model/AnyTO.md)|  |
 **prefer** | **string**| Allows client to specify a preference for the result to be returned from the server | [optional] [default to &#39;return-content&#39;]
 **xSyncopeNullPriorityAsync** | **bool**| If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set | [optional] [default to false]

### Return type

[**\SyncopePhpClient\Model\ProvisioningResult**](../Model/ProvisioningResult.md)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

