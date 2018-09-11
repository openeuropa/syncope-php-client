<?php

/**
 * ReconciliationApi
 * PHP version 5
 *
 * @category Class
 * @package OpenEuropa\SyncopePhpClient
 * @author OpenAPI Generator team
 * @link https://openapi-generator.tech
 */

namespace OpenEuropa\SyncopePhpClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenEuropa\SyncopePhpClient\ApiException;
use OpenEuropa\SyncopePhpClient\Configuration;
use OpenEuropa\SyncopePhpClient\HeaderSelector;
use OpenEuropa\SyncopePhpClient\ObjectSerializer;

/**
 * ReconciliationApi Class Doc Comment.
 *
 * @category Class
 * @package OpenEuropa\SyncopePhpClient
 * @author OpenAPI Generator team
 * @link https://openapi-generator.tech
 */
class ReconciliationApi {
  /**
   * @var ClientInterface
   */
  protected $client;

  /**
   * @var Configuration
   */
  protected $config;

  /**
   * @var HeaderSelector
   */
  protected $headerSelector;

  /**
   * @param ClientInterface $client
   * @param Configuration $config
   * @param HeaderSelector $selector
   */
  public function __construct(
    ClientInterface $client = NULL,
    Configuration $config = NULL,
    HeaderSelector $selector = NULL
  ) {
    $this->client = $client ?: new Client();
    $this->config = $config ?: new Configuration();
    $this->headerSelector = $selector ?: new HeaderSelector();
  }

  /**
   * @return Configuration.
   */
  public function getConfig() {
    return $this->config;
  }

