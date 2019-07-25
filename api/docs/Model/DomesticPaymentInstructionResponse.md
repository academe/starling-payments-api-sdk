# # DomesticPaymentInstructionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentUid** | **string** | Unique identifier of the instructed payment | [optional] 
**success** | **bool** | True if the method completed successfully | [optional] 
**errors** | [**\Academe\Starling\PaymentsSdk\Model\ErrorDetail[]**](ErrorDetail.md) | List of errors if the method request failed. Possible values include * UNKNOWN_ADDRESS - The address uid is not valid for the business / account combination  * DESTINATION_SORT_CODE_NOT_FPS_ADDRESSABLE - The sort code that is trying to be paid is not a participant in the faster payment scheme  * ACCOUNT_NUMBER_INVALID - The account number provided does not match the modulus check rules published for the sort code  * CURRENCY_NOT_SUPPORTED - The payment currency requested is not supported  * AMOUNT_EXCEEDS_ACCOUNT_LIMIT - The payment amount exceeds the maximum payment amount permitted on this account  * ACCOUNT_OVERDRAWN - The account is overdrawn so sufficient funds are not available  * INSUFFICIENT_FUNDS - The payment amount exceeds the balance available in the account | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


