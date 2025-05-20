# OpenAPIClient-php

PayPlay API documentation generated from markdown files


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: bearerAuth
$config = PayPlayClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PayPlayClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 'transaction_id_example'; // string | PayPlay transaction id

try {
    $result = $apiInstance->confirmConvertWithdrawal($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->confirmConvertWithdrawal: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.payplay.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**confirmConvertWithdrawal**](docs/Api/DefaultApi.md#confirmconvertwithdrawal) | **POST** /private-api/convert-withdrawal/{transactionID}/confirm | POST /private-api/convert-withdrawal/{transactionID}/confirm
*DefaultApi* | [**createBalances**](docs/Api/DefaultApi.md#createbalances) | **POST** /private-api/balances/{balanceID} | POST /private-api/balances/{balanceID}
*DefaultApi* | [**createConvertWithdrawal**](docs/Api/DefaultApi.md#createconvertwithdrawal) | **POST** /private-api/convert-withdrawal | POST /private-api/convert-withdrawal
*DefaultApi* | [**createCryptoOrders**](docs/Api/DefaultApi.md#createcryptoorders) | **POST** /private-api/crypto-orders/{slug} | POST /private-api/crypto-orders/{slug}
*DefaultApi* | [**createCryptoOrdersComplete**](docs/Api/DefaultApi.md#createcryptoorderscomplete) | **POST** /private-api/crypto-orders/{slug}/{orderID}/complete | POST /private-api/crypto-orders/{slug}/{orderID}/complete
*DefaultApi* | [**createCryptoTopups**](docs/Api/DefaultApi.md#createcryptotopups) | **POST** /private-api/crypto-topups/{slug} | POST /private-api/crypto-topups/{slug}
*DefaultApi* | [**createMassPayout**](docs/Api/DefaultApi.md#createmasspayout) | **POST** /mass-payouts | POST /mass-payouts
*DefaultApi* | [**createRefundsOrders**](docs/Api/DefaultApi.md#createrefundsorders) | **POST** /private-api/refunds/orders/{orderID} | POST /private-api/refunds/orders/{orderID}
*DefaultApi* | [**createWithdrawal**](docs/Api/DefaultApi.md#createwithdrawal) | **POST** /private-api/{slug}/withdrawal | POST /private-api/{slug}/withdrawal
*DefaultApi* | [**getAcquiringCurrencies**](docs/Api/DefaultApi.md#getacquiringcurrencies) | **GET** /acquiring/{slug}/currencies | GET /acquiring/{slug}/currencies
*DefaultApi* | [**getAcquiringOrder**](docs/Api/DefaultApi.md#getacquiringorder) | **GET** /acquiring/{slug}/order/{orderID} | GET /acquiring/{slug}/order/{orderID}
*DefaultApi* | [**getBalance**](docs/Api/DefaultApi.md#getbalance) | **GET** /private-api/balances/{balanceID} | GET /private-api/balances/{balanceID}
*DefaultApi* | [**getBalances**](docs/Api/DefaultApi.md#getbalances) | **GET** /private-api/balances/ | GET /private-api/balances/
*DefaultApi* | [**getConvertWithdrawalCurrencies**](docs/Api/DefaultApi.md#getconvertwithdrawalcurrencies) | **GET** /private-api/convert-withdrawal/currencies | GET /private-api/convert-withdrawal/currencies
*DefaultApi* | [**getCryptoOrder**](docs/Api/DefaultApi.md#getcryptoorder) | **GET** /private-api/crypto-orders/{slug} | GET /private-api/crypto-orders/{slug}
*DefaultApi* | [**getCryptoOrders**](docs/Api/DefaultApi.md#getcryptoorders) | **GET** /private-api/crypto-orders/{slug}/{orderID} | GET /private-api/crypto-orders/{slug}/{orderID}
*DefaultApi* | [**getCurrencyCryptoOrderTargetCurrencies**](docs/Api/DefaultApi.md#getcurrencycryptoordertargetcurrencies) | **GET** /currencies/crypto-order-target-currencies | GET /currencies/crypto-order-target-currencies
*DefaultApi* | [**getCurrencyCryptoTopupTargetCurrencies**](docs/Api/DefaultApi.md#getcurrencycryptotopuptargetcurrencies) | **GET** /private-api/currencies/crypto-topup-target-currencies | GET /private-api/currencies/crypto-topup-target-currencies
*DefaultApi* | [**getExchangeRate**](docs/Api/DefaultApi.md#getexchangerate) | **GET** /private-api/exchange-rates/{currencyTicker} | GET /private-api/exchange-rates/{currencyTicker}
*DefaultApi* | [**getOrder**](docs/Api/DefaultApi.md#getorder) | **GET** /private-api/orders/{slug} | GET /private-api/orders/{slug}
*DefaultApi* | [**getOrderStatuses**](docs/Api/DefaultApi.md#getorderstatuses) | **GET** /private-api/order-statuses | GET /private-api/order-statuses
*DefaultApi* | [**getOrders**](docs/Api/DefaultApi.md#getorders) | **GET** /private-api/orders/{slug}/{orderId} | GET /private-api/orders/{slug}/{orderId}
*DefaultApi* | [**getRates**](docs/Api/DefaultApi.md#getrates) | **GET** /rates | GET /rates
*DefaultApi* | [**getTransaction**](docs/Api/DefaultApi.md#gettransaction) | **GET** /private-api/transactions/{transactionID} | GET /private-api/transactions/{transactionID}
*DefaultApi* | [**getTransactions**](docs/Api/DefaultApi.md#gettransactions) | **GET** /private-api/transactions | GET /private-api/transactions
*DefaultApi* | [**getWithdrawalFees**](docs/Api/DefaultApi.md#getwithdrawalfees) | **GET** /private-api/withdrawals/fees | GET /private-api/withdrawals/fees
*DefaultApi* | [**instantConvertWithdrawal**](docs/Api/DefaultApi.md#instantconvertwithdrawal) | **POST** /private-api/convert-withdrawal/instant | POST /private-api/convert-withdrawal/instant
*DefaultApi* | [**payAcquiring**](docs/Api/DefaultApi.md#payacquiring) | **POST** /acquiring/{slug}/pay | POST /acquiring/{slug}/pay
*DefaultApi* | [**refreshConvertWithdrawal**](docs/Api/DefaultApi.md#refreshconvertwithdrawal) | **POST** /private-api/convert-withdrawal/{transactionID}/refresh | POST /private-api/convert-withdrawal/{transactionID}/refresh

## Models

- [CreateRefundsOrders200Response](docs/Model/CreateRefundsOrders200Response.md)
- [CreateRefundsOrders200ResponseOrder](docs/Model/CreateRefundsOrders200ResponseOrder.md)
- [CreateWithdrawal200Response](docs/Model/CreateWithdrawal200Response.md)
- [CreateWithdrawal200ResponseTransactionsInner](docs/Model/CreateWithdrawal200ResponseTransactionsInner.md)
- [CreateWithdrawal200ResponseTransactionsInnerCurrency](docs/Model/CreateWithdrawal200ResponseTransactionsInnerCurrency.md)
- [GetAcquiringCurrencies200Response](docs/Model/GetAcquiringCurrencies200Response.md)
- [GetAcquiringCurrencies200ResponseCurrenciesInner](docs/Model/GetAcquiringCurrencies200ResponseCurrenciesInner.md)
- [GetAcquiringCurrencies200ResponseCurrenciesInnerLimits](docs/Model/GetAcquiringCurrencies200ResponseCurrenciesInnerLimits.md)
- [GetAcquiringCurrencies200ResponseCurrenciesInnerLimitsERC20](docs/Model/GetAcquiringCurrencies200ResponseCurrenciesInnerLimitsERC20.md)
- [GetAcquiringCurrencies200ResponseCurrenciesInnerNetworks](docs/Model/GetAcquiringCurrencies200ResponseCurrenciesInnerNetworks.md)
- [GetAcquiringCurrencies200ResponseCurrenciesInnerNetworksTRC20](docs/Model/GetAcquiringCurrencies200ResponseCurrenciesInnerNetworksTRC20.md)
- [GetAcquiringCurrencies200ResponseCurrenciesInnerNetworksTRC20Flex](docs/Model/GetAcquiringCurrencies200ResponseCurrenciesInnerNetworksTRC20Flex.md)
- [GetBalances200Response](docs/Model/GetBalances200Response.md)
- [GetBalances200ResponseBalancesInner](docs/Model/GetBalances200ResponseBalancesInner.md)
- [GetBalances200ResponseBalancesInnerCurrency](docs/Model/GetBalances200ResponseBalancesInnerCurrency.md)
- [GetConvertWithdrawalCurrencies200Response](docs/Model/GetConvertWithdrawalCurrencies200Response.md)
- [GetConvertWithdrawalCurrencies200ResponseTransaction](docs/Model/GetConvertWithdrawalCurrencies200ResponseTransaction.md)
- [GetConvertWithdrawalCurrencies200ResponseTransactionCurrency](docs/Model/GetConvertWithdrawalCurrencies200ResponseTransactionCurrency.md)
- [GetCryptoOrder200Response](docs/Model/GetCryptoOrder200Response.md)
- [GetCryptoOrder200ResponseOrder](docs/Model/GetCryptoOrder200ResponseOrder.md)
- [GetOrders200Response](docs/Model/GetOrders200Response.md)
- [GetOrders200ResponseOrder](docs/Model/GetOrders200ResponseOrder.md)
- [GetOrders200ResponseOrderTransactionsInner](docs/Model/GetOrders200ResponseOrderTransactionsInner.md)

## Authorization

Authentication schemes defined for the API:
### bearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Generator version: `7.13.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
