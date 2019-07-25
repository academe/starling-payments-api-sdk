# # FpsSchemeNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notificationUid** | **string** | Unique identifier of the notification | [optional] 
**paymentUid** | **string** | Unique identifier of the payment the notification relates to | [optional] 
**paymentState** | **string** | Current state of the payment in the FPS scheme | [optional] 
**reasonCode** | **string** | FPS scheme reason code for the notification / state change | [optional] 
**reasonDescription** | **string** | Human readable description of the reasonCode | [optional] 
**fpid** | **string** | Unique identifier of the payment within the scheme. 42 character string, in which the last five characters are almost always spaces. | [optional] 
**settlementCycleUid** | **string** | Unique identifier of the settlement cycle the payment has been assigned to (where known) | [optional] 
**settlementCycle** | **string** | Settlement cycle of the payment (where known) | [optional] 
**settlementDate** | [**\DateTime**](\DateTime.md) | Settlement date of the payment (where known) | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | Timestamp of the notification from the scheme | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


