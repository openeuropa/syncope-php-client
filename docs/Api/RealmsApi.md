# SyncopePhpClient\RealmsApi

All URIs are relative to *http://syncope-vm.apache.org:9080/syncope/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRootedRealm**](RealmsApi.md#createRootedRealm) | **POST** /realms/{parentPath} | Creates a new realm under the given path.
[**deleteRealm**](RealmsApi.md#deleteRealm) | **DELETE** /realms/{fullPath} | Deletes the realm under the given path.
[**listRealm**](RealmsApi.md#listRealm) | **GET** /realms/{fullPath} | Returns realms rooted at the given path.
[**listRealm_0**](RealmsApi.md#listRealm_0) | **GET** /realms | Returns a list of all realms.
[**updateRealm**](RealmsApi.md#updateRealm) | **PUT** /realms/{fullPath} | Updates the realm under the given path.


# **createRootedRealm**
> \SyncopePhpClient\Model\ProvisioningResult createRootedRealm($parentPath, $xSyncopeDomain, $realmTO, $prefer, $xSyncopeNullPriorityAsync)

Creates a new realm under the given path.

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


$apiInstance = new SyncopePhpClient\Api\RealmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parentPath = 'parentPath_example'; // string | 
$xSyncopeDomain = 'Master'; // string | 
$realmTO = new \SyncopePhpClient\Model\RealmTO(); // \SyncopePhpClient\Model\RealmTO | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $result = $apiInstance->createRootedRealm($parentPath, $xSyncopeDomain, $realmTO, $prefer, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsApi->createRootedRealm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentPath** | **string**|  |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **realmTO** | [**\SyncopePhpClient\Model\RealmTO**](../Model/RealmTO.md)|  |
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

# **deleteRealm**
> \SyncopePhpClient\Model\ProvisioningResult deleteRealm($fullPath, $xSyncopeDomain, $prefer, $xSyncopeNullPriorityAsync)

Deletes the realm under the given path.

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


$apiInstance = new SyncopePhpClient\Api\RealmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fullPath = 'fullPath_example'; // string | 
$xSyncopeDomain = 'Master'; // string | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $result = $apiInstance->deleteRealm($fullPath, $xSyncopeDomain, $prefer, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsApi->deleteRealm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullPath** | **string**|  |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **prefer** | **string**| Allows client to specify a preference for the result to be returned from the server | [optional] [default to &#39;return-content&#39;]
 **xSyncopeNullPriorityAsync** | **bool**| If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set | [optional] [default to false]

### Return type

[**\SyncopePhpClient\Model\ProvisioningResult**](../Model/ProvisioningResult.md)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRealm**
> listRealm($fullPath, $xSyncopeDomain)

Returns realms rooted at the given path.

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


$apiInstance = new SyncopePhpClient\Api\RealmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fullPath = 'fullPath_example'; // string | full path of the root realm where to read from
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->listRealm($fullPath, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling RealmsApi->listRealm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullPath** | **string**| full path of the root realm where to read from |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRealm_0**
> listRealm_0($xSyncopeDomain)

Returns a list of all realms.

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


$apiInstance = new SyncopePhpClient\Api\RealmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->listRealm_0($xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling RealmsApi->listRealm_0: ', $e->getMessage(), PHP_EOL;
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

# **updateRealm**
> \SyncopePhpClient\Model\ProvisioningResult updateRealm($fullPath, $xSyncopeDomain, $realmTO, $prefer, $xSyncopeNullPriorityAsync)

Updates the realm under the given path.

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


$apiInstance = new SyncopePhpClient\Api\RealmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fullPath = 'fullPath_example'; // string | Realm's key
$xSyncopeDomain = 'Master'; // string | 
$realmTO = new \SyncopePhpClient\Model\RealmTO(); // \SyncopePhpClient\Model\RealmTO | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$xSyncopeNullPriorityAsync = false; // bool | If 'true', instructs the propagation process not to wait for completion when communicating with External Resources with no priority set

try {
    $result = $apiInstance->updateRealm($fullPath, $xSyncopeDomain, $realmTO, $prefer, $xSyncopeNullPriorityAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RealmsApi->updateRealm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fullPath** | **string**| Realm&#39;s key |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **realmTO** | [**\SyncopePhpClient\Model\RealmTO**](../Model/RealmTO.md)|  |
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

