<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListUsageTypesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListUsageTypesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  |忽略大小写，默认 zh_cn：中文 en_us：英文|
    * resourceTypeCode  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数的约束及描述：|
    * offset  |参数名称：偏移量，从0开始。默认值为0。| |参数的约束及描述：偏移量，从0开始。默认值为0。|
    * limit  |参数名称：每次查询的数量。默认值为10。| |参数的约束及描述：每次查询的数量。默认值为10。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'resourceTypeCode' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  |忽略大小写，默认 zh_cn：中文 en_us：英文|
    * resourceTypeCode  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数的约束及描述：|
    * offset  |参数名称：偏移量，从0开始。默认值为0。| |参数的约束及描述：偏移量，从0开始。默认值为0。|
    * limit  |参数名称：每次查询的数量。默认值为10。| |参数的约束及描述：每次查询的数量。默认值为10。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'resourceTypeCode' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * xLanguage  |忽略大小写，默认 zh_cn：中文 en_us：英文|
    * resourceTypeCode  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数的约束及描述：|
    * offset  |参数名称：偏移量，从0开始。默认值为0。| |参数的约束及描述：偏移量，从0开始。默认值为0。|
    * limit  |参数名称：每次查询的数量。默认值为10。| |参数的约束及描述：每次查询的数量。默认值为10。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'resourceTypeCode' => 'resource_type_code',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  |忽略大小写，默认 zh_cn：中文 en_us：英文|
    * resourceTypeCode  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数的约束及描述：|
    * offset  |参数名称：偏移量，从0开始。默认值为0。| |参数的约束及描述：偏移量，从0开始。默认值为0。|
    * limit  |参数名称：每次查询的数量。默认值为10。| |参数的约束及描述：每次查询的数量。默认值为10。|
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'resourceTypeCode' => 'setResourceTypeCode',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  |忽略大小写，默认 zh_cn：中文 en_us：英文|
    * resourceTypeCode  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数的约束及描述：|
    * offset  |参数名称：偏移量，从0开始。默认值为0。| |参数的约束及描述：偏移量，从0开始。默认值为0。|
    * limit  |参数名称：每次查询的数量。默认值为10。| |参数的约束及描述：每次查询的数量。默认值为10。|
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'resourceTypeCode' => 'getResourceTypeCode',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : 'zh_cn';
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : 0;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 10;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets xLanguage
    *  |忽略大小写，默认 zh_cn：中文 en_us：英文|
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage |忽略大小写，默认 zh_cn：中文 en_us：英文|
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets resourceTypeCode
    *  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数的约束及描述：|
    *
    * @return string|null
    */
    public function getResourceTypeCode()
    {
        return $this->container['resourceTypeCode'];
    }

    /**
    * Sets resourceTypeCode
    *
    * @param string|null $resourceTypeCode |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数的约束及描述：|
    *
    * @return $this
    */
    public function setResourceTypeCode($resourceTypeCode)
    {
        $this->container['resourceTypeCode'] = $resourceTypeCode;
        return $this;
    }

    /**
    * Gets offset
    *  |参数名称：偏移量，从0开始。默认值为0。| |参数的约束及描述：偏移量，从0开始。默认值为0。|
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset |参数名称：偏移量，从0开始。默认值为0。| |参数的约束及描述：偏移量，从0开始。默认值为0。|
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  |参数名称：每次查询的数量。默认值为10。| |参数的约束及描述：每次查询的数量。默认值为10。|
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit |参数名称：每次查询的数量。默认值为10。| |参数的约束及描述：每次查询的数量。默认值为10。|
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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
