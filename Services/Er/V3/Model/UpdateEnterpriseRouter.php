<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateEnterpriseRouter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateEnterpriseRouter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  企业路由器实例名称
    * description  企业路由器实例描述信息
    * enableDefaultPropagation  是否开启默认传播
    * enableDefaultAssociation  是否开启默认关联
    * defaultPropagationRouteTableId  默认传播路由表ID
    * defaultAssociationRouteTableId  默认关联路由表ID
    * autoAcceptSharedAttachments  是否自动接受共享连接创建，默认false不开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'enableDefaultPropagation' => 'bool',
            'enableDefaultAssociation' => 'bool',
            'defaultPropagationRouteTableId' => 'string',
            'defaultAssociationRouteTableId' => 'string',
            'autoAcceptSharedAttachments' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  企业路由器实例名称
    * description  企业路由器实例描述信息
    * enableDefaultPropagation  是否开启默认传播
    * enableDefaultAssociation  是否开启默认关联
    * defaultPropagationRouteTableId  默认传播路由表ID
    * defaultAssociationRouteTableId  默认关联路由表ID
    * autoAcceptSharedAttachments  是否自动接受共享连接创建，默认false不开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'enableDefaultPropagation' => null,
        'enableDefaultAssociation' => null,
        'defaultPropagationRouteTableId' => null,
        'defaultAssociationRouteTableId' => null,
        'autoAcceptSharedAttachments' => null
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
    * name  企业路由器实例名称
    * description  企业路由器实例描述信息
    * enableDefaultPropagation  是否开启默认传播
    * enableDefaultAssociation  是否开启默认关联
    * defaultPropagationRouteTableId  默认传播路由表ID
    * defaultAssociationRouteTableId  默认关联路由表ID
    * autoAcceptSharedAttachments  是否自动接受共享连接创建，默认false不开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'enableDefaultPropagation' => 'enable_default_propagation',
            'enableDefaultAssociation' => 'enable_default_association',
            'defaultPropagationRouteTableId' => 'default_propagation_route_table_id',
            'defaultAssociationRouteTableId' => 'default_association_route_table_id',
            'autoAcceptSharedAttachments' => 'auto_accept_shared_attachments'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  企业路由器实例名称
    * description  企业路由器实例描述信息
    * enableDefaultPropagation  是否开启默认传播
    * enableDefaultAssociation  是否开启默认关联
    * defaultPropagationRouteTableId  默认传播路由表ID
    * defaultAssociationRouteTableId  默认关联路由表ID
    * autoAcceptSharedAttachments  是否自动接受共享连接创建，默认false不开启
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'enableDefaultPropagation' => 'setEnableDefaultPropagation',
            'enableDefaultAssociation' => 'setEnableDefaultAssociation',
            'defaultPropagationRouteTableId' => 'setDefaultPropagationRouteTableId',
            'defaultAssociationRouteTableId' => 'setDefaultAssociationRouteTableId',
            'autoAcceptSharedAttachments' => 'setAutoAcceptSharedAttachments'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  企业路由器实例名称
    * description  企业路由器实例描述信息
    * enableDefaultPropagation  是否开启默认传播
    * enableDefaultAssociation  是否开启默认关联
    * defaultPropagationRouteTableId  默认传播路由表ID
    * defaultAssociationRouteTableId  默认关联路由表ID
    * autoAcceptSharedAttachments  是否自动接受共享连接创建，默认false不开启
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'enableDefaultPropagation' => 'getEnableDefaultPropagation',
            'enableDefaultAssociation' => 'getEnableDefaultAssociation',
            'defaultPropagationRouteTableId' => 'getDefaultPropagationRouteTableId',
            'defaultAssociationRouteTableId' => 'getDefaultAssociationRouteTableId',
            'autoAcceptSharedAttachments' => 'getAutoAcceptSharedAttachments'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enableDefaultPropagation'] = isset($data['enableDefaultPropagation']) ? $data['enableDefaultPropagation'] : null;
        $this->container['enableDefaultAssociation'] = isset($data['enableDefaultAssociation']) ? $data['enableDefaultAssociation'] : null;
        $this->container['defaultPropagationRouteTableId'] = isset($data['defaultPropagationRouteTableId']) ? $data['defaultPropagationRouteTableId'] : null;
        $this->container['defaultAssociationRouteTableId'] = isset($data['defaultAssociationRouteTableId']) ? $data['defaultAssociationRouteTableId'] : null;
        $this->container['autoAcceptSharedAttachments'] = isset($data['autoAcceptSharedAttachments']) ? $data['autoAcceptSharedAttachments'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/[\\u4e00-\\u9fa5a-zA-Z0-9-_.]*/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[\\u4e00-\\u9fa5a-zA-Z0-9-_.]*/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/[^<>]*/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /[^<>]*/.";
            }
            if (!is_null($this->container['defaultPropagationRouteTableId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['defaultPropagationRouteTableId'])) {
                $invalidProperties[] = "invalid value for 'defaultPropagationRouteTableId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['defaultAssociationRouteTableId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['defaultAssociationRouteTableId'])) {
                $invalidProperties[] = "invalid value for 'defaultAssociationRouteTableId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets name
    *  企业路由器实例名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 企业路由器实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  企业路由器实例描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 企业路由器实例描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enableDefaultPropagation
    *  是否开启默认传播
    *
    * @return bool|null
    */
    public function getEnableDefaultPropagation()
    {
        return $this->container['enableDefaultPropagation'];
    }

    /**
    * Sets enableDefaultPropagation
    *
    * @param bool|null $enableDefaultPropagation 是否开启默认传播
    *
    * @return $this
    */
    public function setEnableDefaultPropagation($enableDefaultPropagation)
    {
        $this->container['enableDefaultPropagation'] = $enableDefaultPropagation;
        return $this;
    }

    /**
    * Gets enableDefaultAssociation
    *  是否开启默认关联
    *
    * @return bool|null
    */
    public function getEnableDefaultAssociation()
    {
        return $this->container['enableDefaultAssociation'];
    }

    /**
    * Sets enableDefaultAssociation
    *
    * @param bool|null $enableDefaultAssociation 是否开启默认关联
    *
    * @return $this
    */
    public function setEnableDefaultAssociation($enableDefaultAssociation)
    {
        $this->container['enableDefaultAssociation'] = $enableDefaultAssociation;
        return $this;
    }

    /**
    * Gets defaultPropagationRouteTableId
    *  默认传播路由表ID
    *
    * @return string|null
    */
    public function getDefaultPropagationRouteTableId()
    {
        return $this->container['defaultPropagationRouteTableId'];
    }

    /**
    * Sets defaultPropagationRouteTableId
    *
    * @param string|null $defaultPropagationRouteTableId 默认传播路由表ID
    *
    * @return $this
    */
    public function setDefaultPropagationRouteTableId($defaultPropagationRouteTableId)
    {
        $this->container['defaultPropagationRouteTableId'] = $defaultPropagationRouteTableId;
        return $this;
    }

    /**
    * Gets defaultAssociationRouteTableId
    *  默认关联路由表ID
    *
    * @return string|null
    */
    public function getDefaultAssociationRouteTableId()
    {
        return $this->container['defaultAssociationRouteTableId'];
    }

    /**
    * Sets defaultAssociationRouteTableId
    *
    * @param string|null $defaultAssociationRouteTableId 默认关联路由表ID
    *
    * @return $this
    */
    public function setDefaultAssociationRouteTableId($defaultAssociationRouteTableId)
    {
        $this->container['defaultAssociationRouteTableId'] = $defaultAssociationRouteTableId;
        return $this;
    }

    /**
    * Gets autoAcceptSharedAttachments
    *  是否自动接受共享连接创建，默认false不开启
    *
    * @return bool|null
    */
    public function getAutoAcceptSharedAttachments()
    {
        return $this->container['autoAcceptSharedAttachments'];
    }

    /**
    * Sets autoAcceptSharedAttachments
    *
    * @param bool|null $autoAcceptSharedAttachments 是否自动接受共享连接创建，默认false不开启
    *
    * @return $this
    */
    public function setAutoAcceptSharedAttachments($autoAcceptSharedAttachments)
    {
        $this->container['autoAcceptSharedAttachments'] = $autoAcceptSharedAttachments;
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

