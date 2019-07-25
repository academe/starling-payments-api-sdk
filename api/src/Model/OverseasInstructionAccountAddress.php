<?php

namespace Academe\Starling\PaymentsSdk\Model;

/**
 * OverseasInstructionAccountAddress
 *
 * PHP version 5
 *
 * @category Class
 * @package  Academe\Starling\PaymentsSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Services Developer API
 *
 * ### Overview  The Starling Payment Services (SPS) APIs enable you to send payments to UK accounts in real time, by connecting you into the Faster Payments Scheme (FPS) and BACS. Connections to other payment systems, such as SEPA for European payments, are expected to become available in the future.  Our API is RESTful, using predictable and resource-orientated URLs with standard HTTP methods and status codes. All responses (expected and errors) will be returned in JSON format. We also offer webhooks to notify you of events on accounts you have access to.  ### <a name=\"availability\"></a>Availability Our Payment Services APIs are only open to pre-authorised users, you will need to go through an approval process with our Payment Services team to check if the service is relevant for you and to gain access. You can find more info and register your interest on our [dedicated website](https://www.starlingbank.com/paymentservices/)  ### <a name=\"getting-started\"></a>Getting Started To get started with the payment service APIs: * Get in touch for commercials and necessary due diligence. * When approved, Starling whitelists an email address so you can create a login to our Payment Services portal. * Upload the public key of two key pairs, one is used to sign API requests and the other is a master key used to sign future key uploads for rotation. * Start using the API, signing each request with the appropriate headers and your private key.  Clients will be allocated their own sort code for creating FPS-addressable accounts through the API. Conceptually, an 'account' is a pot of money held at Starling from which payments can be sent and received.  By itself, an account does not have an account number or sort code; the sort code / account combination is assigned by creating an 'address' (one or more) for the account. This gives the flexibility to support use cases from a company with a single account number & sort code per balance through to a company with one balance and thousands of unique addresses for each of their end customers. Balance checks are authorised at an account level, regardless of the address used to send the payment.  We make extensive use of UUIDs throughout the API, more information on them can be found here: https://en.wikipedia.org/wiki/Universally_unique_identifier  ## <a name=\"security\"></a>Security The payment APIs have been built with security and non-repudiation at the core.  * Initially two public / private key pairs must be created and the public keys added to the Payment Services portal.  * One payments key which is used to sign API requests.   * One rotation key which is used to sign new key uploads. * A second API key can be subsequently added by signing the new public key with the private rotation key. Both keys will then be in service for API calls to support seamless rotation. * There is no maximum age for keys but we would recommend rotating keys on significant staff departure or in the event of suspected compromise of the payments private key. * All requests are signed (see below) using the payments private key, which must be kept securely. If Starling receives a properly signed request, using your private key, Starling will attempt to execute that request. * The caller generates the UUID for the operation (e.g. a payment or account creation request) and the resource path, which includes the UUID, is part of the message being signed; the server generates this message independently, then it performs the `checkSig` operation with the public key and its own message. This prevents replying the signed message with a different UUID. * The server will process any request (with a UUID) a maximum of once regardless of how many times it is received.  Key Requirements;  * Keys must be either RSA or ECDSA keys. * RSA keys should have a length of either 2048 or 4096. * ECDSA keys should have a length of 256. * RSA keys should not be SSH keys. All valid RSA key bodies will start `MII`.  ### <a name=\"signing-requests\"></a>Signing Requests  All requests (read and write) must be appropriately signed with an `Authorization` header of the form:  ```  Signature keyid=\"...\",algorithm=\"...\",headers=\"...\",signature=\"...\"  ```    where:  * **`keyid`** is the UUID of the uploaded public key - this is supplied in the developer dashboard after you have uploaded a public key. * **`algorithm`** is name of the algorithm used, supported types: `rsa-sha256` `ecdsa-sha256` `rsa-sha512` `ecdsa-sha512` * **`headers`** is a whitespace delimited list of the other HTTP headers present which have been used to create the signature, these headers must include:    * **`(request-target)`**: Path of the requested resource (excludes host name)     * **`date`**: Date and time at which the request was made in the form `2007-12-03T10:15:30Z`. Requests will only be valid within 5 seconds of this time.          * **Please note this is not the standard HTTP format for the Date header**     * **`digest`**: Validated as a SHA-512 hash of the JSON payload in the request body or `X` if no message body is present     * **`signature`** is the signature generated with the private key  An example of the message to be signed would be:  ``` (request-target): put /api/v1/9209d6fe-8ee2-40f7-b629-f0758c0d5c5b Date: 2017-12-05T11:19:38.011+00:00 Digest: iKo2gTcNvytrsVG7aYX43a9WWphhyyhzNScrodqguFDhKBhMpBrtw+xNUHGFyYuCLKL0x2ZxrYMJBIVOkPMflw== ```  An example of a complete authorization header would be  ``` Signature keyid=\"e2bde1ab-a1c4-4db6-9118-d4d3ec4b55d5\",algorithm=\"rsa-sha256\",headers=\"(request-target) Date Digest\",signature=\"cn0o0Ok37SuETsaefCpNh4WPA80zviWbSyFqSNU0/1QQFP45ODu/8n3Tnm9De5nsH2N/aTz+dvfZvdOGCvNjSusTAOm3iku0DRcdiuBSurI7Xb2xX8rYPCFOdde8b/CZy8NONix5AvPgNSKhHJXTd1lASSGOOEuuOlVXHMQFTnJEXa2nl6lyizrP03g00ZW+34z4Ac1ODbQKDitosPqCrIy09uVjsAPd9NanMKBbzF2K6Lo5KLh6RFxTEt4zHn2JEu/T6PsMfUce0IFIc/2U75OXOHfueY3Q/v7y3uskEvFH82quprCZaaQaOd/gsyYkF7q2NaOEdN5/SwoG9stXDCqqHUfwaQarBhtVV0ON5ZWPJCeVH6SaJ5UdPKnGFMTgdsJLkiCCdloW+MBazmFmYDUUOPJTIFgoyK7nnotJ8VXbtaK1TwDqs6TBHbCu/Ed8SWFYqFvTBXuyK5HEzlZRET514W9TM4AVU6xnA23aRWMFDnSyStO3WyxNTJkjO/vRkHaHPTDmCBCUXDiUUN1/FB4sADCUUIKYd38omvQ3G7HzcBcNjNAVE0aWFmJ2eAOS0vchzRhKSm5XI+/bqjgET1InhBS2yGF1I9uBHodeCrCUMVBXItOcXBuJ7g8jOWAbn0bUepO4Nz9RW+yxg/JD2CATPRCAIrgxU6RI/GzyTMc=\" ``` ### <a name=\"creating-a-rsa-key-pair\"></a>Example: Creating a RSA Key Pair (Java)  **First generate the key pair:**  ``` KeyPairGenerator keyPairGenerator = KeyPairGenerator.getInstance(\"RSA\"); keyPairGenerator.initialize(2048, \"Random number\"); KeyPair signingKey = keyPairGenerator.generateKeyPair(); ```  **Base64 encode the public key content for upload to the Payment Services portal:**  ``` String encodedPublicKey = new String(Base64.getEncoder().encode(signingKey.getPublic().getEncoded())); ```  Upload this content, keeping the private key of the key pair very securely.  ### <a name=\"signing-a-request\"></a>Example: Signing a Request (Java)  In this example we are going to sign the request to create a new account for a company at the path: ``` put /api/v1/90d14796-c59f-4944-9146-7fc84deb253c/account/46168325-8d23-4efe-ba48-b3a74f85f23b ```  **For operations with a payload, first calculate the SHA-512 digest of the payload:**  ``` MessageDigest messageDigest = MessageDigest.getInstance(\"SHA-512\"); byte[] payload = ByteStreams.toByteArray(\"payload string\"); String payloadDigest = Base64.getEncoder().encodeToString(messageDigest.digest(payload)); ```  **In the example the digest is calculated as:** ``` vRbwCwvyRmlkHVxa4A45M3n31DZGqtcd1Lso9JcueCd5IoZVKyKeWtl5yluy0eAgypiN2GXOyRoXwtv55RU/Tw== ```  **Then determine the text to sign, which must at least include the headers '(request-target), 'date' and 'digest'.**  ``` String textToSign = \"(request-target): put /api/v1/90d14796-c59f-4944-9146-7fc84deb253c/account/46168325-8d23-4efe-ba48-b3a74f85f23b\\nDate: 2017-06-30T12:25:07.61+01:00\\nDigest: vRbwCwvyRmlkHVxa4A45M3n31DZGqtcd1Lso9JcueCd5IoZVKyKeWtl5yluy0eAgypiN2GXOyRoXwtv55RU/Tw==\"; ```  **Calculate the signature for the request:**  ``` Signature instance = Signature.getInstance(\"SHA512withRSA\"); // Could also use \"SHA512withECDSA\" instance.initSign(signingKey.getPrivateKey()); instance.update(signingString.getBytes()); byte[] encodedSignedString = Base64.getEncoder().encode(instance.sign()); String signature = new String(encodedSignedString); ``` **In the example the signature is calculated as:** ```  MEYCIQCYkotOTNN+gM13v48Ay0powow7SpaL6LqVCL8ifNdKSAIhAL5viAzL7lXjM+plrONFyN1Y1EX6V3VpIBmoOmXdHSZm  ```  Format the signature into an `Authorization` header specifying the UUID of the key used to generate the signature, the signature algorithm used above, the headers in the order they were signed (space separated) and the signature itself.  ``` Signature keyid=\"4ae81b77-cca2-480b-b1b2-f353d3253874\",algorithm=\"rsa-sha512\",headers=\"(request-target) Date Digest\",signature=\"MEYCIQCYkotOTNN+gM13v48Ay0powow7SpaL6LqVCL8ifNdKSAIhAL5viAzL7lXjM+plrONFyN1Y1EX6V3VpIBmoOmXdHSZm\" ```  Finally, make the HTTP request as normal with the following headers:  | Header | Value | | :--- | :-------------- | | Authorization | Signature keyid=\"4ae81b77-cca2-480b-b1b2-f353d3253874\",algorithm=\"rsa-sha512\",headers=\"(request-target) Date Digest\",signature=\"MEYCIQCYkotOTNN+gM13v48Ay0powow7SpaL6LqVCL8ifNdKSAIhAL5viAzL7lXjM+plrONFyN1Y1EX6V3VpIBmoOmXdHSZm\" | | Digest | vRbwCwvyRmlkHVxa4A45M3n31DZGqtcd1Lso9JcueCd5IoZVKyKeWtl5yluy0eAgypiN2GXOyRoXwtv55RU/Tw== | | Date | 2017-06-30T12:25:07.61+01:00 |  **Note:** * Requests are only valid within **5 seconds** of the specified time * The digest must be a `SHA-512 digest` of the full JSON payload. For `GET` requests, the header must be present but can have no value (or a value such as `X` as long as it matches the value of the digest header that was signed). * The separate header values on the request must match the header values used to generate the signature. * You may also sign any further headers by including them in the list of headers signed and the signature contents.   ### <a name=\"uploading-a-public-ke\"></a>Uploading a Public Key  The public keys of the payments key pair and the rotation key pair need to be uploaded to the Starling Payment Services developer portal which can be found at https://developer.starlingbank.com/payments.  Under `Settings` in the portal you can upload the keys (just copy and paste them in). The key should either be: * A complete public key, across new lines and with headers and footers, such as `-----BEGIN RSA PUBLIC KEY-----` *or* * A single line for the whole body of the signature *without* headers and footers.  After the signature is uploaded, your `Key Uid` will be available at `Dashboard`.  ## <a name=\"using-the-api\"></a>Using the API  ### <a name=\"request-and-response\"></a>Request & Response  The API makes use of the following HTTP methods:  | Method | Usage | | ----- | ----- | | `PUT` (create / update) | Makes the object at the specified path consistent with the payload structure, a new instance will be created where this object does not currently exist. This approach is used in preference to `POST` as it allows requests to be immutable, the caller can repeatedly `PUT` the same payload and only create a single account / send a single payment. The API will validate subsequent requests to ensure the resource exactly matches the previously created structure. | | `GET` (read) | Returns details of the requested object |  All responses, including errors, return JSON and the `PUT` method require JSON for the request body.    ### <a name=\"errors\"></a>Errors  The API uses common HTTP status codes in the response header to indicate success or failure.  | HTTP Status | Meaning | | ----- | ----- | | `200 OK` | Request succeeded and processed OK | | `202 Accepted` | Received was received OK and will process shortly. Typically you will receive a UUID in response that can be used to check progress | | `400 Bad Request` | Something was wrong with the request made, check the request to address the error included in the response | | `401 Unauthorized` | You are not authorised to access the requested data | | `403 Forbidden` | Your authentication failed, usually due to the public key being expired or an attempt to access a resource beyond the scope of the key | | `404 Not Found` | The requested resource does not exist | | `500 Internal Server Error` | Something went wrong on our side - get in touch using Slack or email so we can look into it! |  ### <a name=\"webhooks\"></a>Webhooks  Starling can dispatch webhooks to your servers to give real-time notifications of inbound payments and changes to, or information received about, outbound payment requests. The webhook address Starling should POST to can be configured through the Payment Services portal, with separate addresses supported for production and the sandbox environment. Documentation on the payloads that will be included, and the paths to which they will be posted, are in the API specification below.  Webhooks will be dispatched for the following events: * FPS Scheme notifications - typically a payment request being accepted or rejected by the scheme. A single payment may receive multiple scheme notifications, for example when initially rejected, retried then accepted - see common sequences below. * FPS Redirection notifications - used when a payment has been automatically redirected to a different account number / sort code, typically due to use of the current account switching service (CASS). The new account details provided should be used on future payment instructions. * FPS Inbound payment - Newly received inbound payment which will increase the funds available in the account. * FPS Inbound payment reversal - Reversal of a previously received inbound payment - the previously credited funds will be deducted from the balance.  It is important that you can validate that messages hitting your chosen endpoint have both originated from the Starling servers and have not been tampered with in transit. To help with this, a server-generated shared secret is used to sign all hooks. The signature is placed in the `X-Hook-Signature` header of the `POST` request and consists of a `Base64` encoded `SHA-512` digest of the `secret + JSON` payload. You can view the shared secret in the Payment Services portal. Also, Starling require the use of HTTPS connections for production webhooks.  Should your webhook endpoint not return a 2XX response within two seconds we will retry, with backoff, over a period of ~2 hours:  after the first attempted delivery we schedule another delivery for 2 minutes after delivery failure  after the second attempted delivery we schedule another delivery for 4 minutes after delivery failure  after the third attempted delivery we schedule another delivery for 8 minutes after delivery failure  after the fourth attempted delivery we schedule another delivery for 16 minutes after delivery failure  after the fifth attempted delivery we schedule another delivery for 32 minutes after delivery failure  after the sixth attempted delivery we schedule another delivery for 64 minutes after delivery failure  if the seventh attempt fails we give up  ## <a name=\"common-sequences\"></a>Common Sequences  While Starling will handle the complex interactions and technical integration with the Faster Payments Scheme (FPS), there are a number of sequences of events which may occur that you need to allow for when integrating the API. These may not be familiar from a consumer experience of using Faster Payments, where typically all payments are final.  ### <a name=\"inbound-payments\"></a>Inbound Payments  The vast majority of inbound payments follow a simple exchange where the money arrives and the client application is notified via a webhook:  ![Diagram showing inbound payment acceptance][inbound_accepted]  In rare circumstances, the inbound payment will be reversed a few seconds later and the funds removed again. Typically this is because one of the actors in the chain did not respond to the payment process fast enough so the scheme triggered an automated technical reversal of the payment. In effect, the inbound payment did not take place and the account has no additional funds:  ![Diagram showing inbound payment acceptance followed by reversal][inbound_accepted_reversed]  ### <a name=\"outbound-payments\"></a>Outbound Payments  Assuming sufficient funds at Starling, most outbound payments will be sent to the scheme and accepted by the receiving bank:  ![Diagram showing outbound immediate, accepted][outbound_immediate_accepted]  In some circumstances, the destination bank won’t be in a position to accept an immediate payment, for example due to scheduled maintenance. When this happens, the initial payment will be rejected and Starling will automatically re-submit the payment instruction as a future dated payment (FDP) which the scheme accepts and holds until the destination bank is available again.  ![Diagram showing outbound immediate rejected, future dated accepted][outbound_immediate_rejected_fdp_accepted]  It is also possible, in both cases above, for the outbound payment to be accepted but for the scheme or receiving bank to later decide that it should not have been. When this happens, a new inbound payment will be sent back to Starling to return the money with the inbound payment flagged as a return of a previous outbound payment.  ![Diagram showing outbound accepted then returned][outbound_immediate_accepted_then_returned]  When a payment is sent to an account number / sort code and the customer has moved their account, there may be an automatic redirection in place within Faster Payments. If your payment is automatically re-routed, an additional webhook will be sent with the details of the redirection. Developers should update their account details for the customer and instruct payments to the new account in future, redirections are only temporary and will come to an end.  ![Diagram showing outbound accepted and_redirected][outbound_immediate_accepted_and_redirected]   [inbound_accepted]: https://starlingbank.github.io/docs/sequence_diagrams/fps/inbound_accepted.svg \"Inbound Payment: Accepted\" [inbound_accepted_reversed]: https://starlingbank.github.io/docs/sequence_diagrams/fps/inbound_accepted_reversed.svg \"Inbound Payment: Accepted then Reversed\" [outbound_immediate_accepted]: https://starlingbank.github.io/docs/sequence_diagrams/fps/outbound_immediate_accepted.svg \"Outbound Payment: Immediate, Accepted\" [outbound_immediate_rejected_fdp_accepted]: https://starlingbank.github.io/docs/sequence_diagrams/fps/outbound_immediate_rejected_fdp_accepted.svg \"Outbound Payment: Immediate rejected, future dated accepted\" [outbound_immediate_accepted_then_returned]: https://starlingbank.github.io/docs/sequence_diagrams/fps/outbound_immediate_accepted_then_returned.svg \"Outbound Payment: Accepted, then later returned\" [outbound_immediate_accepted_and_redirected]: https://starlingbank.github.io/docs/sequence_diagrams/fps/outbound_immediate_accepted_and_redirected.svg \"Outbound Payment: Accepted, then redirected\"  ### <a name=\"bacs-direct-debits\"></a>BACS: Direct Debits  It is possible to set up Direct Debit mandates against an address. The events that occur when setting up a Direct Debit and making payments against it are as follows:  * Once a new Direct Debit has been set up, the `bacs-mandate-created` webhook will be dispatched with the details of the mandate. * On the working day before a payment is due against a mandate, the `direct-debit-due` webhook is dispatched. * Once this has been dispatched, before 2pm on the day of payment, it is possible for the payment business to instruct Starling to prevent payment of the Direct Debit, by using the BACS Payments endpoint. This would be necessary should the address not have sufficient funds to make the payment. * At 2pm on the day of payment, the Direct Debit payment will be attempted. The following situations could occur:  - Should the payment succeed, the `direct-debit-paid` webhook will be dispatched.   - If the payment has either been instructed not to be paid, or the account holding the address has insufficient funds, the `direct-debit-rejected` webhook will be dispatched, containing the reason for the rejection.  ## <a name=\"sandbox\"></a>Sandbox  A full sandbox environment is provided running a complete copy of all Starling systems, connected to simulated versions of the Faster Payments Scheme and BACS. This allows developers to build and test applications without having to move money in the real world. The FPS simulator supports a number of triggers which allow the developer to control the scheme response to their instruction. This means an application can be tested against all the scenarios documented above without you needing to re-create them in the real world.  The sandbox is available at: https://payment-api-sandbox.starlingbank.com/api/v1/{paymentBusinessUuid}  ### <a name=\"inbound-domestic-payments\"></a>Inbound Domestic Payments  Inbound payments can be simulated from within the Payment Services portal. Enter the amount, reference and destination account number / sort code, which should be an address attached to an account of your business. The simulator will automatically fake an originating UK account.  ### <a name=\"inbound-payments-originating-overseas\"></a>Inbound Payments Originating Overseas  Inbound payments originating overseas can be simulated from within the Payment Services portal. Enter details as per a domestic payment, plus information of the originating account overseas which can either be: * BIC & IBAN * BIC & Account number  ### <a name=\"inbound-payment-reversal\"></a>Inbound Payment Reversal  A reversal of a previously receiving inbound payment can be simulated within the Payment Service portal. To do so, you will need the FPID (Faster Payments Identifier) of the inbound payment to reverse and the original payment amount. Both of these are included in the webhook for a received inbound payment.  ### <a name=\"outbound-domestic-payments\"></a>Outbound Domestic Payments  Outbound payments are initiated through the API. The simulator will accept payments to any FPS addressable sort code. If the sort code is operated by Starling Bank, the destination account must also exist for the payment to be accepted (for example transferring between two addresses for your accounts).  To help with testing payments to accounts outside of Starling, the following accounts are **valid**:  |Sort Code | Account Number| |----------|---------------| |203002|00004588| |203002|00027944| |204514|58110244| |204514|60282377| |166051|99993193| |166051|87889196|  The following accounts are **invalid**:  |Sort Code | Account Number| |----------|---------------| |203002|00004900| |203002|00028000| |204514|58110250| |204514|60282380| |166051|99993200| |166051|87889200|  Outbound payments can also be rejected with a specific error code by using the reference `rejectCode:nnnn` where `nnnn` is the 4 digit scheme error code. If no numeric code is specified, the payment will be rejected with reason `1114 - Beneficiary Sort Code/Account Number unknown`.  The main error codes you may receive are:  | Code | Description | Retried as FDP (see below) | | ----- | ----- | ----- | | 1100 | Other than that identified below | - | | 1114 | Beneficiary Sort Code/Account Number unknown | - | | 1160 | Beneficiary Account closed | - | | 1161 | Beneficiary Account stopped | - | | 1162 | Beneficiary Account Name does not match Beneficiary Account Number | - | | 1163 | Account cannot be identified without data in Reference Information field | - | | 1164 | Reference Information is incorrect | - | | 1167 | Beneficiary deceased | - | | 1168 | Fraudulent payment suspected | - | | 9910 | Direct Receiver’s system not logged on | Yes | | 9911 | Direct Receiver’s system timed out | Yes | | 9912 | Direct Receiver’s system not available | Yes | | 9913 | Duplicate FPID | Yes |  The main reason codes for successful outbound payments are:  | Code | Description | | ----- | ----- | | 0000 | Accept | | 0080 | Qualified accept - unspecified day | | 0081 | Qualified accept - same day | | 0082 | Qualified accept - next calendar day | | 0083 | Qualified accept - next working day | | 0084 | Qualified accept - after the next working day | | 0085 | Qualified accept - within two hours |  ### <a name=\"outbound-immediate-payment-rejected\"></a>Outbound Immediate Payment Rejected and Retried as Future Dated Payment (FDP)  An outbound payment can be configured to be initially rejected as a SIP then converted to the FDP (which is accepted) if the reference is set to `sipResendAsFdp`.  ### <a name=\"outbound-payment-re-direction\"></a>Outbound Payment Redirection  Outbound payments receive a success acknowledgment which informs you of redirection if the reference on the payment is set to `R:\\d{6}:\\d{8}`, eg `R:123456:12345678`, where the 6 digit string is the new sort code, and the 8 digit string is the new account number.  ### <a name=\"outbound-payment-returned-by-new-inbound-payment\"></a>Outbound Payment Returned by New Inbound Payment  Outbound payments can be returned by a separate inbound payment by simulating the inbound return in the Payment Services portal. To do so, you will need the UUID of the account that sent the outbound payment and the FPID (Faster Payments Identifier) of the outbound payment to return. The simulator will then send a correctly configured return for the previous outbound payment.  ### <a name=\"bacs-direct-credits-and-debits\"></a>BACS: Direct Debits and Direct Credits  To simulate Direct Debits, the BACS Direct Debit simulator is available. In the Mandate tab, enter the address details and any service user number/reference, for which a Direct Debit originator will be generated. Use the same reference when simulating a Direct Debit payment for this mandate in the Payment tab. To simulate instructing a payment not to be made, set the simulated payment to 'Pay Tomorrow', and use the payment UUID in the webhook dispatched to instruct the payment not to be made. To simulate the payment being processed without waiting until 2pm the following working day, use the 'Due Payments' tab.  Direct Credits can be simulated through the BACS Direct Credit simulator, using any reference.  ## <a name=\"functionality-and-limits\"></a>Functionality & Limits  ### <a name=\"payment-timing\"></a>Payment Timing  Starling operate a real-time payment system. Outbound payments will be deducted from the available funds when the payment is requested and inbound funds will be credited to the destination account on receipt of the instruction from the Faster Payments Scheme.  ### <a name=\"payment-limits\"></a>Payment Limits  The maximum amount permitted per payment will be agreed with the Payment Services client; Starling systems support payments up to the scheme limits.  In addition, all clients will be allocated a net sender cap which is the total net position of payments that a client can reach within a settlement cycle (details to be confirmed). Payments requests that exceed this cap will be declined. The current status of the net sender cap within the cycle, and cycle details, are available through the API. Please get in touch with the SPS team if you need additional headroom above your allocated cap.  ## <a name=\"help-and-support\"></a>Help & Support  If you are an existing Payment Services User and are having any issues, please get in touch with us directly by email or in the private, dedicated Slack channel.  If you have any questions around Starling Bank rather that our Payment Services, you can ask via chat on our [main website](https://www.starlingbank.com/contact/) or by emailing our [contact centre](mailto:help@starlingbank.com).
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

use ArrayAccess;
use JsonSerializable;
use Academe\Starling\PaymentsSdk\ObjectSerializer;

/**
 * OverseasInstructionAccountAddress Class Doc Comment
 *
 * @category Class
 * @package  Academe\Starling\PaymentsSdk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OverseasInstructionAccountAddress implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OverseasInstructionAccountAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'countryCode' => 'string',
        'lineOne' => 'string',
        'lineTwo' => 'string',
        'lineThree' => 'string',
        'lineFour' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'countryCode' => null,
        'lineOne' => null,
        'lineTwo' => null,
        'lineThree' => null,
        'lineFour' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Attributes of form: local name => original name
     * Local name is camelCase, original name is as per API description
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'countryCode' => 'countryCode',
        'lineOne' => 'lineOne',
        'lineTwo' => 'lineTwo',
        'lineThree' => 'lineThree',
        'lineFour' => 'lineFour'
    ];

    /**
     * Attributes to setter functions
     *
     * @var string[]
     */
    protected static $setters = [
        'countryCode' => 'setCountryCode',
        'lineOne' => 'setLineOne',
        'lineTwo' => 'setLineTwo',
        'lineThree' => 'setLineThree',
        'lineFour' => 'setLineFour'
    ];

    /**
     * Array of attributes to getter functions
     *
     * @var string[]
     */
    protected static $getters = [
        'countryCode' => 'getCountryCode',
        'lineOne' => 'getLineOne',
        'lineTwo' => 'getLineTwo',
        'lineThree' => 'getLineThree',
        'lineFour' => 'getLineFour'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to accessor functions
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['countryCode'] = $data['countryCode'] ?? null;
        $this->container['lineOne'] = $data['lineOne'] ?? null;
        $this->container['lineTwo'] = $data['lineTwo'] ?? null;
        $this->container['lineThree'] = $data['lineThree'] ?? null;
        $this->container['lineFour'] = $data['lineFour'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['countryCode'] === null) {
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'countryCode');
        }
        if ($this->container['lineOne'] === null) {
            $invalidProperties[] = sprintf('"%s" can\'t be null', 'lineOne');
        }
        if ((mb_strlen($this->container['lineOne']) > 35)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'lineOne',
                35
            );
        }

        if ((mb_strlen($this->container['lineOne']) < 0)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be bigger than or equal to %d.',
                'lineOne',
                0
            );
        }

        if (! preg_match("/[a-zA-Z0-9-\/?:().,+#=!%&*<>;{@ \"']{1,35}/", $this->container['lineOne'])) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be conform to the pattern "%s".',
                'lineOne',
                "/[a-zA-Z0-9-\/?:().,+#=!%&*<>;{@ \"']{1,35}/"
            );
        }

        if (! is_null($this->container['lineTwo']) && (mb_strlen($this->container['lineTwo']) > 35)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'lineTwo',
                35
            );
        }

        if (! is_null($this->container['lineTwo']) && (mb_strlen($this->container['lineTwo']) < 0)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be bigger than or equal to %d.',
                'lineTwo',
                0
            );
        }

        if (! is_null($this->container['lineTwo']) && ! preg_match("/[a-zA-Z0-9-\/?:().,+#=!%&*<>;{@ \"']{0,35}/", $this->container['lineTwo'])) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be conform to the pattern "%s".',
                'lineTwo',
                "/[a-zA-Z0-9-\/?:().,+#=!%&*<>;{@ \"']{0,35}/"
            );
        }

        if (! is_null($this->container['lineThree']) && (mb_strlen($this->container['lineThree']) > 35)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'lineThree',
                35
            );
        }

        if (! is_null($this->container['lineThree']) && (mb_strlen($this->container['lineThree']) < 0)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be bigger than or equal to %d.',
                'lineThree',
                0
            );
        }

        if (! is_null($this->container['lineThree']) && ! preg_match("/[a-zA-Z0-9-\/?:().,+#=!%&*<>;{@ \"']{0,35}/", $this->container['lineThree'])) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be conform to the pattern "%s".',
                'lineThree',
                "/[a-zA-Z0-9-\/?:().,+#=!%&*<>;{@ \"']{0,35}/"
            );
        }

        if (! is_null($this->container['lineFour']) && (mb_strlen($this->container['lineFour']) > 35)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be smaller than or equal to %d.',
                'lineFour',
                35
            );
        }

        if (! is_null($this->container['lineFour']) && (mb_strlen($this->container['lineFour']) < 0)) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", the character length must be bigger than or equal to %d.',
                'lineFour',
                0
            );
        }

        if (! is_null($this->container['lineFour']) && ! preg_match("/[a-zA-Z0-9-\/?:().,+#=!%&*<>;{@ \"']{0,35}/", $this->container['lineFour'])) {
            $invalidProperties[] = sprintf(
                'invalid value for "%s", must be conform to the pattern "%s".',
                'lineFour',
                "/[a-zA-Z0-9-\/?:().,+#=!%&*<>;{@ \"']{0,35}/"
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->get('countryCode');
    }

    /**
     * Sets countryCode
     *
     * @param string $countryCode ISO 3166-1 alpha-2 character country code
     *
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets lineOne
     *
     * @return string
     */
    public function getLineOne()
    {
        return $this->get('lineOne');
    }

    /**
     * Sets lineOne
     *
     * @param string $lineOne lineOne
     *
     * @return $this
     */
    public function setLineOne($lineOne)
    {
        if ((mb_strlen($lineOne) > 35)) {
            throw new \InvalidArgumentException('invalid length for $lineOne when calling OverseasInstructionAccountAddress., must be smaller than or equal to 35.');
        }
        if ((mb_strlen($lineOne) < 0)) {
            throw new \InvalidArgumentException('invalid length for $lineOne when calling OverseasInstructionAccountAddress., must be bigger than or equal to 0.');
        }
        if ((! preg_match("/[a-zA-Z0-9-\/?:().,+#=!%&*<>;{@ \"']{1,35}/", $lineOne))) {
            throw new \InvalidArgumentException("invalid value for $lineOne when calling OverseasInstructionAccountAddress., must conform to the pattern /[a-zA-Z0-9-\/?:().,+#=!%&*<>;{@ \"']{1,35}/.");
        }

        $this->container['lineOne'] = $lineOne;

        return $this;
    }

    /**
     * Gets lineTwo
     *
     * @return string|null
     */
    public function getLineTwo()
    {
        return $this->get('lineTwo');
    }

    /**
     * Sets lineTwo
     *
     * @param string|null $lineTwo lineTwo
     *
     * @return $this
     */
    public function setLineTwo($lineTwo)
    {
        if (! is_null($lineTwo) && (mb_strlen($lineTwo) > 35)) {
            throw new \InvalidArgumentException('invalid length for $lineTwo when calling OverseasInstructionAccountAddress., must be smaller than or equal to 35.');
        }
        if (! is_null($lineTwo) && (mb_strlen($lineTwo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $lineTwo when calling OverseasInstructionAccountAddress., must be bigger than or equal to 0.');
        }
        if (! is_null($lineTwo) && (! preg_match("/[a-zA-Z0-9-\/?:().,+#=!%&*<>;{@ \"']{0,35}/", $lineTwo))) {
            throw new \InvalidArgumentException("invalid value for $lineTwo when calling OverseasInstructionAccountAddress., must conform to the pattern /[a-zA-Z0-9-\/?:().,+#=!%&*<>;{@ \"']{0,35}/.");
        }

        $this->container['lineTwo'] = $lineTwo;

        return $this;
    }

    /**
     * Gets lineThree
     *
     * @return string|null
     */
    public function getLineThree()
    {
        return $this->get('lineThree');
    }

    /**
     * Sets lineThree
     *
     * @param string|null $lineThree lineThree
     *
     * @return $this
     */
    public function setLineThree($lineThree)
    {
        if (! is_null($lineThree) && (mb_strlen($lineThree) > 35)) {
            throw new \InvalidArgumentException('invalid length for $lineThree when calling OverseasInstructionAccountAddress., must be smaller than or equal to 35.');
        }
        if (! is_null($lineThree) && (mb_strlen($lineThree) < 0)) {
            throw new \InvalidArgumentException('invalid length for $lineThree when calling OverseasInstructionAccountAddress., must be bigger than or equal to 0.');
        }
        if (! is_null($lineThree) && (! preg_match("/[a-zA-Z0-9-\/?:().,+#=!%&*<>;{@ \"']{0,35}/", $lineThree))) {
            throw new \InvalidArgumentException("invalid value for $lineThree when calling OverseasInstructionAccountAddress., must conform to the pattern /[a-zA-Z0-9-\/?:().,+#=!%&*<>;{@ \"']{0,35}/.");
        }

        $this->container['lineThree'] = $lineThree;

        return $this;
    }

    /**
     * Gets lineFour
     *
     * @return string|null
     */
    public function getLineFour()
    {
        return $this->get('lineFour');
    }

    /**
     * Sets lineFour
     *
     * @param string|null $lineFour lineFour
     *
     * @return $this
     */
    public function setLineFour($lineFour)
    {
        if (! is_null($lineFour) && (mb_strlen($lineFour) > 35)) {
            throw new \InvalidArgumentException('invalid length for $lineFour when calling OverseasInstructionAccountAddress., must be smaller than or equal to 35.');
        }
        if (! is_null($lineFour) && (mb_strlen($lineFour) < 0)) {
            throw new \InvalidArgumentException('invalid length for $lineFour when calling OverseasInstructionAccountAddress., must be bigger than or equal to 0.');
        }
        if (! is_null($lineFour) && (! preg_match("/[a-zA-Z0-9-\/?:().,+#=!%&*<>;{@ \"']{0,35}/", $lineFour))) {
            throw new \InvalidArgumentException("invalid value for $lineFour when calling OverseasInstructionAccountAddress., must conform to the pattern /[a-zA-Z0-9-\/?:().,+#=!%&*<>;{@ \"']{0,35}/.");
        }

        $this->container['lineFour'] = $lineFour;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode($this, JSON_PRETTY_PRINT);
    }

    /**
     * Convert to a nested array.
     * This is not an ideal method, and needs to be revisited.
     */
    public function toArray()
    {
        return json_decode(json_encode($this), true);
    }

    /**
     * Return the JSON serialisable data for this model.
     *
     * @return string|object
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * return a property value.
     *
     * @param string $name Name of the property
     * @param mixed $default Value if property is not set
     *
     * @return mixed
     */
    public function get(string $name, $default = null)
    {
        return $this->container[$name] ?? $default;
    }

    /**
     * Hangle magic getter to return properties.
     *
     * @param string $name Name of the property
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this->get($name);
    }
}
