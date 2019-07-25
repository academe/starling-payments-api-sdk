# # PaymentDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentBusinessUid** | **string** | Unique identifier of the company requesting or receiving the payment | [optional] 
**paymentAccountUid** | **string** | Unique identifier of the account containing the funds sent or received | [optional] 
**addressUid** | **string** | Unique identifier of the address the payment was sent from or received to | [optional] 
**paymentUid** | **string** | Unique identifier of the payment | [optional] 
**sourceAccount** | [**\Academe\Starling\PaymentsSdk\Model\PaymentDetailsAccount**](PaymentDetailsAccount.md) |  | [optional] 
**destinationAccount** | [**\Academe\Starling\PaymentsSdk\Model\PaymentDetailsAccount**](PaymentDetailsAccount.md) |  | [optional] 
**direction** | **string** | The direction of the payment | [optional] 
**settlementAmount** | [**\Academe\Starling\PaymentsSdk\Model\CurrencyAndAmount**](CurrencyAndAmount.md) |  | [optional] 
**instructedAmount** | [**\Academe\Starling\PaymentsSdk\Model\CurrencyAndAmount**](CurrencyAndAmount.md) |  | [optional] 
**reference** | **string** | Reference included with the payment | [optional] 
**additionalRemittanceInformation** | **string** | Unstructured additional remittance information | [optional] 
**status** | **string** | Status of the payment request | [optional] 
**rejectedReason** | [**\Academe\Starling\PaymentsSdk\Model\PaymentRejectionReason**](PaymentRejectionReason.md) |  | [optional] 
**requestedAt** | [**\DateTime**](\DateTime.md) | Date and time that the request for payment was originally received | [optional] 
**returnDetails** | [**\Academe\Starling\PaymentsSdk\Model\PaymentReturnDetails**](PaymentReturnDetails.md) |  | [optional] 
**type** | **string** | Type of the payment that was sent or received. | [optional] 
**settlementCycleUid** | **string** | Unique identifier of the settlement cycle the payment is allocated to | [optional] 
**fpsSettlementCycleId** | **string** | Faster payment scheme identifier for the settlement cycle the payment is allocated to | [optional] 
**fpsSettlementDate** | [**\DateTime**](\DateTime.md) | Faster payment scheme settlement date | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


