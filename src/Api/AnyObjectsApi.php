<?php

/**
 * AnyObjectsApi
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
 * AnyObjectsApi Class Doc Comment.
 *
 * @category Class
 * @package OpenEuropa\SyncopePhpClient
 * @author OpenAPI Generator team
 * @link https://openapi-generator.tech
 */
class AnyObjectsApi {
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
   * Operation associateAnyObject
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
  public function associateAnyObject($key, $action, $xSyncopeDomain, $associationPatch, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
    $request = $this->associateAnyObjectRequest($key, $action, $xSyncopeDomain, $associationPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);

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
   * Create request for operation 'associateAnyObject'
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
  protected function associateAnyObjectRequest($key, $action, $xSyncopeDomain, $associationPatch, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling associateAnyObject'
      );
    }
      // Verify the required parameter 'action' is set.
    if ($action === NULL || (is_array($action) && count($action) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $action when calling associateAnyObject'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling associateAnyObject'
      );
    }
      // Verify the required parameter 'associationPatch' is set.
    if ($associationPatch === NULL || (is_array($associationPatch) && count($associationPatch) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $associationPatch when calling associateAnyObject'
      );
    }

    $resourcePath = '/anyObjects/{key}/associate/{action}';
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
   * Operation createAnyObject
   *
   * Creates a new any object.
   *
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\AnyObjectTO $anyObjectTO anyObjectTO (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \OpenEuropa\SyncopePhpClient\Model\ErrorTO|\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult
   */
  public function createAnyObject($xSyncopeDomain, $anyObjectTO, $prefer = 'return-content', $xSyncopeNullPriorityAsync = false) {
    $request = $this->createAnyObjectRequest($xSyncopeDomain, $anyObjectTO, $prefer, $xSyncopeNullPriorityAsync);

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
   * Create request for operation 'createAnyObject'
   *
   * @param  string $xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\AnyObjectTO $anyObjectTO (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function createAnyObjectRequest($xSyncopeDomain, $anyObjectTO, $prefer = 'return-content', $xSyncopeNullPriorityAsync = false) {
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling createAnyObject'
      );
    }
      // Verify the required parameter 'anyObjectTO' is set.
    if ($anyObjectTO === NULL || (is_array($anyObjectTO) && count($anyObjectTO) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $anyObjectTO when calling createAnyObject'
      );
    }

    $resourcePath = '/anyObjects';
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


    // body params
    $_tempBody = NULL;
    if (isset($anyObjectTO)) {
      $_tempBody = $anyObjectTO;
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
   * Operation deassociateAnyObject
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
  public function deassociateAnyObject($key, $action, $xSyncopeDomain, $deassociationPatch, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
    $request = $this->deassociateAnyObjectRequest($key, $action, $xSyncopeDomain, $deassociationPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);

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
   * Create request for operation 'deassociateAnyObject'
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
  protected function deassociateAnyObjectRequest($key, $action, $xSyncopeDomain, $deassociationPatch, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling deassociateAnyObject'
      );
    }
      // Verify the required parameter 'action' is set.
    if ($action === NULL || (is_array($action) && count($action) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $action when calling deassociateAnyObject'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling deassociateAnyObject'
      );
    }
      // Verify the required parameter 'deassociationPatch' is set.
    if ($deassociationPatch === NULL || (is_array($deassociationPatch) && count($deassociationPatch) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $deassociationPatch when calling deassociateAnyObject'
      );
    }

    $resourcePath = '/anyObjects/{key}/deassociate/{action}';
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
   * Operation deleteAnyObject
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
  public function deleteAnyObject($key, $xSyncopeDomain, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
    $request = $this->deleteAnyObjectRequest($key, $xSyncopeDomain, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);

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
   * Create request for operation 'deleteAnyObject'
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
  protected function deleteAnyObjectRequest($key, $xSyncopeDomain, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling deleteAnyObject'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling deleteAnyObject'
      );
    }

    $resourcePath = '/anyObjects/{key}';
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
   * Operation deleteAnyObjectAttribute
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
  public function deleteAnyObjectAttribute($key, $schemaType, $schema, $xSyncopeDomain) {
    $request = $this->deleteAnyObjectAttributeRequest($key, $schemaType, $schema, $xSyncopeDomain);

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
   * Create request for operation 'deleteAnyObjectAttribute'
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
  protected function deleteAnyObjectAttributeRequest($key, $schemaType, $schema, $xSyncopeDomain) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling deleteAnyObjectAttribute'
      );
    }
      // Verify the required parameter 'schemaType' is set.
    if ($schemaType === NULL || (is_array($schemaType) && count($schemaType) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $schemaType when calling deleteAnyObjectAttribute'
      );
    }
      // Verify the required parameter 'schema' is set.
    if ($schema === NULL || (is_array($schema) && count($schema) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $schema when calling deleteAnyObjectAttribute'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling deleteAnyObjectAttribute'
      );
    }

    $resourcePath = '/anyObjects/{key}/{schemaType}/{schema}';
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
   * Operation readAnyObject
   *
   * Reads the any object matching the provided key.
   *
   * @param  string $key if value looks like a UUID then it is interpreted as key, otherwise as a (user)name (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \OpenEuropa\SyncopePhpClient\Model\ErrorTO|\OpenEuropa\SyncopePhpClient\Model\AnyObjectTO
   */
  public function readAnyObject($key, $xSyncopeDomain) {
    $request = $this->readAnyObjectRequest($key, $xSyncopeDomain);

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
          if ('\OpenEuropa\SyncopePhpClient\Model\AnyObjectTO' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\OpenEuropa\SyncopePhpClient\Model\AnyObjectTO' !== 'string') {
                $content = json_decode($content);
            }
          }

          return $content;
          /*
          return [
            ObjectSerializer::deserialize($content, '\OpenEuropa\SyncopePhpClient\Model\AnyObjectTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
          */
      }

      $returnType = '\OpenEuropa\SyncopePhpClient\Model\AnyObjectTO';
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
            '\OpenEuropa\SyncopePhpClient\Model\AnyObjectTO',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'readAnyObject'
   *
   * @param  string $key if value looks like a UUID then it is interpreted as key, otherwise as a (user)name (required)
   * @param  string $xSyncopeDomain (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function readAnyObjectRequest($key, $xSyncopeDomain) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling readAnyObject'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling readAnyObject'
      );
    }

    $resourcePath = '/anyObjects/{key}';
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
   * Operation readAnyObjectAttribute
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
  public function readAnyObjectAttribute($key, $schemaType, $schema, $xSyncopeDomain) {
    $request = $this->readAnyObjectAttributeRequest($key, $schemaType, $schema, $xSyncopeDomain);

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
   * Create request for operation 'readAnyObjectAttribute'
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
  protected function readAnyObjectAttributeRequest($key, $schemaType, $schema, $xSyncopeDomain) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling readAnyObjectAttribute'
      );
    }
      // Verify the required parameter 'schemaType' is set.
    if ($schemaType === NULL || (is_array($schemaType) && count($schemaType) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $schemaType when calling readAnyObjectAttribute'
      );
    }
      // Verify the required parameter 'schema' is set.
    if ($schema === NULL || (is_array($schema) && count($schema) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $schema when calling readAnyObjectAttribute'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling readAnyObjectAttribute'
      );
    }

