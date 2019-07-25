# Academe\Starling\PaymentsSdk\SettlementCycleApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActiveSettlementCycle**](SettlementCycleApi.md#getActiveSettlementCycle) | **GET** /api/v1/{paymentBusinessUid}/settlement/current | Gets a summary of the current active settlement cycle
[**getLastSettlementCycle**](SettlementCycleApi.md#getLastSettlementCycle) | **GET** /api/v1/{paymentBusinessUid}/settlement/last | Gets a summary of the last completed settlement cycle
[**getSettlementCycle**](SettlementCycleApi.md#getSettlementCycle) | **GET** /api/v1/{paymentBusinessUid}/settlement/cycle/{settlementCycleUid} | Gets the details of a settlement cycle by unique identifier
[**getSettlementCyclePayments**](SettlementCycleApi.md#getSettlementCyclePayments) | **GET** /api/v1/{paymentBusinessUid}/settlement/payments/{settlementCycleUid} | Gets information about all the payments made within a settlement cycle



## getActiveSettlementCycle

> \Academe\Starling\PaymentsSdk\Model\SettlementCycle getActiveSettlementCycle($paymentBusinessUid)

Gets a summary of the current active settlement cycle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\SettlementCycleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business

try {
    $result = $apiInstance->getActiveSettlementCycle($paymentBusinessUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementCycleApi->getActiveSettlementCycle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |

### Return type

[**\Academe\Starling\PaymentsSdk\Model\SettlementCycle**](../Model/SettlementCycle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getLastSettlementCycle

> \Academe\Starling\PaymentsSdk\Model\SettlementCycle getLastSettlementCycle($paymentBusinessUid)

Gets a summary of the last completed settlement cycle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\SettlementCycleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business

try {
    $result = $apiInstance->getLastSettlementCycle($paymentBusinessUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementCycleApi->getLastSettlementCycle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |

### Return type

[**\Academe\Starling\PaymentsSdk\Model\SettlementCycle**](../Model/SettlementCycle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSettlementCycle

> \Academe\Starling\PaymentsSdk\Model\SettlementCycle getSettlementCycle($paymentBusinessUid, $settlementCycleUid)

Gets the details of a settlement cycle by unique identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\SettlementCycleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$settlementCycleUid = 'settlementCycleUid_example'; // string | The identifier the settlement cycle

try {
    $result = $apiInstance->getSettlementCycle($paymentBusinessUid, $settlementCycleUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementCycleApi->getSettlementCycle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |
 **settlementCycleUid** | [**string**](../Model/.md)| The identifier the settlement cycle |

### Return type

[**\Academe\Starling\PaymentsSdk\Model\SettlementCycle**](../Model/SettlementCycle.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSettlementCyclePayments

> \Academe\Starling\PaymentsSdk\Model\PaymentDetails[] getSettlementCyclePayments($paymentBusinessUid, $settlementCycleUid, $page, $ordering)

Gets information about all the payments made within a settlement cycle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\SettlementCycleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business
$settlementCycleUid = 'settlementCycleUid_example'; // string | The identifier the settlement cycle
$page = 1; // int | Page number (pages of 100 payments) to return for the specified cycle
$ordering = 'CREATED_AT_DESCENDING'; // string | The ordering to be used

try {
    $result = $apiInstance->getSettlementCyclePayments($paymentBusinessUid, $settlementCycleUid, $page, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementCycleApi->getSettlementCyclePayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |
 **settlementCycleUid** | [**string**](../Model/.md)| The identifier the settlement cycle |
 **page** | **int**| Page number (pages of 100 payments) to return for the specified cycle | [optional] [default to 1]
 **ordering** | **string**| The ordering to be used | [optional] [default to &#39;CREATED_AT_DESCENDING&#39;]

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

