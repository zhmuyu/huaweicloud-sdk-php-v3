<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociateRouteTableResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociateRouteTableResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * association  association
    * requestId  请求ID
    * xClientToken  xClientToken
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'association' => '\HuaweiCloud\SDK\Er\V3\Model\Association',
            'requestId' => 'string',
            'xClientToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * association  association
    * requestId  请求ID
    * xClientToken  xClientToken
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'association' => null,
        'requestId' => null,
        'xClientToken' => null
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
    * association  association
    * requestId  请求ID
    * xClientToken  xClientToken
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'association' => 'association',
            'requestId' => 'request_id',
            'xClientToken' => 'X-Client-Token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * association  association
    * requestId  请求ID
    * xClientToken  xClientToken
    *
    * @var string[]
    */
    protected static $setters = [
            'association' => 'setAssociation',
            'requestId' => 'setRequestId',
            'xClientToken' => 'setXClientToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * association  association
    * requestId  请求ID
    * xClientToken  xClientToken
    *
    * @var string[]
    */
    protected static $getters = [
            'association' => 'getAssociation',
            'requestId' => 'getRequestId',
            'xClientToken' => 'getXClientToken'
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
        $this->container['association'] = isset($data['association']) ? $data['association'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['xClientToken'] = isset($data['xClientToken']) ? $data['xClientToken'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['requestId']) && !preg_match("/[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/", $this->container['requestId'])) {
                $invalidProperties[] = "invalid value for 'requestId', must be conform to the pattern /[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/.";
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
    * Gets association
    *  association
    *
    * @return \HuaweiCloud\SDK\Er\V3\Model\Association|null
    */
    public function getAssociation()
    {
        return $this->container['association'];
    }

    /**
    * Sets association
    *
    * @param \HuaweiCloud\SDK\Er\V3\Model\Association|null $association association
    *
    * @return $this
    */
    public function setAssociation($association)
    {
        $this->container['association'] = $association;
        return $this;
    }

    /**
    * Gets requestId
    *  请求ID
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 请求ID
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets xClientToken
    *  xClientToken
    *
    * @return string|null
    */
    public function getXClientToken()
    {
        return $this->container['xClientToken'];
    }

    /**
    * Sets xClientToken
    *
    * @param string|null $xClientToken xClientToken
    *
    * @return $this
    */
    public function setXClientToken($xClientToken)
    {
        $this->container['xClientToken'] = $xClientToken;
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
