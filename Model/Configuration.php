<?php
/**
 * Configuration
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SaasPro
 *
 * APIs to interface with communications tax engine.<br />The API requires Basic authentication.<br />Users with access to multiple clients must also set request header parameter for <code>client_id</code>.<br />Set <code>client_profile_id</code> to specify profile to be used for taxation.<br /><br />Effective January 1st, 2022 all Avalara products will be enforcing TLS 1.2 server-side. Please ensure that your implementation sets a minimal of TLS 1.2 encryption when making web requests to Avalara APIs.
 *
 * The version of the OpenAPI document: v2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Configuration Class Doc Comment
 *
 * @category Class
 * @description Settings associated with a client profile configuration  Maybe associated with 0 to many profiles
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Configuration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Configuration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'traffic_study_overrides' => '\OpenAPI\Client\Model\TrafficStudyOverride[]',
        'return_non_billable' => 'bool',
        'tax_on_tax_algorithm' => 'int',
        'self_tax_algorithm' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'traffic_study_overrides' => null,
        'return_non_billable' => null,
        'tax_on_tax_algorithm' => 'int32',
        'self_tax_algorithm' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'traffic_study_overrides' => 'TrafficStudyOverrides',
        'return_non_billable' => 'ReturnNonBillable',
        'tax_on_tax_algorithm' => 'TaxOnTaxAlgorithm',
        'self_tax_algorithm' => 'SelfTaxAlgorithm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'traffic_study_overrides' => 'setTrafficStudyOverrides',
        'return_non_billable' => 'setReturnNonBillable',
        'tax_on_tax_algorithm' => 'setTaxOnTaxAlgorithm',
        'self_tax_algorithm' => 'setSelfTaxAlgorithm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'traffic_study_overrides' => 'getTrafficStudyOverrides',
        'return_non_billable' => 'getReturnNonBillable',
        'tax_on_tax_algorithm' => 'getTaxOnTaxAlgorithm',
        'self_tax_algorithm' => 'getSelfTaxAlgorithm'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['traffic_study_overrides'] = isset($data['traffic_study_overrides']) ? $data['traffic_study_overrides'] : null;
        $this->container['return_non_billable'] = isset($data['return_non_billable']) ? $data['return_non_billable'] : null;
        $this->container['tax_on_tax_algorithm'] = isset($data['tax_on_tax_algorithm']) ? $data['tax_on_tax_algorithm'] : null;
        $this->container['self_tax_algorithm'] = isset($data['self_tax_algorithm']) ? $data['self_tax_algorithm'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets traffic_study_overrides
     *
     * @return \OpenAPI\Client\Model\TrafficStudyOverride[]|null
     */
    public function getTrafficStudyOverrides()
    {
        return $this->container['traffic_study_overrides'];
    }

    /**
     * Sets traffic_study_overrides
     *
     * @param \OpenAPI\Client\Model\TrafficStudyOverride[]|null $traffic_study_overrides List of Traffic Study Overrides
     *
     * @return $this
     */
    public function setTrafficStudyOverrides($traffic_study_overrides)
    {
        $this->container['traffic_study_overrides'] = $traffic_study_overrides;

        return $this;
    }

    /**
     * Gets return_non_billable
     *
     * @return bool|null
     */
    public function getReturnNonBillable()
    {
        return $this->container['return_non_billable'];
    }

    /**
     * Sets return_non_billable
     *
     * @param bool|null $return_non_billable true : Return both non-billable and billable taxes in taxation response  false (default) : Return billable taxes only in taxation response  Default: false
     *
     * @return $this
     */
    public function setReturnNonBillable($return_non_billable)
    {
        $this->container['return_non_billable'] = $return_non_billable;

        return $this;
    }

    /**
     * Gets tax_on_tax_algorithm
     *
     * @return int|null
     */
    public function getTaxOnTaxAlgorithm()
    {
        return $this->container['tax_on_tax_algorithm'];
    }

    /**
     * Sets tax_on_tax_algorithm
     *
     * @param int|null $tax_on_tax_algorithm Tax-on-tax algorithm to be used in tax calculations  0 : Single pass  1 (default) : IterateOnTaxAmount  2 : IterateOnTaxableMeasure
     *
     * @return $this
     */
    public function setTaxOnTaxAlgorithm($tax_on_tax_algorithm)
    {
        $this->container['tax_on_tax_algorithm'] = $tax_on_tax_algorithm;

        return $this;
    }

    /**
     * Gets self_tax_algorithm
     *
     * @return int|null
     */
    public function getSelfTaxAlgorithm()
    {
        return $this->container['self_tax_algorithm'];
    }

    /**
     * Sets self_tax_algorithm
     *
     * @param int|null $self_tax_algorithm Self-tax algorithm to be used in tax calculations  0 (default) : Calculate tax on individual self-taxing taxes  1 : Calculate tax on aggregate of self-taxing taxes
     *
     * @return $this
     */
    public function setSelfTaxAlgorithm($self_tax_algorithm)
    {
        $this->container['self_tax_algorithm'] = $self_tax_algorithm;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


