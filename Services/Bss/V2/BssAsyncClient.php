<?php

namespace HuaweiCloud\SDK\Bss\V2;

use HuaweiCloud\SDK\Core\Utils\HeaderSelector;
use HuaweiCloud\SDK\Core\Client;
use HuaweiCloud\SDK\Core\ClientBuilder;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;

class BssAsyncClient extends Client
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
        return new ClientBuilder(new BssAsyncClient(), "GlobalCredentials");
    }

    /**
     * 设置包年/包月资源自动续费
     * 功能描述：客户可以设置包年/包月资源到期后转为按需资源计费
     *
     * @param $request 请求对象
     * @return response
     */
    public function autoRenewalResourcesAsync($request)
    {
        return $this->autoRenewalResourcesAsyncWithHttpInfo($request);
    }
    
    public function autoRenewalResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/subscriptions/resources/autorenew/{resource_id}';
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
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\AutoRenewalResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\AutoRenewalResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 设置伙伴折扣
     * 功能描述：合作伙伴可以为客户设置产品折扣，可指定有效期。被授予折扣后，客户在购买华为云产品（特殊产品除外）时，可享受伙伴授予折扣。
     *
     * @param $request 请求对象
     * @return response
     */
    public function batchSetSubCustomerDiscountAsync($request)
    {
        return $this->batchSetSubCustomerDiscountAsyncWithHttpInfo($request);
    }
    
    public function batchSetSubCustomerDiscountAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/discounts';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\BatchSetSubCustomerDiscountResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\BatchSetSubCustomerDiscountRequest',
            $asyncRequest = true);
    }

    /**
     * 取消包年/包月资源自动续费
     * 功能描述：取消包年/包月资源自动续费
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelAutoRenewalResourcesAsync($request)
    {
        return $this->cancelAutoRenewalResourcesAsyncWithHttpInfo($request);
    }
    
    public function cancelAutoRenewalResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/subscriptions/resources/autorenew/{resource_id}';
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
        if ($localVarParams['resourceId'] !== null) {
            $pathParams['resource_id'] = $localVarParams['resourceId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CancelAutoRenewalResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CancelAutoRenewalResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 取消待支付订单
     * 功能描述：客户可以对待支付的订单进行取消操作
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelCustomerOrderAsync($request)
    {
        return $this->cancelCustomerOrderAsyncWithHttpInfo($request);
    }
    
    public function cancelCustomerOrderAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/customer-orders/cancel';
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
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CancelCustomerOrderResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CancelCustomerOrderRequest',
            $asyncRequest = true);
    }

    /**
     * 退订包年/包月资源
     * 功能描述：客户购买包年/包月资源后，支持客户退订包年/包月实例。退订资源实例包括资源续费部分和当前正在使用的部分，退订后资源将无法使用
     *
     * @param $request 请求对象
     * @return response
     */
    public function cancelResourcesSubscriptionAsync($request)
    {
        return $this->cancelResourcesSubscriptionAsyncWithHttpInfo($request);
    }
    
    public function cancelResourcesSubscriptionAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/subscriptions/resources/unsubscribe';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CancelResourcesSubscriptionResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CancelResourcesSubscriptionRequest',
            $asyncRequest = true);
    }

    /**
     * 申请实名认证变更
     * 功能描述：客户可以进行实名认证变更申请。
     *
     * @param $request 请求对象
     * @return response
     */
    public function changeEnterpriseRealnameAuthenticationAsync($request)
    {
        return $this->changeEnterpriseRealnameAuthenticationAsyncWithHttpInfo($request);
    }
    
    public function changeEnterpriseRealnameAuthenticationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/customers/realname-auths/enterprise';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ChangeEnterpriseRealnameAuthenticationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ChangeEnterpriseRealnameAuthenticationRequest',
            $asyncRequest = true);
    }

    /**
     * 校验客户注册信息
     * 功能描述：客户注册时可检查客户的登录名称、手机号或者邮箱是否可以用于注册。
     *
     * @param $request 请求对象
     * @return response
     */
    public function checkUserIdentityAsync($request)
    {
        return $this->checkUserIdentityAsyncWithHttpInfo($request);
    }
    
    public function checkUserIdentityAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/sub-customers/users/check-identity';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CheckUserIdentityResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CheckUserIdentityRequest',
            $asyncRequest = true);
    }

    /**
     * 开通客户企业项目权限
     * 功能描述：客户在客户自建平台开通客户企业项目权限
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEnterpriseProjectAuthAsync($request)
    {
        return $this->createEnterpriseProjectAuthAsyncWithHttpInfo($request);
    }
    
    public function createEnterpriseProjectAuthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/enterprises/enterprise-projects/authority';
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
            $method='POST',
            $resourcePath,
            $pathParams,
            $queryParams,
            $headerParams=$headers,
            $body=$httpBody,
            $multipart = $multipart,
            $postParams=$formParams,
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CreateEnterpriseProjectAuthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CreateEnterpriseProjectAuthRequest',
            $asyncRequest = true);
    }

    /**
     * 申请企业实名认证
     * 功能描述：企业客户可以进行企业实名认证申请。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createEnterpriseRealnameAuthenticationAsync($request)
    {
        return $this->createEnterpriseRealnameAuthenticationAsyncWithHttpInfo($request);
    }
    
    public function createEnterpriseRealnameAuthenticationAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/customers/realname-auths/enterprise';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CreateEnterpriseRealnameAuthenticationResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CreateEnterpriseRealnameAuthenticationRequest',
            $asyncRequest = true);
    }

    /**
     * 发放优惠券
     * 功能描述：合作伙伴可以在拥有的代金券额度范围内为客户下发优惠券。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPartnerCouponsAsync($request)
    {
        return $this->createPartnerCouponsAsyncWithHttpInfo($request);
    }
    
    public function createPartnerCouponsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/promotions/benefits/partner-coupons';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CreatePartnerCouponsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CreatePartnerCouponsRequest',
            $asyncRequest = true);
    }

    /**
     * 申请个人实名认证
     * 功能描述：个人客户可以进行个人实名认证申请。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPersonalRealnameAuthAsync($request)
    {
        return $this->createPersonalRealnameAuthAsyncWithHttpInfo($request);
    }
    
    public function createPersonalRealnameAuthAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/customers/realname-auths/individual';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CreatePersonalRealnameAuthResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CreatePersonalRealnameAuthRequest',
            $asyncRequest = true);
    }

    /**
     * 新增邮寄地址
     * 功能描述：客户可以新增自己的邮寄地址信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createPostalAsync($request)
    {
        return $this->createPostalAsyncWithHttpInfo($request);
    }
    
    public function createPostalAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/customers/postal-addresses';
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
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CreatePostalResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CreatePostalRequest',
            $asyncRequest = true);
    }

    /**
     * 创建客户
     * 功能描述：在伙伴销售平台创建客户时同步创建华为云账号，并将客户在伙伴销售平台上的账号与华为云账号进行映射。同时，创建的华为云账号与伙伴账号关联绑定。华为云伙伴能力中心（一级经销商）可以注册精英服务商伙伴（二级经销商）的子客户。注册完成后，子客户可以自动和精英服务商伙伴绑定。
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSubCustomerAsync($request)
    {
        return $this->createSubCustomerAsyncWithHttpInfo($request);
    }
    
    public function createSubCustomerAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/sub-customers';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CreateSubCustomerResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CreateSubCustomerRequest',
            $asyncRequest = true);
    }

    /**
     * 创建企业子账号
     * 功能描述：企业主账号在客户自建平台创建企业子账号
     *
     * @param $request 请求对象
     * @return response
     */
    public function createSubEnterpriseAccountAsync($request)
    {
        return $this->createSubEnterpriseAccountAsyncWithHttpInfo($request);
    }
    
    public function createSubEnterpriseAccountAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/enterprises/multi-accounts/sub-customers';
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
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\CreateSubEnterpriseAccountResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\CreateSubEnterpriseAccountRequest',
            $asyncRequest = true);
    }

    /**
     * 删除邮寄地址
     * 功能描述：客户可以删除自己的邮寄地址信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function deletePostalAsync($request)
    {
        return $this->deletePostalAsyncWithHttpInfo($request);
    }
    
    public function deletePostalAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/customers/postal-addresses/{address_id}';
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
        if ($localVarParams['addressId'] !== null) {
            $pathParams['address_id'] = $localVarParams['addressId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\DeletePostalResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\DeletePostalRequest',
            $asyncRequest = true);
    }

    /**
     * 查询城市信息
     * 功能描述：伙伴在伙伴销售平台上查询城市信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCitiesAsync($request)
    {
        return $this->listCitiesAsyncWithHttpInfo($request);
    }
    
    public function listCitiesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/systems/configs/cities';
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
        if ($localVarParams['provinceCode'] !== null) {
            $queryParams['province_code'] = $localVarParams['provinceCode'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCitiesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCitiesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询使用量单位进制
     * 功能描述：伙伴在伙伴销售平台上查询使用量单位的进制转换信息，用于不同度量单位之间的转换。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listConversionsAsync($request)
    {
        return $this->listConversionsAsyncWithHttpInfo($request);
    }
    
    public function listConversionsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bases/conversions';
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
        if ($localVarParams['measureType'] !== null) {
            $queryParams['measure_type'] = $localVarParams['measureType'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListConversionsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListConversionsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询区县信息
     * 功能描述：伙伴在伙伴销售平台上查询区县信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCountiesAsync($request)
    {
        return $this->listCountiesAsyncWithHttpInfo($request);
    }
    
    public function listCountiesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/systems/configs/counties';
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
        if ($localVarParams['cityCode'] !== null) {
            $queryParams['city_code'] = $localVarParams['cityCode'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCountiesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCountiesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询代金券额度的发放回收记录
     * 功能描述：华为云伙伴能力中心（一级经销商）可以在伙伴中心查看给精英服务商（二级经销商）发放或回收代金券额度的操作记录。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCouponQuotasRecordsAsync($request)
    {
        return $this->listCouponQuotasRecordsAsyncWithHttpInfo($request);
    }
    
    public function listCouponQuotasRecordsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/coupon-quotas/records';
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
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
        }
        if ($localVarParams['quotaId'] !== null) {
            $queryParams['quota_id'] = $localVarParams['quotaId'];
        }
        if ($localVarParams['operationTimeBegin'] !== null) {
            $queryParams['operation_time_begin'] = $localVarParams['operationTimeBegin'];
        }
        if ($localVarParams['operationTimeEnd'] !== null) {
            $queryParams['operation_time_end'] = $localVarParams['operationTimeEnd'];
        }
        if ($localVarParams['parentQuotaId'] !== null) {
            $queryParams['parent_quota_id'] = $localVarParams['parentQuotaId'];
        }
        if ($localVarParams['operationType'] !== null) {
            $queryParams['operation_type'] = $localVarParams['operationType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCouponQuotasRecordsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCouponQuotasRecordsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询流水账单
     * 功能描述：客户在客户自建平台查询自己的流水账单
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerBillsFeeRecordsAsync($request)
    {
        return $this->listCustomerBillsFeeRecordsAsyncWithHttpInfo($request);
    }
    
    public function listCustomerBillsFeeRecordsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bills/customer-bills/fee-records';
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
        if ($localVarParams['billCycle'] !== null) {
            $queryParams['bill_cycle'] = $localVarParams['billCycle'];
        }
        if ($localVarParams['providerType'] !== null) {
            $queryParams['provider_type'] = $localVarParams['providerType'];
        }
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['resourceTypeCode'] !== null) {
            $queryParams['resource_type_code'] = $localVarParams['resourceTypeCode'];
        }
        if ($localVarParams['regionCode'] !== null) {
            $queryParams['region_code'] = $localVarParams['regionCode'];
        }
        if ($localVarParams['chargingMode'] !== null) {
            $queryParams['charging_mode'] = $localVarParams['chargingMode'];
        }
        if ($localVarParams['billType'] !== null) {
            $queryParams['bill_type'] = $localVarParams['billType'];
        }
        if ($localVarParams['tradeId'] !== null) {
            $queryParams['trade_id'] = $localVarParams['tradeId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['includeZeroRecord'] !== null) {
            $queryParams['include_zero_record'] = $localVarParams['includeZeroRecord'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['method'] !== null) {
            $queryParams['method'] = $localVarParams['method'];
        }
        if ($localVarParams['subCustomerId'] !== null) {
            $queryParams['sub_customer_id'] = $localVarParams['subCustomerId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerBillsFeeRecordsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerBillsFeeRecordsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询月度成本
     * 功能描述：查询月度成本
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerBillsMonthlyBreakDownAsync($request)
    {
        return $this->listCustomerBillsMonthlyBreakDownAsyncWithHttpInfo($request);
    }
    
    public function listCustomerBillsMonthlyBreakDownAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/costs/cost-analysed-bills/monthly-breakdown';
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
        if ($localVarParams['sharedMonth'] !== null) {
            $queryParams['shared_month'] = $localVarParams['sharedMonth'];
        }
        if ($localVarParams['chargingMode'] !== null) {
            $queryParams['charging_mode'] = $localVarParams['chargingMode'];
        }
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['resourceTypeCode'] !== null) {
            $queryParams['resource_type_code'] = $localVarParams['resourceTypeCode'];
        }
        if ($localVarParams['regionCode'] !== null) {
            $queryParams['region_code'] = $localVarParams['regionCode'];
        }
        if ($localVarParams['billType'] !== null) {
            $queryParams['bill_type'] = $localVarParams['billType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['resourceName'] !== null) {
            $queryParams['resource_name'] = $localVarParams['resourceName'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['method'] !== null) {
            $queryParams['method'] = $localVarParams['method'];
        }
        if ($localVarParams['subCustomerId'] !== null) {
            $queryParams['sub_customer_id'] = $localVarParams['subCustomerId'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerBillsMonthlyBreakDownResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerBillsMonthlyBreakDownRequest',
            $asyncRequest = true);
    }

    /**
     * 查询客户按需资源列表
     * 功能描述：客户在伙伴销售平台查询已开通的按需资源
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerOnDemandResourcesAsync($request)
    {
        return $this->listCustomerOnDemandResourcesAsyncWithHttpInfo($request);
    }
    
    public function listCustomerOnDemandResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/sub-customers/on-demand-resources/query';
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
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerOnDemandResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerOnDemandResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询订单列表
     * 功能描述：客户购买包年包月资源后，可以查看待审核、处理中、已取消、已完成和待支付等状态的订单
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerOrdersAsync($request)
    {
        return $this->listCustomerOrdersAsyncWithHttpInfo($request);
    }
    
    public function listCustomerOrdersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/customer-orders';
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
        if ($localVarParams['orderId'] !== null) {
            $queryParams['order_id'] = $localVarParams['orderId'];
        }
        if ($localVarParams['customerId'] !== null) {
            $queryParams['customer_id'] = $localVarParams['customerId'];
        }
        if ($localVarParams['createTimeBegin'] !== null) {
            $queryParams['create_time_begin'] = $localVarParams['createTimeBegin'];
        }
        if ($localVarParams['createTimeEnd'] !== null) {
            $queryParams['create_time_end'] = $localVarParams['createTimeEnd'];
        }
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['orderType'] !== null) {
            $queryParams['order_type'] = $localVarParams['orderType'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['orderBy'] !== null) {
            $queryParams['order_by'] = $localVarParams['orderBy'];
        }
        if ($localVarParams['paymentTimeBegin'] !== null) {
            $queryParams['payment_time_begin'] = $localVarParams['paymentTimeBegin'];
        }
        if ($localVarParams['paymentTimeEnd'] !== null) {
            $queryParams['payment_time_end'] = $localVarParams['paymentTimeEnd'];
        }
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerOrdersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerOrdersRequest',
            $asyncRequest = true);
    }

    /**
     * 批量查询伙伴子客户账户余额
     * 功能描述：批量查询伙伴子客户账户余额
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomersBalancesDetailAsync($request)
    {
        return $this->listCustomersBalancesDetailAsyncWithHttpInfo($request);
    }
    
    public function listCustomersBalancesDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/accounts/customer-accounts/balances/batch-query';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomersBalancesDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomersBalancesDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源详单
     * 功能描述：客户在客户自建平台查询自己的资源详单，用于反映各类资源的消耗情况。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerselfResourceRecordDetailsAsync($request)
    {
        return $this->listCustomerselfResourceRecordDetailsAsyncWithHttpInfo($request);
    }
    
    public function listCustomerselfResourceRecordDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bills/customer-bills/res-records/query';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerselfResourceRecordDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerselfResourceRecordDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源消费记录
     * 功能描述：客户在客户自建平台查询每个资源的消费明细数据
     *
     * @param $request 请求对象
     * @return response
     */
    public function listCustomerselfResourceRecordsAsync($request)
    {
        return $this->listCustomerselfResourceRecordsAsyncWithHttpInfo($request);
    }
    
    public function listCustomerselfResourceRecordsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bills/customer-bills/res-fee-records';
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
        if ($localVarParams['cycle'] !== null) {
            $queryParams['cycle'] = $localVarParams['cycle'];
        }
        if ($localVarParams['cloudServiceType'] !== null) {
            $queryParams['cloud_service_type'] = $localVarParams['cloudServiceType'];
        }
        if ($localVarParams['region'] !== null) {
            $queryParams['region'] = $localVarParams['region'];
        }
        if ($localVarParams['chargeMode'] !== null) {
            $queryParams['charge_mode'] = $localVarParams['chargeMode'];
        }
        if ($localVarParams['billType'] !== null) {
            $queryParams['bill_type'] = $localVarParams['billType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['includeZeroRecord'] !== null) {
            $queryParams['include_zero_record'] = $localVarParams['includeZeroRecord'];
        }
        if ($localVarParams['method'] !== null) {
            $queryParams['method'] = $localVarParams['method'];
        }
        if ($localVarParams['subCustomerId'] !== null) {
            $queryParams['sub_customer_id'] = $localVarParams['subCustomerId'];
        }
        if ($localVarParams['tradeId'] !== null) {
            $queryParams['trade_id'] = $localVarParams['tradeId'];
        }
        if ($localVarParams['billDateBegin'] !== null) {
            $queryParams['bill_date_begin'] = $localVarParams['billDateBegin'];
        }
        if ($localVarParams['billDateEnd'] !== null) {
            $queryParams['bill_date_end'] = $localVarParams['billDateEnd'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerselfResourceRecordsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListCustomerselfResourceRecordsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询企业子账号可回收余额
     * 功能描述：企业主账号在客户自建平台查询企业子账号的可回收余额
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnterpriseMultiAccountAsync($request)
    {
        return $this->listEnterpriseMultiAccountAsyncWithHttpInfo($request);
    }
    
    public function listEnterpriseMultiAccountAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/enterprises/multi-accounts/retrieve-amount';
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
        if ($localVarParams['subCustomerId'] !== null) {
            $queryParams['sub_customer_id'] = $localVarParams['subCustomerId'];
        }
        if ($localVarParams['balanceType'] !== null) {
            $queryParams['balance_type'] = $localVarParams['balanceType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListEnterpriseMultiAccountResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListEnterpriseMultiAccountRequest',
            $asyncRequest = true);
    }

    /**
     * 查询企业组织结构
     * 功能描述：企业主账号在客户自建平台查询企业组织结构
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnterpriseOrganizationsAsync($request)
    {
        return $this->listEnterpriseOrganizationsAsyncWithHttpInfo($request);
    }
    
    public function listEnterpriseOrganizationsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/enterprises/multi-accounts/enterprise-organizations';
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
        if ($localVarParams['recursiveQuery'] !== null) {
            $queryParams['recursive_query'] = $localVarParams['recursiveQuery'];
        }
        if ($localVarParams['parentId'] !== null) {
            $queryParams['parent_id'] = $localVarParams['parentId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListEnterpriseOrganizationsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListEnterpriseOrganizationsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询企业子账号列表
     * 功能描述：企业主账号在客户自建平台查询企业子账号信息列表
     *
     * @param $request 请求对象
     * @return response
     */
    public function listEnterpriseSubCustomersAsync($request)
    {
        return $this->listEnterpriseSubCustomersAsyncWithHttpInfo($request);
    }
    
    public function listEnterpriseSubCustomersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/enterprises/multi-accounts/sub-customers';
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
        if ($localVarParams['subCustomerAccountName'] !== null) {
            $queryParams['sub_customer_account_name'] = $localVarParams['subCustomerAccountName'];
        }
        if ($localVarParams['subCustomerDisplayName'] !== null) {
            $queryParams['sub_customer_display_name'] = $localVarParams['subCustomerDisplayName'];
        }
        if ($localVarParams['fuzzyQuery'] !== null) {
            $queryParams['fuzzy_query'] = $localVarParams['fuzzyQuery'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['orgId'] !== null) {
            $queryParams['org_id'] = $localVarParams['orgId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListEnterpriseSubCustomersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListEnterpriseSubCustomersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源包列表
     * 功能描述：客户在自建平台查询资源包列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFreeResourceInfosAsync($request)
    {
        return $this->listFreeResourceInfosAsyncWithHttpInfo($request);
    }
    
    public function listFreeResourceInfosAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/payments/free-resources/query';
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
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListFreeResourceInfosResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListFreeResourceInfosRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源内使用量
     * 功能描述：客户在自建平台查询客户自己的资源包列表
     *
     * @param $request 请求对象
     * @return response
     */
    public function listFreeResourceUsagesAsync($request)
    {
        return $this->listFreeResourceUsagesAsyncWithHttpInfo($request);
    }
    
    public function listFreeResourceUsagesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/payments/free-resources/usages/details/query';
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
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListFreeResourceUsagesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListFreeResourceUsagesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询产品的折扣和激励策略
     * 功能描述：合作伙伴可以查看产品的折扣和激励策略。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIncentiveDiscountPoliciesAsync($request)
    {
        return $this->listIncentiveDiscountPoliciesAsyncWithHttpInfo($request);
    }
    
    public function listIncentiveDiscountPoliciesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/products/incentive-discount-policies';
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
        if ($localVarParams['time'] !== null) {
            $queryParams['time'] = $localVarParams['time'];
        }
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListIncentiveDiscountPoliciesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListIncentiveDiscountPoliciesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询精英服务商列表
     * 功能描述：华为云伙伴能力中心（一级经销商）可以查询精英服务商（二级经销商）列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIndirectPartnersAsync($request)
    {
        return $this->listIndirectPartnersAsyncWithHttpInfo($request);
    }
    
    public function listIndirectPartnersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/indirect-partners/query';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListIndirectPartnersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListIndirectPartnersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询已发放的代金券额度
     * 功能描述：华为云伙伴能力中心（一级经销商）可以在伙伴中心查看发放给精英服务商（二级经销商）的代金券额度列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIssuedCouponQuotasAsync($request)
    {
        return $this->listIssuedCouponQuotasAsyncWithHttpInfo($request);
    }
    
    public function listIssuedCouponQuotasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/issued-coupon-quotas';
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
        if ($localVarParams['quotaId'] !== null) {
            $queryParams['quota_id'] = $localVarParams['quotaId'];
        }
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
        }
        if ($localVarParams['parentQuotaId'] !== null) {
            $queryParams['parent_quota_id'] = $localVarParams['parentQuotaId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListIssuedCouponQuotasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListIssuedCouponQuotasRequest',
            $asyncRequest = true);
    }

    /**
     * 查询已发放的优惠券
     * 功能描述：合作伙伴可以查询已发放的优惠券列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listIssuedPartnerCouponsAsync($request)
    {
        return $this->listIssuedPartnerCouponsAsyncWithHttpInfo($request);
    }
    
    public function listIssuedPartnerCouponsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/promotions/benefits/partner-coupons';
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
        if ($localVarParams['couponId'] !== null) {
            $queryParams['coupon_id'] = $localVarParams['couponId'];
        }
        if ($localVarParams['customerId'] !== null) {
            $queryParams['customer_id'] = $localVarParams['customerId'];
        }
        if ($localVarParams['orderId'] !== null) {
            $queryParams['order_id'] = $localVarParams['orderId'];
        }
        if ($localVarParams['couponType'] !== null) {
            $queryParams['coupon_type'] = $localVarParams['couponType'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['createTimeBegin'] !== null) {
            $queryParams['create_time_begin'] = $localVarParams['createTimeBegin'];
        }
        if ($localVarParams['createTimeEnd'] !== null) {
            $queryParams['create_time_end'] = $localVarParams['createTimeEnd'];
        }
        if ($localVarParams['effectiveTimeBegin'] !== null) {
            $queryParams['effective_time_begin'] = $localVarParams['effectiveTimeBegin'];
        }
        if ($localVarParams['effectiveTimeEnd'] !== null) {
            $queryParams['effective_time_end'] = $localVarParams['effectiveTimeEnd'];
        }
        if ($localVarParams['expireTimeBegin'] !== null) {
            $queryParams['expire_time_begin'] = $localVarParams['expireTimeBegin'];
        }
        if ($localVarParams['expireTimeEnd'] !== null) {
            $queryParams['expire_time_end'] = $localVarParams['expireTimeEnd'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListIssuedPartnerCouponsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListIssuedPartnerCouponsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询使用量单位列表
     * 功能描述：伙伴在伙伴销售平台上查询资源使用量的度量单位及名称，度量单位类型等。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listMeasureUnitsAsync($request)
    {
        return $this->listMeasureUnitsAsyncWithHttpInfo($request);
    }
    
    public function listMeasureUnitsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bases/measurements';
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
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListMeasureUnitsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListMeasureUnitsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询按需产品价格
     * 功能描述：按需资源询价
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOnDemandResourceRatingsAsync($request)
    {
        return $this->listOnDemandResourceRatingsAsyncWithHttpInfo($request);
    }
    
    public function listOnDemandResourceRatingsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bills/ratings/on-demand-resources';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListOnDemandResourceRatingsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListOnDemandResourceRatingsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询订单可用优惠券
     * 功能描述：客户在客户自建平台查看订单可用的优惠券列表
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOrderCouponsByOrderIdAsync($request)
    {
        return $this->listOrderCouponsByOrderIdAsyncWithHttpInfo($request);
    }
    
    public function listOrderCouponsByOrderIdAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/customer-orders/order-coupons';
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
        if ($localVarParams['orderId'] !== null) {
            $queryParams['order_id'] = $localVarParams['orderId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListOrderCouponsByOrderIdResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListOrderCouponsByOrderIdRequest',
            $asyncRequest = true);
    }

    /**
     * 查询订单可用折扣
     * 功能描述：功能介绍客户在伙伴销售平台支付待支付订单时，查询可使用的折扣。只返回商务合同折扣和伙伴授权折扣客户在客户自建平台查看订单可用的优惠券列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listOrderDiscountsAsync($request)
    {
        return $this->listOrderDiscountsAsyncWithHttpInfo($request);
    }
    
    public function listOrderDiscountsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/customer-orders/order-discounts';
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
        if ($localVarParams['orderId'] !== null) {
            $queryParams['order_id'] = $localVarParams['orderId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListOrderDiscountsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListOrderDiscountsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询收支明细
     * 功能描述：伙伴在伙伴管理台可以查看自身的收支明细情况
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPartnerAccountChangeRecordsAsync($request)
    {
        return $this->listPartnerAccountChangeRecordsAsyncWithHttpInfo($request);
    }
    
    public function listPartnerAccountChangeRecordsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/accounts/partner-accounts/account-change-records';
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
        if ($localVarParams['balanceType'] !== null) {
            $queryParams['balance_type'] = $localVarParams['balanceType'];
        }
        if ($localVarParams['tradeType'] !== null) {
            $queryParams['trade_type'] = $localVarParams['tradeType'];
        }
        if ($localVarParams['tradeTimeBegin'] !== null) {
            $queryParams['trade_time_begin'] = $localVarParams['tradeTimeBegin'];
        }
        if ($localVarParams['tradeTimeEnd'] !== null) {
            $queryParams['trade_time_end'] = $localVarParams['tradeTimeEnd'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListPartnerAccountChangeRecordsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListPartnerAccountChangeRecordsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询调账记录
     * 功能描述：伙伴在伙伴销售平台查询向客户及关联的精英服务商（二级经销商）拨款或回收的调账记录
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPartnerAdjustRecordsAsync($request)
    {
        return $this->listPartnerAdjustRecordsAsyncWithHttpInfo($request);
    }
    
    public function listPartnerAdjustRecordsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v3/accounts/partner-accounts/adjust-records';
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
        if ($localVarParams['customerId'] !== null) {
            $queryParams['customer_id'] = $localVarParams['customerId'];
        }
        if ($localVarParams['operationType'] !== null) {
            $queryParams['operation_type'] = $localVarParams['operationType'];
        }
        if ($localVarParams['operationTimeBegin'] !== null) {
            $queryParams['operation_time_begin'] = $localVarParams['operationTimeBegin'];
        }
        if ($localVarParams['operationTimeEnd'] !== null) {
            $queryParams['operation_time_end'] = $localVarParams['operationTimeEnd'];
        }
        if ($localVarParams['transId'] !== null) {
            $queryParams['trans_id'] = $localVarParams['transId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListPartnerAdjustRecordsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListPartnerAdjustRecordsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询伙伴/精英服务商账户余额
     * 功能描述：合作伙伴可以查询自己及关联的精英服务商的账户余额。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPartnerBalancesAsync($request)
    {
        return $this->listPartnerBalancesAsyncWithHttpInfo($request);
    }
    
    public function listPartnerBalancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/accounts/partner-accounts/balances';
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
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListPartnerBalancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListPartnerBalancesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询优惠券的发放回收记录
     * 功能描述：合作伙伴可查看给客户发放和回收优惠券的操作记录。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPartnerCouponsRecordAsync($request)
    {
        return $this->listPartnerCouponsRecordAsyncWithHttpInfo($request);
    }
    
    public function listPartnerCouponsRecordAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/promotions/benefits/partner-coupons/records/query';
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
        if ($localVarParams['operationTypes'] !== null) {
            $queryParams['operation_types'] = $localVarParams['operationTypes'];
        }
        if ($localVarParams['quotaId'] !== null) {
            $queryParams['quota_id'] = $localVarParams['quotaId'];
        }
        if ($localVarParams['quotaType'] !== null) {
            $queryParams['quota_type'] = $localVarParams['quotaType'];
        }
        if ($localVarParams['couponIds'] !== null) {
            $queryParams['coupon_ids'] = $localVarParams['couponIds'];
        }
        if ($localVarParams['customerId'] !== null) {
            $queryParams['customer_id'] = $localVarParams['customerId'];
        }
        if ($localVarParams['operationTimeBegin'] !== null) {
            $queryParams['operation_time_begin'] = $localVarParams['operationTimeBegin'];
        }
        if ($localVarParams['operationTimeEnd'] !== null) {
            $queryParams['operation_time_end'] = $localVarParams['operationTimeEnd'];
        }
        if ($localVarParams['result'] !== null) {
            $queryParams['result'] = $localVarParams['result'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListPartnerCouponsRecordResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListPartnerCouponsRecordRequest',
            $asyncRequest = true);
    }

    /**
     * 查询客户包年/包月资源列表
     * 功能描述：客户在客户自建平台查询某个或所有的包年/包月资源
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPayPerUseCustomerResourcesAsync($request)
    {
        return $this->listPayPerUseCustomerResourcesAsyncWithHttpInfo($request);
    }
    
    public function listPayPerUseCustomerResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/suscriptions/resources/query';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListPayPerUseCustomerResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListPayPerUseCustomerResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询邮寄地址
     * 功能描述：客户可以查询自己的邮寄地址信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listPostalAddressAsync($request)
    {
        return $this->listPostalAddressAsyncWithHttpInfo($request);
    }
    
    public function listPostalAddressAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/customers/postal-addresses';
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListPostalAddressResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListPostalAddressRequest',
            $asyncRequest = true);
    }

    /**
     * 查询省份信息
     * 功能描述：伙伴在伙伴销售平台上查询省份信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listProvincesAsync($request)
    {
        return $this->listProvincesAsyncWithHttpInfo($request);
    }
    
    public function listProvincesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/systems/configs/provinces';
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListProvincesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListProvincesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询优惠券额度
     * 功能描述：合作伙伴可以查看所拥有的优惠劵额度。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listQuotaCouponsAsync($request)
    {
        return $this->listQuotaCouponsAsyncWithHttpInfo($request);
    }
    
    public function listQuotaCouponsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/coupon-quotas/query';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListQuotaCouponsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListQuotaCouponsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询包年/包月产品价格
     * 功能描述：客户在自建平台按照条件查询包年/包月产品开通时候的价格
     *
     * @param $request 请求对象
     * @return response
     */
    public function listRateOnPeriodDetailAsync($request)
    {
        return $this->listRateOnPeriodDetailAsyncWithHttpInfo($request);
    }
    
    public function listRateOnPeriodDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bills/ratings/period-resources/subscribe-rate';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListRateOnPeriodDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListRateOnPeriodDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询资源类型列表
     * 功能描述：客户在客户自建平台查询资源类型的列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceTypesAsync($request)
    {
        return $this->listResourceTypesAsyncWithHttpInfo($request);
    }
    
    public function listResourceTypesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bases/resource-types';
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
        if ($localVarParams['resourceTypeCode'] !== null) {
            $queryParams['resource_type_code'] = $localVarParams['resourceTypeCode'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListResourceTypesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListResourceTypesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询95计费资源用量明细
     * 功能描述：客户对于部分云服务，可以查询自己的使用量详情。主要应对95计费的场景
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceUsageAsync($request)
    {
        return $this->listResourceUsageAsyncWithHttpInfo($request);
    }
    
    public function listResourceUsageAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bills/customer-bills/resources/usage/details';
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
        if ($localVarParams['billCycle'] !== null) {
            $queryParams['bill_cycle'] = $localVarParams['billCycle'];
        }
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['resourceTypeCode'] !== null) {
            $queryParams['resource_type_code'] = $localVarParams['resourceTypeCode'];
        }
        if ($localVarParams['usageType'] !== null) {
            $queryParams['usage_type'] = $localVarParams['usageType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListResourceUsageResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListResourceUsageRequest',
            $asyncRequest = true);
    }

    /**
     * 查询95计费资源用量汇总
     * 功能描述：客户对于部分云服务，可以查询自己的使用量汇总详情。主要应对95计费的场景
     *
     * @param $request 请求对象
     * @return response
     */
    public function listResourceUsageSummaryAsync($request)
    {
        return $this->listResourceUsageSummaryAsyncWithHttpInfo($request);
    }
    
    public function listResourceUsageSummaryAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bills/customer-bills/resources/usage/summary';
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
        if ($localVarParams['billCycle'] !== null) {
            $queryParams['bill_cycle'] = $localVarParams['billCycle'];
        }
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['resourceTypeCode'] !== null) {
            $queryParams['resource_type_code'] = $localVarParams['resourceTypeCode'];
        }
        if ($localVarParams['usageType'] !== null) {
            $queryParams['usage_type'] = $localVarParams['usageType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListResourceUsageSummaryResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListResourceUsageSummaryRequest',
            $asyncRequest = true);
    }

    /**
     * 根据云服务类型查询资源列表
     * 功能描述：伙伴在伙伴销售平台根据云服务类型查询关联的资源类型编码和名称，用于查询按需产品的价格或包年/包月产品的价格。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServiceResourcesAsync($request)
    {
        return $this->listServiceResourcesAsyncWithHttpInfo($request);
    }
    
    public function listServiceResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/products/service-resources';
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
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListServiceResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListServiceResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询云服务类型列表
     * 功能描述：伙伴在伙伴销售平台查询云服务类型的列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listServiceTypesAsync($request)
    {
        return $this->listServiceTypesAsyncWithHttpInfo($request);
    }
    
    public function listServiceTypesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bases/service-types';
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
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListServiceTypesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListServiceTypesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询客户消费记录
     * 功能描述：查询客户消费记录
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubCustomerBillDetailAsync($request)
    {
        return $this->listSubCustomerBillDetailAsyncWithHttpInfo($request);
    }
    
    public function listSubCustomerBillDetailAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bills/subcustomer-bills/res-fee-records';
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
        if ($localVarParams['billCycle'] !== null) {
            $queryParams['bill_cycle'] = $localVarParams['billCycle'];
        }
        if ($localVarParams['customerId'] !== null) {
            $queryParams['customer_id'] = $localVarParams['customerId'];
        }
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['regionCode'] !== null) {
            $queryParams['region_code'] = $localVarParams['regionCode'];
        }
        if ($localVarParams['chargingMode'] !== null) {
            $queryParams['charging_mode'] = $localVarParams['chargingMode'];
        }
        if ($localVarParams['billDetailType'] !== null) {
            $queryParams['bill_detail_type'] = $localVarParams['billDetailType'];
        }
        if ($localVarParams['resourceId'] !== null) {
            $queryParams['resource_id'] = $localVarParams['resourceId'];
        }
        if ($localVarParams['resourceName'] !== null) {
            $queryParams['resource_name'] = $localVarParams['resourceName'];
        }
        if ($localVarParams['tradeId'] !== null) {
            $queryParams['trade_id'] = $localVarParams['tradeId'];
        }
        if ($localVarParams['accountManagerId'] !== null) {
            $queryParams['account_manager_id'] = $localVarParams['accountManagerId'];
        }
        if ($localVarParams['associationType'] !== null) {
            $queryParams['association_type'] = $localVarParams['associationType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
        }
        if ($localVarParams['billDateBegin'] !== null) {
            $queryParams['bill_date_begin'] = $localVarParams['billDateBegin'];
        }
        if ($localVarParams['billDateEnd'] !== null) {
            $queryParams['bill_date_end'] = $localVarParams['billDateEnd'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubCustomerBillDetailResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubCustomerBillDetailRequest',
            $asyncRequest = true);
    }

    /**
     * 查询优惠券列表
     * 功能描述：伙伴可以查询自身的优惠券信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubCustomerCouponsAsync($request)
    {
        return $this->listSubCustomerCouponsAsyncWithHttpInfo($request);
    }
    
    public function listSubCustomerCouponsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/promotions/benefits/coupons';
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
        if ($localVarParams['couponId'] !== null) {
            $queryParams['coupon_id'] = $localVarParams['couponId'];
        }
        if ($localVarParams['orderId'] !== null) {
            $queryParams['order_id'] = $localVarParams['orderId'];
        }
        if ($localVarParams['promotionPlanId'] !== null) {
            $queryParams['promotion_plan_id'] = $localVarParams['promotionPlanId'];
        }
        if ($localVarParams['couponType'] !== null) {
            $queryParams['coupon_type'] = $localVarParams['couponType'];
        }
        if ($localVarParams['status'] !== null) {
            $queryParams['status'] = $localVarParams['status'];
        }
        if ($localVarParams['activeStartTime'] !== null) {
            $queryParams['active_start_time'] = $localVarParams['activeStartTime'];
        }
        if ($localVarParams['activeEndTime'] !== null) {
            $queryParams['active_end_time'] = $localVarParams['activeEndTime'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['sourceId'] !== null) {
            $queryParams['source_id'] = $localVarParams['sourceId'];
        }
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubCustomerCouponsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubCustomerCouponsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询伙伴折扣
     * 功能描述：合作伙伴可以查看为客户设置的折扣，每次查询一个客户。如果该客户没有设置折扣，返回null。精英服务商（二级经销商）也可以通过该接口查询子客户的折扣。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubCustomerDiscountsAsync($request)
    {
        return $this->listSubCustomerDiscountsAsyncWithHttpInfo($request);
    }
    
    public function listSubCustomerDiscountsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/discounts';
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
        if ($localVarParams['customerId'] !== null) {
            $queryParams['customer_id'] = $localVarParams['customerId'];
        }
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubCustomerDiscountsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubCustomerDiscountsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询客户列表
     * 功能描述：伙伴可以查询合作伙伴的客户信息列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubCustomersAsync($request)
    {
        return $this->listSubCustomersAsyncWithHttpInfo($request);
    }
    
    public function listSubCustomersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/sub-customers/query';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubCustomersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubCustomersRequest',
            $asyncRequest = true);
    }

    /**
     * 查询客户月度消费账单
     * 功能描述：合作伙伴可查询客户的消费汇总账单，消费按月汇总
     *
     * @param $request 请求对象
     * @return response
     */
    public function listSubcustomerMonthlyBillsAsync($request)
    {
        return $this->listSubcustomerMonthlyBillsAsyncWithHttpInfo($request);
    }
    
    public function listSubcustomerMonthlyBillsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bills/partner-bills/subcustomer-bills/monthly-sum';
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
        if ($localVarParams['customerId'] !== null) {
            $queryParams['customer_id'] = $localVarParams['customerId'];
        }
        if ($localVarParams['cycle'] !== null) {
            $queryParams['cycle'] = $localVarParams['cycle'];
        }
        if ($localVarParams['cloudServiceType'] !== null) {
            $queryParams['cloud_service_type'] = $localVarParams['cloudServiceType'];
        }
        if ($localVarParams['chargeMode'] !== null) {
            $queryParams['charge_mode'] = $localVarParams['chargeMode'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['billType'] !== null) {
            $queryParams['bill_type'] = $localVarParams['billType'];
        }
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubcustomerMonthlyBillsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListSubcustomerMonthlyBillsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询使用量类型列表
     * 功能描述：伙伴在伙伴销售平台查询资源的使用量类型列表。
     *
     * @param $request 请求对象
     * @return response
     */
    public function listUsageTypesAsync($request)
    {
        return $this->listUsageTypesAsyncWithHttpInfo($request);
    }
    
    public function listUsageTypesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/products/usage-types';
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
        if ($localVarParams['resourceTypeCode'] !== null) {
            $queryParams['resource_type_code'] = $localVarParams['resourceTypeCode'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ListUsageTypesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ListUsageTypesRequest',
            $asyncRequest = true);
    }

    /**
     * 支付包年/包月产品订单
     * 功能描述：客户可以对待支付状态的包年/包月产品订单进行支付
     *
     * @param $request 请求对象
     * @return response
     */
    public function payOrdersAsync($request)
    {
        return $this->payOrdersAsyncWithHttpInfo($request);
    }
    
    public function payOrdersAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/customer-orders/pay';
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
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\PayOrdersResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\PayOrdersRequest',
            $asyncRequest = true);
    }

    /**
     * 回收代金券额度
     * 功能描述：华为云伙伴能力中心（一级经销商）可以在伙伴中心回收已发放给精英服务商（二级经销商）的代金券额度。
     *
     * @param $request 请求对象
     * @return response
     */
    public function reclaimCouponQuotasAsync($request)
    {
        return $this->reclaimCouponQuotasAsyncWithHttpInfo($request);
    }
    
    public function reclaimCouponQuotasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/coupon-quotas/indirect-partner-reclaim';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimCouponQuotasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimCouponQuotasRequest',
            $asyncRequest = true);
    }

    /**
     * 回收精英服务商账户拨款
     * 功能描述：合作伙伴可以回收二级渠道账户余额
     *
     * @param $request 请求对象
     * @return response
     */
    public function reclaimIndirectPartnerAccountAsync($request)
    {
        return $this->reclaimIndirectPartnerAccountAsyncWithHttpInfo($request);
    }
    
    public function reclaimIndirectPartnerAccountAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/accounts/partner-accounts/indirect-partner-reclaim';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimIndirectPartnerAccountResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimIndirectPartnerAccountRequest',
            $asyncRequest = true);
    }

    /**
     * 回收优惠券
     * 功能描述：对于合作伙伴已经下发给客户的优惠券，如遇发错或其他特殊情况，合作伙伴有回收的权利。优惠券回收后，客户将不再拥有该优惠券。
     *
     * @param $request 请求对象
     * @return response
     */
    public function reclaimPartnerCouponsAsync($request)
    {
        return $this->reclaimPartnerCouponsAsyncWithHttpInfo($request);
    }
    
    public function reclaimPartnerCouponsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/promotions/benefits/partner-coupons/reclaim';
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
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimPartnerCouponsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimPartnerCouponsRequest',
            $asyncRequest = true);
    }

    /**
     * 企业主账号从企业子账号回收拨款
     * 功能描述：企业主账号在客户自建平台回收给企业子账号的拨款
     *
     * @param $request 请求对象
     * @return response
     */
    public function reclaimSubEnterpriseAmountAsync($request)
    {
        return $this->reclaimSubEnterpriseAmountAsyncWithHttpInfo($request);
    }
    
    public function reclaimSubEnterpriseAmountAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/enterprises/multi-accounts/retrieve-amount';
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
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimSubEnterpriseAmountResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimSubEnterpriseAmountRequest',
            $asyncRequest = true);
    }

    /**
     * 回收客户账户余额
     * 功能描述：当客户不再使用华为云产品时，合作伙伴可以回收垫付类客户账户余额。（支持一级回收二级的子客户余额）
     *
     * @param $request 请求对象
     * @return response
     */
    public function reclaimToPartnerAccountAsync($request)
    {
        return $this->reclaimToPartnerAccountAsyncWithHttpInfo($request);
    }
    
    public function reclaimToPartnerAccountAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/accounts/partner-accounts/reclaim';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimToPartnerAccountResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ReclaimToPartnerAccountRequest',
            $asyncRequest = true);
    }

    /**
     * 续订包年/包月资源
     * 功能描述：客户的包年包/月资源即将到期时，可进行包年/包月资源的续订
     *
     * @param $request 请求对象
     * @return response
     */
    public function renewalResourcesAsync($request)
    {
        return $this->renewalResourcesAsyncWithHttpInfo($request);
    }
    
    public function renewalResourcesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/subscriptions/resources/renew';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\RenewalResourcesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\RenewalResourcesRequest',
            $asyncRequest = true);
    }

    /**
     * 发送短信验证码
     * 功能描述：企业主账号在客户自建平台发送短信验证码
     *
     * @param $request 请求对象
     * @return response
     */
    public function sendSmsVerificationCodeAsync($request)
    {
        return $this->sendSmsVerificationCodeAsyncWithHttpInfo($request);
    }
    
    public function sendSmsVerificationCodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/enterprises/multi-accounts/sm-verification-code';
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
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\SendSmsVerificationCodeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\SendSmsVerificationCodeRequest',
            $asyncRequest = true);
    }

    /**
     * 发送验证码
     * 功能描述：客户注册时，如果填写了手机号，可以向对应的手机发送注册验证码，校验信息的正确性。使用个人银行卡方式进行实名认证时，通过该接口向指定的手机发送验证码。
     *
     * @param $request 请求对象
     * @return response
     */
    public function sendVerificationMessageCodeAsync($request)
    {
        return $this->sendVerificationMessageCodeAsyncWithHttpInfo($request);
    }
    
    public function sendVerificationMessageCodeAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bases/verificationcode/send';
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
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\SendVerificationMessageCodeResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\SendVerificationMessageCodeRequest',
            $asyncRequest = true);
    }

    /**
     * 查询账户余额
     * 功能描述：查询账户余额
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCustomerAccountBalancesAsync($request)
    {
        return $this->showCustomerAccountBalancesAsyncWithHttpInfo($request);
    }
    
    public function showCustomerAccountBalancesAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/accounts/customer-accounts/balances';
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ShowCustomerAccountBalancesResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ShowCustomerAccountBalancesRequest',
            $asyncRequest = true);
    }

    /**
     * 查询汇总账单
     * 功能描述：客户在客户自建平台查询自身的消费汇总账单，此账单按月汇总消费数据。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCustomerMonthlySumAsync($request)
    {
        return $this->showCustomerMonthlySumAsyncWithHttpInfo($request);
    }
    
    public function showCustomerMonthlySumAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/bills/customer-bills/monthly-sum';
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
        if ($localVarParams['billCycle'] !== null) {
            $queryParams['bill_cycle'] = $localVarParams['billCycle'];
        }
        if ($localVarParams['serviceTypeCode'] !== null) {
            $queryParams['service_type_code'] = $localVarParams['serviceTypeCode'];
        }
        if ($localVarParams['enterpriseProjectId'] !== null) {
            $queryParams['enterprise_project_id'] = $localVarParams['enterpriseProjectId'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
        }
        if ($localVarParams['method'] !== null) {
            $queryParams['method'] = $localVarParams['method'];
        }
        if ($localVarParams['subCustomerId'] !== null) {
            $queryParams['sub_customer_id'] = $localVarParams['subCustomerId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ShowCustomerMonthlySumResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ShowCustomerMonthlySumRequest',
            $asyncRequest = true);
    }

    /**
     * 查询订单详情
     * 功能描述：客户可以查看订单详情
     *
     * @param $request 请求对象
     * @return response
     */
    public function showCustomerOrderDetailsAsync($request)
    {
        return $this->showCustomerOrderDetailsAsyncWithHttpInfo($request);
    }
    
    public function showCustomerOrderDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/customer-orders/details/{order_id}';
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
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['indirectPartnerId'] !== null) {
            $queryParams['indirect_partner_id'] = $localVarParams['indirectPartnerId'];
        }
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
        }
        if ($localVarParams['orderId'] !== null) {
            $pathParams['order_id'] = $localVarParams['orderId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ShowCustomerOrderDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ShowCustomerOrderDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 查询企业主账号可拨款余额
     * 功能描述：企业主账号在客户自建平台查询自己的可拨款余额
     *
     * @param $request 请求对象
     * @return response
     */
    public function showMultiAccountTransferAmountAsync($request)
    {
        return $this->showMultiAccountTransferAmountAsyncWithHttpInfo($request);
    }
    
    public function showMultiAccountTransferAmountAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/enterprises/multi-accounts/transfer-amount';
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
        if ($localVarParams['balanceType'] !== null) {
            $queryParams['balance_type'] = $localVarParams['balanceType'];
        }
        if ($localVarParams['offset'] !== null) {
            $queryParams['offset'] = $localVarParams['offset'];
        }
        if ($localVarParams['limit'] !== null) {
            $queryParams['limit'] = $localVarParams['limit'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ShowMultiAccountTransferAmountResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ShowMultiAccountTransferAmountRequest',
            $asyncRequest = true);
    }

    /**
     * 查询实名认证审核结果
     * 功能描述：如果实名认证申请或实名认证变更申请的响应中，显示需要人工审核，使用该接口查询审核结果。
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRealnameAuthenticationReviewResultAsync($request)
    {
        return $this->showRealnameAuthenticationReviewResultAsyncWithHttpInfo($request);
    }
    
    public function showRealnameAuthenticationReviewResultAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/customers/realname-auths/result';
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
        if ($localVarParams['customerId'] !== null) {
            $queryParams['customer_id'] = $localVarParams['customerId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ShowRealnameAuthenticationReviewResultResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ShowRealnameAuthenticationReviewResultRequest',
            $asyncRequest = true);
    }

    /**
     * 查询退款订单的金额详情
     * 功能描述：客户在伙伴销售平台查询某次退订订单或者降配订单的退款金额来自哪些资源和对应订单
     *
     * @param $request 请求对象
     * @return response
     */
    public function showRefundOrderDetailsAsync($request)
    {
        return $this->showRefundOrderDetailsAsyncWithHttpInfo($request);
    }
    
    public function showRefundOrderDetailsAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/customer-orders/refund-orders';
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
        if ($localVarParams['orderId'] !== null) {
            $queryParams['order_id'] = $localVarParams['orderId'];
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\ShowRefundOrderDetailsResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\ShowRefundOrderDetailsRequest',
            $asyncRequest = true);
    }

    /**
     * 向精英服务商发放代金券额度
     * 功能描述：华为云伙伴能力中心（一级经销商）可以在伙伴中心向精英服务商（二级经销商）发放代金券额度。
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCouponQuotasAsync($request)
    {
        return $this->updateCouponQuotasAsyncWithHttpInfo($request);
    }
    
    public function updateCouponQuotasAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/partners/coupon-quotas/indirect-partner-adjust';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\UpdateCouponQuotasResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\UpdateCouponQuotasRequest',
            $asyncRequest = true);
    }

    /**
     * 向客户账户拨款
     * 功能描述：合作伙伴可以为垫付类客户账户拨款。
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateCustomerAccountAmountAsync($request)
    {
        return $this->updateCustomerAccountAmountAsyncWithHttpInfo($request);
    }
    
    public function updateCustomerAccountAmountAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/accounts/partner-accounts/adjust-amount';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\UpdateCustomerAccountAmountResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\UpdateCustomerAccountAmountRequest',
            $asyncRequest = true);
    }

    /**
     * 向精英服务商账户拨款
     * 功能描述：华为云伙伴能力中心（一级经销商）可以向精英服务商（二级经销商）账户拨款
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateIndirectPartnerAccountAsync($request)
    {
        return $this->updateIndirectPartnerAccountAsyncWithHttpInfo($request);
    }
    
    public function updateIndirectPartnerAccountAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/accounts/partner-accounts/indirect-partner-adjust';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\UpdateIndirectPartnerAccountResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\UpdateIndirectPartnerAccountRequest',
            $asyncRequest = true);
    }

    /**
     * 设置或者取消包年/包月资源到期转按需
     * 功能描述：客户可以设置包年/包月资源到期后转为按需资源计费。包年/包月计费模式到期后，按需的计费模式即生效
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePeriodToOnDemandAsync($request)
    {
        return $this->updatePeriodToOnDemandAsyncWithHttpInfo($request);
    }
    
    public function updatePeriodToOnDemandAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/orders/subscriptions/resources/to-on-demand';
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\UpdatePeriodToOnDemandResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\UpdatePeriodToOnDemandRequest',
            $asyncRequest = true);
    }

    /**
     * 修改邮寄地址
     * 功能描述：客户可以修改自己的邮寄地址信息。
     *
     * @param $request 请求对象
     * @return response
     */
    public function updatePostalAsync($request)
    {
        return $this->updatePostalAsyncWithHttpInfo($request);
    }
    
    public function updatePostalAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/customers/postal-addresses';
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
        if ($localVarParams['xLanguage'] !== null) {
            $headerParams['x_language'] = $localVarParams['xLanguage'];
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
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\UpdatePostalResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\UpdatePostalRequest',
            $asyncRequest = true);
    }

    /**
     * 企业主账号向企业子账号拨款
     * 功能描述：企业主账号在客户自建平台向企业子账号拨款
     *
     * @param $request 请求对象
     * @return response
     */
    public function updateSubEnterpriseAmountAsync($request)
    {
        return $this->updateSubEnterpriseAmountAsyncWithHttpInfo($request);
    }
    
    public function updateSubEnterpriseAmountAsyncWithHttpInfo($request){
        $collection_formats = [];
        $resourcePath = '/v2/enterprises/multi-accounts/transfer-amount';
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
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
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
            $responseType='\HuaweiCloud\SDK\Bss\V2\Model\UpdateSubEnterpriseAmountResponse',
            $collectionFormats=$collection_formats,
            $requestType='\HuaweiCloud\SDK\Bss\V2\Model\UpdateSubEnterpriseAmountRequest',
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