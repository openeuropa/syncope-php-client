<?php

/**
 * UserSelfApi
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
 * UserSelfApi Class Doc Comment.
 *
 * @category Class
 * @package SyncopePhpClient
 * @author OpenAPI Generator team
 * @link https://openapi-generator.tech
 */
class UserSelfApi {
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
   * Operation confirmPasswordReset
   *
   * Reset the password value for the user matching the provided token, if available and still valid.  If the token actually matches one of users, and if it is still valid at the time of submission, the matching  user's password value is set as provided. The new password value will need anyway to comply with all relevant  password policies.
   *
   * @param  string $token password reset token (required)
   * @param  string $xSyncopeDomain new password to be set (required)
   * @param  string $body body (optional)
   *
   * @throws \SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function confirmPasswordReset($token, $xSyncopeDomain, $body = null) {
    $request = $this->confirmPasswordResetRequest($token, $xSyncopeDomain, $body);

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
   * Create request for operation 'confirmPasswordReset'
   *
   * @param  string $token password reset token (required)
   * @param  string $xSyncopeDomain new password to be set (required)
   * @param  string $body (optional)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function confirmPasswordResetRequest($token, $xSyncopeDomain, $body = null) {
      // Verify the required parameter 'token' is set.
    if ($token === NULL || (is_array($token) && count($token) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $token when calling confirmPasswordReset'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling confirmPasswordReset'
      );
    }

    $resourcePath = '/users/self/confirmPasswordReset';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // query params
    if ($token !== NULL) {
      $queryParams['token'] = ObjectSerializer::toQueryValue($token);
    }
    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }


    // body params
    $_tempBody = NULL;
    if (isset($body)) {
      $_tempBody = $body;
    }

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
   * Operation create1
   *
   * Self-registration for new user.
   *
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  \SyncopePhpClient\Model\UserTO $userTO userTO (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  bool $storePassword whether password shall be stored internally (optional, default to true)
   *
   * @throws \SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \SyncopePhpClient\Model\ErrorTO|\SyncopePhpClient\Model\ProvisioningResult
   */
  public function create1($xSyncopeDomain, $userTO, $prefer = 'return-content', $storePassword = true) {
    $request = $this->create1Request($xSyncopeDomain, $userTO, $prefer, $storePassword);

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
          if ('\SyncopePhpClient\Model\ErrorTO' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\SyncopePhpClient\Model\ErrorTO' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\SyncopePhpClient\Model\ErrorTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        case 201:
          if ('\SyncopePhpClient\Model\ProvisioningResult' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\SyncopePhpClient\Model\ProvisioningResult' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\SyncopePhpClient\Model\ProvisioningResult', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
      }

      $returnType = '\SyncopePhpClient\Model\ProvisioningResult';
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
            '\SyncopePhpClient\Model\ErrorTO',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 201:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\SyncopePhpClient\Model\ProvisioningResult',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'create1'
   *
   * @param  string $xSyncopeDomain (required)
   * @param  \SyncopePhpClient\Model\UserTO $userTO (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   * @param  bool $storePassword whether password shall be stored internally (optional, default to true)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function create1Request($xSyncopeDomain, $userTO, $prefer = 'return-content', $storePassword = true) {
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling create1'
      );
    }
      // Verify the required parameter 'userTO' is set.
    if ($userTO === NULL || (is_array($userTO) && count($userTO) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $userTO when calling create1'
      );
    }

    $resourcePath = '/users/self';
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
   * Operation delete1
   *
   * Self-deletes user.
   *
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   *
   * @throws \SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function delete1($xSyncopeDomain) {
    $request = $this->delete1Request($xSyncopeDomain);

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
   * Create request for operation 'delete1'
   *
   * @param  string $xSyncopeDomain (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function delete1Request($xSyncopeDomain) {
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling delete1'
      );
    }

    $resourcePath = '/users/self';
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
      'DELETE',
      $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
      $headers,
      $httpBody
    );
  }

  /**
   * Operation mustChangePassword
   *
   * Changes own password when change was forced by an administrator.
   *
   * @param  string $xSyncopeDomain the password value to update (required)
   * @param  string $body body (optional)
   *
   * @throws \SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function mustChangePassword($xSyncopeDomain, $body = null) {
    $request = $this->mustChangePasswordRequest($xSyncopeDomain, $body);

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
   * Create request for operation 'mustChangePassword'
   *
   * @param  string $xSyncopeDomain the password value to update (required)
   * @param  string $body (optional)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function mustChangePasswordRequest($xSyncopeDomain, $body = null) {
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling mustChangePassword'
      );
    }

    $resourcePath = '/users/self/mustChangePassword';
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
    if (isset($body)) {
      $_tempBody = $body;
    }

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
   * Operation read29
   *
   * Returns the user making the service call.
   *
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   *
   * @throws \SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \SyncopePhpClient\Model\ErrorTO|\SyncopePhpClient\Model\UserTO
   */
  public function read29($xSyncopeDomain) {
    $request = $this->read29Request($xSyncopeDomain);

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
          if ('\SyncopePhpClient\Model\ErrorTO' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\SyncopePhpClient\Model\ErrorTO' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\SyncopePhpClient\Model\ErrorTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        case 200:
          if ('\SyncopePhpClient\Model\UserTO' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\SyncopePhpClient\Model\UserTO' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\SyncopePhpClient\Model\UserTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
      }

      $returnType = '\SyncopePhpClient\Model\UserTO';
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
            '\SyncopePhpClient\Model\ErrorTO',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\SyncopePhpClient\Model\UserTO',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'read29'
   *
   * @param  string $xSyncopeDomain (required)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function read29Request($xSyncopeDomain) {
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling read29'
      );
    }

    $resourcePath = '/users/self';
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
   * Operation requestPasswordReset
   *
   * Provides answer for the security question configured for user matching the given username, if any.  If provided answer matches the one stored for that user, a password reset token is internally generated,  otherwise an error is returned.
   *
   * @param  string $username username for which the security answer is provided (required)
   * @param  string $xSyncopeDomain actual answer text (required)
   * @param  string $body body (optional)
   *
   * @throws \SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return void
   */
  public function requestPasswordReset($username, $xSyncopeDomain, $body = null) {
    $request = $this->requestPasswordResetRequest($username, $xSyncopeDomain, $body);

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
   * Create request for operation 'requestPasswordReset'
   *
   * @param  string $username username for which the security answer is provided (required)
   * @param  string $xSyncopeDomain actual answer text (required)
   * @param  string $body (optional)
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function requestPasswordResetRequest($username, $xSyncopeDomain, $body = null) {
      // Verify the required parameter 'username' is set.
    if ($username === NULL || (is_array($username) && count($username) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $username when calling requestPasswordReset'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling requestPasswordReset'
      );
    }

    $resourcePath = '/users/self/requestPasswordReset';
    $formParams = [];
    $queryParams = [];
    $headerParams = [];
    $httpBody = '';
    $multipart = FALSE;

    // query params
    if ($username !== NULL) {
      $queryParams['username'] = ObjectSerializer::toQueryValue($username);
    }
    // header params
    if ($xSyncopeDomain !== NULL) {
      $headerParams['X-Syncope-Domain'] = ObjectSerializer::toHeaderValue($xSyncopeDomain);
    }


    // body params
    $_tempBody = NULL;
    if (isset($body)) {
      $_tempBody = $body;
    }

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
   * Operation status1
   *
   * Self-perform a status update.
   *
   * @param  string $key User&#39;s key (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  \SyncopePhpClient\Model\StatusPatch $statusPatch statusPatch (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   *
   * @throws \SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \SyncopePhpClient\Model\ErrorTO|\SyncopePhpClient\Model\ProvisioningResult
   */
  public function status1($key, $xSyncopeDomain, $statusPatch, $prefer = 'return-content') {
    $request = $this->status1Request($key, $xSyncopeDomain, $statusPatch, $prefer);

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
          if ('\SyncopePhpClient\Model\ErrorTO' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\SyncopePhpClient\Model\ErrorTO' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\SyncopePhpClient\Model\ErrorTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        case 200:
          if ('\SyncopePhpClient\Model\ProvisioningResult' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\SyncopePhpClient\Model\ProvisioningResult' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\SyncopePhpClient\Model\ProvisioningResult', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
      }

      $returnType = '\SyncopePhpClient\Model\ProvisioningResult';
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
            '\SyncopePhpClient\Model\ErrorTO',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\SyncopePhpClient\Model\ProvisioningResult',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'status1'
   *
   * @param  string $key User&#39;s key (required)
   * @param  string $xSyncopeDomain (required)
   * @param  \SyncopePhpClient\Model\StatusPatch $statusPatch (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function status1Request($key, $xSyncopeDomain, $statusPatch, $prefer = 'return-content') {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling status1'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling status1'
      );
    }
      // Verify the required parameter 'statusPatch' is set.
    if ($statusPatch === NULL || (is_array($statusPatch) && count($statusPatch) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $statusPatch when calling status1'
      );
    }

    $resourcePath = '/users/self/{key}/status';
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
   * Operation update1
   *
   * Self-updates user.
   *
   * @param  string $key User&#39;s key (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  \SyncopePhpClient\Model\UserTO $userTO userTO (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   *
   * @throws \SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \SyncopePhpClient\Model\ErrorTO|\SyncopePhpClient\Model\ProvisioningResult
   */
  public function update1($key, $xSyncopeDomain, $userTO, $prefer = 'return-content') {
    $request = $this->update1Request($key, $xSyncopeDomain, $userTO, $prefer);

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
          if ('\SyncopePhpClient\Model\ErrorTO' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\SyncopePhpClient\Model\ErrorTO' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\SyncopePhpClient\Model\ErrorTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        case 200:
          if ('\SyncopePhpClient\Model\ProvisioningResult' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\SyncopePhpClient\Model\ProvisioningResult' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\SyncopePhpClient\Model\ProvisioningResult', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
      }

      $returnType = '\SyncopePhpClient\Model\ProvisioningResult';
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
            '\SyncopePhpClient\Model\ErrorTO',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\SyncopePhpClient\Model\ProvisioningResult',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'update1'
   *
   * @param  string $key User&#39;s key (required)
   * @param  string $xSyncopeDomain (required)
   * @param  \SyncopePhpClient\Model\UserTO $userTO (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function update1Request($key, $xSyncopeDomain, $userTO, $prefer = 'return-content') {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling update1'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling update1'
      );
    }
      // Verify the required parameter 'userTO' is set.
    if ($userTO === NULL || (is_array($userTO) && count($userTO) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $userTO when calling update1'
      );
    }

    $resourcePath = '/users/self/{key}';
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
   * Operation update2
   *
   * Self-updates user.
   *
   * @param  string $key User&#39;s key (required)
   * @param  string $xSyncopeDomain xSyncopeDomain (required)
   * @param  \SyncopePhpClient\Model\UserPatch $userPatch userPatch (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   *
   * @throws \SyncopePhpClient\ApiException on non-2xx response
   * @throws \InvalidArgumentException
   * @return \SyncopePhpClient\Model\ErrorTO|\SyncopePhpClient\Model\ProvisioningResult
   */
  public function update2($key, $xSyncopeDomain, $userPatch, $prefer = 'return-content') {
    $request = $this->update2Request($key, $xSyncopeDomain, $userPatch, $prefer);

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
          if ('\SyncopePhpClient\Model\ErrorTO' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\SyncopePhpClient\Model\ErrorTO' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\SyncopePhpClient\Model\ErrorTO', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
        case 200:
          if ('\SyncopePhpClient\Model\ProvisioningResult' === '\SplFileObject') {
            $content = $responseBody; //stream goes to serializer
          } else {
            $content = $responseBody->getContents();
            if ('\SyncopePhpClient\Model\ProvisioningResult' !== 'string') {
                $content = json_decode($content);
            }
          }

          return [
            ObjectSerializer::deserialize($content, '\SyncopePhpClient\Model\ProvisioningResult', []),
            $response->getStatusCode(),
            $response->getHeaders()
          ];
      }

      $returnType = '\SyncopePhpClient\Model\ProvisioningResult';
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
            '\SyncopePhpClient\Model\ErrorTO',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
        case 200:
          $data = ObjectSerializer::deserialize(
            $e->getResponseBody(),
            '\SyncopePhpClient\Model\ProvisioningResult',
            $e->getResponseHeaders()
          );
          $e->setResponseObject($data);
          break;
      }
      throw $e;
    }
  }

  /**
   * Create request for operation 'update2'
   *
   * @param  string $key User&#39;s key (required)
   * @param  string $xSyncopeDomain (required)
   * @param  \SyncopePhpClient\Model\UserPatch $userPatch (required)
   * @param  string $prefer Allows client to specify a preference for the result to be returned from the server (optional, default to 'return-content')
   *
   * @throws \InvalidArgumentException
   *
   * @return \GuzzleHttp\Psr7\Request
   */
  protected function update2Request($key, $xSyncopeDomain, $userPatch, $prefer = 'return-content') {
      // Verify the required parameter 'key' is set.
    if ($key === NULL || (is_array($key) && count($key) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $key when calling update2'
      );
    }
      // Verify the required parameter 'xSyncopeDomain' is set.
    if ($xSyncopeDomain === NULL || (is_array($xSyncopeDomain) && count($xSyncopeDomain) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $xSyncopeDomain when calling update2'
      );
    }
      // Verify the required parameter 'userPatch' is set.
    if ($userPatch === NULL || (is_array($userPatch) && count($userPatch) === 0)) {
      throw new \InvalidArgumentException(
        'Missing the required parameter $userPatch when calling update2'
      );
    }

    $resourcePath = '/users/self/{key}';
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
