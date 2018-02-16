<?php
/**
 * CreateSubscriptionInvoice
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reepay API
 *
 * REST API to manage Reepay resources
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * CreateSubscriptionInvoice Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CreateSubscriptionInvoice implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateSubscriptionInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'handle' => 'string',
        'instant' => 'bool',
        'due' => 'string',
        'settle' => '\Swagger\Client\Model\Settle',
        'plan_manual' => 'bool',
        'collect_additional_costs' => 'bool',
        'collect_credit' => 'bool',
        'apply_discounts' => 'bool',
        'order_lines' => '\Swagger\Client\Model\CreateOrderLine[]',
        'manual_transfer' => '\Swagger\Client\Model\ManualSettleTransfer'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'handle' => null,
        'instant' => null,
        'due' => null,
        'settle' => null,
        'plan_manual' => null,
        'collect_additional_costs' => null,
        'collect_credit' => null,
        'apply_discounts' => null,
        'order_lines' => null,
        'manual_transfer' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'handle' => 'handle',
        'instant' => 'instant',
        'due' => 'due',
        'settle' => 'settle',
        'plan_manual' => 'plan_manual',
        'collect_additional_costs' => 'collect_additional_costs',
        'collect_credit' => 'collect_credit',
        'apply_discounts' => 'apply_discounts',
        'order_lines' => 'order_lines',
        'manual_transfer' => 'manual_transfer'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'handle' => 'setHandle',
        'instant' => 'setInstant',
        'due' => 'setDue',
        'settle' => 'setSettle',
        'plan_manual' => 'setPlanManual',
        'collect_additional_costs' => 'setCollectAdditionalCosts',
        'collect_credit' => 'setCollectCredit',
        'apply_discounts' => 'setApplyDiscounts',
        'order_lines' => 'setOrderLines',
        'manual_transfer' => 'setManualTransfer'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'handle' => 'getHandle',
        'instant' => 'getInstant',
        'due' => 'getDue',
        'settle' => 'getSettle',
        'plan_manual' => 'getPlanManual',
        'collect_additional_costs' => 'getCollectAdditionalCosts',
        'collect_credit' => 'getCollectCredit',
        'apply_discounts' => 'getApplyDiscounts',
        'order_lines' => 'getOrderLines',
        'manual_transfer' => 'getManualTransfer'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['instant'] = isset($data['instant']) ? $data['instant'] : null;
        $this->container['due'] = isset($data['due']) ? $data['due'] : null;
        $this->container['settle'] = isset($data['settle']) ? $data['settle'] : null;
        $this->container['plan_manual'] = isset($data['plan_manual']) ? $data['plan_manual'] : null;
        $this->container['collect_additional_costs'] = isset($data['collect_additional_costs']) ? $data['collect_additional_costs'] : null;
        $this->container['collect_credit'] = isset($data['collect_credit']) ? $data['collect_credit'] : null;
        $this->container['apply_discounts'] = isset($data['apply_discounts']) ? $data['apply_discounts'] : null;
        $this->container['order_lines'] = isset($data['order_lines']) ? $data['order_lines'] : null;
        $this->container['manual_transfer'] = isset($data['manual_transfer']) ? $data['manual_transfer'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['handle'] === null) {
            $invalid_properties[] = "'handle' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['handle'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets handle
     * @return string
     */
    public function getHandle()
    {
        return $this->container['handle'];
    }

    /**
     * Sets handle
     * @param string $handle Per account unique handle for the invoice. Max length 255 with allowable characters [a-zA-Z0-9_.-@].
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

        return $this;
    }

    /**
     * Gets instant
     * @return bool
     */
    public function getInstant()
    {
        return $this->container['instant'];
    }

    /**
     * Sets instant
     * @param bool $instant Create and process invoice instantly and leave as either `settled` or `failed`. The default is to leave the invoice for automatic processing and potential dunning management as other subscription invoices (default false).
     * @return $this
     */
    public function setInstant($instant)
    {
        $this->container['instant'] = $instant;

        return $this;
    }

    /**
     * Gets due
     * @return string
     */
    public function getDue()
    {
        return $this->container['due'];
    }

    /**
     * Sets due
     * @param string $due Optional due date and time on the form yyyy-MM-dd, yyyyMMdd, yyyy-MM-ddTHH:mm and yyyy-MM-ddTHH:mm:ss from which the invoice is eligible to be collected. Will not be used when `instant` is used.
     * @return $this
     */
    public function setDue($due)
    {
        $this->container['due'] = $due;

        return $this;
    }

    /**
     * Gets settle
     * @return \Swagger\Client\Model\Settle
     */
    public function getSettle()
    {
        return $this->container['settle'];
    }

    /**
     * Sets settle
     * @param \Swagger\Client\Model\Settle $settle Optional settle to perform after creation using a different payment method. If the settle fails the status will be `failed` if instant or `pending` if not instant. The `due` date will be ignored for subscription invoice create.
     * @return $this
     */
    public function setSettle($settle)
    {
        $this->container['settle'] = $settle;

        return $this;
    }

    /**
     * Gets plan_manual
     * @return bool
     */
    public function getPlanManual()
    {
        return $this->container['plan_manual'];
    }

    /**
     * Sets plan_manual
     * @param bool $plan_manual Create manually for plan by adding plan product and potential add-ons as order line (default false)
     * @return $this
     */
    public function setPlanManual($plan_manual)
    {
        $this->container['plan_manual'] = $plan_manual;

        return $this;
    }

    /**
     * Gets collect_additional_costs
     * @return bool
     */
    public function getCollectAdditionalCosts()
    {
        return $this->container['collect_additional_costs'];
    }

    /**
     * Sets collect_additional_costs
     * @param bool $collect_additional_costs Collect pending additional costs and transfer to invoice (default true)
     * @return $this
     */
    public function setCollectAdditionalCosts($collect_additional_costs)
    {
        $this->container['collect_additional_costs'] = $collect_additional_costs;

        return $this;
    }

    /**
     * Gets collect_credit
     * @return bool
     */
    public function getCollectCredit()
    {
        return $this->container['collect_credit'];
    }

    /**
     * Sets collect_credit
     * @param bool $collect_credit Collect pending credit and transfer to invoice (default true)
     * @return $this
     */
    public function setCollectCredit($collect_credit)
    {
        $this->container['collect_credit'] = $collect_credit;

        return $this;
    }

    /**
     * Gets apply_discounts
     * @return bool
     */
    public function getApplyDiscounts()
    {
        return $this->container['apply_discounts'];
    }

    /**
     * Sets apply_discounts
     * @param bool $apply_discounts Apply potential discounts for the subscription to the invoice order lines (default true)
     * @return $this
     */
    public function setApplyDiscounts($apply_discounts)
    {
        $this->container['apply_discounts'] = $apply_discounts;

        return $this;
    }

    /**
     * Gets order_lines
     * @return \Swagger\Client\Model\CreateOrderLine[]
     */
    public function getOrderLines()
    {
        return $this->container['order_lines'];
    }

    /**
     * Sets order_lines
     * @param \Swagger\Client\Model\CreateOrderLine[] $order_lines Optional additional order lines for the invoice
     * @return $this
     */
    public function setOrderLines($order_lines)
    {
        $this->container['order_lines'] = $order_lines;

        return $this;
    }

    /**
     * Gets manual_transfer
     * @return \Swagger\Client\Model\ManualSettleTransfer
     */
    public function getManualTransfer()
    {
        return $this->container['manual_transfer'];
    }

    /**
     * Sets manual_transfer
     * @param \Swagger\Client\Model\ManualSettleTransfer $manual_transfer Optional manual transfer. If given the invoice will be settled using the manual transfer transaction.
     * @return $this
     */
    public function setManualTransfer($manual_transfer)
    {
        $this->container['manual_transfer'] = $manual_transfer;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


