<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePremiumHostRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePremiumHostRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * hostname  防护域名或IP（可带端口）
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * policyid  防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * server  防护域名的源站服务器配置信息
    * blockPage  blockPage
    * description  防护域名备注
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certificateid' => 'string',
            'certificatename' => 'string',
            'hostname' => 'string',
            'proxy' => 'bool',
            'policyid' => 'string',
            'server' => '\HuaweiCloud\SDK\Waf\V1\Model\PremiumWafServer[]',
            'blockPage' => '\HuaweiCloud\SDK\Waf\V1\Model\BlockPage',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * hostname  防护域名或IP（可带端口）
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * policyid  防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * server  防护域名的源站服务器配置信息
    * blockPage  blockPage
    * description  防护域名备注
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certificateid' => null,
        'certificatename' => null,
        'hostname' => null,
        'proxy' => null,
        'policyid' => null,
        'server' => null,
        'blockPage' => null,
        'description' => null
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
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * hostname  防护域名或IP（可带端口）
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * policyid  防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * server  防护域名的源站服务器配置信息
    * blockPage  blockPage
    * description  防护域名备注
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certificateid' => 'certificateid',
            'certificatename' => 'certificatename',
            'hostname' => 'hostname',
            'proxy' => 'proxy',
            'policyid' => 'policyid',
            'server' => 'server',
            'blockPage' => 'block_page',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * hostname  防护域名或IP（可带端口）
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * policyid  防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * server  防护域名的源站服务器配置信息
    * blockPage  blockPage
    * description  防护域名备注
    *
    * @var string[]
    */
    protected static $setters = [
            'certificateid' => 'setCertificateid',
            'certificatename' => 'setCertificatename',
            'hostname' => 'setHostname',
            'proxy' => 'setProxy',
            'policyid' => 'setPolicyid',
            'server' => 'setServer',
            'blockPage' => 'setBlockPage',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certificateid  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * certificatename  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    * hostname  防护域名或IP（可带端口）
    * proxy  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    * policyid  防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    * server  防护域名的源站服务器配置信息
    * blockPage  blockPage
    * description  防护域名备注
    *
    * @var string[]
    */
    protected static $getters = [
            'certificateid' => 'getCertificateid',
            'certificatename' => 'getCertificatename',
            'hostname' => 'getHostname',
            'proxy' => 'getProxy',
            'policyid' => 'getPolicyid',
            'server' => 'getServer',
            'blockPage' => 'getBlockPage',
            'description' => 'getDescription'
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
        $this->container['certificateid'] = isset($data['certificateid']) ? $data['certificateid'] : null;
        $this->container['certificatename'] = isset($data['certificatename']) ? $data['certificatename'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
        $this->container['policyid'] = isset($data['policyid']) ? $data['policyid'] : null;
        $this->container['server'] = isset($data['server']) ? $data['server'] : null;
        $this->container['blockPage'] = isset($data['blockPage']) ? $data['blockPage'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hostname'] === null) {
            $invalidProperties[] = "'hostname' can't be null";
        }
        if ($this->container['proxy'] === null) {
            $invalidProperties[] = "'proxy' can't be null";
        }
        if ($this->container['server'] === null) {
            $invalidProperties[] = "'server' can't be null";
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
    * Gets certificateid
    *  证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    *
    * @return string|null
    */
    public function getCertificateid()
    {
        return $this->container['certificateid'];
    }

    /**
    * Sets certificateid
    *
    * @param string|null $certificateid 证书id，通过查询证书列表接口（ListCertificates）接口获取证书id   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    *
    * @return $this
    */
    public function setCertificateid($certificateid)
    {
        $this->container['certificateid'] = $certificateid;
        return $this;
    }

    /**
    * Gets certificatename
    *  证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    *
    * @return string|null
    */
    public function getCertificatename()
    {
        return $this->container['certificatename'];
    }

    /**
    * Sets certificatename
    *
    * @param string|null $certificatename 证书名   - 对外协议为HTTP时不需要填写   - 对外协议HTTPS时为必填参数
    *
    * @return $this
    */
    public function setCertificatename($certificatename)
    {
        $this->container['certificatename'] = $certificatename;
        return $this;
    }

    /**
    * Gets hostname
    *  防护域名或IP（可带端口）
    *
    * @return string
    */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
    * Sets hostname
    *
    * @param string $hostname 防护域名或IP（可带端口）
    *
    * @return $this
    */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;
        return $this;
    }

    /**
    * Gets proxy
    *  防护域名是否使用代理   - false：不使用代理   - true：使用代理
    *
    * @return bool
    */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
    * Sets proxy
    *
    * @param bool $proxy 防护域名是否使用代理   - false：不使用代理   - true：使用代理
    *
    * @return $this
    */
    public function setProxy($proxy)
    {
        $this->container['proxy'] = $proxy;
        return $this;
    }

    /**
    * Gets policyid
    *  防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    *
    * @return string|null
    */
    public function getPolicyid()
    {
        return $this->container['policyid'];
    }

    /**
    * Sets policyid
    *
    * @param string|null $policyid 防护域名初始绑定的防护策略ID,可以通过策略名称调用查询防护策略列表（ListPolicy）接口查询到对应的策略id
    *
    * @return $this
    */
    public function setPolicyid($policyid)
    {
        $this->container['policyid'] = $policyid;
        return $this;
    }

    /**
    * Gets server
    *  防护域名的源站服务器配置信息
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\PremiumWafServer[]
    */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
    * Sets server
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\PremiumWafServer[] $server 防护域名的源站服务器配置信息
    *
    * @return $this
    */
    public function setServer($server)
    {
        $this->container['server'] = $server;
        return $this;
    }

    /**
    * Gets blockPage
    *  blockPage
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\BlockPage|null
    */
    public function getBlockPage()
    {
        return $this->container['blockPage'];
    }

    /**
    * Sets blockPage
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\BlockPage|null $blockPage blockPage
    *
    * @return $this
    */
    public function setBlockPage($blockPage)
    {
        $this->container['blockPage'] = $blockPage;
        return $this;
    }

    /**
    * Gets description
    *  防护域名备注
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
    * @param string|null $description 防护域名备注
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

