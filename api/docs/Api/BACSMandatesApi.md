# Academe\Starling\PaymentsSdk\BACSMandatesApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelMandate**](BACSMandatesApi.md#cancelMandate) | **PUT** /api/v1/{paymentBusinessUid}/account/{accountUid}/address/{addressUid}/mandate/{mandateUid}/cancel | Cancels the specified mandate so that direct debit payments will no longer be accepted for it
[**getMandate**](BACSMandatesApi.md#getMandate) | **GET** /api/v1/{paymentBusinessUid}/account/{accountUid}/address/{addressUid}/mandate/{mandateUid} | Gets a specific direct debit mandate associated with the specified address
[**listMandatesForAddress**](BACSMandatesApi.md#listMandatesForAddress) | **GET** /api/v1/{paymentBusinessUid}/account/{accountUid}/address/{addressUid}/mandate | Lists all the direct debit mandates associated with the specified address
[**listPaymentsForMandate**](BACSMandatesApi.md#listPaymentsForMandate) | **GET** /api/v1/{paymentBusinessUid}/account/{accountUid}/address/{addressUid}/mandate/{mandateUid}/payment | Lists all the direct debit payments associated with the specified mandate, returns in pages of up to 100 with the most recent payments first



## cancelMandate

> \Academe\Starling\PaymentsSdk\Model\CancelMandateResponse cancelMandate($paymentBusinessUid, $accountUid, $addressUid, $mandateUid, $cancelMandateRequest)

Cancels the specified mandate so that direct debit payments will no longer be accepted for it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\BACSMandatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payment account
$addressUid = 'addressUid_example'; // string | The identifier of the individual account address
$mandateUid = 'mandateUid_example'; // string | The identifier of the individual mandate
$cancelMandateRequest = new \Academe\Starling\PaymentsSdk\Model\CancelMandateRequest(); // \Academe\Starling\PaymentsSdk\Model\CancelMandateRequest | Request containing the reason for cancelling the mandate

try {
    $result = $apiInstance->cancelMandate($paymentBusinessUid, $accountUid, $addressUid, $mandateUid, $cancelMandateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BACSMandatesApi->cancelMandate: ', $e->getMessage(), PHP_EOL;
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
 **cancelMandateRequest** | [**\Academe\Starling\PaymentsSdk\Model\CancelMandateRequest**](../Model/CancelMandateRequest.md)| Request containing the reason for cancelling the mandate |

### Return type

[**\Academe\Starling\PaymentsSdk\Model\CancelMandateResponse**](../Model/CancelMandateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMandate

> \Academe\Starling\PaymentsSdk\Model\DirectDebitMandate getMandate($paymentBusinessUid, $accountUid, $addressUid, $mandateUid)

Gets a specific direct debit mandate associated with the specified address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\BACSMandatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payment account
$addressUid = 'addressUid_example'; // string | The identifier of the individual account address
$mandateUid = 'mandateUid_example'; // string | The identifier of the individual mandate

try {
    $result = $apiInstance->getMandate($paymentBusinessUid, $accountUid, $addressUid, $mandateUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BACSMandatesApi->getMandate: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Academe\Starling\PaymentsSdk\Model\DirectDebitMandate**](../Model/DirectDebitMandate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listMandatesForAddress

> \Academe\Starling\PaymentsSdk\Model\DirectDebitMandate[] listMandatesForAddress($paymentBusinessUid, $accountUid, $addressUid)

Lists all the direct debit mandates associated with the specified address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\BACSMandatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payment account
$addressUid = 'addressUid_example'; // string | The identifier of the individual account address

try {
    $result = $apiInstance->listMandatesForAddress($paymentBusinessUid, $accountUid, $addressUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BACSMandatesApi->listMandatesForAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |
 **accountUid** | [**string**](../Model/.md)| The identifier of the individual payment account |
 **addressUid** | [**string**](../Model/.md)| The identifier of the individual account address |

### Return type

[**\Academe\Starling\PaymentsSdk\Model\DirectDebitMandate[]**](../Model/DirectDebitMandate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listPaymentsForMandate

> \Academe\Starling\PaymentsSdk\Model\DirectDebitPayment[] listPaymentsForMandate($paymentBusinessUid, $accountUid, $addressUid, $mandateUid, $page)

Lists all the direct debit payments associated with the specified mandate, returns in pages of up to 100 with the most recent payments first

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\BACSMandatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payment account
$addressUid = 'addressUid_example'; // string | The identifier of the individual account address
$mandateUid = 'mandateUid_example'; // string | The identifier of the individual mandate
$page = 1; // int | Page number (pages of 100 payments) to return for the specified mandate

try {
    $result = $apiInstance->listPaymentsForMandate($paymentBusinessUid, $accountUid, $addressUid, $mandateUid, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BACSMandatesApi->listPaymentsForMandate: ', $e->getMessage(), PHP_EOL;
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
 **page** | **int**| Page number (pages of 100 payments) to return for the specified mandate | [optional] [default to 1]

### Return type

[**\Academe\Starling\PaymentsSdk\Model\DirectDebitPayment[]**](../Model/DirectDebitPayment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

