<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DmsRocketMQForwarding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DmsRocketMQForwarding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addresses  **参数说明**：转发rocketMQ消息对应的地址列表
    * topic  **参数说明**：转发rocketMQ消息关联的topic信息。
    * username  **参数说明**：转发rocketMQ关联的用户名信息。
    * password  **参数说明**：转发rocketMQ关联的密码信息。
    * enableSsl  是否开启SSL，默认为true。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addresses' => '\HuaweiCloud\SDK\IoTDA\V5\Model\NetAddress[]',
            'topic' => 'string',
            'username' => 'string',
            'password' => 'string',
            'enableSsl' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addresses  **参数说明**：转发rocketMQ消息对应的地址列表
    * topic  **参数说明**：转发rocketMQ消息关联的topic信息。
    * username  **参数说明**：转发rocketMQ关联的用户名信息。
    * password  **参数说明**：转发rocketMQ关联的密码信息。
    * enableSsl  是否开启SSL，默认为true。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addresses' => null,
        'topic' => null,
        'username' => null,
        'password' => null,
        'enableSsl' => null
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
    * addresses  **参数说明**：转发rocketMQ消息对应的地址列表
    * topic  **参数说明**：转发rocketMQ消息关联的topic信息。
    * username  **参数说明**：转发rocketMQ关联的用户名信息。
    * password  **参数说明**：转发rocketMQ关联的密码信息。
    * enableSsl  是否开启SSL，默认为true。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addresses' => 'addresses',
            'topic' => 'topic',
            'username' => 'username',
            'password' => 'password',
            'enableSsl' => 'enable_ssl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addresses  **参数说明**：转发rocketMQ消息对应的地址列表
    * topic  **参数说明**：转发rocketMQ消息关联的topic信息。
    * username  **参数说明**：转发rocketMQ关联的用户名信息。
    * password  **参数说明**：转发rocketMQ关联的密码信息。
    * enableSsl  是否开启SSL，默认为true。
    *
    * @var string[]
    */
    protected static $setters = [
            'addresses' => 'setAddresses',
            'topic' => 'setTopic',
            'username' => 'setUsername',
            'password' => 'setPassword',
            'enableSsl' => 'setEnableSsl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addresses  **参数说明**：转发rocketMQ消息对应的地址列表
    * topic  **参数说明**：转发rocketMQ消息关联的topic信息。
    * username  **参数说明**：转发rocketMQ关联的用户名信息。
    * password  **参数说明**：转发rocketMQ关联的密码信息。
    * enableSsl  是否开启SSL，默认为true。
    *
    * @var string[]
    */
    protected static $getters = [
            'addresses' => 'getAddresses',
            'topic' => 'getTopic',
            'username' => 'getUsername',
            'password' => 'getPassword',
            'enableSsl' => 'getEnableSsl'
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
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['enableSsl'] = isset($data['enableSsl']) ? $data['enableSsl'] : true;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['addresses'] === null) {
            $invalidProperties[] = "'addresses' can't be null";
        }
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
            if ((mb_strlen($this->container['topic']) > 256)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['topic']) < 1)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
            if ((mb_strlen($this->container['username']) > 256)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['username']) < 1)) {
                $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
            if ((mb_strlen($this->container['password']) > 256)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['password']) < 1)) {
                $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 1.";
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
    * Gets addresses
    *  **参数说明**：转发rocketMQ消息对应的地址列表
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\NetAddress[]
    */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
    * Sets addresses
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\NetAddress[] $addresses **参数说明**：转发rocketMQ消息对应的地址列表
    *
    * @return $this
    */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;
        return $this;
    }

    /**
    * Gets topic
    *  **参数说明**：转发rocketMQ消息关联的topic信息。
    *
    * @return string
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string $topic **参数说明**：转发rocketMQ消息关联的topic信息。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets username
    *  **参数说明**：转发rocketMQ关联的用户名信息。
    *
    * @return string
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string $username **参数说明**：转发rocketMQ关联的用户名信息。
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets password
    *  **参数说明**：转发rocketMQ关联的密码信息。
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string $password **参数说明**：转发rocketMQ关联的密码信息。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets enableSsl
    *  是否开启SSL，默认为true。
    *
    * @return bool|null
    */
    public function getEnableSsl()
    {
        return $this->container['enableSsl'];
    }

    /**
    * Sets enableSsl
    *
    * @param bool|null $enableSsl 是否开启SSL，默认为true。
    *
    * @return $this
    */
    public function setEnableSsl($enableSsl)
    {
        $this->container['enableSsl'] = $enableSsl;
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

