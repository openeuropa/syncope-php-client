# OpenEuropa\SyncopePhpClient\SAML2SPApi

All URIs are relative to *http://syncope-vm.apache.org:9080/syncope/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLoginRequest1**](SAML2SPApi.md#createLoginRequest1) | **POST** /saml2sp/serviceProvider/loginRequest | Generates SAML 2.0 authentication request for the IdP matching the provided entity ID.
[**createLogoutRequest1**](SAML2SPApi.md#createLogoutRequest1) | **POST** /saml2sp/serviceProvider/logoutRequest | Generates SAML 2.0 logout request for the IdP matching the requesting access token.
[**getMetadata**](SAML2SPApi.md#getMetadata) | **GET** /saml2sp/serviceProvider | Returns the XML metadata for the provided SAML 2.0 Service Provider.
[**validateLoginResponse**](SAML2SPApi.md#validateLoginResponse) | **POST** /saml2sp/serviceProvider/loginResponse | Validates the received SAML 2.0 authentication response and creates JWT for the matching user, if found.
[**validateLogoutResponse**](SAML2SPApi.md#validateLogoutResponse) | **POST** /saml2sp/serviceProvider/logoutResponse | Validates the received SAML 2.0 logout response.


# **createLoginRequest1**
> createLoginRequest1($xSyncopeDomain, $spEntityID, $idpEntityID)

Generates SAML 2.0 authentication request for the IdP matching the provided entity ID.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\SAML2SPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 
$spEntityID = 'spEntityID_example'; // string | SAML 2.0 SP entity ID.
$idpEntityID = 'idpEntityID_example'; // string | SAML 2.0 IdP entity ID.

try {
    $apiInstance->createLoginRequest1($xSyncopeDomain, $spEntityID, $idpEntityID);
} catch (Exception $e) {
    echo 'Exception when calling SAML2SPApi->createLoginRequest1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **spEntityID** | **string**| SAML 2.0 SP entity ID. | [optional]
 **idpEntityID** | **string**| SAML 2.0 IdP entity ID. | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLogoutRequest1**
> createLogoutRequest1($xSyncopeDomain, $spEntityID)

Generates SAML 2.0 logout request for the IdP matching the requesting access token.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\SAML2SPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 
$spEntityID = 'spEntityID_example'; // string | SAML 2.0 SP entity ID.

try {
    $apiInstance->createLogoutRequest1($xSyncopeDomain, $spEntityID);
} catch (Exception $e) {
    echo 'Exception when calling SAML2SPApi->createLogoutRequest1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **spEntityID** | **string**| SAML 2.0 SP entity ID. | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMetadata**
> getMetadata($xSyncopeDomain, $spEntityID, $urlContext)

Returns the XML metadata for the provided SAML 2.0 Service Provider.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\SAML2SPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 
$spEntityID = 'spEntityID_example'; // string | SAML 2.0 SP entity ID.
$urlContext = 'urlContext_example'; // string | SAML 2.0 SP agent URL context

try {
    $apiInstance->getMetadata($xSyncopeDomain, $spEntityID, $urlContext);
} catch (Exception $e) {
    echo 'Exception when calling SAML2SPApi->getMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **spEntityID** | **string**| SAML 2.0 SP entity ID. | [optional]
 **urlContext** | **string**| SAML 2.0 SP agent URL context | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateLoginResponse**
> validateLoginResponse($xSyncopeDomain, $sAML2ReceivedResponseTO)

Validates the received SAML 2.0 authentication response and creates JWT for the matching user, if found.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\SAML2SPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | SAML response and relay state
$sAML2ReceivedResponseTO = new \OpenEuropa\SyncopePhpClient\Model\SAML2ReceivedResponseTO(); // \OpenEuropa\SyncopePhpClient\Model\SAML2ReceivedResponseTO | 

try {
    $apiInstance->validateLoginResponse($xSyncopeDomain, $sAML2ReceivedResponseTO);
} catch (Exception $e) {
    echo 'Exception when calling SAML2SPApi->validateLoginResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**| SAML response and relay state | [default to &#39;Master&#39;]
 **sAML2ReceivedResponseTO** | [**\OpenEuropa\SyncopePhpClient\Model\SAML2ReceivedResponseTO**](../Model/SAML2ReceivedResponseTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateLogoutResponse**
> validateLogoutResponse($xSyncopeDomain, $sAML2ReceivedResponseTO)

Validates the received SAML 2.0 logout response.

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


$apiInstance = new OpenEuropa\SyncopePhpClient\Api\SAML2SPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | SAML response and relay state
$sAML2ReceivedResponseTO = new \OpenEuropa\SyncopePhpClient\Model\SAML2ReceivedResponseTO(); // \OpenEuropa\SyncopePhpClient\Model\SAML2ReceivedResponseTO | 

try {
    $apiInstance->validateLogoutResponse($xSyncopeDomain, $sAML2ReceivedResponseTO);
} catch (Exception $e) {
    echo 'Exception when calling SAML2SPApi->validateLogoutResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**| SAML response and relay state | [default to &#39;Master&#39;]
 **sAML2ReceivedResponseTO** | [**\OpenEuropa\SyncopePhpClient\Model\SAML2ReceivedResponseTO**](../Model/SAML2ReceivedResponseTO.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