  /**
   * Operation pull
   *
   * Pulls the given user, group or any object from the External Resource into Syncope.
   *
   * @param  string $anyTypeKind anyTypeKind (required)
   * @param  string $anyKey user, group or any object: if value looks like a UUID then it is interpreted as key, otherwise as  a (user)name (required)
   * @param  string $resourceKey resource key (required)
   * @param  string $xSyncopeDomain pull specification (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\PullTaskTO $pullTaskTO pullTaskTO (required)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function pull($anyTypeKind, $anyKey, $resourceKey, $xSyncopeDomain, $pullTaskTO) {
    $request = $this->pullRequest($anyTypeKind, $anyKey, $resourceKey, $xSyncopeDomain, $pullTaskTO);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      }
      catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : NULL,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : NULL
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      return [NULL, $statusCode, $response->getHeaders()];

    }
    catch (ApiException $e) {
      switch ($e->getCode()) {
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\OpenEuropa\SyncopePhpClient\Model\ErrorTO',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'pull'
   *
   * @param  string $anyTypeKind anyTypeKind (required)
   * @param  string $anyKey user, group or any object: if value looks like a UUID then it is interpreted as key, otherwise as  a (user)name (required)
   * @param  string $resourceKey resource key (required)
   * @param  string $xSyncopeDomain pull specification (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\PullTaskTO $pullTaskTO (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function pullRequest($anyTypeKind, $anyKey, $resourceKey, $xSyncopeDomain, $pullTaskTO) {
      // Verify the required parameter 'anyTypeKind' is set.
    if ($anyTypeKind === NULL || (is_array($anyTypeKind) && count($anyTypeKind) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $anyTypeKind when calling pull'
      );
    }
      // Verify the required parameter 'anyKey' is set.
    if ($anyKey === NULL || (is_array($anyKey) && count($anyKey) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $anyKey when calling pull'
      );
    }
      // Verify the required parameter 'resourceKey' is set.
    if ($resourceKey === NULL || (is_array($resourceKey) && count($resourceKey) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $resourceKey when calling pull'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling pull'
      );
    }
      // Verify the required parameter 'pullTaskTO' is set.
    if ($pullTaskTO === NULL || (is_array($pullTaskTO) && count($pullTaskTO) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $pullTaskTO when calling pull'
      );
    }

    $resourcePath = '/reconciliation/pull';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // query params
    if ($anyTypeKind !== NULL) {
      $queryParams['anyTypeKind'] = ObjectSerializer::toQueryValue($anyTypeKind);
    }
    // query params
    if ($anyKey !== NULL) {
      $queryParams['anyKey'] = ObjectSerializer::toQueryValue($anyKey);
    }
    // query params
    if ($resourceKey !== NULL) {
      $queryParams['resourceKey'] = ObjectSerializer::toQueryValue($resourceKey);
    }
    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }


    // body params
    $_tempBody = NULL;
    if (isset($pullTaskTO)) {
      $_tempBody = $pullTaskTO;
    }

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/json', 'application/yaml', 'application/xml']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/json', 'application/yaml', 'application/xml'],
        ['application/json', 'application/yaml', 'application/xml']
      );
    }

    // For model (json/xml).
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present.
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually.
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // For HTTP post (form).
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // For HTTP post (form).
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // This endpoint requires HTTP basic authentication.
    if ($this->config->getUsername() !== NULL || $this->config->getPassword() !== NULL) {
      $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
    }
    // This endpoint requires HTTP basic authentication.
    if ($this->config->getUsername() !== NULL || $this->config->getPassword() !== NULL) {
      $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'POST',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation push
   *
   * Pushes the given user, group or any object in Syncope onto the External Resource.
   *
   * @param  string $anyTypeKind anyTypeKind (required)
   * @param  string $anyKey user, group or any object: if value looks like a UUID then it is interpreted as key, otherwise as  a (user)name (required)
   * @param  string $resourceKey resource key (required)
   * @param  string $xSyncopeDomain push specification (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\PushTaskTO $pushTaskTO pushTaskTO (required)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function push($anyTypeKind, $anyKey, $resourceKey, $xSyncopeDomain, $pushTaskTO) {
    $request = $this->pushRequest($anyTypeKind, $anyKey, $resourceKey, $xSyncopeDomain, $pushTaskTO);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      }
      catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : NULL,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : NULL
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      return [NULL, $statusCode, $response->getHeaders()];

    }
    catch (ApiException $e) {
      switch ($e->getCode()) {
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\OpenEuropa\SyncopePhpClient\Model\ErrorTO',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'push'
   *
   * @param  string $anyTypeKind anyTypeKind (required)
   * @param  string $anyKey user, group or any object: if value looks like a UUID then it is interpreted as key, otherwise as  a (user)name (required)
   * @param  string $resourceKey resource key (required)
   * @param  string $xSyncopeDomain push specification (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\PushTaskTO $pushTaskTO (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function pushRequest($anyTypeKind, $anyKey, $resourceKey, $xSyncopeDomain, $pushTaskTO) {
      // Verify the required parameter 'anyTypeKind' is set.
    if ($anyTypeKind === NULL || (is_array($anyTypeKind) && count($anyTypeKind) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $anyTypeKind when calling push'
      );
    }
      // Verify the required parameter 'anyKey' is set.
    if ($anyKey === NULL || (is_array($anyKey) && count($anyKey) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $anyKey when calling push'
      );
    }
      // Verify the required parameter 'resourceKey' is set.
    if ($resourceKey === NULL || (is_array($resourceKey) && count($resourceKey) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $resourceKey when calling push'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling push'
      );
    }
      // Verify the required parameter 'pushTaskTO' is set.
    if ($pushTaskTO === NULL || (is_array($pushTaskTO) && count($pushTaskTO) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $pushTaskTO when calling push'
      );
    }

    $resourcePath = '/reconciliation/push';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // query params
    if ($anyTypeKind !== NULL) {
      $queryParams['anyTypeKind'] = ObjectSerializer::toQueryValue($anyTypeKind);
    }
    // query params
    if ($anyKey !== NULL) {
      $queryParams['anyKey'] = ObjectSerializer::toQueryValue($anyKey);
    }
    // query params
    if ($resourceKey !== NULL) {
      $queryParams['resourceKey'] = ObjectSerializer::toQueryValue($resourceKey);
    }
    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }


    // body params
    $_tempBody = NULL;
    if (isset($pushTaskTO)) {
      $_tempBody = $pushTaskTO;
    }

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/json', 'application/yaml', 'application/xml']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/json', 'application/yaml', 'application/xml'],
        ['application/json', 'application/yaml', 'application/xml']
      );
    }

    // For model (json/xml).
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present.
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually.
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // For HTTP post (form).
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // For HTTP post (form).
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // This endpoint requires HTTP basic authentication.
    if ($this->config->getUsername() !== NULL || $this->config->getPassword() !== NULL) {
      $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
    }
    // This endpoint requires HTTP basic authentication.
    if ($this->config->getUsername() !== NULL || $this->config->getPassword() !== NULL) {
      $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'POST',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation status
   *
   * Gets current attributes on Syncope and on the given External Resource, related to given user, group or  any object.
   *
   * @param  string $anyTypeKind anyTypeKind (required)
   * @param  string $anyKey user, group or any object: if value looks like a UUID then it is interpreted as key, otherwise as  a (user)name (required)
   * @param  string $resourceKey resource key (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function status($anyTypeKind, $anyKey, $resourceKey, $xSyncopeDomain) {
    $request = $this->statusRequest($anyTypeKind, $anyKey, $resourceKey, $xSyncopeDomain);

    try {
      $options = $this->createHttpClientOption();
      try {
        $response = $this->client->send($request, $options);
      }
      catch (RequestException $e) {
        throw new ApiException(
          "[{$e->getCode()}] {$e->getMessage()}",
          $e->getCode(),
          $e->getResponse() ? $e->getResponse()->getHeaders() : NULL,
          $e->getResponse() ? $e->getResponse()->getBody()->getContents() : NULL
        );
      }

      $statusCode = $response->getStatusCode();

      if ($statusCode < 200 || $statusCode > 299) {
        throw new ApiException(
          sprintf(
            '[%d] Error connecting to the API (%s)',
            $statusCode,
            $request->getUri()
          ),
          $statusCode,
          $response->getHeaders(),
          $response->getBody()
        );
      }

      return [NULL, $statusCode, $response->getHeaders()];

    }
    catch (ApiException $e) {
      switch ($e->getCode()) {
        case 400:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\OpenEuropa\SyncopePhpClient\Model\ErrorTO',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'status'
   *
   * @param  string $anyTypeKind anyTypeKind (required)
   * @param  string $anyKey user, group or any object: if value looks like a UUID then it is interpreted as key, otherwise as  a (user)name (required)
   * @param  string $resourceKey resource key (required)
   * @param  string $xSyncopeDomain (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function statusRequest($anyTypeKind, $anyKey, $resourceKey, $xSyncopeDomain) {
      // Verify the required parameter 'anyTypeKind' is set.
    if ($anyTypeKind === NULL || (is_array($anyTypeKind) && count($anyTypeKind) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $anyTypeKind when calling status'
      );
    }
      // Verify the required parameter 'anyKey' is set.
    if ($anyKey === NULL || (is_array($anyKey) && count($anyKey) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $anyKey when calling status'
      );
    }
      // Verify the required parameter 'resourceKey' is set.
    if ($resourceKey === NULL || (is_array($resourceKey) && count($resourceKey) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $resourceKey when calling status'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling status'
      );
    }

    $resourcePath = '/reconciliation';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // query params
    if ($anyTypeKind !== NULL) {
      $queryParams['anyTypeKind'] = ObjectSerializer::toQueryValue($anyTypeKind);
    }
    // query params
    if ($anyKey !== NULL) {
      $queryParams['anyKey'] = ObjectSerializer::toQueryValue($anyKey);
    }
    // query params
    if ($resourceKey !== NULL) {
      $queryParams['resourceKey'] = ObjectSerializer::toQueryValue($resourceKey);
    }
    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }


    // body params
    $_tempBody = NULL;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/json', 'application/yaml', 'application/xml']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/json', 'application/yaml', 'application/xml'],
        []
      );
    }

    // For model (json/xml).
    if (isset($_tempBody)) {
      // $_tempBody is the method argument, if present.
      $httpBody = $_tempBody;
      // \stdClass has no __toString(), so we should encode it manually.
      if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($httpBody);
      }
    } elseif (count($formParams) > 0) {
      if ($multipart) {
        $multipartContents = [];
        foreach ($formParams as $formParamName => $formParamValue) {
          $multipartContents[] = [
            'name' => $formParamName,
            'contents' => $formParamValue
          ];
        }
        // For HTTP post (form).
        $httpBody = new MultipartStream($multipartContents);

      } elseif ($headers['Content-Type'] === 'application/json') {
        $httpBody = \GuzzleHttp\json_encode($formParams);

      } else {
        // For HTTP post (form).
        $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
      }
    }

    // This endpoint requires HTTP basic authentication.
    if ($this->config->getUsername() !== NULL || $this->config->getPassword() !== NULL) {
      $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
    }
    // This endpoint requires HTTP basic authentication.
    if ($this->config->getUsername() !== NULL || $this->config->getPassword() !== NULL) {
      $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
    }

    $defaultHeaders = [];
    if ($this->config->getUserAgent()) {
      $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
    }

    $headers = array_merge(
      $defaultHeaders,
      $headerParams,
      $headers
    );

    $query = \GuzzleHttp\Psr7\build_query($queryParams);
    return new Request(
      'GET',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Create http client option
   *
   * @throws \RuntimeException on file opening failure
   * @return array of http client options
   */
  protected function createHttpClientOption() {
    $options = [];
    if ($this->config->getDebug()) {
      $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
      if (!$options[RequestOptions::DEBUG]) {
        throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
      }
    }

    return $options;
  }

}
