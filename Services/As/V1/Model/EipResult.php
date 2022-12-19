<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EipResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EipResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ipType  IP地址类型。
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ipType' => 'string',
            'bandwidth' => '\HuaweiCloud\SDK\_As\V1\Model\BandwidthResult'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ipType  IP地址类型。
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ipType' => null,
        'bandwidth' => null
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
    * ipType  IP地址类型。
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ipType' => 'ip_type',
            'bandwidth' => 'bandwidth'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ipType  IP地址类型。
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $setters = [
            'ipType' => 'setIpType',
            'bandwidth' => 'setBandwidth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ipType  IP地址类型。
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $getters = [
            'ipType' => 'getIpType',
            'bandwidth' => 'getBandwidth'
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
    const IP_TYPE__5_BGP = '5_bgp';
    const IP_TYPE__5_SBGP = '5_sbgp';
    const IP_TYPE__5_TELCOM = '5_telcom';
    const IP_TYPE__5_UNION = '5_union';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpTypeAllowableValues()
    {
        return [
            self::IP_TYPE__5_BGP,
            self::IP_TYPE__5_SBGP,
            self::IP_TYPE__5_TELCOM,
            self::IP_TYPE__5_UNION,
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
        $this->container['ipType'] = isset($data['ipType']) ? $data['ipType'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getIpTypeAllowableValues();
                if (!is_null($this->container['ipType']) && !in_array($this->container['ipType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipType', must be one of '%s'",
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
    * Gets ipType
    *  IP地址类型。
    *
    * @return string|null
    */
    public function getIpType()
    {
        return $this->container['ipType'];
    }

    /**
    * Sets ipType
    *
    * @param string|null $ipType IP地址类型。
    *
    * @return $this
    */
    public function setIpType($ipType)
    {
        $this->container['ipType'] = $ipType;
        return $this;
    }

    /**
    * Gets bandwidth
    *  bandwidth
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\BandwidthResult|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\BandwidthResult|null $bandwidth bandwidth
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
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
