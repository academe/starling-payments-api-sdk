# # FpsReversalNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notificationUid** | **string** | Unique identifier of the notification | [optional] 
**paymentUid** | **string** | Unique identifier of the payment being reversed by the scheme | [optional] 
**addressUid** | **string** | Unique identifier of the address the payment was received to | [optional] 
**paymentAccountUid** | **string** | Unique identifier of the account the funds were applied to | [optional] 
**reversalAmount** | [**\Academe\Starling\PaymentsSdk\Model\CurrencyAndAmount**](CurrencyAndAmount.md) |  | [optional] 
**reasonCode** | **string** | FPS scheme reason code for the payment reversal | [optional] 
**reasonDescription** | **string** | Human readable description of the reasonCode | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | Timestamp of the notification from the scheme | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


