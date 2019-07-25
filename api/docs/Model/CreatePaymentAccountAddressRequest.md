# # CreatePaymentAccountAddressRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountName** | **string** | Name of the account holder, this will be included in outbound payment instructions | 
**sortCode** | **string** | UK sort code for sending and receiving payments, must be within the set of sort codes allocated to the payment business | 
**accountNumber** | **string** | UK account number for sending and receiving payments. Typically account number assignment is managed by Starling and this value must be blank. For some sort codes, account number assignment is managed by the client and the account number must be specified, valid within any modulus checks active on the sort code and have never previously been used for the sort code. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


