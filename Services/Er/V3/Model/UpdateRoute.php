<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateRoute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateRoute';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attachmentId  路由下一跳
    * isBlackhole  是否为黑洞路由
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attachmentId' => 'string',
            'isBlackhole' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attachmentId  路由下一跳
    * isBlackhole  是否为黑洞路由
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attachmentId' => null,
        'isBlackhole' => null
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
    * attachmentId  路由下一跳
    * isBlackhole  是否为黑洞路由
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attachmentId' => 'attachment_id',
            'isBlackhole' => 'is_blackhole'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attachmentId  路由下一跳
    * isBlackhole  是否为黑洞路由
    *
    * @var string[]
    */
    protected static $setters = [
            'attachmentId' => 'setAttachmentId',
            'isBlackhole' => 'setIsBlackhole'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attachmentId  路由下一跳
    * isBlackhole  是否为黑洞路由
    *
    * @var string[]
    */
    protected static $getters = [
            'attachmentId' => 'getAttachmentId',
            'isBlackhole' => 'getIsBlackhole'
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
        $this->container['attachmentId'] = isset($data['attachmentId']) ? $data['attachmentId'] : null;
        $this->container['isBlackhole'] = isset($data['isBlackhole']) ? $data['isBlackhole'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['attachmentId']) && !preg_match("/[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/", $this->container['attachmentId'])) {
                $invalidProperties[] = "invalid value for 'attachmentId', must be conform to the pattern /[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/.";
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
    * Gets attachmentId
    *  路由下一跳
    *
    * @return string|null
    */
    public function getAttachmentId()
    {
        return $this->container['attachmentId'];
    }

    /**
    * Sets attachmentId
    *
    * @param string|null $attachmentId 路由下一跳
    *
    * @return $this
    */
    public function setAttachmentId($attachmentId)
    {
        $this->container['attachmentId'] = $attachmentId;
        return $this;
    }

    /**
    * Gets isBlackhole
    *  是否为黑洞路由
    *
    * @return bool|null
    */
    public function getIsBlackhole()
    {
        return $this->container['isBlackhole'];
    }

    /**
    * Sets isBlackhole
    *
    * @param bool|null $isBlackhole 是否为黑洞路由
    *
    * @return $this
    */
    public function setIsBlackhole($isBlackhole)
    {
        $this->container['isBlackhole'] = $isBlackhole;
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
