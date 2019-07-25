# Academe\Starling\PaymentsSdk\SendPaymentsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**instructDomesticPayment**](SendPaymentsApi.md#instructDomesticPayment) | **PUT** /api/v1/{paymentBusinessUid}/account/{accountUid}/address/{addressUid}/payment/{paymentUid}/domestic | Instructs a new domestic (within the UK) payment for an account, via an address assigned to the account
[**instructPaymentOriginatingOverseas**](SendPaymentsApi.md#instructPaymentOriginatingOverseas) | **PUT** /api/v1/{paymentBusinessUid}/account/{accountUid}/payment/{paymentUid}/domestic-originating-overseas | Instructs a new domestic (within the UK) payment for an account, which originated from an account overseas, often in a foreign currency
[**returnPayment**](SendPaymentsApi.md#returnPayment) | **PUT** /api/v1/{paymentBusinessUid}/account/{accountUid}/address/{addressUid}/payment/{paymentUid}/return | Returns a previously received inbound payment to the sender with a given reason. If the payment received originated overseas, the payment will be returned to the UK based instructing agent



## instructDomesticPayment

> \Academe\Starling\PaymentsSdk\Model\DomesticPaymentInstructionResponse instructDomesticPayment($paymentBusinessUid, $accountUid, $addressUid, $paymentUid, $domesticPaymentInstructionRequest)

Instructs a new domestic (within the UK) payment for an account, via an address assigned to the account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\SendPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payment account
$addressUid = 'addressUid_example'; // string | The identifier of the individual account address
$paymentUid = 'paymentUid_example'; // string | Identifier of the payment to be sent, assigned by the sending client for idempotency reasons
$domesticPaymentInstructionRequest = new \Academe\Starling\PaymentsSdk\Model\DomesticPaymentInstructionRequest(); // \Academe\Starling\PaymentsSdk\Model\DomesticPaymentInstructionRequest | Payload describing the payment to be instructed

try {
    $result = $apiInstance->instructDomesticPayment($paymentBusinessUid, $accountUid, $addressUid, $paymentUid, $domesticPaymentInstructionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendPaymentsApi->instructDomesticPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |
 **accountUid** | [**string**](../Model/.md)| The identifier of the individual payment account |
 **addressUid** | [**string**](../Model/.md)| The identifier of the individual account address |
 **paymentUid** | [**string**](../Model/.md)| Identifier of the payment to be sent, assigned by the sending client for idempotency reasons |
 **domesticPaymentInstructionRequest** | [**\Academe\Starling\PaymentsSdk\Model\DomesticPaymentInstructionRequest**](../Model/DomesticPaymentInstructionRequest.md)| Payload describing the payment to be instructed |

### Return type

[**\Academe\Starling\PaymentsSdk\Model\DomesticPaymentInstructionResponse**](../Model/DomesticPaymentInstructionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## instructPaymentOriginatingOverseas

> \Academe\Starling\PaymentsSdk\Model\PaymentOriginatingOverseasInstructionResponse instructPaymentOriginatingOverseas($paymentBusinessUid, $accountUid, $paymentUid, $paymentOriginatingOverseasInstructionRequest)

Instructs a new domestic (within the UK) payment for an account, which originated from an account overseas, often in a foreign currency

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\SendPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payment account
$paymentUid = 'paymentUid_example'; // string | Identifier of the payment to be sent, assigned by the sending client for idempotency reasons
$paymentOriginatingOverseasInstructionRequest = new \Academe\Starling\PaymentsSdk\Model\PaymentOriginatingOverseasInstructionRequest(); // \Academe\Starling\PaymentsSdk\Model\PaymentOriginatingOverseasInstructionRequest | Payload describing the payment to be instructed

try {
    $result = $apiInstance->instructPaymentOriginatingOverseas($paymentBusinessUid, $accountUid, $paymentUid, $paymentOriginatingOverseasInstructionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendPaymentsApi->instructPaymentOriginatingOverseas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |
 **accountUid** | [**string**](../Model/.md)| The identifier of the individual payment account |
 **paymentUid** | [**string**](../Model/.md)| Identifier of the payment to be sent, assigned by the sending client for idempotency reasons |
 **paymentOriginatingOverseasInstructionRequest** | [**\Academe\Starling\PaymentsSdk\Model\PaymentOriginatingOverseasInstructionRequest**](../Model/PaymentOriginatingOverseasInstructionRequest.md)| Payload describing the payment to be instructed |

### Return type

[**\Academe\Starling\PaymentsSdk\Model\PaymentOriginatingOverseasInstructionResponse**](../Model/PaymentOriginatingOverseasInstructionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## returnPayment

> \Academe\Starling\PaymentsSdk\Model\PaymentReturnResponse returnPayment($paymentBusinessUid, $accountUid, $addressUid, $paymentUid, $paymentReturnRequest)

Returns a previously received inbound payment to the sender with a given reason. If the payment received originated overseas, the payment will be returned to the UK based instructing agent

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\SendPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payment account
$addressUid = 'addressUid_example'; // string | The identifier of the individual account address
$paymentUid = 'paymentUid_example'; // string | The identifier of the new outbound payment returning the inbound payment specified in the payload
$paymentReturnRequest = new \Academe\Starling\PaymentsSdk\Model\PaymentReturnRequest(); // \Academe\Starling\PaymentsSdk\Model\PaymentReturnRequest | Payload describing the payment to be returned and reason for the return

try {
    $result = $apiInstance->returnPayment($paymentBusinessUid, $accountUid, $addressUid, $paymentUid, $paymentReturnRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SendPaymentsApi->returnPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |
 **accountUid** | [**string**](../Model/.md)| The identifier of the individual payment account |
 **addressUid** | [**string**](../Model/.md)| The identifier of the individual account address |
 **paymentUid** | [**string**](../Model/.md)| The identifier of the new outbound payment returning the inbound payment specified in the payload |
 **paymentReturnRequest** | [**\Academe\Starling\PaymentsSdk\Model\PaymentReturnRequest**](../Model/PaymentReturnRequest.md)| Payload describing the payment to be returned and reason for the return |

### Return type

[**\Academe\Starling\PaymentsSdk\Model\PaymentReturnResponse**](../Model/PaymentReturnResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