    $resourcePath = '/anyObjects/{key}/{schemaType}/{schema}';
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
   * Operation readAnyObjectAttributeForSchema
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
  public function readAnyObjectAttributeForSchema($key, $schemaType, $xSyncopeDomain) {
    $request = $this->readAnyObjectAttributeForSchemaRequest($key, $schemaType, $xSyncopeDomain);

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
   * Create request for operation 'readAnyObjectAttributeForSchema'
   *
   * @param  string $key any object key or name (required)
   * @param  string $schemaType schema type (required)
   * @param  string $xSyncopeDomain (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function readAnyObjectAttributeForSchemaRequest($key, $schemaType, $xSyncopeDomain) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling readAnyObjectAttributeForSchema'
      );
    }
      // Verify the required parameter 'schemaType' is set.
    if ($schemaType === NULL || (is_array($schemaType) && count($schemaType) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $schemaType when calling readAnyObjectAttributeForSchema'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling readAnyObjectAttributeForSchema'
      );
    }

    $resourcePath = '/anyObjects/{key}/{schemaType}';
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
   * Operation searchAnyObject
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
  public function searchAnyObject($xSyncopeDomain, $page = 1, $size = 25, $orderby = null, $realm = '/', $details = true, $fiql = null) {
    $request = $this->searchAnyObjectRequest($xSyncopeDomain, $page, $size, $orderby, $realm, $details, $fiql);

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
   * Create request for operation 'searchAnyObject'
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
  protected function searchAnyObjectRequest($xSyncopeDomain, $page = 1, $size = 25, $orderby = null, $realm = '/', $details = true, $fiql = null) {
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling searchAnyObject'
      );
    }

