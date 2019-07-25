# # DirectCreditPaymentReceivedNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notificationUid** | **string** | Unique identifier of the notification | [optional] 
**paymentBusinessUid** | **string** | Unique identifier of the company receiving the payment | [optional] 
**paymentAccountUid** | **string** | Unique identifier of the account containing the funds received | [optional] 
**addressUid** | **string** | Unique identifier of the address the payment was received to | [optional] 
**bacsPaymentUid** | **string** | Unique identifier of the direct credit payment | [optional] 
**bacsOriginator** | [**\Academe\Starling\PaymentsSdk\Model\BacsOriginator**](BacsOriginator.md) |  | [optional] 
**reference** | **string** | The originator defined reference for the payment | [optional] 
**amount** | [**\Academe\Starling\PaymentsSdk\Model\CurrencyAndAmount**](CurrencyAndAmount.md) |  | [optional] 
**receivedAt** | [**\DateTime**](\DateTime.md) | Time at which the payment was credited to the account | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


