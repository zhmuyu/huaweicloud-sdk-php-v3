<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SourceCdnResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SourceCdnResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  从指定域名获取对象。
    * protocol  协议类型，支持http和https协议。
    * authenticationType  鉴权类型: NONE, QINIU_PRIVATE_AUTHENTICATION, ALIYUN_OSS_A, ALIYUN_OSS_B, ALIYUN_OSS_C, KSYUN_PRIVATE_AUTHENTICATION, AZURE_SAS_TOKEN
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'protocol' => 'string',
            'authenticationType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  从指定域名获取对象。
    * protocol  协议类型，支持http和https协议。
    * authenticationType  鉴权类型: NONE, QINIU_PRIVATE_AUTHENTICATION, ALIYUN_OSS_A, ALIYUN_OSS_B, ALIYUN_OSS_C, KSYUN_PRIVATE_AUTHENTICATION, AZURE_SAS_TOKEN
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'protocol' => null,
        'authenticationType' => null
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
    * domain  从指定域名获取对象。
    * protocol  协议类型，支持http和https协议。
    * authenticationType  鉴权类型: NONE, QINIU_PRIVATE_AUTHENTICATION, ALIYUN_OSS_A, ALIYUN_OSS_B, ALIYUN_OSS_C, KSYUN_PRIVATE_AUTHENTICATION, AZURE_SAS_TOKEN
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'protocol' => 'protocol',
            'authenticationType' => 'authentication_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  从指定域名获取对象。
    * protocol  协议类型，支持http和https协议。
    * authenticationType  鉴权类型: NONE, QINIU_PRIVATE_AUTHENTICATION, ALIYUN_OSS_A, ALIYUN_OSS_B, ALIYUN_OSS_C, KSYUN_PRIVATE_AUTHENTICATION, AZURE_SAS_TOKEN
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'protocol' => 'setProtocol',
            'authenticationType' => 'setAuthenticationType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  从指定域名获取对象。
    * protocol  协议类型，支持http和https协议。
    * authenticationType  鉴权类型: NONE, QINIU_PRIVATE_AUTHENTICATION, ALIYUN_OSS_A, ALIYUN_OSS_B, ALIYUN_OSS_C, KSYUN_PRIVATE_AUTHENTICATION, AZURE_SAS_TOKEN
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'protocol' => 'getProtocol',
            'authenticationType' => 'getAuthenticationType'
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
    const PROTOCOL_HTTP = 'http';
    const PROTOCOL_HTTPS = 'https';
    const AUTHENTICATION_TYPE_NONE = 'NONE';
    const AUTHENTICATION_TYPE_QINIU_PRIVATE_AUTHENTICATION = 'QINIU_PRIVATE_AUTHENTICATION';
    const AUTHENTICATION_TYPE_ALIYUN_OSS_A = 'ALIYUN_OSS_A';
    const AUTHENTICATION_TYPE_ALIYUN_OSS_B = 'ALIYUN_OSS_B';
    const AUTHENTICATION_TYPE_ALIYUN_OSS_C = 'ALIYUN_OSS_C';
    const AUTHENTICATION_TYPE_KSYUN_PRIVATE_AUTHENTICATION = 'KSYUN_PRIVATE_AUTHENTICATION';
    const AUTHENTICATION_TYPE_AZURE_SAS_TOKEN = 'AZURE_SAS_TOKEN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_HTTP,
            self::PROTOCOL_HTTPS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthenticationTypeAllowableValues()
    {
        return [
            self::AUTHENTICATION_TYPE_NONE,
            self::AUTHENTICATION_TYPE_QINIU_PRIVATE_AUTHENTICATION,
            self::AUTHENTICATION_TYPE_ALIYUN_OSS_A,
            self::AUTHENTICATION_TYPE_ALIYUN_OSS_B,
            self::AUTHENTICATION_TYPE_ALIYUN_OSS_C,
            self::AUTHENTICATION_TYPE_KSYUN_PRIVATE_AUTHENTICATION,
            self::AUTHENTICATION_TYPE_AZURE_SAS_TOKEN,
        ];
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['authenticationType'] = isset($data['authenticationType']) ? $data['authenticationType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
            if ((mb_strlen($this->container['domain']) > 1024)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['domain']) < 0)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^(?=^.{3,255}$)[a-zA-Z0-9][-a-zA-Z0-9]{0,62}(\\.[a-zA-Z0-9][-a-zA-Z0-9]{0,62})+$/", $this->container['domain'])) {
                $invalidProperties[] = "invalid value for 'domain', must be conform to the pattern /^(?=^.{3,255}$)[a-zA-Z0-9][-a-zA-Z0-9]{0,62}(\\.[a-zA-Z0-9][-a-zA-Z0-9]{0,62})+$/.";
            }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAuthenticationTypeAllowableValues();
                if (!is_null($this->container['authenticationType']) && !in_array($this->container['authenticationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authenticationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets domain
    *  从指定域名获取对象。
    *
    * @return string
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string $domain 从指定域名获取对象。
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets protocol
    *  协议类型，支持http和https协议。
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 协议类型，支持http和https协议。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets authenticationType
    *  鉴权类型: NONE, QINIU_PRIVATE_AUTHENTICATION, ALIYUN_OSS_A, ALIYUN_OSS_B, ALIYUN_OSS_C, KSYUN_PRIVATE_AUTHENTICATION, AZURE_SAS_TOKEN
    *
    * @return string|null
    */
    public function getAuthenticationType()
    {
        return $this->container['authenticationType'];
    }

    /**
    * Sets authenticationType
    *
    * @param string|null $authenticationType 鉴权类型: NONE, QINIU_PRIVATE_AUTHENTICATION, ALIYUN_OSS_A, ALIYUN_OSS_B, ALIYUN_OSS_C, KSYUN_PRIVATE_AUTHENTICATION, AZURE_SAS_TOKEN
    *
    * @return $this
    */
    public function setAuthenticationType($authenticationType)
    {
        $this->container['authenticationType'] = $authenticationType;
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

