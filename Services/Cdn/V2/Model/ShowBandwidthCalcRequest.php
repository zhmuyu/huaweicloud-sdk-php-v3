<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBandwidthCalcRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBandwidthCalcRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  - 查询起始时间戳，需与结束时间戳同时指定，左闭右开，设置方式如下： - interval为300时，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - interval为3600时，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - interval为86400时，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00)
    * endTime  - 查询结束时间戳，需与开始时间戳同时指定，左闭右开，设置方式如下： - interval为300时，end_time设置为整5分钟时刻点，如：1631243700000(对应2021-09-10 11:15:00) - interval为3600时，end_time设置为整小时时刻点，如：1631325600000(对应2021-09-11 10:00:00) - interval为86400时，end_time设置为东8区零点时刻点，如：1631376000000(对应2021-09-12 00:00:00)
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com all表示查询名下全部域名
    * serviceArea  服务区域：mainland_china（默认）、outside_mainland_china，当查询回源类指标时该参数无效。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子账号调用接口时，该参数必传。
    * calcType  查询类别，目前支持bw_95（95峰值带宽），bw_peak（日峰值月平均带宽），bw_95_average(95月平均带宽)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'int',
            'endTime' => 'int',
            'domainName' => 'string',
            'serviceArea' => 'string',
            'enterpriseProjectId' => 'string',
            'calcType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  - 查询起始时间戳，需与结束时间戳同时指定，左闭右开，设置方式如下： - interval为300时，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - interval为3600时，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - interval为86400时，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00)
    * endTime  - 查询结束时间戳，需与开始时间戳同时指定，左闭右开，设置方式如下： - interval为300时，end_time设置为整5分钟时刻点，如：1631243700000(对应2021-09-10 11:15:00) - interval为3600时，end_time设置为整小时时刻点，如：1631325600000(对应2021-09-11 10:00:00) - interval为86400时，end_time设置为东8区零点时刻点，如：1631376000000(对应2021-09-12 00:00:00)
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com all表示查询名下全部域名
    * serviceArea  服务区域：mainland_china（默认）、outside_mainland_china，当查询回源类指标时该参数无效。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子账号调用接口时，该参数必传。
    * calcType  查询类别，目前支持bw_95（95峰值带宽），bw_peak（日峰值月平均带宽），bw_95_average(95月平均带宽)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => 'int64',
        'endTime' => 'int64',
        'domainName' => null,
        'serviceArea' => null,
        'enterpriseProjectId' => null,
        'calcType' => null
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
    * startTime  - 查询起始时间戳，需与结束时间戳同时指定，左闭右开，设置方式如下： - interval为300时，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - interval为3600时，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - interval为86400时，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00)
    * endTime  - 查询结束时间戳，需与开始时间戳同时指定，左闭右开，设置方式如下： - interval为300时，end_time设置为整5分钟时刻点，如：1631243700000(对应2021-09-10 11:15:00) - interval为3600时，end_time设置为整小时时刻点，如：1631325600000(对应2021-09-11 10:00:00) - interval为86400时，end_time设置为东8区零点时刻点，如：1631376000000(对应2021-09-12 00:00:00)
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com all表示查询名下全部域名
    * serviceArea  服务区域：mainland_china（默认）、outside_mainland_china，当查询回源类指标时该参数无效。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子账号调用接口时，该参数必传。
    * calcType  查询类别，目前支持bw_95（95峰值带宽），bw_peak（日峰值月平均带宽），bw_95_average(95月平均带宽)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'domainName' => 'domain_name',
            'serviceArea' => 'service_area',
            'enterpriseProjectId' => 'enterprise_project_id',
            'calcType' => 'calc_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  - 查询起始时间戳，需与结束时间戳同时指定，左闭右开，设置方式如下： - interval为300时，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - interval为3600时，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - interval为86400时，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00)
    * endTime  - 查询结束时间戳，需与开始时间戳同时指定，左闭右开，设置方式如下： - interval为300时，end_time设置为整5分钟时刻点，如：1631243700000(对应2021-09-10 11:15:00) - interval为3600时，end_time设置为整小时时刻点，如：1631325600000(对应2021-09-11 10:00:00) - interval为86400时，end_time设置为东8区零点时刻点，如：1631376000000(对应2021-09-12 00:00:00)
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com all表示查询名下全部域名
    * serviceArea  服务区域：mainland_china（默认）、outside_mainland_china，当查询回源类指标时该参数无效。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子账号调用接口时，该参数必传。
    * calcType  查询类别，目前支持bw_95（95峰值带宽），bw_peak（日峰值月平均带宽），bw_95_average(95月平均带宽)
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'domainName' => 'setDomainName',
            'serviceArea' => 'setServiceArea',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'calcType' => 'setCalcType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  - 查询起始时间戳，需与结束时间戳同时指定，左闭右开，设置方式如下： - interval为300时，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - interval为3600时，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - interval为86400时，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00)
    * endTime  - 查询结束时间戳，需与开始时间戳同时指定，左闭右开，设置方式如下： - interval为300时，end_time设置为整5分钟时刻点，如：1631243700000(对应2021-09-10 11:15:00) - interval为3600时，end_time设置为整小时时刻点，如：1631325600000(对应2021-09-11 10:00:00) - interval为86400时，end_time设置为东8区零点时刻点，如：1631376000000(对应2021-09-12 00:00:00)
    * domainName  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com all表示查询名下全部域名
    * serviceArea  服务区域：mainland_china（默认）、outside_mainland_china，当查询回源类指标时该参数无效。
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子账号调用接口时，该参数必传。
    * calcType  查询类别，目前支持bw_95（95峰值带宽），bw_peak（日峰值月平均带宽），bw_95_average(95月平均带宽)
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'domainName' => 'getDomainName',
            'serviceArea' => 'getServiceArea',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'calcType' => 'getCalcType'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['serviceArea'] = isset($data['serviceArea']) ? $data['serviceArea'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['calcType'] = isset($data['calcType']) ? $data['calcType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if (($this->container['startTime'] > 4102416000000)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 4102416000000.";
            }
            if (($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if (($this->container['endTime'] > 4102416000000)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 4102416000000.";
            }
            if (($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
        }
            if ((mb_strlen($this->container['domainName']) > 10240)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be smaller than or equal to 10240.";
            }
            if ((mb_strlen($this->container['domainName']) < 1)) {
                $invalidProperties[] = "invalid value for 'domainName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceArea']) && (mb_strlen($this->container['serviceArea']) > 2048)) {
                $invalidProperties[] = "invalid value for 'serviceArea', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['serviceArea']) && (mb_strlen($this->container['serviceArea']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceArea', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['calcType'] === null) {
            $invalidProperties[] = "'calcType' can't be null";
        }
            if ((mb_strlen($this->container['calcType']) > 2048)) {
                $invalidProperties[] = "invalid value for 'calcType', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['calcType']) < 1)) {
                $invalidProperties[] = "invalid value for 'calcType', the character length must be bigger than or equal to 1.";
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
    * Gets startTime
    *  - 查询起始时间戳，需与结束时间戳同时指定，左闭右开，设置方式如下： - interval为300时，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - interval为3600时，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - interval为86400时，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00)
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime - 查询起始时间戳，需与结束时间戳同时指定，左闭右开，设置方式如下： - interval为300时，start_time设置为整5分钟时刻点，如：1631240100000(对应2021-09-10 10:15:00) - interval为3600时，start_time设置为整小时时刻点，如：1631239200000(对应2021-09-10 10:00:00) - interval为86400时，start_time设置为东8区零点时刻点，如：1631203200000(对应2021-09-10 00:00:00)
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
    *  - 查询结束时间戳，需与开始时间戳同时指定，左闭右开，设置方式如下： - interval为300时，end_time设置为整5分钟时刻点，如：1631243700000(对应2021-09-10 11:15:00) - interval为3600时，end_time设置为整小时时刻点，如：1631325600000(对应2021-09-11 10:00:00) - interval为86400时，end_time设置为东8区零点时刻点，如：1631376000000(对应2021-09-12 00:00:00)
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime - 查询结束时间戳，需与开始时间戳同时指定，左闭右开，设置方式如下： - interval为300时，end_time设置为整5分钟时刻点，如：1631243700000(对应2021-09-10 11:15:00) - interval为3600时，end_time设置为整小时时刻点，如：1631325600000(对应2021-09-11 10:00:00) - interval为86400时，end_time设置为东8区零点时刻点，如：1631376000000(对应2021-09-12 00:00:00)
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets domainName
    *  域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com all表示查询名下全部域名
    *
    * @return string
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string $domainName 域名列表，多个域名以逗号（半角）分隔，如：www.test1.com,www.test2.com all表示查询名下全部域名
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets serviceArea
    *  服务区域：mainland_china（默认）、outside_mainland_china，当查询回源类指标时该参数无效。
    *
    * @return string|null
    */
    public function getServiceArea()
    {
        return $this->container['serviceArea'];
    }

    /**
    * Sets serviceArea
    *
    * @param string|null $serviceArea 服务区域：mainland_china（默认）、outside_mainland_china，当查询回源类指标时该参数无效。
    *
    * @return $this
    */
    public function setServiceArea($serviceArea)
    {
        $this->container['serviceArea'] = $serviceArea;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子账号调用接口时，该参数必传。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子账号调用接口时，该参数必传。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets calcType
    *  查询类别，目前支持bw_95（95峰值带宽），bw_peak（日峰值月平均带宽），bw_95_average(95月平均带宽)
    *
    * @return string
    */
    public function getCalcType()
    {
        return $this->container['calcType'];
    }

    /**
    * Sets calcType
    *
    * @param string $calcType 查询类别，目前支持bw_95（95峰值带宽），bw_peak（日峰值月平均带宽），bw_95_average(95月平均带宽)
    *
    * @return $this
    */
    public function setCalcType($calcType)
    {
        $this->container['calcType'] = $calcType;
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

