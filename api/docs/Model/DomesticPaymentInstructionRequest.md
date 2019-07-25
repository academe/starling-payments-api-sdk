# # DomesticPaymentInstructionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domesticInstructionAccount** | [**\Academe\Starling\PaymentsSdk\Model\DomesticInstructionAccount**](DomesticInstructionAccount.md) |  | 
**reference** | **string** | The reference to be sent on the payment | 
**additionalRemittanceInformation** | **string** | Unstructured additional remittance information | [optional] 
**currencyAndAmount** | [**\Academe\Starling\PaymentsSdk\Model\CurrencyAndAmount**](CurrencyAndAmount.md) |  | 
**type** | **string** | Type of payment instruction to send. Permitted values: SIP: Standard immediate, use this if you want quick feedback (default). FDP: Future dated, use this if for low priority feedback and delivery. SOP: Standing order, implies the payment it was pre-scheduled, effectively just the same as FDP. Any payment sent after 4am will be automatically sent as a SIP due to scheme rules. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


