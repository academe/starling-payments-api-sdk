# # DirectDebitPaymentDueNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notificationUid** | **string** | Unique identifier of the notification | [optional] 
**paymentBusinessUid** | **string** | Unique identifier of the company making the payment | [optional] 
**paymentAccountUid** | **string** | Unique identifier of the account from which the funds will be taken | [optional] 
**addressUid** | **string** | Unique identifier of the address the payment will be taken from | [optional] 
**bacsPaymentUid** | **string** | Unique identifier of the direct debit payment | [optional] 
**mandateUid** | **string** | Unique identifier of the mandate under which the payment will be taken | [optional] 
**bacsOriginator** | [**\Academe\Starling\PaymentsSdk\Model\BacsOriginator**](BacsOriginator.md) |  | [optional] 
**reference** | **string** | The originator defined reference for the payment | [optional] 
**amount** | [**\Academe\Starling\PaymentsSdk\Model\CurrencyAndAmount**](CurrencyAndAmount.md) |  | [optional] 
**paymentDueAt** | [**\DateTime**](\DateTime.md) | Date that the payment will be debited from the account | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


