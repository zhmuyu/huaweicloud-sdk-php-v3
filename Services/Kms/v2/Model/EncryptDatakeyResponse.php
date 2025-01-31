<?php

namespace HuaweiCloud\SDK\Kms\v2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EncryptDatakeyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EncryptDatakeyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  密钥ID
    * cipherText  DEK密文16进制，两位表示1byte。
    * datakeyLength  DEK字节长度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'cipherText' => 'string',
            'datakeyLength' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  密钥ID
    * cipherText  DEK密文16进制，两位表示1byte。
    * datakeyLength  DEK字节长度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'cipherText' => null,
        'datakeyLength' => null
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
    * keyId  密钥ID
    * cipherText  DEK密文16进制，两位表示1byte。
    * datakeyLength  DEK字节长度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'cipherText' => 'cipher_text',
            'datakeyLength' => 'datakey_length'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  密钥ID
    * cipherText  DEK密文16进制，两位表示1byte。
    * datakeyLength  DEK字节长度。
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'cipherText' => 'setCipherText',
            'datakeyLength' => 'setDatakeyLength'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  密钥ID
    * cipherText  DEK密文16进制，两位表示1byte。
    * datakeyLength  DEK字节长度。
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'cipherText' => 'getCipherText',
            'datakeyLength' => 'getDatakeyLength'
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
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['cipherText'] = isset($data['cipherText']) ? $data['cipherText'] : null;
        $this->container['datakeyLength'] = isset($data['datakeyLength']) ? $data['datakeyLength'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) < 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['cipherText']) && (mb_strlen($this->container['cipherText']) > 8192)) {
                $invalidProperties[] = "invalid value for 'cipherText', the character length must be smaller than or equal to 8192.";
            }
            if (!is_null($this->container['cipherText']) && (mb_strlen($this->container['cipherText']) < 8)) {
                $invalidProperties[] = "invalid value for 'cipherText', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['datakeyLength']) && (mb_strlen($this->container['datakeyLength']) > 10)) {
                $invalidProperties[] = "invalid value for 'datakeyLength', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['datakeyLength']) && (mb_strlen($this->container['datakeyLength']) < 0)) {
                $invalidProperties[] = "invalid value for 'datakeyLength', the character length must be bigger than or equal to 0.";
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
    * Gets keyId
    *  密钥ID
    *
    * @return string|null
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param string|null $keyId 密钥ID
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
        return $this;
    }

    /**
    * Gets cipherText
    *  DEK密文16进制，两位表示1byte。
    *
    * @return string|null
    */
    public function getCipherText()
    {
        return $this->container['cipherText'];
    }

    /**
    * Sets cipherText
    *
    * @param string|null $cipherText DEK密文16进制，两位表示1byte。
    *
    * @return $this
    */
    public function setCipherText($cipherText)
    {
        $this->container['cipherText'] = $cipherText;
        return $this;
    }

    /**
    * Gets datakeyLength
    *  DEK字节长度。
    *
    * @return string|null
    */
    public function getDatakeyLength()
    {
        return $this->container['datakeyLength'];
    }

    /**
    * Sets datakeyLength
    *
    * @param string|null $datakeyLength DEK字节长度。
    *
    * @return $this
    */
    public function setDatakeyLength($datakeyLength)
    {
        $this->container['datakeyLength'] = $datakeyLength;
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

