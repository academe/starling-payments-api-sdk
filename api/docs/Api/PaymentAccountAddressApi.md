# Academe\Starling\PaymentsSdk\PaymentAccountAddressApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changePaymentAccountAddressFasterPaymentsStatus**](PaymentAccountAddressApi.md#changePaymentAccountAddressFasterPaymentsStatus) | **PUT** /api/v1/{paymentBusinessUid}/account/{accountUid}/address/{addressUid}/faster-payments-status | Changes the faster payments status of the account, for instance marking the address as incoming or outgoing payments disabled.
[**changePaymentAccountAddressStatus**](PaymentAccountAddressApi.md#changePaymentAccountAddressStatus) | **PUT** /api/v1/{paymentBusinessUid}/account/{accountUid}/address/{addressUid}/status | Changes the status of the account on the scheme, for instance marking the address as closed. Once the status has been changed to a terminal status, the address cannot be reactivated
[**createAccountAddress**](PaymentAccountAddressApi.md#createAccountAddress) | **PUT** /api/v1/{paymentBusinessUid}/account/{accountUid}/address/{addressUid} | Creates an address for the account on the UK faster payments network by assigning an account number and sort code. The operation can also be used to change the name on an existing address.
[**getPaymentAccountAddress**](PaymentAccountAddressApi.md#getPaymentAccountAddress) | **GET** /api/v1/{paymentBusinessUid}/account/{accountUid}/address/{addressUid} | Gets the details of a payment account address
[**getPaymentAccountAddresses**](PaymentAccountAddressApi.md#getPaymentAccountAddresses) | **GET** /api/v1/{paymentBusinessUid}/account/{accountUid}/address | List of addresses for a payment account
[**updateBacsPaymentStatus**](PaymentAccountAddressApi.md#updateBacsPaymentStatus) | **PUT** /api/v1/{paymentBusinessUid}/account/{accountUid}/address/{addressUid}/bacs-payments-status | Sets the account level configuration for accepting BACS payments to and from this address



## changePaymentAccountAddressFasterPaymentsStatus

> \Academe\Starling\PaymentsSdk\Model\ChangeStatusPaymentAccountAddressResponse changePaymentAccountAddressFasterPaymentsStatus($paymentBusinessUid, $accountUid, $addressUid, $changeFasterPaymentsStatusPaymentAccountAddressRequest)

Changes the faster payments status of the account, for instance marking the address as incoming or outgoing payments disabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\PaymentAccountAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payment account
$addressUid = 'addressUid_example'; // string | The identifier of the individual account address
$changeFasterPaymentsStatusPaymentAccountAddressRequest = new \Academe\Starling\PaymentsSdk\Model\ChangeFasterPaymentsStatusPaymentAccountAddressRequest(); // \Academe\Starling\PaymentsSdk\Model\ChangeFasterPaymentsStatusPaymentAccountAddressRequest | Payload describing the new account address faster payments status

try {
    $result = $apiInstance->changePaymentAccountAddressFasterPaymentsStatus($paymentBusinessUid, $accountUid, $addressUid, $changeFasterPaymentsStatusPaymentAccountAddressRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentAccountAddressApi->changePaymentAccountAddressFasterPaymentsStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |
 **accountUid** | [**string**](../Model/.md)| The identifier of the individual payment account |
 **addressUid** | [**string**](../Model/.md)| The identifier of the individual account address |
 **changeFasterPaymentsStatusPaymentAccountAddressRequest** | [**\Academe\Starling\PaymentsSdk\Model\ChangeFasterPaymentsStatusPaymentAccountAddressRequest**](../Model/ChangeFasterPaymentsStatusPaymentAccountAddressRequest.md)| Payload describing the new account address faster payments status |

### Return type

[**\Academe\Starling\PaymentsSdk\Model\ChangeStatusPaymentAccountAddressResponse**](../Model/ChangeStatusPaymentAccountAddressResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## changePaymentAccountAddressStatus

> \Academe\Starling\PaymentsSdk\Model\ChangeStatusPaymentAccountAddressResponse changePaymentAccountAddressStatus($paymentBusinessUid, $accountUid, $addressUid, $changeStatusPaymentAccountAddressRequest)

Changes the status of the account on the scheme, for instance marking the address as closed. Once the status has been changed to a terminal status, the address cannot be reactivated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\PaymentAccountAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payment account
$addressUid = 'addressUid_example'; // string | The identifier of the individual account address
$changeStatusPaymentAccountAddressRequest = new \Academe\Starling\PaymentsSdk\Model\ChangeStatusPaymentAccountAddressRequest(); // \Academe\Starling\PaymentsSdk\Model\ChangeStatusPaymentAccountAddressRequest | Payload describing the new account address status

try {
    $result = $apiInstance->changePaymentAccountAddressStatus($paymentBusinessUid, $accountUid, $addressUid, $changeStatusPaymentAccountAddressRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentAccountAddressApi->changePaymentAccountAddressStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |
 **accountUid** | [**string**](../Model/.md)| The identifier of the individual payment account |
 **addressUid** | [**string**](../Model/.md)| The identifier of the individual account address |
 **changeStatusPaymentAccountAddressRequest** | [**\Academe\Starling\PaymentsSdk\Model\ChangeStatusPaymentAccountAddressRequest**](../Model/ChangeStatusPaymentAccountAddressRequest.md)| Payload describing the new account address status |

### Return type

[**\Academe\Starling\PaymentsSdk\Model\ChangeStatusPaymentAccountAddressResponse**](../Model/ChangeStatusPaymentAccountAddressResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createAccountAddress

> \Academe\Starling\PaymentsSdk\Model\CreatePaymentAccountAddressResponse createAccountAddress($paymentBusinessUid, $accountUid, $addressUid, $createPaymentAccountAddressRequest)

Creates an address for the account on the UK faster payments network by assigning an account number and sort code. The operation can also be used to change the name on an existing address.

Returns the account object containing details of the payment account address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\PaymentAccountAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payments account
$addressUid = 'addressUid_example'; // string | The identifier of the individual account address
$createPaymentAccountAddressRequest = new \Academe\Starling\PaymentsSdk\Model\CreatePaymentAccountAddressRequest(); // \Academe\Starling\PaymentsSdk\Model\CreatePaymentAccountAddressRequest | Payload describing the account address to be created

try {
    $result = $apiInstance->createAccountAddress($paymentBusinessUid, $accountUid, $addressUid, $createPaymentAccountAddressRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentAccountAddressApi->createAccountAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |
 **accountUid** | [**string**](../Model/.md)| The identifier of the individual payments account |
 **addressUid** | [**string**](../Model/.md)| The identifier of the individual account address |
 **createPaymentAccountAddressRequest** | [**\Academe\Starling\PaymentsSdk\Model\CreatePaymentAccountAddressRequest**](../Model/CreatePaymentAccountAddressRequest.md)| Payload describing the account address to be created |

### Return type

[**\Academe\Starling\PaymentsSdk\Model\CreatePaymentAccountAddressResponse**](../Model/CreatePaymentAccountAddressResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPaymentAccountAddress

> \Academe\Starling\PaymentsSdk\Model\PaymentAccountAddress getPaymentAccountAddress($paymentBusinessUid, $accountUid, $addressUid)

Gets the details of a payment account address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\PaymentAccountAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payment account
$addressUid = 'addressUid_example'; // string | The identifier of the individual account address

try {
    $result = $apiInstance->getPaymentAccountAddress($paymentBusinessUid, $accountUid, $addressUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentAccountAddressApi->getPaymentAccountAddress: ', $e->getMessage(), PHP_EOL;
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

[**\Academe\Starling\PaymentsSdk\Model\PaymentAccountAddress**](../Model/PaymentAccountAddress.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPaymentAccountAddresses

> \Academe\Starling\PaymentsSdk\Model\PaymentAccountAddress[] getPaymentAccountAddresses($paymentBusinessUid, $accountUid, $page)

List of addresses for a payment account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\PaymentAccountAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payments account
$page = 56; // int | Page number (pages of 100 addresses)

try {
    $result = $apiInstance->getPaymentAccountAddresses($paymentBusinessUid, $accountUid, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentAccountAddressApi->getPaymentAccountAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |
 **accountUid** | [**string**](../Model/.md)| The identifier of the individual payments account |
 **page** | **int**| Page number (pages of 100 addresses) | [optional]

### Return type

[**\Academe\Starling\PaymentsSdk\Model\PaymentAccountAddress[]**](../Model/PaymentAccountAddress.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateBacsPaymentStatus

> \Academe\Starling\PaymentsSdk\Model\ChangeBacsStatusPaymentAccountAddressResponse updateBacsPaymentStatus($paymentBusinessUid, $accountUid, $addressUid, $changeBacsStatusPaymentAccountAddressRequest)

Sets the account level configuration for accepting BACS payments to and from this address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\PaymentAccountAddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$accountUid = 'accountUid_example'; // string | The identifier of the individual payment account
$addressUid = 'addressUid_example'; // string | The identifier of the individual account address
$changeBacsStatusPaymentAccountAddressRequest = new \Academe\Starling\PaymentsSdk\Model\ChangeBacsStatusPaymentAccountAddressRequest(); // \Academe\Starling\PaymentsSdk\Model\ChangeBacsStatusPaymentAccountAddressRequest | Payload describing the new account address bacs status

try {
    $result = $apiInstance->updateBacsPaymentStatus($paymentBusinessUid, $accountUid, $addressUid, $changeBacsStatusPaymentAccountAddressRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentAccountAddressApi->updateBacsPaymentStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |
 **accountUid** | [**string**](../Model/.md)| The identifier of the individual payment account |
 **addressUid** | [**string**](../Model/.md)| The identifier of the individual account address |
 **changeBacsStatusPaymentAccountAddressRequest** | [**\Academe\Starling\PaymentsSdk\Model\ChangeBacsStatusPaymentAccountAddressRequest**](../Model/ChangeBacsStatusPaymentAccountAddressRequest.md)| Payload describing the new account address bacs status |

### Return type

[**\Academe\Starling\PaymentsSdk\Model\ChangeBacsStatusPaymentAccountAddressResponse**](../Model/ChangeBacsStatusPaymentAccountAddressResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

