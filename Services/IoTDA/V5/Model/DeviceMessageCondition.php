<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeviceMessageCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeviceMessageCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * productId  **参数说明**：设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。
    * topic  **参数说明**：产品关联的topic信息，用于过滤消息中指定topic消息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'productId' => 'string',
            'topic' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * productId  **参数说明**：设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。
    * topic  **参数说明**：产品关联的topic信息，用于过滤消息中指定topic消息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'productId' => null,
        'topic' => null
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
    * productId  **参数说明**：设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。
    * topic  **参数说明**：产品关联的topic信息，用于过滤消息中指定topic消息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'productId' => 'product_id',
            'topic' => 'topic'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * productId  **参数说明**：设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。
    * topic  **参数说明**：产品关联的topic信息，用于过滤消息中指定topic消息。
    *
    * @var string[]
    */
    protected static $setters = [
            'productId' => 'setProductId',
            'topic' => 'setTopic'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * productId  **参数说明**：设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。
    * topic  **参数说明**：产品关联的topic信息，用于过滤消息中指定topic消息。
    *
    * @var string[]
    */
    protected static $getters = [
            'productId' => 'getProductId',
            'topic' => 'getTopic'
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
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) > 128)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['topic']) && (mb_strlen($this->container['topic']) > 64)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be smaller than or equal to 64.";
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
    * Gets productId
    *  **参数说明**：设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId **参数说明**：设备关联的产品ID，用于唯一标识一个产品模型，在管理门户导入产品模型后由平台分配获得。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets topic
    *  **参数说明**：产品关联的topic信息，用于过滤消息中指定topic消息。
    *
    * @return string|null
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string|null $topic **参数说明**：产品关联的topic信息，用于过滤消息中指定topic消息。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
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

