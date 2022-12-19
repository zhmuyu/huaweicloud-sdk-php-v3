<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateURIPrimitiveTypeHolder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateURIPrimitiveTypeHolder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateUri  HCL模板的OBS地址，该模板描述了资源的目标状态  OBS地址必须为同region的OBS地址，暂不支持跨region访问  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tfjson`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body和template_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateUri  HCL模板的OBS地址，该模板描述了资源的目标状态  OBS地址必须为同region的OBS地址，暂不支持跨region访问  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tfjson`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body和template_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateUri' => null
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
    * templateUri  HCL模板的OBS地址，该模板描述了资源的目标状态  OBS地址必须为同region的OBS地址，暂不支持跨region访问  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tfjson`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body和template_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateUri' => 'template_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateUri  HCL模板的OBS地址，该模板描述了资源的目标状态  OBS地址必须为同region的OBS地址，暂不支持跨region访问  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tfjson`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body和template_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $setters = [
            'templateUri' => 'setTemplateUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateUri  HCL模板的OBS地址，该模板描述了资源的目标状态  OBS地址必须为同region的OBS地址，暂不支持跨region访问  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tfjson`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body和template_uri 必须有且只有一个存在
    *
    * @var string[]
    */
    protected static $getters = [
            'templateUri' => 'getTemplateUri'
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
        $this->container['templateUri'] = isset($data['templateUri']) ? $data['templateUri'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['templateUri']) && (mb_strlen($this->container['templateUri']) > 2048)) {
                $invalidProperties[] = "invalid value for 'templateUri', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['templateUri']) && (mb_strlen($this->container['templateUri']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateUri', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['templateUri']) && !preg_match("/^(http|https):\/\/[\\S]*(.tf|.tf.json|.zip){1}(\\?[\\S]+)?$/", $this->container['templateUri'])) {
                $invalidProperties[] = "invalid value for 'templateUri', must be conform to the pattern /^(http|https):\/\/[\\S]*(.tf|.tf.json|.zip){1}(\\?[\\S]+)?$/.";
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
    * Gets templateUri
    *  HCL模板的OBS地址，该模板描述了资源的目标状态  OBS地址必须为同region的OBS地址，暂不支持跨region访问  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tfjson`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body和template_uri 必须有且只有一个存在
    *
    * @return string|null
    */
    public function getTemplateUri()
    {
        return $this->container['templateUri'];
    }

    /**
    * Sets templateUri
    *
    * @param string|null $templateUri HCL模板的OBS地址，该模板描述了资源的目标状态  OBS地址必须为同region的OBS地址，暂不支持跨region访问  对应的文件应该是纯tf文件或zip压缩包  纯tf文件需要以`.tf`或者`.tfjson`结尾，并遵守hcl语法  压缩包目前只支持zip格式，文件需要以\".zip\"结尾。解压后的文件不得包含\".tfvars\"文件  template_body和template_uri 必须有且只有一个存在
    *
    * @return $this
    */
    public function setTemplateUri($templateUri)
    {
        $this->container['templateUri'] = $templateUri;
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
