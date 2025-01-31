<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LbaasListenersResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LbaasListenersResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * listenerId  监听器ID
    * poolId  后端云服务器组ID
    * protocolPort  后端协议号，指后端云服务器监听的端口，取值范围[1,65535]
    * weight  权重，指后端云服务器经分发得到的请求数量比例，取值范围[0,1]，默认为1。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'listenerId' => 'string',
            'poolId' => 'string',
            'protocolPort' => 'int',
            'weight' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * listenerId  监听器ID
    * poolId  后端云服务器组ID
    * protocolPort  后端协议号，指后端云服务器监听的端口，取值范围[1,65535]
    * weight  权重，指后端云服务器经分发得到的请求数量比例，取值范围[0,1]，默认为1。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'listenerId' => null,
        'poolId' => null,
        'protocolPort' => 'int32',
        'weight' => 'int32'
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
    * listenerId  监听器ID
    * poolId  后端云服务器组ID
    * protocolPort  后端协议号，指后端云服务器监听的端口，取值范围[1,65535]
    * weight  权重，指后端云服务器经分发得到的请求数量比例，取值范围[0,1]，默认为1。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'listenerId' => 'listener_id',
            'poolId' => 'pool_id',
            'protocolPort' => 'protocol_port',
            'weight' => 'weight'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * listenerId  监听器ID
    * poolId  后端云服务器组ID
    * protocolPort  后端协议号，指后端云服务器监听的端口，取值范围[1,65535]
    * weight  权重，指后端云服务器经分发得到的请求数量比例，取值范围[0,1]，默认为1。
    *
    * @var string[]
    */
    protected static $setters = [
            'listenerId' => 'setListenerId',
            'poolId' => 'setPoolId',
            'protocolPort' => 'setProtocolPort',
            'weight' => 'setWeight'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * listenerId  监听器ID
    * poolId  后端云服务器组ID
    * protocolPort  后端协议号，指后端云服务器监听的端口，取值范围[1,65535]
    * weight  权重，指后端云服务器经分发得到的请求数量比例，取值范围[0,1]，默认为1。
    *
    * @var string[]
    */
    protected static $getters = [
            'listenerId' => 'getListenerId',
            'poolId' => 'getPoolId',
            'protocolPort' => 'getProtocolPort',
            'weight' => 'getWeight'
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
        $this->container['listenerId'] = isset($data['listenerId']) ? $data['listenerId'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['poolId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['poolId'])) {
                $invalidProperties[] = "invalid value for 'poolId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['protocolPort']) && ($this->container['protocolPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['protocolPort']) && ($this->container['protocolPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be bigger than or equal to 1.";
            }
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
    * Gets listenerId
    *  监听器ID
    *
    * @return string|null
    */
    public function getListenerId()
    {
        return $this->container['listenerId'];
    }

    /**
    * Sets listenerId
    *
    * @param string|null $listenerId 监听器ID
    *
    * @return $this
    */
    public function setListenerId($listenerId)
    {
        $this->container['listenerId'] = $listenerId;
        return $this;
    }

    /**
    * Gets poolId
    *  后端云服务器组ID
    *
    * @return string|null
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string|null $poolId 后端云服务器组ID
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets protocolPort
    *  后端协议号，指后端云服务器监听的端口，取值范围[1,65535]
    *
    * @return int|null
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int|null $protocolPort 后端协议号，指后端云服务器监听的端口，取值范围[1,65535]
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets weight
    *  权重，指后端云服务器经分发得到的请求数量比例，取值范围[0,1]，默认为1。
    *
    * @return int|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int|null $weight 权重，指后端云服务器经分发得到的请求数量比例，取值范围[0,1]，默认为1。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
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
}

