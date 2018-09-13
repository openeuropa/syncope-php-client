<?php

/**
 * UsersApi
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
 * UsersApi Class Doc Comment.
 *
 * @category Class
 * @package OpenEuropa\SyncopePhpClient
 * @author OpenAPI Generator team
 * @link https://openapi-generator.tech
 */
class UsersApi {
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
   * Operation associateUser
   *
   * Executes resource-related operations on given entity.
   *
   * @param  string $key Entity&#39;s key (required)
   * @param  string $action Association action (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\AssociationPatch $associationPatch associationPatch (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  string $ifMatch When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. (optional)
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function associateUser($key, $action, $xSyncopeDomain, $associationPatch, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
    $request = $this->associateUserRequest($key, $action, $xSyncopeDomain, $associationPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);

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
   * Create request for operation 'associateUser'
   *
   * @param  string $key Entity&#39;s key (required)
   * @param  string $action Association action (required)
   * @param  string $xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\AssociationPatch $associationPatch (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  string $ifMatch When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. (optional)
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function associateUserRequest($key, $action, $xSyncopeDomain, $associationPatch, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling associateUser'
      );
    }
      // Verify the required parameter 'action' is set.
    if ($action === NULL || (is_array($action) && count($action) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $action when calling associateUser'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling associateUser'
      );
    }
      // Verify the required parameter 'associationPatch' is set.
    if ($associationPatch === NULL || (is_array($associationPatch) && count($associationPatch) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $associationPatch when calling associateUser'
      );
    }

    $resourcePath = '/users/{key}/associate/{action}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // header params
    if ($prefer !== NULL) {
      $headerParams['Prefer'] = ObjectSerializer::toHeaderValue($prefer);
    }
    // header params
    if ($ifMatch !== NULL) {
      $headerParams['If-Match'] = ObjectSerializer::toHeaderValue($ifMatch);
    }
    // header params
    if ($xSyncopeNullPriorityAsync !== NULL) {
      $headerParams['X-Syncope-Null-Priority-Async'] = ObjectSerializer::toHeaderValue($xSyncopeNullPriorityAsync);
    }
    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }

    // path params
    if ($key !== NULL) {
      $resourcePath = str_replace(
        '{' . 'key' . '}',
        ObjectSerializer::toPathValue($key),
        $resourcePath
      );
    }
    // path params
    if ($action !== NULL) {
      $resourcePath = str_replace(
        '{' . 'action' . '}',
        ObjectSerializer::toPathValue($action),
        $resourcePath
      );
    }

    // body params
    $_tempBody = NULL;
    if (isset($associationPatch)) {
      $_tempBody = $associationPatch;
    }

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['multipart/mixed']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['multipart/mixed'],
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
   * Operation createUser
   *
   * Creates a new user.
   *
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\UserTO $userTO userTO (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   * @param  bool $storePassword storePassword (optional, default to true)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \OpenEuropa\SyncopePhpClient\Model\ErrorTO|\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult
   */
  public function createUser($xSyncopeDomain, $userTO, $prefer = 'return-content', $xSyncopeNullPriorityAsync = false, $storePassword = true) {
    $request = $this->createUserRequest($xSyncopeDomain, $userTO, $prefer, $xSyncopeNullPriorityAsync, $storePassword);

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

      $responseBody = $response->getBody();
      switch($statusCode) {
        case 400:
          if ('\OpenEuropa\SyncopePhpClient\Model\ErrorTO' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\OpenEuropa\SyncopePhpClient\Model\ErrorTO' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ErrorTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        case 201:
          if ('\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
      }

      $returnType = '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult';
      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

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
        case 201:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'createUser'
   *
   * @param  string $xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\UserTO $userTO (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   * @param  bool $storePassword (optional, default to true)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function createUserRequest($xSyncopeDomain, $userTO, $prefer = 'return-content', $xSyncopeNullPriorityAsync = false, $storePassword = true) {
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling createUser'
      );
    }
      // Verify the required parameter 'userTO' is set.
    if ($userTO === NULL || (is_array($userTO) && count($userTO) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $userTO when calling createUser'
      );
    }

    $resourcePath = '/users';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // query params
    if ($storePassword !== NULL) {
      $queryParams['storePassword'] = ObjectSerializer::toQueryValue($storePassword);
    }
    // header params
    if ($prefer !== NULL) {
      $headerParams['Prefer'] = ObjectSerializer::toHeaderValue($prefer);
    }
    // header params
    if ($xSyncopeNullPriorityAsync !== NULL) {
      $headerParams['X-Syncope-Null-Priority-Async'] = ObjectSerializer::toHeaderValue($xSyncopeNullPriorityAsync);
    }
    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }


    // body params
    $_tempBody = NULL;
    if (isset($userTO)) {
      $_tempBody = $userTO;
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
   * Operation deassociateUser
   *
   * Executes resource-related operations on given entity.
   *
   * @param  string $key Entity&#39;s key (required)
   * @param  string $action Deassociation action (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\DeassociationPatch $deassociationPatch deassociationPatch (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  string $ifMatch When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. (optional)
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function deassociateUser($key, $action, $xSyncopeDomain, $deassociationPatch, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
    $request = $this->deassociateUserRequest($key, $action, $xSyncopeDomain, $deassociationPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);

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
   * Create request for operation 'deassociateUser'
   *
   * @param  string $key Entity&#39;s key (required)
   * @param  string $action Deassociation action (required)
   * @param  string $xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\DeassociationPatch $deassociationPatch (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  string $ifMatch When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. (optional)
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function deassociateUserRequest($key, $action, $xSyncopeDomain, $deassociationPatch, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling deassociateUser'
      );
    }
      // Verify the required parameter 'action' is set.
    if ($action === NULL || (is_array($action) && count($action) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $action when calling deassociateUser'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling deassociateUser'
      );
    }
      // Verify the required parameter 'deassociationPatch' is set.
    if ($deassociationPatch === NULL || (is_array($deassociationPatch) && count($deassociationPatch) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $deassociationPatch when calling deassociateUser'
      );
    }

    $resourcePath = '/users/{key}/deassociate/{action}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // header params
    if ($prefer !== NULL) {
      $headerParams['Prefer'] = ObjectSerializer::toHeaderValue($prefer);
    }
    // header params
    if ($ifMatch !== NULL) {
      $headerParams['If-Match'] = ObjectSerializer::toHeaderValue($ifMatch);
    }
    // header params
    if ($xSyncopeNullPriorityAsync !== NULL) {
      $headerParams['X-Syncope-Null-Priority-Async'] = ObjectSerializer::toHeaderValue($xSyncopeNullPriorityAsync);
    }
    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }

    // path params
    if ($key !== NULL) {
      $resourcePath = str_replace(
        '{' . 'key' . '}',
        ObjectSerializer::toPathValue($key),
        $resourcePath
      );
    }
    // path params
    if ($action !== NULL) {
      $resourcePath = str_replace(
        '{' . 'action' . '}',
        ObjectSerializer::toPathValue($action),
        $resourcePath
      );
    }

    // body params
    $_tempBody = NULL;
    if (isset($deassociationPatch)) {
      $_tempBody = $deassociationPatch;
    }

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['multipart/mixed']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['multipart/mixed'],
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
   * Operation deleteUser
   *
   * Deletes any object matching provided key.
   *
   * @param  string $key key (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  string $ifMatch When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. (optional)
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \OpenEuropa\SyncopePhpClient\Model\ErrorTO|\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult
   */
  public function deleteUser($key, $xSyncopeDomain, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
    $request = $this->deleteUserRequest($key, $xSyncopeDomain, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);

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

      $responseBody = $response->getBody();
      switch($statusCode) {
        case 400:
          if ('\OpenEuropa\SyncopePhpClient\Model\ErrorTO' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\OpenEuropa\SyncopePhpClient\Model\ErrorTO' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ErrorTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        case 200:
          if ('\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
      }

      $returnType = '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult';
      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

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
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'deleteUser'
   *
   * @param  string $key (required)
   * @param  string $xSyncopeDomain (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  string $ifMatch When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. (optional)
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function deleteUserRequest($key, $xSyncopeDomain, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling deleteUser'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling deleteUser'
      );
    }

    $resourcePath = '/users/{key}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // header params
    if ($prefer !== NULL) {
      $headerParams['Prefer'] = ObjectSerializer::toHeaderValue($prefer);
    }
    // header params
    if ($ifMatch !== NULL) {
      $headerParams['If-Match'] = ObjectSerializer::toHeaderValue($ifMatch);
    }
    // header params
    if ($xSyncopeNullPriorityAsync !== NULL) {
      $headerParams['X-Syncope-Null-Priority-Async'] = ObjectSerializer::toHeaderValue($xSyncopeNullPriorityAsync);
    }
    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }

    // path params
    if ($key !== NULL) {
      $resourcePath = str_replace(
        '{' . 'key' . '}',
        ObjectSerializer::toPathValue($key),
        $resourcePath
      );
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
      'DELETE',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation deleteUserAttribute
   *
   * Deletes the attribute, owned by the given any object, for the given schema type and schema.
   *
   * @param  string $key any object key or name (required)
   * @param  string $schemaType schema type (required)
   * @param  string $schema schema (required)
   * @param  string $xSyncopeDomain any object key or name (required)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function deleteUserAttribute($key, $schemaType, $schema, $xSyncopeDomain) {
    $request = $this->deleteUserAttributeRequest($key, $schemaType, $schema, $xSyncopeDomain);

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
   * Create request for operation 'deleteUserAttribute'
   *
   * @param  string $key any object key or name (required)
   * @param  string $schemaType schema type (required)
   * @param  string $schema schema (required)
   * @param  string $xSyncopeDomain any object key or name (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function deleteUserAttributeRequest($key, $schemaType, $schema, $xSyncopeDomain) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling deleteUserAttribute'
      );
    }
      // Verify the required parameter 'schemaType' is set.
    if ($schemaType === NULL || (is_array($schemaType) && count($schemaType) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $schemaType when calling deleteUserAttribute'
      );
    }
      // Verify the required parameter 'schema' is set.
    if ($schema === NULL || (is_array($schema) && count($schema) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $schema when calling deleteUserAttribute'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling deleteUserAttribute'
      );
    }

    $resourcePath = '/users/{key}/{schemaType}/{schema}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }

    // path params
    if ($key !== NULL) {
      $resourcePath = str_replace(
        '{' . 'key' . '}',
        ObjectSerializer::toPathValue($key),
        $resourcePath
      );
    }
    // path params
    if ($schemaType !== NULL) {
      $resourcePath = str_replace(
        '{' . 'schemaType' . '}',
        ObjectSerializer::toPathValue($schemaType),
        $resourcePath
      );
    }
    // path params
    if ($schema !== NULL) {
      $resourcePath = str_replace(
        '{' . 'schema' . '}',
        ObjectSerializer::toPathValue($schema),
        $resourcePath
      );
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
      'DELETE',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation readUser
   *
   * Reads the any object matching the provided key.
   *
   * @param  string $key if value looks like a UUID then it is interpreted as key, otherwise as a (user)name (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \OpenEuropa\SyncopePhpClient\Model\ErrorTO|\OpenEuropa\SyncopePhpClient\Model\UserTO
   */
  public function readUser($key, $xSyncopeDomain) {
    $request = $this->readUserRequest($key, $xSyncopeDomain);

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

      $responseBody = $response->getBody();
      switch($statusCode) {
        case 400:
          if ('\OpenEuropa\SyncopePhpClient\Model\ErrorTO' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\OpenEuropa\SyncopePhpClient\Model\ErrorTO' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ErrorTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        case 200:
          if ('\OpenEuropa\SyncopePhpClient\Model\UserTO' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\OpenEuropa\SyncopePhpClient\Model\UserTO' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\UserTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
      }

      $returnType = '\OpenEuropa\SyncopePhpClient\Model\UserTO';
      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

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
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\OpenEuropa\SyncopePhpClient\Model\UserTO',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'readUser'
   *
   * @param  string $key if value looks like a UUID then it is interpreted as key, otherwise as a (user)name (required)
   * @param  string $xSyncopeDomain (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function readUserRequest($key, $xSyncopeDomain) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling readUser'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling readUser'
      );
    }

    $resourcePath = '/users/{key}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }

    // path params
    if ($key !== NULL) {
      $resourcePath = str_replace(
        '{' . 'key' . '}',
        ObjectSerializer::toPathValue($key),
        $resourcePath
      );
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
   * Operation readUserAttribute
   *
   * Reads the attribute, owned by the given any object, for the given schema type and schema.   Note that for the UserService, GroupService and AnyObjectService subclasses, if the key parameter  looks like a UUID then it is interpreted as as key, otherwise as a (user)name.
   *
   * @param  string $key any object key or name (required)
   * @param  string $schemaType schema type (required)
   * @param  string $schema schema (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function readUserAttribute($key, $schemaType, $schema, $xSyncopeDomain) {
    $request = $this->readUserAttributeRequest($key, $schemaType, $schema, $xSyncopeDomain);

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
   * Create request for operation 'readUserAttribute'
   *
   * @param  string $key any object key or name (required)
   * @param  string $schemaType schema type (required)
   * @param  string $schema schema (required)
   * @param  string $xSyncopeDomain (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function readUserAttributeRequest($key, $schemaType, $schema, $xSyncopeDomain) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling readUserAttribute'
      );
    }
      // Verify the required parameter 'schemaType' is set.
    if ($schemaType === NULL || (is_array($schemaType) && count($schemaType) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $schemaType when calling readUserAttribute'
      );
    }
      // Verify the required parameter 'schema' is set.
    if ($schema === NULL || (is_array($schema) && count($schema) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $schema when calling readUserAttribute'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling readUserAttribute'
      );
    }

    $resourcePath = '/users/{key}/{schemaType}/{schema}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }

    // path params
    if ($key !== NULL) {
      $resourcePath = str_replace(
        '{' . 'key' . '}',
        ObjectSerializer::toPathValue($key),
        $resourcePath
      );
    }
    // path params
    if ($schemaType !== NULL) {
      $resourcePath = str_replace(
        '{' . 'schemaType' . '}',
        ObjectSerializer::toPathValue($schemaType),
        $resourcePath
      );
    }
    // path params
    if ($schema !== NULL) {
      $resourcePath = str_replace(
        '{' . 'schema' . '}',
        ObjectSerializer::toPathValue($schema),
        $resourcePath
      );
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
   * Operation readUserAttributes
   *
   * Reads the list of attributes owned by the given any object for the given schema type.   Note that for the UserService, GroupService and AnyObjectService subclasses, if the key parameter  looks like a UUID then it is interpreted as as key, otherwise as a (user)name.
   *
   * @param  string $key any object key or name (required)
   * @param  string $schemaType schema type (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function readUserAttributes($key, $schemaType, $xSyncopeDomain) {
    $request = $this->readUserAttributesRequest($key, $schemaType, $xSyncopeDomain);

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
   * Create request for operation 'readUserAttributes'
   *
   * @param  string $key any object key or name (required)
   * @param  string $schemaType schema type (required)
   * @param  string $xSyncopeDomain (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function readUserAttributesRequest($key, $schemaType, $xSyncopeDomain) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling readUserAttributes'
      );
    }
      // Verify the required parameter 'schemaType' is set.
    if ($schemaType === NULL || (is_array($schemaType) && count($schemaType) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $schemaType when calling readUserAttributes'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling readUserAttributes'
      );
    }

    $resourcePath = '/users/{key}/{schemaType}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }

    // path params
    if ($key !== NULL) {
      $resourcePath = str_replace(
        '{' . 'key' . '}',
        ObjectSerializer::toPathValue($key),
        $resourcePath
      );
    }
    // path params
    if ($schemaType !== NULL) {
      $resourcePath = str_replace(
        '{' . 'schemaType' . '}',
        ObjectSerializer::toPathValue($schemaType),
        $resourcePath
      );
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
   * Operation searchUser
   *
   * Returns a paged list of any objects matching the given query.
   *
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  int $page query conditions (optional, default to 1)
   * @param  int $size size (optional, default to 25)
   * @param  string $orderby orderby (optional)
   * @param  string $realm realm (optional, default to '/')
   * @param  bool $details details (optional, default to true)
   * @param  string $fiql fiql (optional)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function searchUser($xSyncopeDomain, $page = 1, $size = 25, $orderby = null, $realm = '/', $details = true, $fiql = null) {
    $request = $this->searchUserRequest($xSyncopeDomain, $page, $size, $orderby, $realm, $details, $fiql);

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
   * Create request for operation 'searchUser'
   *
   * @param  string $xSyncopeDomain (required)
   * @param  int $page query conditions (optional, default to 1)
   * @param  int $size (optional, default to 25)
   * @param  string $orderby (optional)
   * @param  string $realm (optional, default to '/')
   * @param  bool $details (optional, default to true)
   * @param  string $fiql (optional)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function searchUserRequest($xSyncopeDomain, $page = 1, $size = 25, $orderby = null, $realm = '/', $details = true, $fiql = null) {
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling searchUser'
      );
    }

    $resourcePath = '/users';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // query params
    if ($page !== NULL) {
      $queryParams['page'] = ObjectSerializer::toQueryValue($page);
    }
    // query params
    if ($size !== NULL) {
      $queryParams['size'] = ObjectSerializer::toQueryValue($size);
    }
    // query params
    if ($orderby !== NULL) {
      $queryParams['orderby'] = ObjectSerializer::toQueryValue($orderby);
    }
    // query params
    if ($realm !== NULL) {
      $queryParams['realm'] = ObjectSerializer::toQueryValue($realm);
    }
    // query params
    if ($details !== NULL) {
      $queryParams['details'] = ObjectSerializer::toQueryValue($details);
    }
    // query params
    if ($fiql !== NULL) {
      $queryParams['fiql'] = ObjectSerializer::toQueryValue($fiql);
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
   * Operation statusUpdate
   *
   * Performs a status update on given user.
   *
   * @param  string $key User&#39;s key (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\StatusPatch $statusPatch statusPatch (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  string $ifMatch When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. (optional)
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \OpenEuropa\SyncopePhpClient\Model\ErrorTO|\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult
   */
  public function statusUpdate($key, $xSyncopeDomain, $statusPatch, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
    $request = $this->statusUpdateRequest($key, $xSyncopeDomain, $statusPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);

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

      $responseBody = $response->getBody();
      switch($statusCode) {
        case 400:
          if ('\OpenEuropa\SyncopePhpClient\Model\ErrorTO' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\OpenEuropa\SyncopePhpClient\Model\ErrorTO' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ErrorTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        case 200:
          if ('\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
      }

      $returnType = '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult';
      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

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
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'statusUpdate'
   *
   * @param  string $key User&#39;s key (required)
   * @param  string $xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\StatusPatch $statusPatch (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  string $ifMatch When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. (optional)
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function statusUpdateRequest($key, $xSyncopeDomain, $statusPatch, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling statusUpdate'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling statusUpdate'
      );
    }
      // Verify the required parameter 'statusPatch' is set.
    if ($statusPatch === NULL || (is_array($statusPatch) && count($statusPatch) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $statusPatch when calling statusUpdate'
      );
    }

    $resourcePath = '/users/{key}/status';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // header params
    if ($prefer !== NULL) {
      $headerParams['Prefer'] = ObjectSerializer::toHeaderValue($prefer);
    }
    // header params
    if ($ifMatch !== NULL) {
      $headerParams['If-Match'] = ObjectSerializer::toHeaderValue($ifMatch);
    }
    // header params
    if ($xSyncopeNullPriorityAsync !== NULL) {
      $headerParams['X-Syncope-Null-Priority-Async'] = ObjectSerializer::toHeaderValue($xSyncopeNullPriorityAsync);
    }
    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }

    // path params
    if ($key !== NULL) {
      $resourcePath = str_replace(
        '{' . 'key' . '}',
        ObjectSerializer::toPathValue($key),
        $resourcePath
      );
    }

    // body params
    $_tempBody = NULL;
    if (isset($statusPatch)) {
      $_tempBody = $statusPatch;
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
   * Operation updateUser
   *
   * Updates user matching the provided key.
   *
   * @param  string $key User&#39;s key (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\UserTO $userTO userTO (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  string $ifMatch When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. (optional)
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \OpenEuropa\SyncopePhpClient\Model\ErrorTO|\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult
   */
  public function updateUser($key, $xSyncopeDomain, $userTO, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
    $request = $this->updateUserRequest($key, $xSyncopeDomain, $userTO, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);

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

      $responseBody = $response->getBody();
      switch($statusCode) {
        case 400:
          if ('\OpenEuropa\SyncopePhpClient\Model\ErrorTO' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\OpenEuropa\SyncopePhpClient\Model\ErrorTO' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ErrorTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        case 200:
          if ('\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
      }

      $returnType = '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult';
      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

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
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'updateUser'
   *
   * @param  string $key User&#39;s key (required)
   * @param  string $xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\UserTO $userTO (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  string $ifMatch When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. (optional)
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function updateUserRequest($key, $xSyncopeDomain, $userTO, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling updateUser'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling updateUser'
      );
    }
      // Verify the required parameter 'userTO' is set.
    if ($userTO === NULL || (is_array($userTO) && count($userTO) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $userTO when calling updateUser'
      );
    }

    $resourcePath = '/users/{key}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // header params
    if ($prefer !== NULL) {
      $headerParams['Prefer'] = ObjectSerializer::toHeaderValue($prefer);
    }
    // header params
    if ($ifMatch !== NULL) {
      $headerParams['If-Match'] = ObjectSerializer::toHeaderValue($ifMatch);
    }
    // header params
    if ($xSyncopeNullPriorityAsync !== NULL) {
      $headerParams['X-Syncope-Null-Priority-Async'] = ObjectSerializer::toHeaderValue($xSyncopeNullPriorityAsync);
    }
    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }

    // path params
    if ($key !== NULL) {
      $resourcePath = str_replace(
        '{' . 'key' . '}',
        ObjectSerializer::toPathValue($key),
        $resourcePath
      );
    }

    // body params
    $_tempBody = NULL;
    if (isset($userTO)) {
      $_tempBody = $userTO;
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
      'PUT',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation updateUserAttribute
   *
   * Adds or replaces the attribute, owned by the given any object, for the given schema type and schema.
   *
   * @param  string $schema Attribute schema&#39;s key (required)
   * @param  string $key schema type (required)
   * @param  string $schemaType attribute (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\AttrTO $attrTO attrTO (required)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function updateUserAttribute($schema, $key, $schemaType, $xSyncopeDomain, $attrTO) {
    $request = $this->updateUserAttributeRequest($schema, $key, $schemaType, $xSyncopeDomain, $attrTO);

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
   * Create request for operation 'updateUserAttribute'
   *
   * @param  string $schema Attribute schema&#39;s key (required)
   * @param  string $key schema type (required)
   * @param  string $schemaType attribute (required)
   * @param  string $xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\AttrTO $attrTO (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function updateUserAttributeRequest($schema, $key, $schemaType, $xSyncopeDomain, $attrTO) {
      // Verify the required parameter 'schema' is set.
    if ($schema === NULL || (is_array($schema) && count($schema) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $schema when calling updateUserAttribute'
      );
    }
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling updateUserAttribute'
      );
    }
      // Verify the required parameter 'schemaType' is set.
    if ($schemaType === NULL || (is_array($schemaType) && count($schemaType) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $schemaType when calling updateUserAttribute'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling updateUserAttribute'
      );
    }
      // Verify the required parameter 'attrTO' is set.
    if ($attrTO === NULL || (is_array($attrTO) && count($attrTO) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $attrTO when calling updateUserAttribute'
      );
    }

    $resourcePath = '/users/{key}/{schemaType}/{schema}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }

    // path params
    if ($schema !== NULL) {
      $resourcePath = str_replace(
        '{' . 'schema' . '}',
        ObjectSerializer::toPathValue($schema),
        $resourcePath
      );
    }
    // path params
    if ($key !== NULL) {
      $resourcePath = str_replace(
        '{' . 'key' . '}',
        ObjectSerializer::toPathValue($key),
        $resourcePath
      );
    }
    // path params
    if ($schemaType !== NULL) {
      $resourcePath = str_replace(
        '{' . 'schemaType' . '}',
        ObjectSerializer::toPathValue($schemaType),
        $resourcePath
      );
    }

    // body params
    $_tempBody = NULL;
    if (isset($attrTO)) {
      $_tempBody = $attrTO;
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
      'PUT',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation updateUser_0
   *
   * Updates user matching the provided key.
   *
   * @param  string $key User&#39;s key (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\UserPatch $userPatch userPatch (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  string $ifMatch When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. (optional)
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \OpenEuropa\SyncopePhpClient\Model\ErrorTO|\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult
   */
  public function updateUser_0($key, $xSyncopeDomain, $userPatch, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
    $request = $this->updateUser_0Request($key, $xSyncopeDomain, $userPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);

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

      $responseBody = $response->getBody();
      switch($statusCode) {
        case 400:
          if ('\OpenEuropa\SyncopePhpClient\Model\ErrorTO' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\OpenEuropa\SyncopePhpClient\Model\ErrorTO' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ErrorTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        case 200:
          if ('\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
      }

      $returnType = '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult';
      $responseBody = $response->getBody();
      if ($returnType === '\SplFileObject') {
        $content = $responseBody; //stream goes to serializer
      } else {
        $content = $responseBody->getContents();
        if ($returnType !== 'string') {
          $content = json_decode($content);
        }
      }

      return [
        ObjectSerializer::deserialize($content, $returnType, []),
        $response->getStatusCode(),
        $response->getHeaders()
      ];

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
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'updateUser_0'
   *
   * @param  string $key User&#39;s key (required)
   * @param  string $xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\UserPatch $userPatch (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  string $ifMatch When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. (optional)
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function updateUser_0Request($key, $xSyncopeDomain, $userPatch, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling updateUser_0'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling updateUser_0'
      );
    }
      // Verify the required parameter 'userPatch' is set.
    if ($userPatch === NULL || (is_array($userPatch) && count($userPatch) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $userPatch when calling updateUser_0'
      );
    }

    $resourcePath = '/users/{key}';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // header params
    if ($prefer !== NULL) {
      $headerParams['Prefer'] = ObjectSerializer::toHeaderValue($prefer);
    }
    // header params
    if ($ifMatch !== NULL) {
      $headerParams['If-Match'] = ObjectSerializer::toHeaderValue($ifMatch);
    }
    // header params
    if ($xSyncopeNullPriorityAsync !== NULL) {
      $headerParams['X-Syncope-Null-Priority-Async'] = ObjectSerializer::toHeaderValue($xSyncopeNullPriorityAsync);
    }
    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }

    // path params
    if ($key !== NULL) {
      $resourcePath = str_replace(
        '{' . 'key' . '}',
        ObjectSerializer::toPathValue($key),
        $resourcePath
      );
    }

    // body params
    $_tempBody = NULL;
    if (isset($userPatch)) {
      $_tempBody = $userPatch;
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
      'PATCH',
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
