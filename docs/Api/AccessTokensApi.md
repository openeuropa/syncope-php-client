# OpenEuropa\SyncopePhpClient\AccessTokensApi

All URIs are relative to *http://syncope-vm.apache.org:9080/syncope/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**callList**](AccessTokensApi.md#callList) | **GET** /accessTokens | Returns a paged list of existing access tokens matching the given query.
[**delete**](AccessTokensApi.md#delete) | **DELETE** /accessTokens/{key} | Invalidates the access token matching the provided key.
[**login**](AccessTokensApi.md#login) | **POST** /accessTokens/login | Returns an empty response bearing the X-Syncope-Token header value, in case of successful authentication.  The provided value is a signed JSON Web Token.
[**logout**](AccessTokensApi.md#logout) | **POST** /accessTokens/logout | Invalidates the access token of the requesting user.
[**refresh**](AccessTokensApi.md#refresh) | **POST** /accessTokens/refresh | Returns an empty response bearing the X-Syncope-Token header value, with extended lifetime.  The provided value is a signed JSON Web Token.


# **callList**
> callList($xSyncopeDomain, $page, $size, $orderby)

Returns a paged list of existing access tokens matching the given query.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AccessTokensApi(
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
    $apiInstance->callList($xSyncopeDomain, $page, $size, $orderby);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->callList: ', $e->getMessage(), PHP_EOL;
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

# **delete**
> delete($key, $xSyncopeDomain)

Invalidates the access token matching the provided key.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AccessTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | access token key
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->delete($key, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| access token key |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **login**
> login($xSyncopeDomain)

Returns an empty response bearing the X-Syncope-Token header value, in case of successful authentication.  The provided value is a signed JSON Web Token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: BasicAuthentication
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AccessTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->login($xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->login: ', $e->getMessage(), PHP_EOL;
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

[BasicAuthentication](../../README.md#BasicAuthentication)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logout**
> logout($xSyncopeDomain)

Invalidates the access token of the requesting user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Bearer
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AccessTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->logout($xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->logout: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refresh**
> refresh($xSyncopeDomain)

Returns an empty response bearing the X-Syncope-Token header value, with extended lifetime.  The provided value is a signed JSON Web Token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: Bearer
$config = OpenEuropa\SyncopePhpClient\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\AccessTokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->refresh($xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokensApi->refresh: ', $e->getMessage(), PHP_EOL;
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

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

