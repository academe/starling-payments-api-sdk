# # DirectDebitPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentBusinessUid** | **string** | Unique identifier of the company that owns this mandate | [optional] 
**paymentAccountUid** | **string** | Unique identifier of the account which will make any payments associated with this mandate | [optional] 
**addressUid** | **string** | Unique identifier of the address the mandate was set up for | [optional] 
**mandateUid** | **string** | Unique identifier of the mandate | [optional] 
**bacsPaymentUid** | **string** | Unique identifier of the payment | [optional] 
**amount** | [**\Academe\Starling\PaymentsSdk\Model\CurrencyAndAmount**](CurrencyAndAmount.md) |  | [optional] 
**reference** | **string** | The originator defined reference for the payment | [optional] 
**paymentInstruction** | **string** | Whether direct debit payment should be (or have been) paid | [optional] 
**paymentDueAt** | [**\DateTime**](\DateTime.md) | Date and time at which payment is (or was) due to be made | [optional] 
**receivedAt** | [**\DateTime**](\DateTime.md) | Date and time at which payment was debited from the account, if accepted | [optional] 
**cancelledAt** | [**\DateTime**](\DateTime.md) | Date and time at which payment was cancelled, if rejected | [optional] 
**rejectionReason** | **string** | Reason for rejection of payment, if rejected; ACCOUNT_INSUFFICIENT_FUNDS means the account owning the address had insufficient funds to make the payment; INSTRUCTED_INSUFFICIENT_FUNDS means that payment was instructed to not be paid due to insufficient customer funds | [optional] 
**paymentStatus** | **string** | Current status of the direct debit payment; DUE means the payment has not been processed yet; PROCESSED_SUCCESS means the payment has been made; PROCESSED_FAILURE means the payment was rejected due to lack of funds | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


