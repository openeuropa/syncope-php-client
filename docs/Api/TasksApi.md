# SyncopePhpClient\TasksApi

All URIs are relative to *http://syncope-vm.apache.org:9080/syncope/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**actionJob**](TasksApi.md#actionJob) | **POST** /tasks/jobs/{key} | Executes an action on an existing executable&#39;s job.
[**create1**](TasksApi.md#create1) | **POST** /tasks/{type} | Creates a new task.
[**delete1**](TasksApi.md#delete1) | **DELETE** /tasks/{type}/{key} | Deletes the task matching the provided key.
[**deleteExecution1**](TasksApi.md#deleteExecution1) | **DELETE** /tasks/executions/{executionKey} | Deletes the executable execution matching the provided key.
[**deleteExecutions**](TasksApi.md#deleteExecutions) | **DELETE** /tasks/{key}/executions | Deletes the executions belonging matching the given query.
[**execute1**](TasksApi.md#execute1) | **POST** /tasks/{key}/execute | Executes the executable matching the given query.
[**getJob2**](TasksApi.md#getJob2) | **GET** /tasks/jobs/{key} | Returns job (running or scheduled) for the executable matching the given key.
[**listExecutions1**](TasksApi.md#listExecutions1) | **GET** /tasks/{key}/executions | Returns a paged list of executions matching the given query.
[**listJobs1**](TasksApi.md#listJobs1) | **GET** /tasks/jobs | List jobs (running and / or scheduled).
[**listRecentExecutions1**](TasksApi.md#listRecentExecutions1) | **GET** /tasks/executions/recent | Returns the list of recently completed executions, ordered by end date descendent.
[**read28**](TasksApi.md#read28) | **GET** /tasks/{type}/{key} | Returns the task matching the given key.
[**search3**](TasksApi.md#search3) | **GET** /tasks/{type} | Returns a paged list of existing tasks matching the given query.
[**update1**](TasksApi.md#update1) | **PUT** /tasks/{type}/{key} | Updates the task matching the provided key.


# **actionJob**
> actionJob($key, $xSyncopeDomain, $action)

Executes an action on an existing executable's job.

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


$apiInstance = new SyncopePhpClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | executable key
$xSyncopeDomain = 'Master'; // string | 
$action = 'action_example'; // string | action to execute

try {
    $apiInstance->actionJob($key, $xSyncopeDomain, $action);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->actionJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| executable key |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **action** | **string**| action to execute | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create1**
> create1($type, $xSyncopeDomain, $schedTaskTO)

Creates a new task.

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


$apiInstance = new SyncopePhpClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | task type
$xSyncopeDomain = 'Master'; // string | task to be created
$schedTaskTO = new \SyncopePhpClient\Model\SchedTaskTO(); // \SyncopePhpClient\Model\SchedTaskTO | 

try {
    $apiInstance->create1($type, $xSyncopeDomain, $schedTaskTO);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->create1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| task type |
 **xSyncopeDomain** | **string**| task to be created | [default to &#39;Master&#39;]
 **schedTaskTO** | [**\SyncopePhpClient\Model\SchedTaskTO**](../Model/SchedTaskTO.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete1**
> delete1($type, $key, $xSyncopeDomain)

Deletes the task matching the provided key.

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


$apiInstance = new SyncopePhpClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | task type
$key = 'key_example'; // string | key of task to be deleted
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->delete1($type, $key, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->delete1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| task type |
 **key** | **string**| key of task to be deleted |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteExecution1**
> deleteExecution1($executionKey, $xSyncopeDomain)

Deletes the executable execution matching the provided key.

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


$apiInstance = new SyncopePhpClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$executionKey = 'executionKey_example'; // string | key of executable execution to be deleted
$xSyncopeDomain = 'Master'; // string | query conditions

try {
    $apiInstance->deleteExecution1($executionKey, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->deleteExecution1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **executionKey** | **string**| key of executable execution to be deleted |
 **xSyncopeDomain** | **string**| query conditions | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteExecutions**
> deleteExecutions($key, $xSyncopeDomain, $startedBefore, $startedAfter, $endedBefore, $endedAfter)

Deletes the executions belonging matching the given query.

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


$apiInstance = new SyncopePhpClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | query conditions
$xSyncopeDomain = 'Master'; // string | 
$startedBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$startedAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$endedBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$endedAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $apiInstance->deleteExecutions($key, $xSyncopeDomain, $startedBefore, $startedAfter, $endedBefore, $endedAfter);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->deleteExecutions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| query conditions |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **startedBefore** | **\DateTime**|  | [optional]
 **startedAfter** | **\DateTime**|  | [optional]
 **endedBefore** | **\DateTime**|  | [optional]
 **endedAfter** | **\DateTime**|  | [optional]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: multipart/mixed

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **execute1**
> execute1($key, $xSyncopeDomain, $startAt, $dryRun)

Executes the executable matching the given query.

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


$apiInstance = new SyncopePhpClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | query conditions
$xSyncopeDomain = 'Master'; // string | 
$startAt = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$dryRun = false; // bool | 

try {
    $apiInstance->execute1($key, $xSyncopeDomain, $startAt, $dryRun);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->execute1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| query conditions |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **startAt** | **\DateTime**|  | [optional]
 **dryRun** | **bool**|  | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJob2**
> getJob2($key, $xSyncopeDomain)

Returns job (running or scheduled) for the executable matching the given key.

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


$apiInstance = new SyncopePhpClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | executable key
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->getJob2($key, $xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getJob2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| executable key |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listExecutions1**
> listExecutions1($key, $xSyncopeDomain, $page, $size, $orderby)

Returns a paged list of executions matching the given query.

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


$apiInstance = new SyncopePhpClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | 
$xSyncopeDomain = 'Master'; // string | 
$page = 1; // int | query conditions
$size = 25; // int | 
$orderby = 'orderby_example'; // string | 

try {
    $apiInstance->listExecutions1($key, $xSyncopeDomain, $page, $size, $orderby);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->listExecutions1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**|  |
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

# **listJobs1**
> listJobs1($xSyncopeDomain)

List jobs (running and / or scheduled).

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


$apiInstance = new SyncopePhpClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 

try {
    $apiInstance->listJobs1($xSyncopeDomain);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->listJobs1: ', $e->getMessage(), PHP_EOL;
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

# **listRecentExecutions1**
> listRecentExecutions1($xSyncopeDomain, $max)

Returns the list of recently completed executions, ordered by end date descendent.

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


$apiInstance = new SyncopePhpClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xSyncopeDomain = 'Master'; // string | 
$max = 25; // int | the maximum number of executions to return

try {
    $apiInstance->listRecentExecutions1($xSyncopeDomain, $max);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->listRecentExecutions1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **max** | **int**| the maximum number of executions to return | [optional] [default to 25]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **read28**
> read28($type, $key, $xSyncopeDomain, $details)

Returns the task matching the given key.

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


$apiInstance = new SyncopePhpClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | type of taskTO
$key = 'key_example'; // string | task type
$xSyncopeDomain = 'Master'; // string | whether include executions or not, defaults to true
$details = true; // bool | key of task to be read

try {
    $apiInstance->read28($type, $key, $xSyncopeDomain, $details);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->read28: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| type of taskTO |
 **key** | **string**| task type |
 **xSyncopeDomain** | **string**| whether include executions or not, defaults to true | [default to &#39;Master&#39;]
 **details** | **bool**| key of task to be read | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search3**
> search3($type, $xSyncopeDomain, $page, $size, $orderby, $resource, $notification, $anyTypeKind, $entityKey, $details)

Returns a paged list of existing tasks matching the given query.

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


$apiInstance = new SyncopePhpClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | 
$xSyncopeDomain = 'Master'; // string | 
$page = 1; // int | type of taskTO
$size = 25; // int | query conditions
$orderby = 'orderby_example'; // string | 
$resource = 'resource_example'; // string | 
$notification = 'notification_example'; // string | 
$anyTypeKind = 'anyTypeKind_example'; // string | 
$entityKey = 'entityKey_example'; // string | 
$details = true; // bool | 

try {
    $apiInstance->search3($type, $xSyncopeDomain, $page, $size, $orderby, $resource, $notification, $anyTypeKind, $entityKey, $details);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->search3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  |
 **xSyncopeDomain** | **string**|  | [default to &#39;Master&#39;]
 **page** | **int**| type of taskTO | [optional] [default to 1]
 **size** | **int**| query conditions | [optional] [default to 25]
 **orderby** | **string**|  | [optional]
 **resource** | **string**|  | [optional]
 **notification** | **string**|  | [optional]
 **anyTypeKind** | **string**|  | [optional]
 **entityKey** | **string**|  | [optional]
 **details** | **bool**|  | [optional] [default to true]

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update1**
> update1($key, $type, $xSyncopeDomain, $schedTaskTO)

Updates the task matching the provided key.

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


$apiInstance = new SyncopePhpClient\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | Task's key
$type = 'type_example'; // string | updated task to be stored
$xSyncopeDomain = 'Master'; // string | task type
$schedTaskTO = new \SyncopePhpClient\Model\SchedTaskTO(); // \SyncopePhpClient\Model\SchedTaskTO | 

try {
    $apiInstance->update1($key, $type, $xSyncopeDomain, $schedTaskTO);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->update1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Task&#39;s key |
 **type** | **string**| updated task to be stored |
 **xSyncopeDomain** | **string**| task type | [default to &#39;Master&#39;]
 **schedTaskTO** | [**\SyncopePhpClient\Model\SchedTaskTO**](../Model/SchedTaskTO.md)|  |

### Return type

void (empty response body)

### Authorization

[BasicAuthentication](../../README.md#BasicAuthentication), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, application/yaml, application/xml
 - **Accept**: application/json, application/yaml, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

