<?php

namespace HuaweiCloud\SDK\Kms\v2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiVersionDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiVersionDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  版本ID（版本号），如“v1.0”。
    * links  JSON对象，详情请参见links字段数据结构说明。
    * version  若该版本API支持微版本，则填支持的最大微版本号，如果不支持微版本，则返回空字符串。
    * status  版本状态，包含如下3种：  - CURRENT：表示该版本为主推版本。  - SUPPORTED：表示为老版本，但是现在还继续支持。  - DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * updated  版本发布时间，要求用UTC时间表示。如v1.发布的时间2014-06-28T12:20:21Z。
    * minVersion  若该版本API 支持微版本，则填支持的最小微版本号，如果不支持微版本，则返回空字符串。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'links' => '\HuaweiCloud\SDK\Kms\v2\Model\ApiLink[]',
            'version' => 'string',
            'status' => 'string',
            'updated' => 'string',
            'minVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  版本ID（版本号），如“v1.0”。
    * links  JSON对象，详情请参见links字段数据结构说明。
    * version  若该版本API支持微版本，则填支持的最大微版本号，如果不支持微版本，则返回空字符串。
    * status  版本状态，包含如下3种：  - CURRENT：表示该版本为主推版本。  - SUPPORTED：表示为老版本，但是现在还继续支持。  - DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * updated  版本发布时间，要求用UTC时间表示。如v1.发布的时间2014-06-28T12:20:21Z。
    * minVersion  若该版本API 支持微版本，则填支持的最小微版本号，如果不支持微版本，则返回空字符串。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'links' => null,
        'version' => null,
        'status' => null,
        'updated' => null,
        'minVersion' => null
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
    * id  版本ID（版本号），如“v1.0”。
    * links  JSON对象，详情请参见links字段数据结构说明。
    * version  若该版本API支持微版本，则填支持的最大微版本号，如果不支持微版本，则返回空字符串。
    * status  版本状态，包含如下3种：  - CURRENT：表示该版本为主推版本。  - SUPPORTED：表示为老版本，但是现在还继续支持。  - DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * updated  版本发布时间，要求用UTC时间表示。如v1.发布的时间2014-06-28T12:20:21Z。
    * minVersion  若该版本API 支持微版本，则填支持的最小微版本号，如果不支持微版本，则返回空字符串。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'links' => 'links',
            'version' => 'version',
            'status' => 'status',
            'updated' => 'updated',
            'minVersion' => 'min_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  版本ID（版本号），如“v1.0”。
    * links  JSON对象，详情请参见links字段数据结构说明。
    * version  若该版本API支持微版本，则填支持的最大微版本号，如果不支持微版本，则返回空字符串。
    * status  版本状态，包含如下3种：  - CURRENT：表示该版本为主推版本。  - SUPPORTED：表示为老版本，但是现在还继续支持。  - DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * updated  版本发布时间，要求用UTC时间表示。如v1.发布的时间2014-06-28T12:20:21Z。
    * minVersion  若该版本API 支持微版本，则填支持的最小微版本号，如果不支持微版本，则返回空字符串。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'links' => 'setLinks',
            'version' => 'setVersion',
            'status' => 'setStatus',
            'updated' => 'setUpdated',
            'minVersion' => 'setMinVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  版本ID（版本号），如“v1.0”。
    * links  JSON对象，详情请参见links字段数据结构说明。
    * version  若该版本API支持微版本，则填支持的最大微版本号，如果不支持微版本，则返回空字符串。
    * status  版本状态，包含如下3种：  - CURRENT：表示该版本为主推版本。  - SUPPORTED：表示为老版本，但是现在还继续支持。  - DEPRECATED：表示为废弃版本，存在后续删除的可能。
    * updated  版本发布时间，要求用UTC时间表示。如v1.发布的时间2014-06-28T12:20:21Z。
    * minVersion  若该版本API 支持微版本，则填支持的最小微版本号，如果不支持微版本，则返回空字符串。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'links' => 'getLinks',
            'version' => 'getVersion',
            'status' => 'getStatus',
            'updated' => 'getUpdated',
            'minVersion' => 'getMinVersion'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['minVersion'] = isset($data['minVersion']) ? $data['minVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 8)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 8)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 12)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 12.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updated']) && (mb_strlen($this->container['updated']) > 36)) {
                $invalidProperties[] = "invalid value for 'updated', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['updated']) && (mb_strlen($this->container['updated']) < 1)) {
                $invalidProperties[] = "invalid value for 'updated', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['minVersion']) && (mb_strlen($this->container['minVersion']) > 36)) {
                $invalidProperties[] = "invalid value for 'minVersion', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['minVersion']) && (mb_strlen($this->container['minVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'minVersion', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  版本ID（版本号），如“v1.0”。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 版本ID（版本号），如“v1.0”。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets links
    *  JSON对象，详情请参见links字段数据结构说明。
    *
    * @return \HuaweiCloud\SDK\Kms\v2\Model\ApiLink[]|null
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Kms\v2\Model\ApiLink[]|null $links JSON对象，详情请参见links字段数据结构说明。
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets version
    *  若该版本API支持微版本，则填支持的最大微版本号，如果不支持微版本，则返回空字符串。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 若该版本API支持微版本，则填支持的最大微版本号，如果不支持微版本，则返回空字符串。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets status
    *  版本状态，包含如下3种：  - CURRENT：表示该版本为主推版本。  - SUPPORTED：表示为老版本，但是现在还继续支持。  - DEPRECATED：表示为废弃版本，存在后续删除的可能。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 版本状态，包含如下3种：  - CURRENT：表示该版本为主推版本。  - SUPPORTED：表示为老版本，但是现在还继续支持。  - DEPRECATED：表示为废弃版本，存在后续删除的可能。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updated
    *  版本发布时间，要求用UTC时间表示。如v1.发布的时间2014-06-28T12:20:21Z。
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 版本发布时间，要求用UTC时间表示。如v1.发布的时间2014-06-28T12:20:21Z。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets minVersion
    *  若该版本API 支持微版本，则填支持的最小微版本号，如果不支持微版本，则返回空字符串。
    *
    * @return string|null
    */
    public function getMinVersion()
    {
        return $this->container['minVersion'];
    }

    /**
    * Sets minVersion
    *
    * @param string|null $minVersion 若该版本API 支持微版本，则填支持的最小微版本号，如果不支持微版本，则返回空字符串。
    *
    * @return $this
    */
    public function setMinVersion($minVersion)
    {
        $this->container['minVersion'] = $minVersion;
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

