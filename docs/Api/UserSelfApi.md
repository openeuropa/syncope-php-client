# SyncopePhpClient\UserSelfApi

All URIs are relative to *http://syncope-vm.apache.org:9080/syncope/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirmPasswordReset**](UserSelfApi.md#confirmPasswordReset) | **POST** /users/self/confirmPasswordReset | Reset the password value for the user matching the provided token, if available and still valid.  If the token actually matches one of users, and if it is still valid at the time of submission, the matching  user&#39;s password value is set as provided. The new password value will need anyway to comply with all relevant  password policies.
[**create1**](UserSelfApi.md#create1) | **POST** /users/self | Self-registration for new user.
[**delete1**](UserSelfApi.md#delete1) | **DELETE** /users/self | Self-deletes user.
[**mustChangePassword**](UserSelfApi.md#mustChangePassword) | **POST** /users/self/mustChangePassword | Changes own password when change was forced by an administrator.
[**read29**](UserSelfApi.md#read29) | **GET** /users/self | Returns the user making the service call.
[**requestPasswordReset**](UserSelfApi.md#requestPasswordReset) | **POST** /users/self/requestPasswordReset | Provides answer for the security question configured for user matching the given username, if any.  If provided answer matches the one stored for that user, a password reset token is internally generated,  otherwise an error is returned.
[**status1**](UserSelfApi.md#status1) | **POST** /users/self/{key}/status | Self-perform a status update.
[**update1**](UserSelfApi.md#update1) | **PUT** /users/self/{key} | Self-updates user.
[**update2**](UserSelfApi.md#update2) | **PATCH** /users/self/{key} | Self-updates user.


# **confirmPasswordReset**
> confirmPasswordReset($token, $xSyncopeDomain, $body)

Reset the password value for the user matching the provided token, if available and still valid.  If the token actually matches one of users, and if it is still valid at the time of submission, the matching  user's password value is set as provided. The new password value will need anyway to comply with all relevant  password policies.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SyncopePhpClient\Api\UserSelfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | password reset token
$xSyncopeDomain = 'Master'; // string | new password to be set
$body = 'body_example'; // string | 

try {
    $apiInstance->confirmPasswordReset($token, $xSyncopeDomain, $body);
} catch (Exception $e) {
    echo 'Exception when calling UserSelfApi->confirmPasswordReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| password reset token |
 **xSyncopeDomain** | **string**| new password to be set | [default to &#39;Master&#39;]
 **body** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create1**
> \SyncopePhpClient\Model\ProvisioningResult create1($xSyncopeDomain, $userTO, $prefer, $storePassword)

Self-registration for new user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SyncopePhpClient\Api\UserSelfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$xSyncopeDomain = 'Master'; // string | 
$userTO = new \SyncopePhpClient\Model\UserTO(); // \SyncopePhpClient\Model\UserTO | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server
$storePassword = true; // bool | whether password shall be stored internally

try {
    $result = $apiInstance->create1($xSyncopeDomain, $userTO, $prefer, $storePassword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSelfApi->create1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **userTO** | [**\SyncopePhpClient\Model\UserTO**](../Model/UserTO.md)|  |
 **prefer** | **string**| Allows client to specify a preference for the result to be returned from the server | [optional] [default to &#39;return-content&#39;]
 **storePassword** | **bool**| whether password shall be stored internally | [optional] [default to true]

### Return type

[**\SyncopePhpClient\Model\ProvisioningResult**](../Model/ProvisioningResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete1**
> delete1($xSyncopeDomain)

Self-deletes user.

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


$apiInstance = new SyncopePhpClient\Api\UserSelfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->delete1($xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling UserSelfApi->delete1: ', $e->getMessage(), PHP_EOL;
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

# **mustChangePassword**
> mustChangePassword($xSyncopeDomain, $body)

Changes own password when change was forced by an administrator.

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


$apiInstance = new SyncopePhpClient\Api\UserSelfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | the password value to update
$body = 'body_example'; // string | 

try {
    $apiInstance->mustChangePassword($xSyncopeDomain, $body);
} catch (Exception $e) {
    echo 'Exception when calling UserSelfApi->mustChangePassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**| the password value to update | [default to &#39;Master&#39;]
 **body** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **read29**
> \SyncopePhpClient\Model\UserTO read29($xSyncopeDomain)

Returns the user making the service call.

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


$apiInstance = new SyncopePhpClient\Api\UserSelfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 

try {
    $result = $apiInstance->read29($xSyncopeDomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSelfApi->read29: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

[**\SyncopePhpClient\Model\UserTO**](../Model/UserTO.md)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestPasswordReset**
> requestPasswordReset($username, $xSyncopeDomain, $body)

Provides answer for the security question configured for user matching the given username, if any.  If provided answer matches the one stored for that user, a password reset token is internally generated,  otherwise an error is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SyncopePhpClient\Api\UserSelfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string | username for which the security answer is provided
$xSyncopeDomain = 'Master'; // string | actual answer text
$body = 'body_example'; // string | 

try {
    $apiInstance->requestPasswordReset($username, $xSyncopeDomain, $body);
} catch (Exception $e) {
    echo 'Exception when calling UserSelfApi->requestPasswordReset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| username for which the security answer is provided |
 **xSyncopeDomain** | **string**| actual answer text | [default to &#39;Master&#39;]
 **body** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **status1**
> \SyncopePhpClient\Model\ProvisioningResult status1($key, $xSyncopeDomain, $statusPatch, $prefer)

Self-perform a status update.

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


$apiInstance = new SyncopePhpClient\Api\UserSelfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | User's key
$xSyncopeDomain = 'Master'; // string | 
$statusPatch = new \SyncopePhpClient\Model\StatusPatch(); // \SyncopePhpClient\Model\StatusPatch | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server

try {
    $result = $apiInstance->status1($key, $xSyncopeDomain, $statusPatch, $prefer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSelfApi->status1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| User&#39;s key |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **statusPatch** | [**\SyncopePhpClient\Model\StatusPatch**](../Model/StatusPatch.md)|  |
 **prefer** | **string**| Allows client to specify a preference for the result to be returned from the server | [optional] [default to &#39;return-content&#39;]

### Return type

[**\SyncopePhpClient\Model\ProvisioningResult**](../Model/ProvisioningResult.md)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update1**
> \SyncopePhpClient\Model\ProvisioningResult update1($key, $xSyncopeDomain, $userTO, $prefer)

Self-updates user.

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


$apiInstance = new SyncopePhpClient\Api\UserSelfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | User's key
$xSyncopeDomain = 'Master'; // string | 
$userTO = new \SyncopePhpClient\Model\UserTO(); // \SyncopePhpClient\Model\UserTO | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server

try {
    $result = $apiInstance->update1($key, $xSyncopeDomain, $userTO, $prefer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSelfApi->update1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| User&#39;s key |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **userTO** | [**\SyncopePhpClient\Model\UserTO**](../Model/UserTO.md)|  |
 **prefer** | **string**| Allows client to specify a preference for the result to be returned from the server | [optional] [default to &#39;return-content&#39;]

### Return type

[**\SyncopePhpClient\Model\ProvisioningResult**](../Model/ProvisioningResult.md)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update2**
> \SyncopePhpClient\Model\ProvisioningResult update2($key, $xSyncopeDomain, $userPatch, $prefer)

Self-updates user.

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


$apiInstance = new SyncopePhpClient\Api\UserSelfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | User's key
$xSyncopeDomain = 'Master'; // string | 
$userPatch = new \SyncopePhpClient\Model\UserPatch(); // \SyncopePhpClient\Model\UserPatch | 
$prefer = 'return-content'; // string | Allows client to specify a preference for the result to be returned from the server

try {
    $result = $apiInstance->update2($key, $xSyncopeDomain, $userPatch, $prefer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserSelfApi->update2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| User&#39;s key |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **userPatch** | [**\SyncopePhpClient\Model\UserPatch**](../Model/UserPatch.md)|  |
 **prefer** | **string**| Allows client to specify a preference for the result to be returned from the server | [optional] [default to &#39;return-content&#39;]

### Return type

[**\SyncopePhpClient\Model\ProvisioningResult**](../Model/ProvisioningResult.md)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

