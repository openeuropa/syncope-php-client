# OpenEuropa\SyncopePhpClient\OIDCClientsApi

All URIs are relative to *http://syncope-vm.apache.org:9080/syncope/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLoginRequest**](OIDCClientsApi.md#createLoginRequest) | **POST** /oidcclient/clients/loginRequest | Generates OpenID Connect authentication request for the Provider matching the provided op.
[**createLogoutRequest**](OIDCClientsApi.md#createLogoutRequest) | **POST** /oidcclient/clients/logout | Returns the endSession endpoint for the provided op.
[**login1**](OIDCClientsApi.md#login1) | **POST** /oidcclient/clients/login | Uses the provided authorization code to go through the OpenID Connect tokens process and finally creates JWT for  the matching user, if found.


# **createLoginRequest**
> createLoginRequest($xSyncopeDomain, $redirectUri, $op)

Generates OpenID Connect authentication request for the Provider matching the provided op.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\OIDCClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 
$redirectUri = 'redirectUri_example'; // string | redirect URI
$op = 'op_example'; // string | OpenID Connect Provider

try {
    $apiInstance->createLoginRequest($xSyncopeDomain, $redirectUri, $op);
} catch (Exception $e) {
    echo 'Exception when calling OIDCClientsApi->createLoginRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **redirectUri** | **string**| redirect URI | [optional]
 **op** | **string**| OpenID Connect Provider | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLogoutRequest**
> createLogoutRequest($xSyncopeDomain, $op)

Returns the endSession endpoint for the provided op.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\OIDCClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 
$op = 'op_example'; // string | OpenID Connect Provider

try {
    $apiInstance->createLogoutRequest($xSyncopeDomain, $op);
} catch (Exception $e) {
    echo 'Exception when calling OIDCClientsApi->createLogoutRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **op** | **string**| OpenID Connect Provider | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **login1**
> login1($xSyncopeDomain, $redirectUri, $authorizationCode, $op)

Uses the provided authorization code to go through the OpenID Connect tokens process and finally creates JWT for  the matching user, if found.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\OIDCClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 
$redirectUri = 'redirectUri_example'; // string | redirect URI
$authorizationCode = 'authorizationCode_example'; // string | authorization code generated by the remote OpenID Connect Provider
$op = 'op_example'; // string | OpenID Connect Provider

try {
    $apiInstance->login1($xSyncopeDomain, $redirectUri, $authorizationCode, $op);
} catch (Exception $e) {
    echo 'Exception when calling OIDCClientsApi->login1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **redirectUri** | **string**| redirect URI | [optional]
 **authorizationCode** | **string**| authorization code generated by the remote OpenID Connect Provider | [optional]
 **op** | **string**| OpenID Connect Provider | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

