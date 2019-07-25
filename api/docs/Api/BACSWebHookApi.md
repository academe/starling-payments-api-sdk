# Academe\Starling\PaymentsSdk\BACSWebHookApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**directCreditReceived**](BACSWebHookApi.md#directCreditReceived) | **POST** /your-registered-web-hook-address/direct-credit-received | Notification that a direct credit payment has been received.
[**directDebitCancelled**](BACSWebHookApi.md#directDebitCancelled) | **POST** /your-registered-web-hook-address/direct-debit-rejected | Notification received from Starling rejected a direct debit payment request due to lack of funds.
[**directDebitDue**](BACSWebHookApi.md#directDebitDue) | **POST** /your-registered-web-hook-address/direct-debit-due | Notification that a direct debit payment is due to be paid on the next working day.
[**directDebitPaid**](BACSWebHookApi.md#directDebitPaid) | **POST** /your-registered-web-hook-address/direct-debit-paid | Notification that a direct debit payment has been paid.
[**mandateCancelled**](BACSWebHookApi.md#mandateCancelled) | **POST** /your-registered-web-hook-address/bacs-mandate-cancelled | Notification received that a direct debit mandate has been cancelled.
[**mandateCreated**](BACSWebHookApi.md#mandateCreated) | **POST** /your-registered-web-hook-address/bacs-mandate-created | Notification that a direct debit mandate has been created.



## directCreditReceived

> directCreditReceived($directCreditPaymentReceivedNotification)

Notification that a direct credit payment has been received.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\BACSWebHookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$directCreditPaymentReceivedNotification = new \Academe\Starling\PaymentsSdk\Model\DirectCreditPaymentReceivedNotification(); // \Academe\Starling\PaymentsSdk\Model\DirectCreditPaymentReceivedNotification | Notification that a direct credit has been received for an account address

try {
    $apiInstance->directCreditReceived($directCreditPaymentReceivedNotification);
} catch (Exception $e) {
    echo 'Exception when calling BACSWebHookApi->directCreditReceived: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **directCreditPaymentReceivedNotification** | [**\Academe\Starling\PaymentsSdk\Model\DirectCreditPaymentReceivedNotification**](../Model/DirectCreditPaymentReceivedNotification.md)| Notification that a direct credit has been received for an account address |

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


## directDebitCancelled

> directDebitCancelled($directDebitPaymentRejectedNotification)

Notification received from Starling rejected a direct debit payment request due to lack of funds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\BACSWebHookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$directDebitPaymentRejectedNotification = new \Academe\Starling\PaymentsSdk\Model\DirectDebitPaymentRejectedNotification(); // \Academe\Starling\PaymentsSdk\Model\DirectDebitPaymentRejectedNotification | Notification that a direct debit payment has been rejected

try {
    $apiInstance->directDebitCancelled($directDebitPaymentRejectedNotification);
} catch (Exception $e) {
    echo 'Exception when calling BACSWebHookApi->directDebitCancelled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **directDebitPaymentRejectedNotification** | [**\Academe\Starling\PaymentsSdk\Model\DirectDebitPaymentRejectedNotification**](../Model/DirectDebitPaymentRejectedNotification.md)| Notification that a direct debit payment has been rejected |

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


## directDebitDue

> directDebitDue($directDebitPaymentDueNotification)

Notification that a direct debit payment is due to be paid on the next working day.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\BACSWebHookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$directDebitPaymentDueNotification = new \Academe\Starling\PaymentsSdk\Model\DirectDebitPaymentDueNotification(); // \Academe\Starling\PaymentsSdk\Model\DirectDebitPaymentDueNotification | Notification of a direct debit payment that is due to be made on the next working day

try {
    $apiInstance->directDebitDue($directDebitPaymentDueNotification);
} catch (Exception $e) {
    echo 'Exception when calling BACSWebHookApi->directDebitDue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **directDebitPaymentDueNotification** | [**\Academe\Starling\PaymentsSdk\Model\DirectDebitPaymentDueNotification**](../Model/DirectDebitPaymentDueNotification.md)| Notification of a direct debit payment that is due to be made on the next working day |

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


## directDebitPaid

> directDebitPaid($directDebitPaymentPaidNotification)

Notification that a direct debit payment has been paid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\BACSWebHookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$directDebitPaymentPaidNotification = new \Academe\Starling\PaymentsSdk\Model\DirectDebitPaymentPaidNotification(); // \Academe\Starling\PaymentsSdk\Model\DirectDebitPaymentPaidNotification | Notification of a direct debit payment that has been made

try {
    $apiInstance->directDebitPaid($directDebitPaymentPaidNotification);
} catch (Exception $e) {
    echo 'Exception when calling BACSWebHookApi->directDebitPaid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **directDebitPaymentPaidNotification** | [**\Academe\Starling\PaymentsSdk\Model\DirectDebitPaymentPaidNotification**](../Model/DirectDebitPaymentPaidNotification.md)| Notification of a direct debit payment that has been made |

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


## mandateCancelled

> mandateCancelled($mandateCancelledNotification)

Notification received that a direct debit mandate has been cancelled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\BACSWebHookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandateCancelledNotification = new \Academe\Starling\PaymentsSdk\Model\MandateCancelledNotification(); // \Academe\Starling\PaymentsSdk\Model\MandateCancelledNotification | Notification that a direct debit mandate has been cancelled

try {
    $apiInstance->mandateCancelled($mandateCancelledNotification);
} catch (Exception $e) {
    echo 'Exception when calling BACSWebHookApi->mandateCancelled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mandateCancelledNotification** | [**\Academe\Starling\PaymentsSdk\Model\MandateCancelledNotification**](../Model/MandateCancelledNotification.md)| Notification that a direct debit mandate has been cancelled |

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


## mandateCreated

> mandateCreated($mandateCreatedNotification)

Notification that a direct debit mandate has been created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\BACSWebHookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mandateCreatedNotification = new \Academe\Starling\PaymentsSdk\Model\MandateCreatedNotification(); // \Academe\Starling\PaymentsSdk\Model\MandateCreatedNotification | Details of a direct debit mandate which has been received for an address

try {
    $apiInstance->mandateCreated($mandateCreatedNotification);
} catch (Exception $e) {
    echo 'Exception when calling BACSWebHookApi->mandateCreated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mandateCreatedNotification** | [**\Academe\Starling\PaymentsSdk\Model\MandateCreatedNotification**](../Model/MandateCreatedNotification.md)| Details of a direct debit mandate which has been received for an address |

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

