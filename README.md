# Auto Generated Starling Bank Payments API

This code is auto-generated, and is experimental, but should be useable.

It creates API service functions, grouped into classes according to the tags.

Each model has its own class, and each service generates a PSR-7 HTTP message,
and populates models in response.

This package requires a PSR-18 HTTP client with all the required autorisation built in
(certificates, all messages to be signed).
That is not yet a part of this package, but a generator for any PSR-18 client would be
the next step to develop.

## OpenAPI Description

Starling do not publish an OpenAPI description for this API.
This is how it was derived:

* Documentation here: https://developer.starlingbank.com/payments/docs
* This is generated from the [Swagger 2.0 definition](https://payment-api-sandbox.starlingbank.com/api/swagger.json)
* That was converted to an OpenAPI 3.0 description `starling-payment-services-v1.yaml`
* The YAML file was converted to a JSON file `starling-payment-services-v1.json`

The last step was not absolutely necessary, but I find it easier to debig JSON descriptions.

A [very] few fixes were made to the JSON OpenAPI description to make it valid - just a few invalid date defaults removed.

This OpenAPI description file is monolithic - presumably realised from a number of separate files at Starling.
It makes sense to split out the documentation sections at the very least into individual markdown/commonmark files.

It would be great if those source files could be published by Starling Bank.
Generating this API took me one hour from start to finish.
Obviously the PSR-18 decorator to provide the signing and other identification features is
yet to be written, but having the models and operation classes generated in seconds (40k lines of code)
is a *massive* leap to getting started.

