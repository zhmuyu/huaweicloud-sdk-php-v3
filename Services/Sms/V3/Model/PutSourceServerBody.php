<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PutSourceServerBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PutSourceServerBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  源端服务器修改后的名字
    * migprojectid  源端服务器修改后所属的迁移项目ID
    * disks  磁盘
    * volumeGroups  卷组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'migprojectid' => 'string',
            'disks' => '\HuaweiCloud\SDK\Sms\V3\Model\PutDisk[]',
            'volumeGroups' => '\HuaweiCloud\SDK\Sms\V3\Model\PutVolumeGroups[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  源端服务器修改后的名字
    * migprojectid  源端服务器修改后所属的迁移项目ID
    * disks  磁盘
    * volumeGroups  卷组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'migprojectid' => null,
        'disks' => null,
        'volumeGroups' => null
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
    * name  源端服务器修改后的名字
    * migprojectid  源端服务器修改后所属的迁移项目ID
    * disks  磁盘
    * volumeGroups  卷组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'migprojectid' => 'migprojectid',
            'disks' => 'disks',
            'volumeGroups' => 'volume_groups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  源端服务器修改后的名字
    * migprojectid  源端服务器修改后所属的迁移项目ID
    * disks  磁盘
    * volumeGroups  卷组
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'migprojectid' => 'setMigprojectid',
            'disks' => 'setDisks',
            'volumeGroups' => 'setVolumeGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  源端服务器修改后的名字
    * migprojectid  源端服务器修改后所属的迁移项目ID
    * disks  磁盘
    * volumeGroups  卷组
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'migprojectid' => 'getMigprojectid',
            'disks' => 'getDisks',
            'volumeGroups' => 'getVolumeGroups'
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
        $this->container['migprojectid'] = isset($data['migprojectid']) ? $data['migprojectid'] : null;
        $this->container['disks'] = isset($data['disks']) ? $data['disks'] : null;
        $this->container['volumeGroups'] = isset($data['volumeGroups']) ? $data['volumeGroups'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['migprojectid']) && (mb_strlen($this->container['migprojectid']) > 255)) {
                $invalidProperties[] = "invalid value for 'migprojectid', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['migprojectid']) && (mb_strlen($this->container['migprojectid']) < 0)) {
                $invalidProperties[] = "invalid value for 'migprojectid', the character length must be bigger than or equal to 0.";
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
    *  源端服务器修改后的名字
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
    * @param string|null $name 源端服务器修改后的名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets migprojectid
    *  源端服务器修改后所属的迁移项目ID
    *
    * @return string|null
    */
    public function getMigprojectid()
    {
        return $this->container['migprojectid'];
    }

    /**
    * Sets migprojectid
    *
    * @param string|null $migprojectid 源端服务器修改后所属的迁移项目ID
    *
    * @return $this
    */
    public function setMigprojectid($migprojectid)
    {
        $this->container['migprojectid'] = $migprojectid;
        return $this;
    }

    /**
    * Gets disks
    *  磁盘
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\PutDisk[]|null
    */
    public function getDisks()
    {
        return $this->container['disks'];
    }

    /**
    * Sets disks
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\PutDisk[]|null $disks 磁盘
    *
    * @return $this
    */
    public function setDisks($disks)
    {
        $this->container['disks'] = $disks;
        return $this;
    }

    /**
    * Gets volumeGroups
    *  卷组
    *
    * @return \HuaweiCloud\SDK\Sms\V3\Model\PutVolumeGroups[]|null
    */
    public function getVolumeGroups()
    {
        return $this->container['volumeGroups'];
    }

    /**
    * Sets volumeGroups
    *
    * @param \HuaweiCloud\SDK\Sms\V3\Model\PutVolumeGroups[]|null $volumeGroups 卷组
    *
    * @return $this
    */
    public function setVolumeGroups($volumeGroups)
    {
        $this->container['volumeGroups'] = $volumeGroups;
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

