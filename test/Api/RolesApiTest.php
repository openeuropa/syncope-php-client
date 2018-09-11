<?php
/**
 * RolesApiTest.
 * PHP version 5
 *
 * @category Class
 * @package OpenEuropa\SyncopePhpClient
 * @author OpenAPI Generator team
 * @link https://openapi-generator.tech
 */

/**
 * Apache Syncope
 *
 * Apache Syncope 2.1.2-SNAPSHOT
 *
 * OpenAPI spec version: 2.1.2-SNAPSHOT
 * Contact: dev@syncope.apache.org
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace OpenEuropa\SyncopePhpClient\Test\Api;

use \OpenEuropa\SyncopePhpClient\Configuration;
use \OpenEuropa\SyncopePhpClient\ApiException;
use \OpenEuropa\SyncopePhpClient\ObjectSerializer;

use \OpenEuropa\SyncopePhpClient\Api\RolesApi;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenEuropa\SyncopePhpClient\HeaderSelector;

use \OpenEuropa\SyncopePhpClient\Model\RoleTO;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;

/**
 * RolesApiTest Class Doc Comment.
 *
 * @category Class.
 * @package OpenEuropa\SyncopePhpClient
 * @author OpenAPI Generator team
 * @link https://openapi-generator.tech
 */
class RolesApiTest extends \PHPUnit_Framework_TestCase
{
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
     * Setup before running any test cases.
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case.
     */
    public function setUp()  {
      $this->client = new Client();
      $this->config = new Configuration();
      $this->headerSelector = new HeaderSelector();
    }

    /**
     * Clean up after running each test case.
     */
    public function tearDown()  {
    }

    /**
     * Clean up after running all test cases.
     */
    public static function tearDownAfterClass()  {
    }

    /**
     * Test case for createRole.
     *
     * Creates a new role..
     *
     */
    public function testCreateRole()  {

      // Initialize needed parameters and RoleApi instance.
      $RoleApi = new RolesApi($this->client, $this->config, $this->headerSelector);
      $roleTO = new RoleTO([]);
      $result = $RoleApi->createRole('tester', $roleTO);

      // $this->assertEquals($result[1], 200);

    }

    /**
     * Test case for deleteRole.
     *
     * Deletes the role matching the provided key..
     *
     */
    public function testDeleteRole()  {
    }

    /**
     * Test case for getConsoleLayoutInfo.
     *
     * Gets the console layout information as JSON string for the role with the given key, if available..
     *
     */
    public function testGetConsoleLayoutInfo()  {
    }

    /**
     * Test case for listRoles.
     *
     * Returns a list of all roles..
     *
     */
    public function testListRoles()  {
    }

    /**
     * Test case for readRole.
     *
     * Returns role with matching key..
     *
     */
    public function testReadRole()  {
    }

    /**
     * Test case for removeConsoleLayoutInfo.
     *
     * Removes the console layout information for the role with the given key, if available..
     *
     */
    public function testRemoveConsoleLayoutInfo()  {
    }

    /**
     * Test case for setConsoleLayoutInfo.
     *
     * Sets the console layout information as JSON string for the role with the given key, if available..
     *
     */
    public function testSetConsoleLayoutInfo()  {
    }

    /**
     * Test case for updateRole.
     *
     * Updates the role matching the provided key..
     *
     */
    public function testUpdateRole()  {
    }
}
