# Academe\Starling\PaymentsSdk\FPSWebHookApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inboundPayment**](FPSWebHookApi.md#inboundPayment) | **POST** /your-registered-web-hook-address/fps-inbound | Notification of a new inbound payment received to an address for an account managed by the payment business.
[**inboundReturnOfPaymentOriginatingOverseas**](FPSWebHookApi.md#inboundReturnOfPaymentOriginatingOverseas) | **POST** /your-registered-web-hook-address/overseas-payment-return | Notification of a new inbound return of a payment originating overseas for an account managed by the payment business.
[**paymentOriginatingOverseasSanctionFailed**](FPSWebHookApi.md#paymentOriginatingOverseasSanctionFailed) | **POST** /your-registered-web-hook-address/overseas-payment-sanction-failed | Notification that a payment originating overseas has been rejected due to it failing sanction checks.
[**schemeNotification**](FPSWebHookApi.md#schemeNotification) | **POST** /your-registered-web-hook-address/fps-scheme | Notification received from the faster payments scheme, typically this is a change in the status of the payment such as an acknowledgement or rejection.
[**schemeRedirection**](FPSWebHookApi.md#schemeRedirection) | **POST** /your-registered-web-hook-address/fps-redirection | Notification of the redirection of an outbound payment instruction.
[**schemeReversal**](FPSWebHookApi.md#schemeReversal) | **POST** /your-registered-web-hook-address/fps-reversal | Notification of a reversal by the scheme of a previously received inbound payment.



## inboundPayment

> inboundPayment($fpsInboundNotification)

Notification of a new inbound payment received to an address for an account managed by the payment business.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\FPSWebHookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fpsInboundNotification = new \Academe\Starling\PaymentsSdk\Model\FpsInboundNotification(); // \Academe\Starling\PaymentsSdk\Model\FpsInboundNotification | New inbound payment received for an address

try {
    $apiInstance->inboundPayment($fpsInboundNotification);
} catch (Exception $e) {
    echo 'Exception when calling FPSWebHookApi->inboundPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fpsInboundNotification** | [**\Academe\Starling\PaymentsSdk\Model\FpsInboundNotification**](../Model/FpsInboundNotification.md)| New inbound payment received for an address |

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


## inboundReturnOfPaymentOriginatingOverseas

> inboundReturnOfPaymentOriginatingOverseas($paymentOriginatingOverseasInboundReturnNotification)

Notification of a new inbound return of a payment originating overseas for an account managed by the payment business.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\FPSWebHookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentOriginatingOverseasInboundReturnNotification = new \Academe\Starling\PaymentsSdk\Model\PaymentOriginatingOverseasInboundReturnNotification(); // \Academe\Starling\PaymentsSdk\Model\PaymentOriginatingOverseasInboundReturnNotification | New inbound return of a payment originating overseas

try {
    $apiInstance->inboundReturnOfPaymentOriginatingOverseas($paymentOriginatingOverseasInboundReturnNotification);
} catch (Exception $e) {
    echo 'Exception when calling FPSWebHookApi->inboundReturnOfPaymentOriginatingOverseas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentOriginatingOverseasInboundReturnNotification** | [**\Academe\Starling\PaymentsSdk\Model\PaymentOriginatingOverseasInboundReturnNotification**](../Model/PaymentOriginatingOverseasInboundReturnNotification.md)| New inbound return of a payment originating overseas |

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


## paymentOriginatingOverseasSanctionFailed

> paymentOriginatingOverseasSanctionFailed($paymentOriginatingOverseasSanctionFailedNotification)

Notification that a payment originating overseas has been rejected due to it failing sanction checks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\FPSWebHookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentOriginatingOverseasSanctionFailedNotification = new \Academe\Starling\PaymentsSdk\Model\PaymentOriginatingOverseasSanctionFailedNotification(); // \Academe\Starling\PaymentsSdk\Model\PaymentOriginatingOverseasSanctionFailedNotification | Notification that a payment originating overseas has failed sanction checks

try {
    $apiInstance->paymentOriginatingOverseasSanctionFailed($paymentOriginatingOverseasSanctionFailedNotification);
} catch (Exception $e) {
    echo 'Exception when calling FPSWebHookApi->paymentOriginatingOverseasSanctionFailed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentOriginatingOverseasSanctionFailedNotification** | [**\Academe\Starling\PaymentsSdk\Model\PaymentOriginatingOverseasSanctionFailedNotification**](../Model/PaymentOriginatingOverseasSanctionFailedNotification.md)| Notification that a payment originating overseas has failed sanction checks |

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


## schemeNotification

> schemeNotification($fpsSchemeNotification)

Notification received from the faster payments scheme, typically this is a change in the status of the payment such as an acknowledgement or rejection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\FPSWebHookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fpsSchemeNotification = new \Academe\Starling\PaymentsSdk\Model\FpsSchemeNotification(); // \Academe\Starling\PaymentsSdk\Model\FpsSchemeNotification | Notification received from the FPS scheme

try {
    $apiInstance->schemeNotification($fpsSchemeNotification);
} catch (Exception $e) {
    echo 'Exception when calling FPSWebHookApi->schemeNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fpsSchemeNotification** | [**\Academe\Starling\PaymentsSdk\Model\FpsSchemeNotification**](../Model/FpsSchemeNotification.md)| Notification received from the FPS scheme |

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


## schemeRedirection

> schemeRedirection($fpsRedirectionNotification)

Notification of the redirection of an outbound payment instruction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\FPSWebHookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fpsRedirectionNotification = new \Academe\Starling\PaymentsSdk\Model\FpsRedirectionNotification(); // \Academe\Starling\PaymentsSdk\Model\FpsRedirectionNotification | Redirection information from the scheme

try {
    $apiInstance->schemeRedirection($fpsRedirectionNotification);
} catch (Exception $e) {
    echo 'Exception when calling FPSWebHookApi->schemeRedirection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fpsRedirectionNotification** | [**\Academe\Starling\PaymentsSdk\Model\FpsRedirectionNotification**](../Model/FpsRedirectionNotification.md)| Redirection information from the scheme |

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


## schemeReversal

> schemeReversal($fpsReversalNotification)

Notification of a reversal by the scheme of a previously received inbound payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\FPSWebHookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fpsReversalNotification = new \Academe\Starling\PaymentsSdk\Model\FpsReversalNotification(); // \Academe\Starling\PaymentsSdk\Model\FpsReversalNotification | Reversal information from the scheme

try {
    $apiInstance->schemeReversal($fpsReversalNotification);
} catch (Exception $e) {
    echo 'Exception when calling FPSWebHookApi->schemeReversal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fpsReversalNotification** | [**\Academe\Starling\PaymentsSdk\Model\FpsReversalNotification**](../Model/FpsReversalNotification.md)| Reversal information from the scheme |

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

