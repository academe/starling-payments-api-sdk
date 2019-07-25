# Academe\Starling\PaymentsSdk\PaymentAccountApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccount**](PaymentAccountApi.md#createAccount) | **PUT** /api/v1/{paymentBusinessUid}/account/{accountUid} | Creates a payment account which holds a balance for an organisation but has no address (account number / sort code) by default. Theseare assigned by adding one or more addresses to the account.
[**getPaymentAccount**](PaymentAccountApi.md#getPaymentAccount) | **GET** /api/v1/{paymentBusinessUid}/account/{accountUid} | Gets the details of the payment account
[**getPaymentAccounts**](PaymentAccountApi.md#getPaymentAccounts) | **GET** /api/v1/{paymentBusinessUid}/account | List payment accounts for a payment business



## createAccount

> \Academe\Starling\PaymentsSdk\Model\CreatePaymentAccountResponse createAccount($paymentBusinessUid, $accountUid, $createPaymentAccountRequest)

Creates a payment account which holds a balance for an organisation but has no address (account number / sort code) by default. Theseare assigned by adding one or more addresses to the account.

Returns the account object containing details of the balance holding payment account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\PaymentAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payments account
$createPaymentAccountRequest = new \Academe\Starling\PaymentsSdk\Model\CreatePaymentAccountRequest(); // \Academe\Starling\PaymentsSdk\Model\CreatePaymentAccountRequest | Payload describing the account to be created

try {
    $result = $apiInstance->createAccount($paymentBusinessUid, $accountUid, $createPaymentAccountRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentAccountApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |
 **accountUid** | [**string**](../Model/.md)| The identifier of the individual payments account |
 **createPaymentAccountRequest** | [**\Academe\Starling\PaymentsSdk\Model\CreatePaymentAccountRequest**](../Model/CreatePaymentAccountRequest.md)| Payload describing the account to be created |

### Return type

[**\Academe\Starling\PaymentsSdk\Model\CreatePaymentAccountResponse**](../Model/CreatePaymentAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPaymentAccount

> \Academe\Starling\PaymentsSdk\Model\PaymentAccount getPaymentAccount($paymentBusinessUid, $accountUid)

Gets the details of the payment account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\PaymentAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payment account

try {
    $result = $apiInstance->getPaymentAccount($paymentBusinessUid, $accountUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentAccountApi->getPaymentAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |
 **accountUid** | [**string**](../Model/.md)| The identifier of the individual payment account |

### Return type

[**\Academe\Starling\PaymentsSdk\Model\PaymentAccount**](../Model/PaymentAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPaymentAccounts

> \Academe\Starling\PaymentsSdk\Model\PaymentAccount[] getPaymentAccounts($paymentBusinessUid)

List payment accounts for a payment business

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\PaymentAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business

try {
    $result = $apiInstance->getPaymentAccounts($paymentBusinessUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentAccountApi->getPaymentAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |

### Return type

[**\Academe\Starling\PaymentsSdk\Model\PaymentAccount[]**](../Model/PaymentAccount.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

