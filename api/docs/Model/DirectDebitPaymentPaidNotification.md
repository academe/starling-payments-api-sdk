# # DirectDebitPaymentPaidNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notificationUid** | **string** | Unique identifier of the notification | [optional] 
**paymentBusinessUid** | **string** | Unique identifier of the company making the payment | [optional] 
**paymentAccountUid** | **string** | Unique identifier of the account from which the funds were taken | [optional] 
**addressUid** | **string** | Unique identifier of the address the payment was taken from | [optional] 
**bacsPaymentUid** | **string** | Unique identifier of the direct debit payment | [optional] 
**mandateUid** | **string** | Unique identifier of the mandate under which the payment was taken | [optional] 
**bacsOriginator** | [**\Academe\Starling\PaymentsSdk\Model\BacsOriginator**](BacsOriginator.md) |  | [optional] 
**reference** | **string** | The originator defined reference for the payment | [optional] 
**amount** | [**\Academe\Starling\PaymentsSdk\Model\CurrencyAndAmount**](CurrencyAndAmount.md) |  | [optional] 
**receivedAt** | [**\DateTime**](\DateTime.md) | Time at which the payment was debited from the account | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


