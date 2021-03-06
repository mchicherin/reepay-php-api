<?php
/**
 * Transaction
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
 * Transaction Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Transaction implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'state' => 'string',
        'invoice' => 'string',
        'type' => 'string',
        'amount' => 'int',
        'settled' => '\DateTime',
        'authorized' => '\DateTime',
        'failed' => '\DateTime',
        'refunded' => '\DateTime',
        'created' => '\DateTime',
        'card_transaction' => '\Swagger\Client\Model\CardTransaction',
        'manual_transaction' => '\Swagger\Client\Model\ManualTransaction'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'state' => null,
        'invoice' => null,
        'type' => null,
        'amount' => 'int32',
        'settled' => 'date-time',
        'authorized' => 'date-time',
        'failed' => 'date-time',
        'refunded' => 'date-time',
        'created' => 'date-time',
        'card_transaction' => null,
        'manual_transaction' => null
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
        'id' => 'id',
        'state' => 'state',
        'invoice' => 'invoice',
        'type' => 'type',
        'amount' => 'amount',
        'settled' => 'settled',
        'authorized' => 'authorized',
        'failed' => 'failed',
        'refunded' => 'refunded',
        'created' => 'created',
        'card_transaction' => 'card_transaction',
        'manual_transaction' => 'manual_transaction'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'state' => 'setState',
        'invoice' => 'setInvoice',
        'type' => 'setType',
        'amount' => 'setAmount',
        'settled' => 'setSettled',
        'authorized' => 'setAuthorized',
        'failed' => 'setFailed',
        'refunded' => 'setRefunded',
        'created' => 'setCreated',
        'card_transaction' => 'setCardTransaction',
        'manual_transaction' => 'setManualTransaction'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'state' => 'getState',
        'invoice' => 'getInvoice',
        'type' => 'getType',
        'amount' => 'getAmount',
        'settled' => 'getSettled',
        'authorized' => 'getAuthorized',
        'failed' => 'getFailed',
        'refunded' => 'getRefunded',
        'created' => 'getCreated',
        'card_transaction' => 'getCardTransaction',
        'manual_transaction' => 'getManualTransaction'
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

    const STATE_PENDING = 'pending';
    const STATE_PROCESSING = 'processing';
    const STATE_AUTHORIZED = 'authorized';
    const STATE_SETTLED = 'settled';
    const STATE_REFUNDED = 'refunded';
    const STATE_FAILED = 'failed';
    const STATE_CANCELLED = 'cancelled';
    const TYPE_SETTLE = 'settle';
    const TYPE_REFUND = 'refund';
    const TYPE_AUTHORIZATION = 'authorization';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_PENDING,
            self::STATE_PROCESSING,
            self::STATE_AUTHORIZED,
            self::STATE_SETTLED,
            self::STATE_REFUNDED,
            self::STATE_FAILED,
            self::STATE_CANCELLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SETTLE,
            self::TYPE_REFUND,
            self::TYPE_AUTHORIZATION,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['settled'] = isset($data['settled']) ? $data['settled'] : null;
        $this->container['authorized'] = isset($data['authorized']) ? $data['authorized'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['refunded'] = isset($data['refunded']) ? $data['refunded'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['card_transaction'] = isset($data['card_transaction']) ? $data['card_transaction'] : null;
        $this->container['manual_transaction'] = isset($data['manual_transaction']) ? $data['manual_transaction'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['invoice'] === null) {
            $invalid_properties[] = "'invoice' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] < 0)) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if ($this->container['settled'] === null) {
            $invalid_properties[] = "'settled' can't be null";
        }
        if ($this->container['failed'] === null) {
            $invalid_properties[] = "'failed' can't be null";
        }
        if ($this->container['refunded'] === null) {
            $invalid_properties[] = "'refunded' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalid_properties[] = "'created' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        if ($this->container['invoice'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['amount'] < 0) {
            return false;
        }
        if ($this->container['settled'] === null) {
            return false;
        }
        if ($this->container['failed'] === null) {
            return false;
        }
        if ($this->container['refunded'] === null) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Transaction id assigned by Reepay
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state State of the transaction, one of the following: `pending`, `processing`, `authorized`, `settled`, `refunded`, `failed`, `cancelled`
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets invoice
     * @return string
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     * @param string $invoice Invoice id
     * @return $this
     */
    public function setInvoice($invoice)
    {
        $this->container['invoice'] = $invoice;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Transaction type, one of the following: 'settle', 'refund', `authorization`
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int $amount The transaction amount
     * @return $this
     */
    public function setAmount($amount)
    {

        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling Transaction., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets settled
     * @return \DateTime
     */
    public function getSettled()
    {
        return $this->container['settled'];
    }

    /**
     * Sets settled
     * @param \DateTime $settled When the transaction was settled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setSettled($settled)
    {
        $this->container['settled'] = $settled;

        return $this;
    }

    /**
     * Gets authorized
     * @return \DateTime
     */
    public function getAuthorized()
    {
        return $this->container['authorized'];
    }

    /**
     * Sets authorized
     * @param \DateTime $authorized When the transaction was authorized, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setAuthorized($authorized)
    {
        $this->container['authorized'] = $authorized;

        return $this;
    }

    /**
     * Gets failed
     * @return \DateTime
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     * @param \DateTime $failed When the transaction failed, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;

        return $this;
    }

    /**
     * Gets refunded
     * @return \DateTime
     */
    public function getRefunded()
    {
        return $this->container['refunded'];
    }

    /**
     * Sets refunded
     * @param \DateTime $refunded When the transaction was refunded, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setRefunded($refunded)
    {
        $this->container['refunded'] = $refunded;

        return $this;
    }

    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created Date when the transaction was created. In [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets card_transaction
     * @return \Swagger\Client\Model\CardTransaction
     */
    public function getCardTransaction()
    {
        return $this->container['card_transaction'];
    }

    /**
     * Sets card_transaction
     * @param \Swagger\Client\Model\CardTransaction $card_transaction Specifics in case of card transaction
     * @return $this
     */
    public function setCardTransaction($card_transaction)
    {
        $this->container['card_transaction'] = $card_transaction;

        return $this;
    }

    /**
     * Gets manual_transaction
     * @return \Swagger\Client\Model\ManualTransaction
     */
    public function getManualTransaction()
    {
        return $this->container['manual_transaction'];
    }

    /**
     * Sets manual_transaction
     * @param \Swagger\Client\Model\ManualTransaction $manual_transaction Specifics in case of manual transaction
     * @return $this
     */
    public function setManualTransaction($manual_transaction)
    {
        $this->container['manual_transaction'] = $manual_transaction;

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


