<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHostDiskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHostDiskRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  集群ID。获取方法，请参见9.6-获取集群ID。
    * instanceName  实例名称。
    * limit  数据条目数。
    * offset  数据偏移量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'instanceName' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  集群ID。获取方法，请参见9.6-获取集群ID。
    * instanceName  实例名称。
    * limit  数据条目数。
    * offset  数据偏移量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'instanceName' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * clusterId  集群ID。获取方法，请参见9.6-获取集群ID。
    * instanceName  实例名称。
    * limit  数据条目数。
    * offset  数据偏移量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'instanceName' => 'instance_name',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  集群ID。获取方法，请参见9.6-获取集群ID。
    * instanceName  实例名称。
    * limit  数据条目数。
    * offset  数据偏移量。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'instanceName' => 'setInstanceName',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  集群ID。获取方法，请参见9.6-获取集群ID。
    * instanceName  实例名称。
    * limit  数据条目数。
    * offset  数据偏移量。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'instanceName' => 'getInstanceName',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
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
    * Gets clusterId
    *  集群ID。获取方法，请参见9.6-获取集群ID。
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群ID。获取方法，请参见9.6-获取集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets limit
    *  数据条目数。
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 数据条目数。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  数据偏移量。
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 数据偏移量。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

