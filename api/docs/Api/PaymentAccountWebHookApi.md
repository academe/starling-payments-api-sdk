# Academe\Starling\PaymentsSdk\PaymentAccountWebHookApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountTransaction**](PaymentAccountWebHookApi.md#accountTransaction) | **POST** /your-registered-web-hook-address/account-transaction | Notification for a credit or deduction transaction applied directly to an account, rather than through an address on a payment scheme.



## accountTransaction

> accountTransaction($accountTransactionNotification)

Notification for a credit or deduction transaction applied directly to an account, rather than through an address on a payment scheme.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\PaymentAccountWebHookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accountTransactionNotification = new \Academe\Starling\PaymentsSdk\Model\AccountTransactionNotification(); // \Academe\Starling\PaymentsSdk\Model\AccountTransactionNotification | Payload with details of the transaction applied to the account

try {
    $apiInstance->accountTransaction($accountTransactionNotification);
} catch (Exception $e) {
    echo 'Exception when calling PaymentAccountWebHookApi->accountTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountTransactionNotification** | [**\Academe\Starling\PaymentsSdk\Model\AccountTransactionNotification**](../Model/AccountTransactionNotification.md)| Payload with details of the transaction applied to the account |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

