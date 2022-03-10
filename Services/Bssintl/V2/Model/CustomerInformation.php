<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomerInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomerInformation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customer  |参数名称：实名认证名称。虚拟账号下，该字段无效。| |参数约束及描述：实名认证名称。虚拟账号下，该字段无效。|
    * accountName  |参数名称：客户登录名称（如果客户创建了子用户，此处返回主账号登录名称）。| |参数约束及描述：客户登录名称（如果客户创建了子用户，此处返回主账号登录名称）。|
    * customerId  |参数名称：客户ID。| |参数约束及描述：客户ID。|
    * associatedOn  |参数名称：客户和伙伴关联时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”，其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：客户和伙伴关联时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”，其中，HH范围是0～23，mm和ss范围是0～59。|
    * associationType  |参数名称：合作模式。1：推荐2：垫付3：转售| |参数约束及描述：合作模式。1：推荐2：垫付3：转售|
    * label  |参数名称：标签，支持模糊查找。虚拟账号下，该字段无效。| |参数约束及描述：标签，支持模糊查找。虚拟账号下，该字段无效。|
    * telephone  |参数名称：客户电话号码。虚拟账号下，该字段无效。| |参数约束及描述：客户电话号码。虚拟账号下，该字段无效。|
    * verifiedStatus  |参数名称：实名认证状态，虚拟账号下，该字段无效。：null：实名认证开关关闭；-1：未实名认证；0：实名认证审核中；1：实名认证不通过；2：已实名认证；3：实名认证失败。| |参数约束及描述：实名认证状态，虚拟账号下，该字段无效。：null：实名认证开关关闭；-1：未实名认证；0：实名认证审核中；1：实名认证不通过；2：已实名认证；3：实名认证失败。|
    * countryCode  |参数名称：国家码，电话号码的国家码前缀。虚拟账号下，该字段无效。例如：中国 0086。| |参数约束及描述：国家码，电话号码的国家码前缀。虚拟账号下，该字段无效。例如：中国 0086。|
    * customerType  |参数名称：客户类型，虚拟账号下，该字段无效。：-1：无类型0：个人1：企业客户刚注册的时候，没有具体的客户类型，为“-1：无类型”，客户可以在账号中心通过设置客户类型或者在实名认证的时候，选择对应的企业/个人实名认证来决定自己的类型。| |参数的约束及描述：客户类型，虚拟账号下，该字段无效。：-1：无类型0：个人1：企业客户刚注册的时候，没有具体的客户类型，为“-1：无类型”，客户可以在账号中心通过设置客户类型或者在实名认证的时候，选择对应的企业/个人实名认证来决定自己的类型。|
    * isFrozen  |参数名称：是否伙伴冻结，注意，只有转售子客户才能被伙伴冻结：0：否1：是| |参数的约束及描述：是否伙伴冻结，注意，只有转售子客户才能被伙伴冻结：0：否1：是|
    * accountManagers  |参数名称：客户经理名称列表，目前只支持1个| |参数约束以及描述：客户经理名称列表，目前只支持1个|
    * xaccountId  |参数名称：伙伴销售平台的用户唯一标识| |参数的约束及描述：该标识的具体值由伙伴分配|
    * xaccountType  |参数名称：华为分给合作伙伴的平台标识| |参数的约束及描述：该标识的具体值由华为分配|
    * customerLevel  |参数名称：客户等级| |参数的约束及描述：V0、V1、V2、V3、V4、V5|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customer' => 'string',
            'accountName' => 'string',
            'customerId' => 'string',
            'associatedOn' => 'string',
            'associationType' => 'string',
            'label' => 'string',
            'telephone' => 'string',
            'verifiedStatus' => 'string',
            'countryCode' => 'string',
            'customerType' => 'int',
            'isFrozen' => 'int',
            'accountManagers' => '\HuaweiCloud\SDK\Bssintl\V2\Model\AccountManager[]',
            'xaccountId' => 'string',
            'xaccountType' => 'string',
            'customerLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customer  |参数名称：实名认证名称。虚拟账号下，该字段无效。| |参数约束及描述：实名认证名称。虚拟账号下，该字段无效。|
    * accountName  |参数名称：客户登录名称（如果客户创建了子用户，此处返回主账号登录名称）。| |参数约束及描述：客户登录名称（如果客户创建了子用户，此处返回主账号登录名称）。|
    * customerId  |参数名称：客户ID。| |参数约束及描述：客户ID。|
    * associatedOn  |参数名称：客户和伙伴关联时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”，其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：客户和伙伴关联时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”，其中，HH范围是0～23，mm和ss范围是0～59。|
    * associationType  |参数名称：合作模式。1：推荐2：垫付3：转售| |参数约束及描述：合作模式。1：推荐2：垫付3：转售|
    * label  |参数名称：标签，支持模糊查找。虚拟账号下，该字段无效。| |参数约束及描述：标签，支持模糊查找。虚拟账号下，该字段无效。|
    * telephone  |参数名称：客户电话号码。虚拟账号下，该字段无效。| |参数约束及描述：客户电话号码。虚拟账号下，该字段无效。|
    * verifiedStatus  |参数名称：实名认证状态，虚拟账号下，该字段无效。：null：实名认证开关关闭；-1：未实名认证；0：实名认证审核中；1：实名认证不通过；2：已实名认证；3：实名认证失败。| |参数约束及描述：实名认证状态，虚拟账号下，该字段无效。：null：实名认证开关关闭；-1：未实名认证；0：实名认证审核中；1：实名认证不通过；2：已实名认证；3：实名认证失败。|
    * countryCode  |参数名称：国家码，电话号码的国家码前缀。虚拟账号下，该字段无效。例如：中国 0086。| |参数约束及描述：国家码，电话号码的国家码前缀。虚拟账号下，该字段无效。例如：中国 0086。|
    * customerType  |参数名称：客户类型，虚拟账号下，该字段无效。：-1：无类型0：个人1：企业客户刚注册的时候，没有具体的客户类型，为“-1：无类型”，客户可以在账号中心通过设置客户类型或者在实名认证的时候，选择对应的企业/个人实名认证来决定自己的类型。| |参数的约束及描述：客户类型，虚拟账号下，该字段无效。：-1：无类型0：个人1：企业客户刚注册的时候，没有具体的客户类型，为“-1：无类型”，客户可以在账号中心通过设置客户类型或者在实名认证的时候，选择对应的企业/个人实名认证来决定自己的类型。|
    * isFrozen  |参数名称：是否伙伴冻结，注意，只有转售子客户才能被伙伴冻结：0：否1：是| |参数的约束及描述：是否伙伴冻结，注意，只有转售子客户才能被伙伴冻结：0：否1：是|
    * accountManagers  |参数名称：客户经理名称列表，目前只支持1个| |参数约束以及描述：客户经理名称列表，目前只支持1个|
    * xaccountId  |参数名称：伙伴销售平台的用户唯一标识| |参数的约束及描述：该标识的具体值由伙伴分配|
    * xaccountType  |参数名称：华为分给合作伙伴的平台标识| |参数的约束及描述：该标识的具体值由华为分配|
    * customerLevel  |参数名称：客户等级| |参数的约束及描述：V0、V1、V2、V3、V4、V5|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customer' => null,
        'accountName' => null,
        'customerId' => null,
        'associatedOn' => null,
        'associationType' => null,
        'label' => null,
        'telephone' => null,
        'verifiedStatus' => null,
        'countryCode' => null,
        'customerType' => 'int32',
        'isFrozen' => 'int32',
        'accountManagers' => null,
        'xaccountId' => null,
        'xaccountType' => null,
        'customerLevel' => null
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
    * customer  |参数名称：实名认证名称。虚拟账号下，该字段无效。| |参数约束及描述：实名认证名称。虚拟账号下，该字段无效。|
    * accountName  |参数名称：客户登录名称（如果客户创建了子用户，此处返回主账号登录名称）。| |参数约束及描述：客户登录名称（如果客户创建了子用户，此处返回主账号登录名称）。|
    * customerId  |参数名称：客户ID。| |参数约束及描述：客户ID。|
    * associatedOn  |参数名称：客户和伙伴关联时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”，其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：客户和伙伴关联时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”，其中，HH范围是0～23，mm和ss范围是0～59。|
    * associationType  |参数名称：合作模式。1：推荐2：垫付3：转售| |参数约束及描述：合作模式。1：推荐2：垫付3：转售|
    * label  |参数名称：标签，支持模糊查找。虚拟账号下，该字段无效。| |参数约束及描述：标签，支持模糊查找。虚拟账号下，该字段无效。|
    * telephone  |参数名称：客户电话号码。虚拟账号下，该字段无效。| |参数约束及描述：客户电话号码。虚拟账号下，该字段无效。|
    * verifiedStatus  |参数名称：实名认证状态，虚拟账号下，该字段无效。：null：实名认证开关关闭；-1：未实名认证；0：实名认证审核中；1：实名认证不通过；2：已实名认证；3：实名认证失败。| |参数约束及描述：实名认证状态，虚拟账号下，该字段无效。：null：实名认证开关关闭；-1：未实名认证；0：实名认证审核中；1：实名认证不通过；2：已实名认证；3：实名认证失败。|
    * countryCode  |参数名称：国家码，电话号码的国家码前缀。虚拟账号下，该字段无效。例如：中国 0086。| |参数约束及描述：国家码，电话号码的国家码前缀。虚拟账号下，该字段无效。例如：中国 0086。|
    * customerType  |参数名称：客户类型，虚拟账号下，该字段无效。：-1：无类型0：个人1：企业客户刚注册的时候，没有具体的客户类型，为“-1：无类型”，客户可以在账号中心通过设置客户类型或者在实名认证的时候，选择对应的企业/个人实名认证来决定自己的类型。| |参数的约束及描述：客户类型，虚拟账号下，该字段无效。：-1：无类型0：个人1：企业客户刚注册的时候，没有具体的客户类型，为“-1：无类型”，客户可以在账号中心通过设置客户类型或者在实名认证的时候，选择对应的企业/个人实名认证来决定自己的类型。|
    * isFrozen  |参数名称：是否伙伴冻结，注意，只有转售子客户才能被伙伴冻结：0：否1：是| |参数的约束及描述：是否伙伴冻结，注意，只有转售子客户才能被伙伴冻结：0：否1：是|
    * accountManagers  |参数名称：客户经理名称列表，目前只支持1个| |参数约束以及描述：客户经理名称列表，目前只支持1个|
    * xaccountId  |参数名称：伙伴销售平台的用户唯一标识| |参数的约束及描述：该标识的具体值由伙伴分配|
    * xaccountType  |参数名称：华为分给合作伙伴的平台标识| |参数的约束及描述：该标识的具体值由华为分配|
    * customerLevel  |参数名称：客户等级| |参数的约束及描述：V0、V1、V2、V3、V4、V5|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customer' => 'customer',
            'accountName' => 'account_name',
            'customerId' => 'customer_id',
            'associatedOn' => 'associated_on',
            'associationType' => 'association_type',
            'label' => 'label',
            'telephone' => 'telephone',
            'verifiedStatus' => 'verified_status',
            'countryCode' => 'country_code',
            'customerType' => 'customer_type',
            'isFrozen' => 'is_frozen',
            'accountManagers' => 'account_managers',
            'xaccountId' => 'xaccount_id',
            'xaccountType' => 'xaccount_type',
            'customerLevel' => 'customer_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customer  |参数名称：实名认证名称。虚拟账号下，该字段无效。| |参数约束及描述：实名认证名称。虚拟账号下，该字段无效。|
    * accountName  |参数名称：客户登录名称（如果客户创建了子用户，此处返回主账号登录名称）。| |参数约束及描述：客户登录名称（如果客户创建了子用户，此处返回主账号登录名称）。|
    * customerId  |参数名称：客户ID。| |参数约束及描述：客户ID。|
    * associatedOn  |参数名称：客户和伙伴关联时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”，其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：客户和伙伴关联时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”，其中，HH范围是0～23，mm和ss范围是0～59。|
    * associationType  |参数名称：合作模式。1：推荐2：垫付3：转售| |参数约束及描述：合作模式。1：推荐2：垫付3：转售|
    * label  |参数名称：标签，支持模糊查找。虚拟账号下，该字段无效。| |参数约束及描述：标签，支持模糊查找。虚拟账号下，该字段无效。|
    * telephone  |参数名称：客户电话号码。虚拟账号下，该字段无效。| |参数约束及描述：客户电话号码。虚拟账号下，该字段无效。|
    * verifiedStatus  |参数名称：实名认证状态，虚拟账号下，该字段无效。：null：实名认证开关关闭；-1：未实名认证；0：实名认证审核中；1：实名认证不通过；2：已实名认证；3：实名认证失败。| |参数约束及描述：实名认证状态，虚拟账号下，该字段无效。：null：实名认证开关关闭；-1：未实名认证；0：实名认证审核中；1：实名认证不通过；2：已实名认证；3：实名认证失败。|
    * countryCode  |参数名称：国家码，电话号码的国家码前缀。虚拟账号下，该字段无效。例如：中国 0086。| |参数约束及描述：国家码，电话号码的国家码前缀。虚拟账号下，该字段无效。例如：中国 0086。|
    * customerType  |参数名称：客户类型，虚拟账号下，该字段无效。：-1：无类型0：个人1：企业客户刚注册的时候，没有具体的客户类型，为“-1：无类型”，客户可以在账号中心通过设置客户类型或者在实名认证的时候，选择对应的企业/个人实名认证来决定自己的类型。| |参数的约束及描述：客户类型，虚拟账号下，该字段无效。：-1：无类型0：个人1：企业客户刚注册的时候，没有具体的客户类型，为“-1：无类型”，客户可以在账号中心通过设置客户类型或者在实名认证的时候，选择对应的企业/个人实名认证来决定自己的类型。|
    * isFrozen  |参数名称：是否伙伴冻结，注意，只有转售子客户才能被伙伴冻结：0：否1：是| |参数的约束及描述：是否伙伴冻结，注意，只有转售子客户才能被伙伴冻结：0：否1：是|
    * accountManagers  |参数名称：客户经理名称列表，目前只支持1个| |参数约束以及描述：客户经理名称列表，目前只支持1个|
    * xaccountId  |参数名称：伙伴销售平台的用户唯一标识| |参数的约束及描述：该标识的具体值由伙伴分配|
    * xaccountType  |参数名称：华为分给合作伙伴的平台标识| |参数的约束及描述：该标识的具体值由华为分配|
    * customerLevel  |参数名称：客户等级| |参数的约束及描述：V0、V1、V2、V3、V4、V5|
    *
    * @var string[]
    */
    protected static $setters = [
            'customer' => 'setCustomer',
            'accountName' => 'setAccountName',
            'customerId' => 'setCustomerId',
            'associatedOn' => 'setAssociatedOn',
            'associationType' => 'setAssociationType',
            'label' => 'setLabel',
            'telephone' => 'setTelephone',
            'verifiedStatus' => 'setVerifiedStatus',
            'countryCode' => 'setCountryCode',
            'customerType' => 'setCustomerType',
            'isFrozen' => 'setIsFrozen',
            'accountManagers' => 'setAccountManagers',
            'xaccountId' => 'setXaccountId',
            'xaccountType' => 'setXaccountType',
            'customerLevel' => 'setCustomerLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customer  |参数名称：实名认证名称。虚拟账号下，该字段无效。| |参数约束及描述：实名认证名称。虚拟账号下，该字段无效。|
    * accountName  |参数名称：客户登录名称（如果客户创建了子用户，此处返回主账号登录名称）。| |参数约束及描述：客户登录名称（如果客户创建了子用户，此处返回主账号登录名称）。|
    * customerId  |参数名称：客户ID。| |参数约束及描述：客户ID。|
    * associatedOn  |参数名称：客户和伙伴关联时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”，其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：客户和伙伴关联时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”，其中，HH范围是0～23，mm和ss范围是0～59。|
    * associationType  |参数名称：合作模式。1：推荐2：垫付3：转售| |参数约束及描述：合作模式。1：推荐2：垫付3：转售|
    * label  |参数名称：标签，支持模糊查找。虚拟账号下，该字段无效。| |参数约束及描述：标签，支持模糊查找。虚拟账号下，该字段无效。|
    * telephone  |参数名称：客户电话号码。虚拟账号下，该字段无效。| |参数约束及描述：客户电话号码。虚拟账号下，该字段无效。|
    * verifiedStatus  |参数名称：实名认证状态，虚拟账号下，该字段无效。：null：实名认证开关关闭；-1：未实名认证；0：实名认证审核中；1：实名认证不通过；2：已实名认证；3：实名认证失败。| |参数约束及描述：实名认证状态，虚拟账号下，该字段无效。：null：实名认证开关关闭；-1：未实名认证；0：实名认证审核中；1：实名认证不通过；2：已实名认证；3：实名认证失败。|
    * countryCode  |参数名称：国家码，电话号码的国家码前缀。虚拟账号下，该字段无效。例如：中国 0086。| |参数约束及描述：国家码，电话号码的国家码前缀。虚拟账号下，该字段无效。例如：中国 0086。|
    * customerType  |参数名称：客户类型，虚拟账号下，该字段无效。：-1：无类型0：个人1：企业客户刚注册的时候，没有具体的客户类型，为“-1：无类型”，客户可以在账号中心通过设置客户类型或者在实名认证的时候，选择对应的企业/个人实名认证来决定自己的类型。| |参数的约束及描述：客户类型，虚拟账号下，该字段无效。：-1：无类型0：个人1：企业客户刚注册的时候，没有具体的客户类型，为“-1：无类型”，客户可以在账号中心通过设置客户类型或者在实名认证的时候，选择对应的企业/个人实名认证来决定自己的类型。|
    * isFrozen  |参数名称：是否伙伴冻结，注意，只有转售子客户才能被伙伴冻结：0：否1：是| |参数的约束及描述：是否伙伴冻结，注意，只有转售子客户才能被伙伴冻结：0：否1：是|
    * accountManagers  |参数名称：客户经理名称列表，目前只支持1个| |参数约束以及描述：客户经理名称列表，目前只支持1个|
    * xaccountId  |参数名称：伙伴销售平台的用户唯一标识| |参数的约束及描述：该标识的具体值由伙伴分配|
    * xaccountType  |参数名称：华为分给合作伙伴的平台标识| |参数的约束及描述：该标识的具体值由华为分配|
    * customerLevel  |参数名称：客户等级| |参数的约束及描述：V0、V1、V2、V3、V4、V5|
    *
    * @var string[]
    */
    protected static $getters = [
            'customer' => 'getCustomer',
            'accountName' => 'getAccountName',
            'customerId' => 'getCustomerId',
            'associatedOn' => 'getAssociatedOn',
            'associationType' => 'getAssociationType',
            'label' => 'getLabel',
            'telephone' => 'getTelephone',
            'verifiedStatus' => 'getVerifiedStatus',
            'countryCode' => 'getCountryCode',
            'customerType' => 'getCustomerType',
            'isFrozen' => 'getIsFrozen',
            'accountManagers' => 'getAccountManagers',
            'xaccountId' => 'getXaccountId',
            'xaccountType' => 'getXaccountType',
            'customerLevel' => 'getCustomerLevel'
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
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['associatedOn'] = isset($data['associatedOn']) ? $data['associatedOn'] : null;
        $this->container['associationType'] = isset($data['associationType']) ? $data['associationType'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['verifiedStatus'] = isset($data['verifiedStatus']) ? $data['verifiedStatus'] : null;
        $this->container['countryCode'] = isset($data['countryCode']) ? $data['countryCode'] : null;
        $this->container['customerType'] = isset($data['customerType']) ? $data['customerType'] : null;
        $this->container['isFrozen'] = isset($data['isFrozen']) ? $data['isFrozen'] : null;
        $this->container['accountManagers'] = isset($data['accountManagers']) ? $data['accountManagers'] : null;
        $this->container['xaccountId'] = isset($data['xaccountId']) ? $data['xaccountId'] : null;
        $this->container['xaccountType'] = isset($data['xaccountType']) ? $data['xaccountType'] : null;
        $this->container['customerLevel'] = isset($data['customerLevel']) ? $data['customerLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accountName'] === null) {
            $invalidProperties[] = "'accountName' can't be null";
        }
        if ($this->container['customerId'] === null) {
            $invalidProperties[] = "'customerId' can't be null";
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
    * Gets customer
    *  |参数名称：实名认证名称。虚拟账号下，该字段无效。| |参数约束及描述：实名认证名称。虚拟账号下，该字段无效。|
    *
    * @return string|null
    */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
    * Sets customer
    *
    * @param string|null $customer |参数名称：实名认证名称。虚拟账号下，该字段无效。| |参数约束及描述：实名认证名称。虚拟账号下，该字段无效。|
    *
    * @return $this
    */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;
        return $this;
    }

    /**
    * Gets accountName
    *  |参数名称：客户登录名称（如果客户创建了子用户，此处返回主账号登录名称）。| |参数约束及描述：客户登录名称（如果客户创建了子用户，此处返回主账号登录名称）。|
    *
    * @return string
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string $accountName |参数名称：客户登录名称（如果客户创建了子用户，此处返回主账号登录名称）。| |参数约束及描述：客户登录名称（如果客户创建了子用户，此处返回主账号登录名称）。|
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets customerId
    *  |参数名称：客户ID。| |参数约束及描述：客户ID。|
    *
    * @return string
    */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
    * Sets customerId
    *
    * @param string $customerId |参数名称：客户ID。| |参数约束及描述：客户ID。|
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets associatedOn
    *  |参数名称：客户和伙伴关联时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”，其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：客户和伙伴关联时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”，其中，HH范围是0～23，mm和ss范围是0～59。|
    *
    * @return string|null
    */
    public function getAssociatedOn()
    {
        return $this->container['associatedOn'];
    }

    /**
    * Sets associatedOn
    *
    * @param string|null $associatedOn |参数名称：客户和伙伴关联时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”，其中，HH范围是0～23，mm和ss范围是0～59。| |参数约束及描述：客户和伙伴关联时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”，其中，HH范围是0～23，mm和ss范围是0～59。|
    *
    * @return $this
    */
    public function setAssociatedOn($associatedOn)
    {
        $this->container['associatedOn'] = $associatedOn;
        return $this;
    }

    /**
    * Gets associationType
    *  |参数名称：合作模式。1：推荐2：垫付3：转售| |参数约束及描述：合作模式。1：推荐2：垫付3：转售|
    *
    * @return string|null
    */
    public function getAssociationType()
    {
        return $this->container['associationType'];
    }

    /**
    * Sets associationType
    *
    * @param string|null $associationType |参数名称：合作模式。1：推荐2：垫付3：转售| |参数约束及描述：合作模式。1：推荐2：垫付3：转售|
    *
    * @return $this
    */
    public function setAssociationType($associationType)
    {
        $this->container['associationType'] = $associationType;
        return $this;
    }

    /**
    * Gets label
    *  |参数名称：标签，支持模糊查找。虚拟账号下，该字段无效。| |参数约束及描述：标签，支持模糊查找。虚拟账号下，该字段无效。|
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label |参数名称：标签，支持模糊查找。虚拟账号下，该字段无效。| |参数约束及描述：标签，支持模糊查找。虚拟账号下，该字段无效。|
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets telephone
    *  |参数名称：客户电话号码。虚拟账号下，该字段无效。| |参数约束及描述：客户电话号码。虚拟账号下，该字段无效。|
    *
    * @return string|null
    */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
    * Sets telephone
    *
    * @param string|null $telephone |参数名称：客户电话号码。虚拟账号下，该字段无效。| |参数约束及描述：客户电话号码。虚拟账号下，该字段无效。|
    *
    * @return $this
    */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;
        return $this;
    }

    /**
    * Gets verifiedStatus
    *  |参数名称：实名认证状态，虚拟账号下，该字段无效。：null：实名认证开关关闭；-1：未实名认证；0：实名认证审核中；1：实名认证不通过；2：已实名认证；3：实名认证失败。| |参数约束及描述：实名认证状态，虚拟账号下，该字段无效。：null：实名认证开关关闭；-1：未实名认证；0：实名认证审核中；1：实名认证不通过；2：已实名认证；3：实名认证失败。|
    *
    * @return string|null
    */
    public function getVerifiedStatus()
    {
        return $this->container['verifiedStatus'];
    }

    /**
    * Sets verifiedStatus
    *
    * @param string|null $verifiedStatus |参数名称：实名认证状态，虚拟账号下，该字段无效。：null：实名认证开关关闭；-1：未实名认证；0：实名认证审核中；1：实名认证不通过；2：已实名认证；3：实名认证失败。| |参数约束及描述：实名认证状态，虚拟账号下，该字段无效。：null：实名认证开关关闭；-1：未实名认证；0：实名认证审核中；1：实名认证不通过；2：已实名认证；3：实名认证失败。|
    *
    * @return $this
    */
    public function setVerifiedStatus($verifiedStatus)
    {
        $this->container['verifiedStatus'] = $verifiedStatus;
        return $this;
    }

    /**
    * Gets countryCode
    *  |参数名称：国家码，电话号码的国家码前缀。虚拟账号下，该字段无效。例如：中国 0086。| |参数约束及描述：国家码，电话号码的国家码前缀。虚拟账号下，该字段无效。例如：中国 0086。|
    *
    * @return string|null
    */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
    * Sets countryCode
    *
    * @param string|null $countryCode |参数名称：国家码，电话号码的国家码前缀。虚拟账号下，该字段无效。例如：中国 0086。| |参数约束及描述：国家码，电话号码的国家码前缀。虚拟账号下，该字段无效。例如：中国 0086。|
    *
    * @return $this
    */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;
        return $this;
    }

    /**
    * Gets customerType
    *  |参数名称：客户类型，虚拟账号下，该字段无效。：-1：无类型0：个人1：企业客户刚注册的时候，没有具体的客户类型，为“-1：无类型”，客户可以在账号中心通过设置客户类型或者在实名认证的时候，选择对应的企业/个人实名认证来决定自己的类型。| |参数的约束及描述：客户类型，虚拟账号下，该字段无效。：-1：无类型0：个人1：企业客户刚注册的时候，没有具体的客户类型，为“-1：无类型”，客户可以在账号中心通过设置客户类型或者在实名认证的时候，选择对应的企业/个人实名认证来决定自己的类型。|
    *
    * @return int|null
    */
    public function getCustomerType()
    {
        return $this->container['customerType'];
    }

    /**
    * Sets customerType
    *
    * @param int|null $customerType |参数名称：客户类型，虚拟账号下，该字段无效。：-1：无类型0：个人1：企业客户刚注册的时候，没有具体的客户类型，为“-1：无类型”，客户可以在账号中心通过设置客户类型或者在实名认证的时候，选择对应的企业/个人实名认证来决定自己的类型。| |参数的约束及描述：客户类型，虚拟账号下，该字段无效。：-1：无类型0：个人1：企业客户刚注册的时候，没有具体的客户类型，为“-1：无类型”，客户可以在账号中心通过设置客户类型或者在实名认证的时候，选择对应的企业/个人实名认证来决定自己的类型。|
    *
    * @return $this
    */
    public function setCustomerType($customerType)
    {
        $this->container['customerType'] = $customerType;
        return $this;
    }

    /**
    * Gets isFrozen
    *  |参数名称：是否伙伴冻结，注意，只有转售子客户才能被伙伴冻结：0：否1：是| |参数的约束及描述：是否伙伴冻结，注意，只有转售子客户才能被伙伴冻结：0：否1：是|
    *
    * @return int|null
    */
    public function getIsFrozen()
    {
        return $this->container['isFrozen'];
    }

    /**
    * Sets isFrozen
    *
    * @param int|null $isFrozen |参数名称：是否伙伴冻结，注意，只有转售子客户才能被伙伴冻结：0：否1：是| |参数的约束及描述：是否伙伴冻结，注意，只有转售子客户才能被伙伴冻结：0：否1：是|
    *
    * @return $this
    */
    public function setIsFrozen($isFrozen)
    {
        $this->container['isFrozen'] = $isFrozen;
        return $this;
    }

    /**
    * Gets accountManagers
    *  |参数名称：客户经理名称列表，目前只支持1个| |参数约束以及描述：客户经理名称列表，目前只支持1个|
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\AccountManager[]|null
    */
    public function getAccountManagers()
    {
        return $this->container['accountManagers'];
    }

    /**
    * Sets accountManagers
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\AccountManager[]|null $accountManagers |参数名称：客户经理名称列表，目前只支持1个| |参数约束以及描述：客户经理名称列表，目前只支持1个|
    *
    * @return $this
    */
    public function setAccountManagers($accountManagers)
    {
        $this->container['accountManagers'] = $accountManagers;
        return $this;
    }

    /**
    * Gets xaccountId
    *  |参数名称：伙伴销售平台的用户唯一标识| |参数的约束及描述：该标识的具体值由伙伴分配|
    *
    * @return string|null
    */
    public function getXaccountId()
    {
        return $this->container['xaccountId'];
    }

    /**
    * Sets xaccountId
    *
    * @param string|null $xaccountId |参数名称：伙伴销售平台的用户唯一标识| |参数的约束及描述：该标识的具体值由伙伴分配|
    *
    * @return $this
    */
    public function setXaccountId($xaccountId)
    {
        $this->container['xaccountId'] = $xaccountId;
        return $this;
    }

    /**
    * Gets xaccountType
    *  |参数名称：华为分给合作伙伴的平台标识| |参数的约束及描述：该标识的具体值由华为分配|
    *
    * @return string|null
    */
    public function getXaccountType()
    {
        return $this->container['xaccountType'];
    }

    /**
    * Sets xaccountType
    *
    * @param string|null $xaccountType |参数名称：华为分给合作伙伴的平台标识| |参数的约束及描述：该标识的具体值由华为分配|
    *
    * @return $this
    */
    public function setXaccountType($xaccountType)
    {
        $this->container['xaccountType'] = $xaccountType;
        return $this;
    }

    /**
    * Gets customerLevel
    *  |参数名称：客户等级| |参数的约束及描述：V0、V1、V2、V3、V4、V5|
    *
    * @return string|null
    */
    public function getCustomerLevel()
    {
        return $this->container['customerLevel'];
    }

    /**
    * Sets customerLevel
    *
    * @param string|null $customerLevel |参数名称：客户等级| |参数的约束及描述：V0、V1、V2、V3、V4、V5|
    *
    * @return $this
    */
    public function setCustomerLevel($customerLevel)
    {
        $this->container['customerLevel'] = $customerLevel;
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
