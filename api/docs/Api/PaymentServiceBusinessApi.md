# Academe\Starling\PaymentsSdk\PaymentServiceBusinessApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBusinessInformation**](PaymentServiceBusinessApi.md#getBusinessInformation) | **GET** /api/v1/{paymentBusinessUid} | Gets details of the payment business



## getBusinessInformation

> \Academe\Starling\PaymentsSdk\Model\BusinessInformation getBusinessInformation($paymentBusinessUid)

Gets details of the payment business

This resource takes the `paymentBusinessUid` as a path parameter and returns the party's details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Academe\Starling\PaymentsSdk\Api\PaymentServiceBusinessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$paymentBusinessUid = 'paymentBusinessUid_example'; // string | The identifier of the payment business

try {
    $result = $apiInstance->getBusinessInformation($paymentBusinessUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentServiceBusinessApi->getBusinessInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **paymentBusinessUid** | [**string**](../Model/.md)| The identifier of the payment business |

### Return type

[**\Academe\Starling\PaymentsSdk\Model\BusinessInformation**](../Model/BusinessInformation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

