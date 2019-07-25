# Academe\Starling\PaymentsSdk\PreviousPaymentsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPaymentDetails**](PreviousPaymentsApi.md#getPaymentDetails) | **GET** /api/v1/{paymentBusinessUid}/account/{accountUid}/address/{addressUid}/payment/{paymentUid} | Gets the details of an individual payment transaction
[**getPaymentsForAccountAddress**](PreviousPaymentsApi.md#getPaymentsForAccountAddress) | **GET** /api/v1/{paymentBusinessUid}/account/{accountUid}/address/{addressUid}/payment | Gets a list of sent and received payments for an account address, returns in pages of up to 100 (within the specified time period) with the most recent payment first



## getPaymentDetails

> \Academe\Starling\PaymentsSdk\Model\PaymentDetails getPaymentDetails($paymentBusinessUid, $accountUid, $addressUid, $paymentUid)

Gets the details of an individual payment transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\PreviousPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payment account
$addressUid = 'addressUid_example'; // string | The identifier of the individual account address
$paymentUid = 'paymentUid_example'; // string | The identifier of an individual payment

try {
    $result = $apiInstance->getPaymentDetails($paymentBusinessUid, $accountUid, $addressUid, $paymentUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreviousPaymentsApi->getPaymentDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |
 **accountUid** | [**string**](../Model/.md)| The identifier of the individual payment account |
 **addressUid** | [**string**](../Model/.md)| The identifier of the individual account address |
 **paymentUid** | [**string**](../Model/.md)| The identifier of an individual payment |

### Return type

[**\Academe\Starling\PaymentsSdk\Model\PaymentDetails**](../Model/PaymentDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPaymentsForAccountAddress

> \Academe\Starling\PaymentsSdk\Model\PaymentDetails[] getPaymentsForAccountAddress($paymentBusinessUid, $accountUid, $addressUid, $direction, $from, $to, $page)

Gets a list of sent and received payments for an account address, returns in pages of up to 100 (within the specified time period) with the most recent payment first

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\PreviousPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payments account
$addressUid = 'addressUid_example'; // string | The identifier of the individual account address
$direction = 'ALL'; // string | Filter payments to a single direction
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Time which returned payments will have occurred on or after
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Time which returned payments will have occurred on or before
$page = 1; // int | Page number (pages of 100 payments) to return for the specified date range

try {
    $result = $apiInstance->getPaymentsForAccountAddress($paymentBusinessUid, $accountUid, $addressUid, $direction, $from, $to, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreviousPaymentsApi->getPaymentsForAccountAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |
 **accountUid** | [**string**](../Model/.md)| The identifier of the individual payments account |
 **addressUid** | [**string**](../Model/.md)| The identifier of the individual account address |
 **direction** | **string**| Filter payments to a single direction | [optional] [default to &#39;ALL&#39;]
 **from** | **\DateTime**| Time which returned payments will have occurred on or after | [optional]
 **to** | **\DateTime**| Time which returned payments will have occurred on or before | [optional]
 **page** | **int**| Page number (pages of 100 payments) to return for the specified date range | [optional] [default to 1]

### Return type

[**\Academe\Starling\PaymentsSdk\Model\PaymentDetails[]**](../Model/PaymentDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

