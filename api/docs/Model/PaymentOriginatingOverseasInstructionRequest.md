# # PaymentOriginatingOverseasInstructionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**destinationAccount** | [**\Academe\Starling\PaymentsSdk\Model\DomesticInstructionAccount**](DomesticInstructionAccount.md) |  | 
**overseasInstructingAccount** | [**\Academe\Starling\PaymentsSdk\Model\OverseasInstructionAccount**](OverseasInstructionAccount.md) |  | 
**reference** | **string** | The reference to be sent on the payment | 
**additionalRemittanceInformation** | **string** | Unstructured additional remittance information | [optional] 
**amountInDestinationCurrency** | [**\Academe\Starling\PaymentsSdk\Model\CurrencyAndAmount**](CurrencyAndAmount.md) |  | 
**amountInOriginalCurrency** | [**\Academe\Starling\PaymentsSdk\Model\CurrencyAndAmount**](CurrencyAndAmount.md) |  | 
**exchangeRate** | **float** | The exchange rate used to convert the original amount to the destination amount | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


