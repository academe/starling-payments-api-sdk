# # PaymentAccountAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paymentBusinessUid** | **string** | Unique identifier of the company requesting or receiving the payment | [optional] 
**accountUid** | **string** | Unique identifier of the account which holds funds | [optional] 
**addressUid** | **string** | Unique identifier of the payment account address | [optional] 
**sortCode** | **string** | Sort code for the account, used to receive payments into the account | [optional] 
**accountNumber** | **string** | Account number, used to receive payments into the account | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) | Date and time the account was first created | [optional] 
**accountName** | **string** | Name for the account, this will be included in outbound faster payment messages to other recipients | [optional] 
**status** | **string** | Overall status of the address. | [optional] 
**fasterPaymentsStatus** | [**\Academe\Starling\PaymentsSdk\Model\AddressFasterPaymentsStatus**](AddressFasterPaymentsStatus.md) |  | [optional] 
**bacsStatus** | [**\Academe\Starling\PaymentsSdk\Model\AddressBacsStatus**](AddressBacsStatus.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


