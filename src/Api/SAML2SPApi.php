<?php

/**
 * SAML2SPApi
 * PHP version 5
 *
 * @category Class
 * @package SyncopePhpClient
 * @author OpenAPI Generator team
 * @link https://openapi-generator.tech
 */

namespace SyncopePhpClient\SyncopePhpClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SyncopePhpClient\ApiException;
use SyncopePhpClient\Configuration;
use SyncopePhpClient\HeaderSelector;
use SyncopePhpClient\ObjectSerializer;

/**
 * SAML2SPApi Class Doc Comment.
 *
 * @category Class
 * @package SyncopePhpClient
 * @author OpenAPI Generator team
 * @link https://openapi-generator.tech
 */
class SAML2SPApi {
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
   * Operation createLoginRequest1
   *
   * Generates SAML 2.0 authentication request for the IdP matching the provided entity ID.
   *
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  string $spEntityID SAML 2.0 SP entity ID. (optional)
   * @param  string $idpEntityID SAML 2.0 IdP entity ID. (optional)
   *
   * @throws \SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function createLoginRequest1($xSyncopeDomain, $spEntityID = null, $idpEntityID = null) {
    $request = $this->createLoginRequest1Request($xSyncopeDomain, $spEntityID, $idpEntityID);

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
            '\SyncopePhpClient\Model\ErrorTO',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'createLoginRequest1'
   *
   * @param  string $xSyncopeDomain (required)
   * @param  string $spEntityID SAML 2.0 SP entity ID. (optional)
   * @param  string $idpEntityID SAML 2.0 IdP entity ID. (optional)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function createLoginRequest1Request($xSyncopeDomain, $spEntityID = null, $idpEntityID = null) {
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling createLoginRequest1'
      );
    }

    $resourcePath = '/saml2sp/serviceProvider/loginRequest';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // query params
    if ($spEntityID !== NULL) {
      $queryParams['spEntityID'] = ObjectSerializer::toQueryValue($spEntityID);
    }
    // query params
    if ($idpEntityID !== NULL) {
      $queryParams['idpEntityID'] = ObjectSerializer::toQueryValue($idpEntityID);
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
      'POST',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation createLogoutRequest1
   *
   * Generates SAML 2.0 logout request for the IdP matching the requesting access token.
   *
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  string $spEntityID SAML 2.0 SP entity ID. (optional)
   *
   * @throws \SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function createLogoutRequest1($xSyncopeDomain, $spEntityID = null) {
    $request = $this->createLogoutRequest1Request($xSyncopeDomain, $spEntityID);

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
            '\SyncopePhpClient\Model\ErrorTO',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'createLogoutRequest1'
   *
   * @param  string $xSyncopeDomain (required)
   * @param  string $spEntityID SAML 2.0 SP entity ID. (optional)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function createLogoutRequest1Request($xSyncopeDomain, $spEntityID = null) {
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling createLogoutRequest1'
      );
    }

    $resourcePath = '/saml2sp/serviceProvider/logoutRequest';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // query params
    if ($spEntityID !== NULL) {
      $queryParams['spEntityID'] = ObjectSerializer::toQueryValue($spEntityID);
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
      'POST',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation getMetadata
   *
   * Returns the XML metadata for the provided SAML 2.0 Service Provider.
   *
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  string $spEntityID SAML 2.0 SP entity ID. (optional)
   * @param  string $urlContext SAML 2.0 SP agent URL context (optional)
   *
   * @throws \SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function getMetadata($xSyncopeDomain, $spEntityID = null, $urlContext = null) {
    $request = $this->getMetadataRequest($xSyncopeDomain, $spEntityID, $urlContext);

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
            '\SyncopePhpClient\Model\ErrorTO',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'getMetadata'
   *
   * @param  string $xSyncopeDomain (required)
   * @param  string $spEntityID SAML 2.0 SP entity ID. (optional)
   * @param  string $urlContext SAML 2.0 SP agent URL context (optional)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function getMetadataRequest($xSyncopeDomain, $spEntityID = null, $urlContext = null) {
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling getMetadata'
      );
    }

    $resourcePath = '/saml2sp/serviceProvider';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // query params
    if ($spEntityID !== NULL) {
      $queryParams['spEntityID'] = ObjectSerializer::toQueryValue($spEntityID);
    }
    // query params
    if ($urlContext !== NULL) {
      $queryParams['urlContext'] = ObjectSerializer::toQueryValue($urlContext);
    }
    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }


    // body params
    $_tempBody = NULL;

    if ($multipart) {
      $headers = $this->headerSelector->selectHeadersForMultipart(
        ['application/xml']
      );
    } else {
      $headers = $this->headerSelector->selectHeaders(
        ['application/xml'],
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
   * Operation validateLoginResponse
   *
   * Validates the received SAML 2.0 authentication response and creates JWT for the matching user, if found.
   *
   * @param  string $xSyncopeDomain SAML response and relay state (required)
   * @param  \SyncopePhpClient\Model\SAML2ReceivedResponseTO $sAML2ReceivedResponseTO sAML2ReceivedResponseTO (optional)
   *
   * @throws \SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function validateLoginResponse($xSyncopeDomain, $sAML2ReceivedResponseTO = null) {
    $request = $this->validateLoginResponseRequest($xSyncopeDomain, $sAML2ReceivedResponseTO);

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
            '\SyncopePhpClient\Model\ErrorTO',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'validateLoginResponse'
   *
   * @param  string $xSyncopeDomain SAML response and relay state (required)
   * @param  \SyncopePhpClient\Model\SAML2ReceivedResponseTO $sAML2ReceivedResponseTO (optional)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function validateLoginResponseRequest($xSyncopeDomain, $sAML2ReceivedResponseTO = null) {
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling validateLoginResponse'
      );
    }

    $resourcePath = '/saml2sp/serviceProvider/loginResponse';
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
    if (isset($sAML2ReceivedResponseTO)) {
      $_tempBody = $sAML2ReceivedResponseTO;
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
   * Operation validateLogoutResponse
   *
   * Validates the received SAML 2.0 logout response.
   *
   * @param  string $xSyncopeDomain SAML response and relay state (required)
   * @param  \SyncopePhpClient\Model\SAML2ReceivedResponseTO $sAML2ReceivedResponseTO sAML2ReceivedResponseTO (optional)
   *
   * @throws \SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function validateLogoutResponse($xSyncopeDomain, $sAML2ReceivedResponseTO = null) {
    $request = $this->validateLogoutResponseRequest($xSyncopeDomain, $sAML2ReceivedResponseTO);

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
            '\SyncopePhpClient\Model\ErrorTO',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'validateLogoutResponse'
   *
   * @param  string $xSyncopeDomain SAML response and relay state (required)
   * @param  \SyncopePhpClient\Model\SAML2ReceivedResponseTO $sAML2ReceivedResponseTO (optional)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function validateLogoutResponseRequest($xSyncopeDomain, $sAML2ReceivedResponseTO = null) {
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling validateLogoutResponse'
      );
    }

    $resourcePath = '/saml2sp/serviceProvider/logoutResponse';
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
    if (isset($sAML2ReceivedResponseTO)) {
      $_tempBody = $sAML2ReceivedResponseTO;
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
