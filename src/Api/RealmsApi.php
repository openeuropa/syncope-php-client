<?php

/**
 * RealmsApi
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
 * RealmsApi Class Doc Comment.
 *
 * @category Class
 * @package OpenEuropa\SyncopePhpClient
 * @author OpenAPI Generator team
 * @link https://openapi-generator.tech
 */
class RealmsApi {
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
   * Operation createRootedRealm
   *
   * Creates a new realm under the given path.
   *
   * @param  string $parentPath parentPath (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\RealmTO $realmTO realmTO (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \OpenEuropa\SyncopePhpClient\Model\ErrorTO|\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult
   */
  public function createRootedRealm($parentPath, $xSyncopeDomain, $realmTO, $prefer = 'return-content', $xSyncopeNullPriorityAsync = false) {
    $request = $this->createRootedRealmRequest($parentPath, $xSyncopeDomain, $realmTO, $prefer, $xSyncopeNullPriorityAsync);

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

          return $content;
          /*
          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ErrorTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
          */
        case 201:
          if ('\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult' !== 'string') {
                $content = json_decode($content);
            }
          }

          return $content;
          /*
          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
          */
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
   * Create request for operation 'createRootedRealm'
   *
   * @param  string $parentPath (required)
   * @param  string $xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\RealmTO $realmTO (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function createRootedRealmRequest($parentPath, $xSyncopeDomain, $realmTO, $prefer = 'return-content', $xSyncopeNullPriorityAsync = false) {
      // Verify the required parameter 'parentPath' is set.
    if ($parentPath === NULL || (is_array($parentPath) && count($parentPath) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $parentPath when calling createRootedRealm'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling createRootedRealm'
      );
    }
      // Verify the required parameter 'realmTO' is set.
    if ($realmTO === NULL || (is_array($realmTO) && count($realmTO) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $realmTO when calling createRootedRealm'
      );
    }

    $resourcePath = '/realms/{parentPath}';
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
    if ($xSyncopeNullPriorityAsync !== NULL) {
      $headerParams['X-Syncope-Null-Priority-Async'] = ObjectSerializer::toHeaderValue($xSyncopeNullPriorityAsync);
    }
    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }

    // path params
    if ($parentPath !== NULL) {
      $resourcePath = str_replace(
        '{' . 'parentPath' . '}',
        ObjectSerializer::toPathValue($parentPath),
        $resourcePath
      );
    }

    // body params
    $_tempBody = NULL;
    if (isset($realmTO)) {
      $_tempBody = $realmTO;
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
   * Operation deleteRealm
   *
   * Deletes the realm under the given path.
   *
   * @param  string $fullPath fullPath (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \OpenEuropa\SyncopePhpClient\Model\ErrorTO|\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult
   */
  public function deleteRealm($fullPath, $xSyncopeDomain, $prefer = 'return-content', $xSyncopeNullPriorityAsync = false) {
    $request = $this->deleteRealmRequest($fullPath, $xSyncopeDomain, $prefer, $xSyncopeNullPriorityAsync);

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

          return $content;
          /*
          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ErrorTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
          */
        case 200:
          if ('\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult' !== 'string') {
                $content = json_decode($content);
            }
          }

          return $content;
          /*
          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
          */
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
   * Create request for operation 'deleteRealm'
   *
   * @param  string $fullPath (required)
   * @param  string $xSyncopeDomain (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function deleteRealmRequest($fullPath, $xSyncopeDomain, $prefer = 'return-content', $xSyncopeNullPriorityAsync = false) {
      // Verify the required parameter 'fullPath' is set.
    if ($fullPath === NULL || (is_array($fullPath) && count($fullPath) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $fullPath when calling deleteRealm'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling deleteRealm'
      );
    }

    $resourcePath = '/realms/{fullPath}';
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
    if ($xSyncopeNullPriorityAsync !== NULL) {
      $headerParams['X-Syncope-Null-Priority-Async'] = ObjectSerializer::toHeaderValue($xSyncopeNullPriorityAsync);
    }
    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }

    // path params
    if ($fullPath !== NULL) {
      $resourcePath = str_replace(
        '{' . 'fullPath' . '}',
        ObjectSerializer::toPathValue($fullPath),
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
   * Operation listRealm
   *
   * Returns realms rooted at the given path.
   *
   * @param  string $fullPath full path of the root realm where to read from (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \OpenEuropa\SyncopePhpClient\Model\ErrorTO|\OpenEuropa\SyncopePhpClient\Model\GroupTO
   */
  public function listRealm($fullPath, $xSyncopeDomain) {
    $request = $this->listRealmRequest($fullPath, $xSyncopeDomain);

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

          return $content;
          /*
          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ErrorTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
          */
        case 200:
          if ('\OpenEuropa\SyncopePhpClient\Model\GroupTO' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\OpenEuropa\SyncopePhpClient\Model\GroupTO' !== 'string') {
                $content = json_decode($content);
            }
          }

          return $content;
          /*
          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\GroupTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
          */
      }

      $returnType = '\OpenEuropa\SyncopePhpClient\Model\GroupTO';
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
            '\OpenEuropa\SyncopePhpClient\Model\GroupTO',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'listRealm'
   *
   * @param  string $fullPath full path of the root realm where to read from (required)
   * @param  string $xSyncopeDomain (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function listRealmRequest($fullPath, $xSyncopeDomain) {
      // Verify the required parameter 'fullPath' is set.
    if ($fullPath === NULL || (is_array($fullPath) && count($fullPath) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $fullPath when calling listRealm'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling listRealm'
      );
    }

    $resourcePath = '/realms/{fullPath}';
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
    if ($fullPath !== NULL) {
      $resourcePath = str_replace(
        '{' . 'fullPath' . '}',
        ObjectSerializer::toPathValue($fullPath),
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
   * Operation listRealm_0
   *
   * Returns a list of all realms.
   *
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function listRealm_0($xSyncopeDomain) {
    $request = $this->listRealm_0Request($xSyncopeDomain);

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
   * Create request for operation 'listRealm_0'
   *
   * @param  string $xSyncopeDomain (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function listRealm_0Request($xSyncopeDomain) {
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling listRealm_0'
      );
    }

    $resourcePath = '/realms';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

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
   * Operation updateRealm
   *
   * Updates the realm under the given path.
   *
   * @param  string $fullPath Realm&#39;s key (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\RealmTO $realmTO realmTO (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \OpenEuropa\SyncopePhpClient\Model\ErrorTO|\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult
   */
  public function updateRealm($fullPath, $xSyncopeDomain, $realmTO, $prefer = 'return-content', $xSyncopeNullPriorityAsync = false) {
    $request = $this->updateRealmRequest($fullPath, $xSyncopeDomain, $realmTO, $prefer, $xSyncopeNullPriorityAsync);

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

          return $content;
          /*
          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ErrorTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
          */
        case 200:
          if ('\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult' !== 'string') {
                $content = json_decode($content);
            }
          }

          return $content;
          /*
          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
          */
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
   * Create request for operation 'updateRealm'
   *
   * @param  string $fullPath Realm&#39;s key (required)
   * @param  string $xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\RealmTO $realmTO (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function updateRealmRequest($fullPath, $xSyncopeDomain, $realmTO, $prefer = 'return-content', $xSyncopeNullPriorityAsync = false) {
      // Verify the required parameter 'fullPath' is set.
    if ($fullPath === NULL || (is_array($fullPath) && count($fullPath) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $fullPath when calling updateRealm'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling updateRealm'
      );
    }
      // Verify the required parameter 'realmTO' is set.
    if ($realmTO === NULL || (is_array($realmTO) && count($realmTO) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $realmTO when calling updateRealm'
      );
    }

    $resourcePath = '/realms/{fullPath}';
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
    if ($xSyncopeNullPriorityAsync !== NULL) {
      $headerParams['X-Syncope-Null-Priority-Async'] = ObjectSerializer::toHeaderValue($xSyncopeNullPriorityAsync);
    }
    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }

    // path params
    if ($fullPath !== NULL) {
      $resourcePath = str_replace(
        '{' . 'fullPath' . '}',
        ObjectSerializer::toPathValue($fullPath),
        $resourcePath
      );
    }

    // body params
    $_tempBody = NULL;
    if (isset($realmTO)) {
      $_tempBody = $realmTO;
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
