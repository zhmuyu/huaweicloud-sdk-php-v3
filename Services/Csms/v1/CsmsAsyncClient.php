<?php

namespace HuaweiCloud\SDK\Csms\v1;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class CsmsAsyncClient extends Client
{
    protected $headerSelector;
    protected $modelPackage;

    public function __construct($selector=null)
    {
        parent::__construct();
        $this->modelPackage = ModelInterface::class;
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    public static function newBuilder()
    {
        return new ClientBuilder(new CsmsAsyncClient());
    }

    /**
     * 批量添加或删除凭据标签
     *
     * - 功能介绍：批量添加或删除凭据标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchCreateOrDeleteTagsAsync($request)
    {
        return $this->batchCreateOrDeleteTagsAsyncWithHttpInfo($request);
    }
    
    public function batchCreateOrDeleteTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/csms/{secret_id}/tags/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['secretId'] !== null) {
            $pathParams['secret_id'] = $localVarParams['secretId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\BatchCreateOrDeleteTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\BatchCreateOrDeleteTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 创建凭据
     *
     * 创建新的凭据，并将凭据值存入凭据的初始版本。
     * 
     * 凭据管理服务将凭据值加密后，存储在凭据对象下的版本中。每个版本可与多个凭据版本状态相关联，凭据版本状态用于标识凭据版本处于的阶段，没有版本状态标记的版本视为已弃用，可用凭据管理服务自动删除。
     * 
     * 初始版本的状态被标记为SYSCURRENT。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecretAsync($request)
    {
        return $this->createSecretAsyncWithHttpInfo($request);
    }
    
    public function createSecretAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/secrets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\CreateSecretResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\CreateSecretRequest',
            $asyncRequest = true);
    }

    /**
     * 添加凭据标签
     *
     * - 功能介绍：添加凭据标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecretTagAsync($request)
    {
        return $this->createSecretTagAsyncWithHttpInfo($request);
    }
    
    public function createSecretTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/csms/{secret_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['secretId'] !== null) {
            $pathParams['secret_id'] = $localVarParams['secretId'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\CreateSecretTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\CreateSecretTagRequest',
            $asyncRequest = true);
    }

    /**
     * 创建凭据版本
     *
     * 在指定的凭据中，创建一个新的凭据版本，用于加密保管新的凭据值。默认情况下，新创建的凭据版本被标记为SYSCURRENT状态，而SYSCURRENT标记的前一个凭据版本被标记为SYSPREVIOUS状态。您可以通过指定VersionStage参数来覆盖默认行为。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSecretVersionAsync($request)
    {
        return $this->createSecretVersionAsyncWithHttpInfo($request);
    }
    
    public function createSecretVersionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/secrets/{secret_name}/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['secretName'] !== null) {
            $pathParams['secret_name'] = $localVarParams['secretName'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\CreateSecretVersionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\CreateSecretVersionRequest',
            $asyncRequest = true);
    }

    /**
     * 立即删除凭据
     *
     * 立即删除指定的凭据，且无法恢复。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSecretAsync($request)
    {
        return $this->deleteSecretAsyncWithHttpInfo($request);
    }
    
    public function deleteSecretAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/secrets/{secret_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['secretName'] !== null) {
            $pathParams['secret_name'] = $localVarParams['secretName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\DeleteSecretResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\DeleteSecretRequest',
            $asyncRequest = true);
    }

    /**
     * 创建凭据的定时删除任务
     *
     * 指定延迟删除时间，创建删除凭据的定时任务，可设置7~30天的的延迟删除时间。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSecretForScheduleAsync($request)
    {
        return $this->deleteSecretForScheduleAsyncWithHttpInfo($request);
    }
    
    public function deleteSecretForScheduleAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/secrets/{secret_name}/scheduled-deleted-tasks/create';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['secretName'] !== null) {
            $pathParams['secret_name'] = $localVarParams['secretName'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\DeleteSecretForScheduleResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\DeleteSecretForScheduleRequest',
            $asyncRequest = true);
    }

    /**
     * 删除凭据的版本状态
     *
     * 删除指定的凭据版本状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSecretStageAsync($request)
    {
        return $this->deleteSecretStageAsyncWithHttpInfo($request);
    }
    
    public function deleteSecretStageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/secrets/{secret_name}/stages/{stage_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['secretName'] !== null) {
            $pathParams['secret_name'] = $localVarParams['secretName'];
        }
        if ($localVarParams['stageName'] !== null) {
            $pathParams['stage_name'] = $localVarParams['stageName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\DeleteSecretStageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\DeleteSecretStageRequest',
            $asyncRequest = true);
    }

    /**
     * 删除凭据标签
     *
     * - 功能介绍：删除凭据标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function deleteSecretTagAsync($request)
    {
        return $this->deleteSecretTagAsyncWithHttpInfo($request);
    }
    
    public function deleteSecretTagAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/csms/{secret_id}/tags/{key}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['secretId'] !== null) {
            $pathParams['secret_id'] = $localVarParams['secretId'];
        }
        if ($localVarParams['key'] !== null) {
            $pathParams['key'] = $localVarParams['key'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='DELETE',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\DeleteSecretTagResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\DeleteSecretTagRequest',
            $asyncRequest = true);
    }

    /**
     * 下载凭据备份
     *
     * 下载指定凭据的备份文件
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function downloadSecretBlobAsync($request)
    {
        return $this->downloadSecretBlobAsyncWithHttpInfo($request);
    }
    
    public function downloadSecretBlobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/secrets/{secret_name}/backup';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['secretName'] !== null) {
            $pathParams['secret_name'] = $localVarParams['secretName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\DownloadSecretBlobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\DownloadSecretBlobRequest',
            $asyncRequest = true);
    }

    /**
     * 查询项目标签
     *
     * - 功能介绍：查询用户在指定项目下的所有凭据标签集合。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProjectSecretsTagsAsync($request)
    {
        return $this->listProjectSecretsTagsAsyncWithHttpInfo($request);
    }
    
    public function listProjectSecretsTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/csms/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\ListProjectSecretsTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\ListProjectSecretsTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询凭据实例
     *
     * - 功能介绍：查询凭据实例。通过标签过滤，筛选用户凭据,返回凭据列表。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceInstancesAsync($request)
    {
        return $this->listResourceInstancesAsyncWithHttpInfo($request);
    }
    
    public function listResourceInstancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/csms/{resource_instances}/action';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['resourceInstances'] !== null) {
            $pathParams['resource_instances'] = $localVarParams['resourceInstances'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\ListResourceInstancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\ListResourceInstancesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询凭据标签
     *
     * - 功能介绍：查询凭据标签。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecretTagsAsync($request)
    {
        return $this->listSecretTagsAsyncWithHttpInfo($request);
    }
    
    public function listSecretTagsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/csms/{secret_id}/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['secretId'] !== null) {
            $pathParams['secret_id'] = $localVarParams['secretId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\ListSecretTagsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\ListSecretTagsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询凭据的版本列表
     *
     * 查询指定凭据下的版本列表信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecretVersionsAsync($request)
    {
        return $this->listSecretVersionsAsyncWithHttpInfo($request);
    }
    
    public function listSecretVersionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/secrets/{secret_name}/versions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['secretName'] !== null) {
            $pathParams['secret_name'] = $localVarParams['secretName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\ListSecretVersionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\ListSecretVersionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询凭据列表
     *
     * 查询当前用户在本项目下创建的所有凭据。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSecretsAsync($request)
    {
        return $this->listSecretsAsyncWithHttpInfo($request);
    }
    
    public function listSecretsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/secrets';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['marker'] !== null) {
            $queryParams['marker'] = $localVarParams['marker'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\ListSecretsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\ListSecretsRequest',
            $asyncRequest = true);
    }

    /**
     * 取消凭据的定时删除任务
     *
     * 取消凭据的定时删除任务，凭据对象恢复可使用状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function restoreSecretAsync($request)
    {
        return $this->restoreSecretAsyncWithHttpInfo($request);
    }
    
    public function restoreSecretAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/secrets/{secret_name}/scheduled-deleted-tasks/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['secretName'] !== null) {
            $pathParams['secret_name'] = $localVarParams['secretName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\RestoreSecretResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\RestoreSecretRequest',
            $asyncRequest = true);
    }

    /**
     * 查询凭据
     *
     * 查询指定凭据的信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecretAsync($request)
    {
        return $this->showSecretAsyncWithHttpInfo($request);
    }
    
    public function showSecretAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/secrets/{secret_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['secretName'] !== null) {
            $pathParams['secret_name'] = $localVarParams['secretName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\ShowSecretResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\ShowSecretRequest',
            $asyncRequest = true);
    }

    /**
     * 查询凭据的版本状态
     *
     * 查询指定凭据版本状态标记的版本信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecretStageAsync($request)
    {
        return $this->showSecretStageAsyncWithHttpInfo($request);
    }
    
    public function showSecretStageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/secrets/{secret_name}/stages/{stage_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['secretName'] !== null) {
            $pathParams['secret_name'] = $localVarParams['secretName'];
        }
        if ($localVarParams['stageName'] !== null) {
            $pathParams['stage_name'] = $localVarParams['stageName'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\ShowSecretStageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\ShowSecretStageRequest',
            $asyncRequest = true);
    }

    /**
     * 查询凭据的版本与凭据值
     *
     * 查询指定凭据版本的信息和版本中的明文凭据值，只能查询ENABLED状态的凭据。
     * 通过/v1/{project_id}/secrets/{secret_name}/versions/latest （即将当前接口URL中的{version_id}赋值为latest）可访问凭据最新版本的凭据值。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function showSecretVersionAsync($request)
    {
        return $this->showSecretVersionAsyncWithHttpInfo($request);
    }
    
    public function showSecretVersionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/secrets/{secret_name}/versions/{version_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['secretName'] !== null) {
            $pathParams['secret_name'] = $localVarParams['secretName'];
        }
        if ($localVarParams['versionId'] !== null) {
            $pathParams['version_id'] = $localVarParams['versionId'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='GET',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\ShowSecretVersionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\ShowSecretVersionRequest',
            $asyncRequest = true);
    }

    /**
     * 更新凭据
     *
     * 更新指定凭据的元数据信息。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecretAsync($request)
    {
        return $this->updateSecretAsyncWithHttpInfo($request);
    }
    
    public function updateSecretAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/secrets/{secret_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['secretName'] !== null) {
            $pathParams['secret_name'] = $localVarParams['secretName'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\UpdateSecretResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\UpdateSecretRequest',
            $asyncRequest = true);
    }

    /**
     * 更新凭据的版本状态
     *
     * 更新凭据的版本状态。
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSecretStageAsync($request)
    {
        return $this->updateSecretStageAsyncWithHttpInfo($request);
    }
    
    public function updateSecretStageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/secrets/{secret_name}/stages/{stage_name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['secretName'] !== null) {
            $pathParams['secret_name'] = $localVarParams['secretName'];
        }
        if ($localVarParams['stageName'] !== null) {
            $pathParams['stage_name'] = $localVarParams['stageName'];
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='PUT',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\UpdateSecretStageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\UpdateSecretStageRequest',
            $asyncRequest = true);
    }

    /**
     * 恢复凭据对象
     *
     * 通过上传凭据备份文件，恢复凭据对象
     * 
     * Please refer to HUAWEI cloud API Explorer for details.
     *
     * @param $request 请求对象
     * @return response
     */
    public function uploadSecretBlobAsync($request)
    {
        return $this->uploadSecretBlobAsyncWithHttpInfo($request);
    }
    
    public function uploadSecretBlobAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v1/{project_id}/secrets/restore';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $pathParams = [];
        $httpBody = null;
        $multipart = false;
        $localVarParams = [];
        $arr = $request::attributeMap();
        foreach ($arr as $k => $v) {
            $getter = $request::getters()[$k];
            $value = $request->$getter();
            $localVarParams[$k] = $value;
        }
        if ($localVarParams['body'] !== null) {
            $httpBody= $localVarParams['body'];
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json;charset=UTF-8']
            );
        }
        $headers = array_merge(
            $headerParams,
            $headers
        );

        return $this->callApi(
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Csms\v1\Model\UploadSecretBlobResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Csms\v1\Model\UploadSecretBlobRequest',
            $asyncRequest = true);
    }

    protected function callApi(
        $method,
        $resourcePath,
        $pathParams=null,
        $queryParams=null,
        $headerParams=null,
        $body=null,
        $multipart=null,
        $postParams=null,
        $responseType=null,
        $collectionFormats=null,
        $requestType=null,
        $asyncRequest = null)
    {
    return $this->doHttpRequest(
        $method,
        $resourcePath,
        $pathParams,
        $queryParams,
        $headerParams,
        $body,
        $multipart,
        $postParams,
        $responseType,
        $collectionFormats,
        $requestType,
        $asyncRequest);
    }
}