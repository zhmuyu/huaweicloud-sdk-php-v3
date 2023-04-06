<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MaintenanceWindow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MaintenanceWindow';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * day  日期，范围：Mon、Tue、Wed、Thu、Fri、Sat、Sun。
    * startTime  开始时间，UTC时间，格式为HH:mm，例如：22:00。 - 时间必须是整点。 - 开始时间和结束时间必须间隔4小时。
    * endTime  结束时间，UTC时间，格式为HH:mm，例如：02:00。 - 时间必须是整点。 - 开始时间和结束时间必须间隔4小时。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'day' => 'string',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * day  日期，范围：Mon、Tue、Wed、Thu、Fri、Sat、Sun。
    * startTime  开始时间，UTC时间，格式为HH:mm，例如：22:00。 - 时间必须是整点。 - 开始时间和结束时间必须间隔4小时。
    * endTime  结束时间，UTC时间，格式为HH:mm，例如：02:00。 - 时间必须是整点。 - 开始时间和结束时间必须间隔4小时。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'day' => null,
        'startTime' => null,
        'endTime' => null
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
    * day  日期，范围：Mon、Tue、Wed、Thu、Fri、Sat、Sun。
    * startTime  开始时间，UTC时间，格式为HH:mm，例如：22:00。 - 时间必须是整点。 - 开始时间和结束时间必须间隔4小时。
    * endTime  结束时间，UTC时间，格式为HH:mm，例如：02:00。 - 时间必须是整点。 - 开始时间和结束时间必须间隔4小时。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'day' => 'day',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * day  日期，范围：Mon、Tue、Wed、Thu、Fri、Sat、Sun。
    * startTime  开始时间，UTC时间，格式为HH:mm，例如：22:00。 - 时间必须是整点。 - 开始时间和结束时间必须间隔4小时。
    * endTime  结束时间，UTC时间，格式为HH:mm，例如：02:00。 - 时间必须是整点。 - 开始时间和结束时间必须间隔4小时。
    *
    * @var string[]
    */
    protected static $setters = [
            'day' => 'setDay',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * day  日期，范围：Mon、Tue、Wed、Thu、Fri、Sat、Sun。
    * startTime  开始时间，UTC时间，格式为HH:mm，例如：22:00。 - 时间必须是整点。 - 开始时间和结束时间必须间隔4小时。
    * endTime  结束时间，UTC时间，格式为HH:mm，例如：02:00。 - 时间必须是整点。 - 开始时间和结束时间必须间隔4小时。
    *
    * @var string[]
    */
    protected static $getters = [
            'day' => 'getDay',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['day'] = isset($data['day']) ? $data['day'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['day'] === null) {
            $invalidProperties[] = "'day' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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
    * Gets day
    *  日期，范围：Mon、Tue、Wed、Thu、Fri、Sat、Sun。
    *
    * @return string
    */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
    * Sets day
    *
    * @param string $day 日期，范围：Mon、Tue、Wed、Thu、Fri、Sat、Sun。
    *
    * @return $this
    */
    public function setDay($day)
    {
        $this->container['day'] = $day;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间，UTC时间，格式为HH:mm，例如：22:00。 - 时间必须是整点。 - 开始时间和结束时间必须间隔4小时。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 开始时间，UTC时间，格式为HH:mm，例如：22:00。 - 时间必须是整点。 - 开始时间和结束时间必须间隔4小时。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间，UTC时间，格式为HH:mm，例如：02:00。 - 时间必须是整点。 - 开始时间和结束时间必须间隔4小时。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 结束时间，UTC时间，格式为HH:mm，例如：02:00。 - 时间必须是整点。 - 开始时间和结束时间必须间隔4小时。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

