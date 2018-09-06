# SyncopePhpClient\ConnectorsApi

All URIs are relative to *http://syncope-vm.apache.org:9080/syncope/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buildObjectClassInfo**](ConnectorsApi.md#buildObjectClassInfo) | **POST** /connectors/{key}/supportedObjectClasses | Builds the list of ConnId object classes information for the connector bundle matching the given connector  instance key, with the provided configuration.
[**check**](ConnectorsApi.md#check) | **POST** /connectors/check | Checks whether the connection to resource could be established.
[**create**](ConnectorsApi.md#create) | **POST** /connectors | Creates a new connector instance.
[**delete1**](ConnectorsApi.md#delete1) | **DELETE** /connectors/{key} | Deletes the connector instance matching the provided key.
[**getBundles**](ConnectorsApi.md#getBundles) | **GET** /connectors/bundles | Returns available connector bundles with property keys in selected language.
[**list7**](ConnectorsApi.md#list7) | **GET** /connectors | Returns a list of all connector instances with property keys in the matching language.
[**read7**](ConnectorsApi.md#read7) | **GET** /connectors/{key} | Returns connector instance with matching key.
[**readByResource**](ConnectorsApi.md#readByResource) | **GET** /connectors/byResource/{resourceName} | Returns connector instance for matching resource.
[**reload**](ConnectorsApi.md#reload) | **POST** /connectors/reload | Reload all connector bundles and instances.
[**update**](ConnectorsApi.md#update) | **PUT** /connectors/{key} | Updates the connector instance matching the provided key.


# **buildObjectClassInfo**
> buildObjectClassInfo($key, $xSyncopeDomain, $connInstanceTO, $includeSpecial)

Builds the list of ConnId object classes information for the connector bundle matching the given connector  instance key, with the provided configuration.

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


$apiInstance = new SyncopePhpClient\Api\ConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | Connector instance's key
$xSyncopeDomain = 'Master'; // string | 
$connInstanceTO = new \SyncopePhpClient\Model\ConnInstanceTO(); // \SyncopePhpClient\Model\ConnInstanceTO | 
$includeSpecial = false; // bool | if set to true, special schema names (like '__PASSWORD__') will be included;  default is false

try {
    $apiInstance->buildObjectClassInfo($key, $xSyncopeDomain, $connInstanceTO, $includeSpecial);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->buildObjectClassInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Connector instance&#39;s key |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **connInstanceTO** | [**\SyncopePhpClient\Model\ConnInstanceTO**](../Model/ConnInstanceTO.md)|  |
 **includeSpecial** | **bool**| if set to true, special schema names (like &#39;__PASSWORD__&#39;) will be included;  default is false | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **check**
> check($xSyncopeDomain, $connInstanceTO)

Checks whether the connection to resource could be established.

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


$apiInstance = new SyncopePhpClient\Api\ConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | connector instance to be used for connection check
$connInstanceTO = new \SyncopePhpClient\Model\ConnInstanceTO(); // \SyncopePhpClient\Model\ConnInstanceTO | 

try {
    $apiInstance->check($xSyncopeDomain, $connInstanceTO);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->check: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**| connector instance to be used for connection check | [default to &#39;Master&#39;]
 **connInstanceTO** | [**\SyncopePhpClient\Model\ConnInstanceTO**](../Model/ConnInstanceTO.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create**
> create($xSyncopeDomain, $connInstanceTO)

Creates a new connector instance.

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


$apiInstance = new SyncopePhpClient\Api\ConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | connector instance to be created
$connInstanceTO = new \SyncopePhpClient\Model\ConnInstanceTO(); // \SyncopePhpClient\Model\ConnInstanceTO | 

try {
    $apiInstance->create($xSyncopeDomain, $connInstanceTO);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**| connector instance to be created | [default to &#39;Master&#39;]
 **connInstanceTO** | [**\SyncopePhpClient\Model\ConnInstanceTO**](../Model/ConnInstanceTO.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete1**
> delete1($key, $xSyncopeDomain)

Deletes the connector instance matching the provided key.

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


$apiInstance = new SyncopePhpClient\Api\ConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | connector instance key to be deleted
$xSyncopeDomain = 'Master'; // string | connector instance to be used for connection check

try {
    $apiInstance->delete1($key, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->delete1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| connector instance key to be deleted |
 **xSyncopeDomain** | **string**| connector instance to be used for connection check | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBundles**
> getBundles($xSyncopeDomain, $lang)

Returns available connector bundles with property keys in selected language.

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


$apiInstance = new SyncopePhpClient\Api\ConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 
$lang = 'lang_example'; // string | language to select property keys; default language is English

try {
    $apiInstance->getBundles($xSyncopeDomain, $lang);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->getBundles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **lang** | **string**| language to select property keys; default language is English | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **list7**
> list7($xSyncopeDomain, $lang)

Returns a list of all connector instances with property keys in the matching language.

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


$apiInstance = new SyncopePhpClient\Api\ConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 
$lang = 'lang_example'; // string | language to select property keys, null for default (English).  An ISO 639 alpha-2 or alpha-3 language code, or a language subtag up to 8 characters in length.

try {
    $apiInstance->list7($xSyncopeDomain, $lang);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->list7: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **lang** | **string**| language to select property keys, null for default (English).  An ISO 639 alpha-2 or alpha-3 language code, or a language subtag up to 8 characters in length. | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **read7**
> read7($key, $xSyncopeDomain, $lang)

Returns connector instance with matching key.

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


$apiInstance = new SyncopePhpClient\Api\ConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | connector instance key to be read
$xSyncopeDomain = 'Master'; // string | 
$lang = 'lang_example'; // string | language to select property keys, null for default (English).  An ISO 639 alpha-2 or alpha-3 language code, or a language subtag up to 8 characters in length.

try {
    $apiInstance->read7($key, $xSyncopeDomain, $lang);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->read7: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| connector instance key to be read |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **lang** | **string**| language to select property keys, null for default (English).  An ISO 639 alpha-2 or alpha-3 language code, or a language subtag up to 8 characters in length. | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readByResource**
> readByResource($resourceName, $xSyncopeDomain, $lang)

Returns connector instance for matching resource.

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


$apiInstance = new SyncopePhpClient\Api\ConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resourceName = 'resourceName_example'; // string | resource name to be used for connector lookup
$xSyncopeDomain = 'Master'; // string | 
$lang = 'lang_example'; // string | language to select property keys, null for default (English).  An ISO 639 alpha-2 or alpha-3 language code, or a language subtag up to 8 characters in length.

try {
    $apiInstance->readByResource($resourceName, $xSyncopeDomain, $lang);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->readByResource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **resourceName** | **string**| resource name to be used for connector lookup |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **lang** | **string**| language to select property keys, null for default (English).  An ISO 639 alpha-2 or alpha-3 language code, or a language subtag up to 8 characters in length. | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reload**
> reload($xSyncopeDomain)

Reload all connector bundles and instances.

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


$apiInstance = new SyncopePhpClient\Api\ConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->reload($xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->reload: ', $e->getMessage(), PHP_EOL;
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

# **update**
> update($key, $xSyncopeDomain, $connInstanceTO)

Updates the connector instance matching the provided key.

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


$apiInstance = new SyncopePhpClient\Api\ConnectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | Connector instance's key
$xSyncopeDomain = 'Master'; // string | connector instance key to be deleted
$connInstanceTO = new \SyncopePhpClient\Model\ConnInstanceTO(); // \SyncopePhpClient\Model\ConnInstanceTO | 

try {
    $apiInstance->update($key, $xSyncopeDomain, $connInstanceTO);
} catch (Exception $e) {
    echo 'Exception when calling ConnectorsApi->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Connector instance&#39;s key |
 **xSyncopeDomain** | **string**| connector instance key to be deleted | [default to &#39;Master&#39;]
 **connInstanceTO** | [**\SyncopePhpClient\Model\ConnInstanceTO**](../Model/ConnInstanceTO.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

