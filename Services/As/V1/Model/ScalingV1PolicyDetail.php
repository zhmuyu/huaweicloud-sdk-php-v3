<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScalingV1PolicyDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScalingV1PolicyDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scalingGroupId  伸缩组ID。
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyId  伸缩策略ID。
    * policyStatus  伸缩策略状态  INSERVICE：已启用 PAUSED：已停用 EXECUTING：执行中
    * scalingPolicyType  伸缩策略类型：ALARM：告警策略，此时alarm_id有返回，scheduled_policy不会返回。SCHEDULED：定时策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time不会返回。RECURRENCE：周期策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time有返回。
    * alarmId  告警ID，即告警规则的ID，当scaling_policy_type为ALARM时该项必选，此时scheduled_policy不生效。创建告警策略成功后，会自动为该告警ID对应的告警规则的alarm_actions字段增加类型为autoscaling的告警触发动作。告警ID通过查询云监控告警规则列表获取，详见《云监控API参考》的“查询告警规则列表”。
    * scheduledPolicy  scheduledPolicy
    * scalingPolicyAction  scalingPolicyAction
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。
    * createTime  创建伸缩策略时间，遵循UTC时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scalingGroupId' => 'string',
            'scalingPolicyName' => 'string',
            'scalingPolicyId' => 'string',
            'policyStatus' => 'string',
            'scalingPolicyType' => 'string',
            'alarmId' => 'string',
            'scheduledPolicy' => '\HuaweiCloud\SDK\_As\V1\Model\ScheduledPolicy',
            'scalingPolicyAction' => '\HuaweiCloud\SDK\_As\V1\Model\ScalingPolicyActionV1',
            'coolDownTime' => 'int',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scalingGroupId  伸缩组ID。
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyId  伸缩策略ID。
    * policyStatus  伸缩策略状态  INSERVICE：已启用 PAUSED：已停用 EXECUTING：执行中
    * scalingPolicyType  伸缩策略类型：ALARM：告警策略，此时alarm_id有返回，scheduled_policy不会返回。SCHEDULED：定时策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time不会返回。RECURRENCE：周期策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time有返回。
    * alarmId  告警ID，即告警规则的ID，当scaling_policy_type为ALARM时该项必选，此时scheduled_policy不生效。创建告警策略成功后，会自动为该告警ID对应的告警规则的alarm_actions字段增加类型为autoscaling的告警触发动作。告警ID通过查询云监控告警规则列表获取，详见《云监控API参考》的“查询告警规则列表”。
    * scheduledPolicy  scheduledPolicy
    * scalingPolicyAction  scalingPolicyAction
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。
    * createTime  创建伸缩策略时间，遵循UTC时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scalingGroupId' => null,
        'scalingPolicyName' => null,
        'scalingPolicyId' => null,
        'policyStatus' => null,
        'scalingPolicyType' => null,
        'alarmId' => null,
        'scheduledPolicy' => null,
        'scalingPolicyAction' => null,
        'coolDownTime' => null,
        'createTime' => null
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
    * scalingGroupId  伸缩组ID。
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyId  伸缩策略ID。
    * policyStatus  伸缩策略状态  INSERVICE：已启用 PAUSED：已停用 EXECUTING：执行中
    * scalingPolicyType  伸缩策略类型：ALARM：告警策略，此时alarm_id有返回，scheduled_policy不会返回。SCHEDULED：定时策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time不会返回。RECURRENCE：周期策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time有返回。
    * alarmId  告警ID，即告警规则的ID，当scaling_policy_type为ALARM时该项必选，此时scheduled_policy不生效。创建告警策略成功后，会自动为该告警ID对应的告警规则的alarm_actions字段增加类型为autoscaling的告警触发动作。告警ID通过查询云监控告警规则列表获取，详见《云监控API参考》的“查询告警规则列表”。
    * scheduledPolicy  scheduledPolicy
    * scalingPolicyAction  scalingPolicyAction
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。
    * createTime  创建伸缩策略时间，遵循UTC时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scalingGroupId' => 'scaling_group_id',
            'scalingPolicyName' => 'scaling_policy_name',
            'scalingPolicyId' => 'scaling_policy_id',
            'policyStatus' => 'policy_status',
            'scalingPolicyType' => 'scaling_policy_type',
            'alarmId' => 'alarm_id',
            'scheduledPolicy' => 'scheduled_policy',
            'scalingPolicyAction' => 'scaling_policy_action',
            'coolDownTime' => 'cool_down_time',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scalingGroupId  伸缩组ID。
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyId  伸缩策略ID。
    * policyStatus  伸缩策略状态  INSERVICE：已启用 PAUSED：已停用 EXECUTING：执行中
    * scalingPolicyType  伸缩策略类型：ALARM：告警策略，此时alarm_id有返回，scheduled_policy不会返回。SCHEDULED：定时策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time不会返回。RECURRENCE：周期策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time有返回。
    * alarmId  告警ID，即告警规则的ID，当scaling_policy_type为ALARM时该项必选，此时scheduled_policy不生效。创建告警策略成功后，会自动为该告警ID对应的告警规则的alarm_actions字段增加类型为autoscaling的告警触发动作。告警ID通过查询云监控告警规则列表获取，详见《云监控API参考》的“查询告警规则列表”。
    * scheduledPolicy  scheduledPolicy
    * scalingPolicyAction  scalingPolicyAction
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。
    * createTime  创建伸缩策略时间，遵循UTC时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'scalingGroupId' => 'setScalingGroupId',
            'scalingPolicyName' => 'setScalingPolicyName',
            'scalingPolicyId' => 'setScalingPolicyId',
            'policyStatus' => 'setPolicyStatus',
            'scalingPolicyType' => 'setScalingPolicyType',
            'alarmId' => 'setAlarmId',
            'scheduledPolicy' => 'setScheduledPolicy',
            'scalingPolicyAction' => 'setScalingPolicyAction',
            'coolDownTime' => 'setCoolDownTime',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scalingGroupId  伸缩组ID。
    * scalingPolicyName  伸缩策略名称。
    * scalingPolicyId  伸缩策略ID。
    * policyStatus  伸缩策略状态  INSERVICE：已启用 PAUSED：已停用 EXECUTING：执行中
    * scalingPolicyType  伸缩策略类型：ALARM：告警策略，此时alarm_id有返回，scheduled_policy不会返回。SCHEDULED：定时策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time不会返回。RECURRENCE：周期策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time有返回。
    * alarmId  告警ID，即告警规则的ID，当scaling_policy_type为ALARM时该项必选，此时scheduled_policy不生效。创建告警策略成功后，会自动为该告警ID对应的告警规则的alarm_actions字段增加类型为autoscaling的告警触发动作。告警ID通过查询云监控告警规则列表获取，详见《云监控API参考》的“查询告警规则列表”。
    * scheduledPolicy  scheduledPolicy
    * scalingPolicyAction  scalingPolicyAction
    * coolDownTime  冷却时间，取值范围0-86400，默认为300，单位是秒。
    * createTime  创建伸缩策略时间，遵循UTC时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'scalingGroupId' => 'getScalingGroupId',
            'scalingPolicyName' => 'getScalingPolicyName',
            'scalingPolicyId' => 'getScalingPolicyId',
            'policyStatus' => 'getPolicyStatus',
            'scalingPolicyType' => 'getScalingPolicyType',
            'alarmId' => 'getAlarmId',
            'scheduledPolicy' => 'getScheduledPolicy',
            'scalingPolicyAction' => 'getScalingPolicyAction',
            'coolDownTime' => 'getCoolDownTime',
            'createTime' => 'getCreateTime'
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
    const SCALING_POLICY_TYPE_ALARM = 'ALARM';
    const SCALING_POLICY_TYPE_SCHEDULED = 'SCHEDULED';
    const SCALING_POLICY_TYPE_RECURRENCE = 'RECURRENCE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScalingPolicyTypeAllowableValues()
    {
        return [
            self::SCALING_POLICY_TYPE_ALARM,
            self::SCALING_POLICY_TYPE_SCHEDULED,
            self::SCALING_POLICY_TYPE_RECURRENCE,
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
        $this->container['scalingGroupId'] = isset($data['scalingGroupId']) ? $data['scalingGroupId'] : null;
        $this->container['scalingPolicyName'] = isset($data['scalingPolicyName']) ? $data['scalingPolicyName'] : null;
        $this->container['scalingPolicyId'] = isset($data['scalingPolicyId']) ? $data['scalingPolicyId'] : null;
        $this->container['policyStatus'] = isset($data['policyStatus']) ? $data['policyStatus'] : null;
        $this->container['scalingPolicyType'] = isset($data['scalingPolicyType']) ? $data['scalingPolicyType'] : null;
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['scheduledPolicy'] = isset($data['scheduledPolicy']) ? $data['scheduledPolicy'] : null;
        $this->container['scalingPolicyAction'] = isset($data['scalingPolicyAction']) ? $data['scalingPolicyAction'] : null;
        $this->container['coolDownTime'] = isset($data['coolDownTime']) ? $data['coolDownTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scalingGroupId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingGroupId'])) {
                $invalidProperties[] = "invalid value for 'scalingGroupId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['scalingPolicyName']) && (mb_strlen($this->container['scalingPolicyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'scalingPolicyName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scalingPolicyName']) && (mb_strlen($this->container['scalingPolicyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'scalingPolicyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scalingPolicyId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingPolicyId'])) {
                $invalidProperties[] = "invalid value for 'scalingPolicyId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getScalingPolicyTypeAllowableValues();
                if (!is_null($this->container['scalingPolicyType']) && !in_array($this->container['scalingPolicyType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scalingPolicyType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['alarmId']) && (mb_strlen($this->container['alarmId']) > 64)) {
                $invalidProperties[] = "invalid value for 'alarmId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['alarmId']) && (mb_strlen($this->container['alarmId']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['coolDownTime']) && ($this->container['coolDownTime'] > 86400)) {
                $invalidProperties[] = "invalid value for 'coolDownTime', must be smaller than or equal to 86400.";
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
    * Gets scalingGroupId
    *  伸缩组ID。
    *
    * @return string|null
    */
    public function getScalingGroupId()
    {
        return $this->container['scalingGroupId'];
    }

    /**
    * Sets scalingGroupId
    *
    * @param string|null $scalingGroupId 伸缩组ID。
    *
    * @return $this
    */
    public function setScalingGroupId($scalingGroupId)
    {
        $this->container['scalingGroupId'] = $scalingGroupId;
        return $this;
    }

    /**
    * Gets scalingPolicyName
    *  伸缩策略名称。
    *
    * @return string|null
    */
    public function getScalingPolicyName()
    {
        return $this->container['scalingPolicyName'];
    }

    /**
    * Sets scalingPolicyName
    *
    * @param string|null $scalingPolicyName 伸缩策略名称。
    *
    * @return $this
    */
    public function setScalingPolicyName($scalingPolicyName)
    {
        $this->container['scalingPolicyName'] = $scalingPolicyName;
        return $this;
    }

    /**
    * Gets scalingPolicyId
    *  伸缩策略ID。
    *
    * @return string|null
    */
    public function getScalingPolicyId()
    {
        return $this->container['scalingPolicyId'];
    }

    /**
    * Sets scalingPolicyId
    *
    * @param string|null $scalingPolicyId 伸缩策略ID。
    *
    * @return $this
    */
    public function setScalingPolicyId($scalingPolicyId)
    {
        $this->container['scalingPolicyId'] = $scalingPolicyId;
        return $this;
    }

    /**
    * Gets policyStatus
    *  伸缩策略状态  INSERVICE：已启用 PAUSED：已停用 EXECUTING：执行中
    *
    * @return string|null
    */
    public function getPolicyStatus()
    {
        return $this->container['policyStatus'];
    }

    /**
    * Sets policyStatus
    *
    * @param string|null $policyStatus 伸缩策略状态  INSERVICE：已启用 PAUSED：已停用 EXECUTING：执行中
    *
    * @return $this
    */
    public function setPolicyStatus($policyStatus)
    {
        $this->container['policyStatus'] = $policyStatus;
        return $this;
    }

    /**
    * Gets scalingPolicyType
    *  伸缩策略类型：ALARM：告警策略，此时alarm_id有返回，scheduled_policy不会返回。SCHEDULED：定时策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time不会返回。RECURRENCE：周期策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time有返回。
    *
    * @return string|null
    */
    public function getScalingPolicyType()
    {
        return $this->container['scalingPolicyType'];
    }

    /**
    * Sets scalingPolicyType
    *
    * @param string|null $scalingPolicyType 伸缩策略类型：ALARM：告警策略，此时alarm_id有返回，scheduled_policy不会返回。SCHEDULED：定时策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time不会返回。RECURRENCE：周期策略，此时alarm_id不会返回，scheduled_policy有返回，并且recurrence_type、recurrence_value、start_time和end_time有返回。
    *
    * @return $this
    */
    public function setScalingPolicyType($scalingPolicyType)
    {
        $this->container['scalingPolicyType'] = $scalingPolicyType;
        return $this;
    }

    /**
    * Gets alarmId
    *  告警ID，即告警规则的ID，当scaling_policy_type为ALARM时该项必选，此时scheduled_policy不生效。创建告警策略成功后，会自动为该告警ID对应的告警规则的alarm_actions字段增加类型为autoscaling的告警触发动作。告警ID通过查询云监控告警规则列表获取，详见《云监控API参考》的“查询告警规则列表”。
    *
    * @return string|null
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string|null $alarmId 告警ID，即告警规则的ID，当scaling_policy_type为ALARM时该项必选，此时scheduled_policy不生效。创建告警策略成功后，会自动为该告警ID对应的告警规则的alarm_actions字段增加类型为autoscaling的告警触发动作。告警ID通过查询云监控告警规则列表获取，详见《云监控API参考》的“查询告警规则列表”。
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets scheduledPolicy
    *  scheduledPolicy
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\ScheduledPolicy|null
    */
    public function getScheduledPolicy()
    {
        return $this->container['scheduledPolicy'];
    }

    /**
    * Sets scheduledPolicy
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\ScheduledPolicy|null $scheduledPolicy scheduledPolicy
    *
    * @return $this
    */
    public function setScheduledPolicy($scheduledPolicy)
    {
        $this->container['scheduledPolicy'] = $scheduledPolicy;
        return $this;
    }

    /**
    * Gets scalingPolicyAction
    *  scalingPolicyAction
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\ScalingPolicyActionV1|null
    */
    public function getScalingPolicyAction()
    {
        return $this->container['scalingPolicyAction'];
    }

    /**
    * Sets scalingPolicyAction
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\ScalingPolicyActionV1|null $scalingPolicyAction scalingPolicyAction
    *
    * @return $this
    */
    public function setScalingPolicyAction($scalingPolicyAction)
    {
        $this->container['scalingPolicyAction'] = $scalingPolicyAction;
        return $this;
    }

    /**
    * Gets coolDownTime
    *  冷却时间，取值范围0-86400，默认为300，单位是秒。
    *
    * @return int|null
    */
    public function getCoolDownTime()
    {
        return $this->container['coolDownTime'];
    }

    /**
    * Sets coolDownTime
    *
    * @param int|null $coolDownTime 冷却时间，取值范围0-86400，默认为300，单位是秒。
    *
    * @return $this
    */
    public function setCoolDownTime($coolDownTime)
    {
        $this->container['coolDownTime'] = $coolDownTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创建伸缩策略时间，遵循UTC时间。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建伸缩策略时间，遵循UTC时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