    $resourcePath = '/anyObjects';
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
   * Operation updateAnyObject
   *
   * Updates any object matching the provided key.
   *
   * @param  string $key Any Object&#39;s key (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\AnyObjectTO $anyObjectTO anyObjectTO (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  string $ifMatch When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. (optional)
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \OpenEuropa\SyncopePhpClient\Model\ErrorTO|\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult
   */
  public function updateAnyObject($key, $xSyncopeDomain, $anyObjectTO, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
    $request = $this->updateAnyObjectRequest($key, $xSyncopeDomain, $anyObjectTO, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);

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
   * Create request for operation 'updateAnyObject'
   *
   * @param  string $key Any Object&#39;s key (required)
   * @param  string $xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\AnyObjectTO $anyObjectTO (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  string $ifMatch When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. (optional)
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function updateAnyObjectRequest($key, $xSyncopeDomain, $anyObjectTO, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling updateAnyObject'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling updateAnyObject'
      );
    }
      // Verify the required parameter 'anyObjectTO' is set.
    if ($anyObjectTO === NULL || (is_array($anyObjectTO) && count($anyObjectTO) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $anyObjectTO when calling updateAnyObject'
      );
    }

    $resourcePath = '/anyObjects/{key}';
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
    if (isset($anyObjectTO)) {
      $_tempBody = $anyObjectTO;
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
   * Operation updateAnyObjectAttribute
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
  public function updateAnyObjectAttribute($schema, $key, $schemaType, $xSyncopeDomain, $attrTO) {
    $request = $this->updateAnyObjectAttributeRequest($schema, $key, $schemaType, $xSyncopeDomain, $attrTO);

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
   * Create request for operation 'updateAnyObjectAttribute'
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
  protected function updateAnyObjectAttributeRequest($schema, $key, $schemaType, $xSyncopeDomain, $attrTO) {
      // Verify the required parameter 'schema' is set.
    if ($schema === NULL || (is_array($schema) && count($schema) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $schema when calling updateAnyObjectAttribute'
      );
    }
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling updateAnyObjectAttribute'
      );
    }
      // Verify the required parameter 'schemaType' is set.
    if ($schemaType === NULL || (is_array($schemaType) && count($schemaType) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $schemaType when calling updateAnyObjectAttribute'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling updateAnyObjectAttribute'
      );
    }
      // Verify the required parameter 'attrTO' is set.
    if ($attrTO === NULL || (is_array($attrTO) && count($attrTO) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $attrTO when calling updateAnyObjectAttribute'
      );
    }

    $resourcePath = '/anyObjects/{key}/{schemaType}/{schema}';
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
   * Operation updateAnyObjectPartial
   *
   * Updates any object matching the provided key.
   *
   * @param  string $key Any Object&#39;s key (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\AnyObjectPatch $anyObjectPatch anyObjectPatch (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  string $ifMatch When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. (optional)
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \OpenEuropa\SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \OpenEuropa\SyncopePhpClient\Model\ErrorTO|\OpenEuropa\SyncopePhpClient\Model\ProvisioningResult
   */
  public function updateAnyObjectPartial($key, $xSyncopeDomain, $anyObjectPatch, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
    $request = $this->updateAnyObjectPartialRequest($key, $xSyncopeDomain, $anyObjectPatch, $prefer, $ifMatch, $xSyncopeNullPriorityAsync);

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
   * Create request for operation 'updateAnyObjectPartial'
   *
   * @param  string $key Any Object&#39;s key (required)
   * @param  string $xSyncopeDomain (required)
   * @param  \OpenEuropa\SyncopePhpClient\Model\AnyObjectPatch $anyObjectPatch (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  string $ifMatch When the provided ETag value does not match the latest modification date of the entity, an error is reported and the requested operation is not performed. (optional)
   * @param  bool $xSyncopeNullPriorityAsync If &#39;true&#39;, instructs the propagation process not to wait for completion when communicating with External Resources with no priority set (optional, default to false)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function updateAnyObjectPartialRequest($key, $xSyncopeDomain, $anyObjectPatch, $prefer = 'return-content', $ifMatch = null, $xSyncopeNullPriorityAsync = false) {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling updateAnyObjectPartial'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling updateAnyObjectPartial'
      );
    }
      // Verify the required parameter 'anyObjectPatch' is set.
    if ($anyObjectPatch === NULL || (is_array($anyObjectPatch) && count($anyObjectPatch) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $anyObjectPatch when calling updateAnyObjectPartial'
      );
    }

    $resourcePath = '/anyObjects/{key}';
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
    if (isset($anyObjectPatch)) {
      $_tempBody = $anyObjectPatch;
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
