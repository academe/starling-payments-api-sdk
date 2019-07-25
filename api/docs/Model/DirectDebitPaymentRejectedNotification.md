# # DirectDebitPaymentRejectedNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notificationUid** | **string** | Unique identifier of the notification | [optional] 
**paymentBusinessUid** | **string** | Unique identifier of the company that attempted to make the payment | [optional] 
**paymentAccountUid** | **string** | Unique identifier of the account from which the attempt to take the funds was made | [optional] 
**addressUid** | **string** | Unique identifier of the address from which the attempt to make the payment was made | [optional] 
**bacsPaymentUid** | **string** | Unique identifier of the direct debit payment | [optional] 
**mandateUid** | **string** | Unique identifier of the mandate under which it was intended that the payment was taken | [optional] 
**bacsOriginator** | [**\Academe\Starling\PaymentsSdk\Model\BacsOriginator**](BacsOriginator.md) |  | [optional] 
**reference** | **string** | The originator defined reference for the payment | [optional] 
**amount** | [**\Academe\Starling\PaymentsSdk\Model\CurrencyAndAmount**](CurrencyAndAmount.md) |  | [optional] 
**rejectionReason** | **string** | Reason for rejection of payment; ACCOUNT_INSUFFICIENT_FUNDS means the account owning the address had insufficient funds to make the payment; INSTRUCTED_INSUFFICIENT_FUNDS means that payment was instructed to not be paid due to insufficient customer funds | [optional] 
**cancelledAt** | [**\DateTime**](\DateTime.md) | Time at which Starling stopped attempting to take the payment from the account | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


