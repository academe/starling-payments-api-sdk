# Academe\Starling\PaymentsSdk\BACSPaymentsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateDirectDebitPaymentExecutionInstruction**](BACSPaymentsApi.md#updateDirectDebitPaymentExecutionInstruction) | **PUT** /api/v1/{paymentBusinessUid}/account/{accountUid}/address/{addressUid}/mandate/{mandateUid}/payment/{bacsPaymentUid} | Update the status of whether to pay an upcoming direct debit payment



## updateDirectDebitPaymentExecutionInstruction

> \Academe\Starling\PaymentsSdk\Model\UpdateDirectDebitPaymentExecutionInstructionResponse updateDirectDebitPaymentExecutionInstruction($paymentBusinessUid, $accountUid, $addressUid, $mandateUid, $bacsPaymentUid, $updateDirectDebitPaymentExecutionInstructionRequest)

Update the status of whether to pay an upcoming direct debit payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\BACSPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payment account
$addressUid = 'addressUid_example'; // string | The identifier of the individual account address
$mandateUid = 'mandateUid_example'; // string | The identifier of the individual mandate
$bacsPaymentUid = 'bacsPaymentUid_example'; // string | The identifier of the individual direct debit payment
$updateDirectDebitPaymentExecutionInstructionRequest = new \Academe\Starling\PaymentsSdk\Model\UpdateDirectDebitPaymentExecutionInstructionRequest(); // \Academe\Starling\PaymentsSdk\Model\UpdateDirectDebitPaymentExecutionInstructionRequest | Payload describing the new instruction of a direct debit payment's execution

try {
    $result = $apiInstance->updateDirectDebitPaymentExecutionInstruction($paymentBusinessUid, $accountUid, $addressUid, $mandateUid, $bacsPaymentUid, $updateDirectDebitPaymentExecutionInstructionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BACSPaymentsApi->updateDirectDebitPaymentExecutionInstruction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |
 **accountUid** | [**string**](../Model/.md)| The identifier of the individual payment account |
 **addressUid** | [**string**](../Model/.md)| The identifier of the individual account address |
 **mandateUid** | [**string**](../Model/.md)| The identifier of the individual mandate |
 **bacsPaymentUid** | [**string**](../Model/.md)| The identifier of the individual direct debit payment |
 **updateDirectDebitPaymentExecutionInstructionRequest** | [**\Academe\Starling\PaymentsSdk\Model\UpdateDirectDebitPaymentExecutionInstructionRequest**](../Model/UpdateDirectDebitPaymentExecutionInstructionRequest.md)| Payload describing the new instruction of a direct debit payment&#39;s execution | [optional]

### Return type

[**\Academe\Starling\PaymentsSdk\Model\UpdateDirectDebitPaymentExecutionInstructionResponse**](../Model/UpdateDirectDebitPaymentExecutionInstructionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

