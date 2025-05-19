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
$slug = 'slug_example'; // string | unique instance name defined for payment page. Can be found on each payment page settings page in CRM.
$order_id = 'order_id_example'; // string | PayPlay internal order identifier

try {
    $result = $apiInstance->completeCryptoOrder($slug, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->completeCryptoOrder: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.payplay.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**completeCryptoOrder**](docs/Api/DefaultApi.md#completecryptoorder) | **POST** /private-api/crypto-orders/{slug}/{orderID}/complete | POST /private-api/crypto-orders/{slug}/{orderID}/complete
*DefaultApi* | [**confirmConvertWithdrawal**](docs/Api/DefaultApi.md#confirmconvertwithdrawal) | **POST** /private-api/convert-withdrawal/{transactionID}/confirm | POST /private-api/convert-withdrawal/{transactionID}/confirm
*DefaultApi* | [**createAcquiring**](docs/Api/DefaultApi.md#createacquiring) | **POST** /acquiring/{slug}/pay | POST /acquiring/{slug}/pay
*DefaultApi* | [**createBalances**](docs/Api/DefaultApi.md#createbalances) | **POST** /private-api/balances/{balanceID} | POST /private-api/balances/{balanceID}
*DefaultApi* | [**createConvertWithdrawal**](docs/Api/DefaultApi.md#createconvertwithdrawal) | **POST** /private-api/convert-withdrawal | POST /private-api/convert-withdrawal
*DefaultApi* | [**createCryptoOrder**](docs/Api/DefaultApi.md#createcryptoorder) | **POST** /private-api/crypto-orders/{slug} | POST /private-api/crypto-orders/{slug}
*DefaultApi* | [**createCryptoTopups**](docs/Api/DefaultApi.md#createcryptotopups) | **POST** /private-api/crypto-topups/{slug} | POST /private-api/crypto-topups/{slug}
*DefaultApi* | [**createInstantConvertWithdrawal**](docs/Api/DefaultApi.md#createinstantconvertwithdrawal) | **POST** /private-api/convert-withdrawal/instant | POST /private-api/convert-withdrawal/instant
*DefaultApi* | [**createMassPayout**](docs/Api/DefaultApi.md#createmasspayout) | **POST** /mass-payouts | POST /mass-payouts
*DefaultApi* | [**createRefund**](docs/Api/DefaultApi.md#createrefund) | **POST** /private-api/refunds/orders/{orderID} | POST /private-api/refunds/orders/{orderID}
*DefaultApi* | [**createWithdrawal**](docs/Api/DefaultApi.md#createwithdrawal) | **POST** /private-api/{slug}/withdrawal | POST /private-api/{slug}/withdrawal
*DefaultApi* | [**getAcquiringOrderID**](docs/Api/DefaultApi.md#getacquiringorderid) | **GET** /acquiring/{slug}/order/{orderID} | GET /acquiring/{slug}/order/{orderID}
*DefaultApi* | [**getBalanceBalanceID**](docs/Api/DefaultApi.md#getbalancebalanceid) | **GET** /private-api/balances/{balanceID} | GET /private-api/balances/{balanceID}
*DefaultApi* | [**getBalanceBalances**](docs/Api/DefaultApi.md#getbalancebalances) | **GET** /private-api/balances/ | GET /private-api/balances/
*DefaultApi* | [**getCryptoOrderOrderID**](docs/Api/DefaultApi.md#getcryptoorderorderid) | **GET** /private-api/crypto-orders/{slug}/{orderID} | GET /private-api/crypto-orders/{slug}/{orderID}
*DefaultApi* | [**getCryptoOrderSlug**](docs/Api/DefaultApi.md#getcryptoorderslug) | **GET** /private-api/crypto-orders/{slug} | GET /private-api/crypto-orders/{slug}
*DefaultApi* | [**getCurrenciesCryptoOrderTargetCurrencies**](docs/Api/DefaultApi.md#getcurrenciescryptoordertargetcurrencies) | **GET** /currencies/crypto-order-target-currencies | GET /currencies/crypto-order-target-currencies
*DefaultApi* | [**getCurrenciesCryptoTopupTargetCurrencies**](docs/Api/DefaultApi.md#getcurrenciescryptotopuptargetcurrencies) | **GET** /private-api/currencies/crypto-topup-target-currencies | GET /private-api/currencies/crypto-topup-target-currencies
*DefaultApi* | [**getCurrenciesCurrencies**](docs/Api/DefaultApi.md#getcurrenciescurrencies) | **GET** /private-api/convert-withdrawal/currencies | GET /private-api/convert-withdrawal/currencies
*DefaultApi* | [**getCurrenciesCurrencies1**](docs/Api/DefaultApi.md#getcurrenciescurrencies1) | **GET** /acquiring/{slug}/currencies | GET /acquiring/{slug}/currencies
*DefaultApi* | [**getExchangeRatesCurrencyTicker**](docs/Api/DefaultApi.md#getexchangeratescurrencyticker) | **GET** /private-api/exchange-rates/{currencyTicker} | GET /private-api/exchange-rates/{currencyTicker}
*DefaultApi* | [**getOrderOrderId**](docs/Api/DefaultApi.md#getorderorderid) | **GET** /private-api/orders/{slug}/{orderId} | GET /private-api/orders/{slug}/{orderId}
*DefaultApi* | [**getOrderSlug**](docs/Api/DefaultApi.md#getorderslug) | **GET** /private-api/orders/{slug} | GET /private-api/orders/{slug}
*DefaultApi* | [**getOrderStatuses**](docs/Api/DefaultApi.md#getorderstatuses) | **GET** /private-api/order-statuses | GET /private-api/order-statuses
*DefaultApi* | [**getRateRates**](docs/Api/DefaultApi.md#getraterates) | **GET** /rates | GET /rates
*DefaultApi* | [**getTransactionTransactionID**](docs/Api/DefaultApi.md#gettransactiontransactionid) | **GET** /private-api/transactions/{transactionID} | GET /private-api/transactions/{transactionID}
*DefaultApi* | [**getTransactionTransactions**](docs/Api/DefaultApi.md#gettransactiontransactions) | **GET** /private-api/transactions | GET /private-api/transactions
*DefaultApi* | [**getWithdrawalFees**](docs/Api/DefaultApi.md#getwithdrawalfees) | **GET** /private-api/withdrawals/fees | GET /private-api/withdrawals/fees
*DefaultApi* | [**refreshConvertWithdrawal**](docs/Api/DefaultApi.md#refreshconvertwithdrawal) | **POST** /private-api/convert-withdrawal/{transactionID}/refresh | POST /private-api/convert-withdrawal/{transactionID}/refresh

## Models

- [CreateRefund200Response](docs/Model/CreateRefund200Response.md)
- [CreateRefund200ResponseOrder](docs/Model/CreateRefund200ResponseOrder.md)
- [CreateWithdrawal200Response](docs/Model/CreateWithdrawal200Response.md)
- [CreateWithdrawal200ResponseTransactionsInner](docs/Model/CreateWithdrawal200ResponseTransactionsInner.md)
- [CreateWithdrawal200ResponseTransactionsInnerCurrency](docs/Model/CreateWithdrawal200ResponseTransactionsInnerCurrency.md)
- [GetBalanceBalances200Response](docs/Model/GetBalanceBalances200Response.md)
- [GetBalanceBalances200ResponseBalancesInner](docs/Model/GetBalanceBalances200ResponseBalancesInner.md)
- [GetBalanceBalances200ResponseBalancesInnerCurrency](docs/Model/GetBalanceBalances200ResponseBalancesInnerCurrency.md)
- [GetCryptoOrderSlug200Response](docs/Model/GetCryptoOrderSlug200Response.md)
- [GetCryptoOrderSlug200ResponseOrder](docs/Model/GetCryptoOrderSlug200ResponseOrder.md)
- [GetCurrenciesCurrencies1200Response](docs/Model/GetCurrenciesCurrencies1200Response.md)
- [GetCurrenciesCurrencies1200ResponseCurrenciesInner](docs/Model/GetCurrenciesCurrencies1200ResponseCurrenciesInner.md)
- [GetCurrenciesCurrencies1200ResponseCurrenciesInnerLimits](docs/Model/GetCurrenciesCurrencies1200ResponseCurrenciesInnerLimits.md)
- [GetCurrenciesCurrencies1200ResponseCurrenciesInnerLimitsERC20](docs/Model/GetCurrenciesCurrencies1200ResponseCurrenciesInnerLimitsERC20.md)
- [GetCurrenciesCurrencies1200ResponseCurrenciesInnerNetworks](docs/Model/GetCurrenciesCurrencies1200ResponseCurrenciesInnerNetworks.md)
- [GetCurrenciesCurrencies1200ResponseCurrenciesInnerNetworksTRC20](docs/Model/GetCurrenciesCurrencies1200ResponseCurrenciesInnerNetworksTRC20.md)
- [GetCurrenciesCurrencies1200ResponseCurrenciesInnerNetworksTRC20Flex](docs/Model/GetCurrenciesCurrencies1200ResponseCurrenciesInnerNetworksTRC20Flex.md)
- [GetCurrenciesCurrencies200Response](docs/Model/GetCurrenciesCurrencies200Response.md)
- [GetCurrenciesCurrencies200ResponseTransaction](docs/Model/GetCurrenciesCurrencies200ResponseTransaction.md)
- [GetCurrenciesCurrencies200ResponseTransactionCurrency](docs/Model/GetCurrenciesCurrencies200ResponseTransactionCurrency.md)
- [GetOrderOrderId200Response](docs/Model/GetOrderOrderId200Response.md)
- [GetOrderOrderId200ResponseOrder](docs/Model/GetOrderOrderId200ResponseOrder.md)
- [GetOrderOrderId200ResponseOrderTransactionsInner](docs/Model/GetOrderOrderId200ResponseOrderTransactionsInner.md)

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
