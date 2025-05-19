# PayPlayClient\DefaultApi

All URIs are relative to https://api.payplay.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**completeCryptoOrder()**](DefaultApi.md#completeCryptoOrder) | **POST** /private-api/crypto-orders/{slug}/{orderID}/complete | POST /private-api/crypto-orders/{slug}/{orderID}/complete |
| [**confirmConvertWithdrawal()**](DefaultApi.md#confirmConvertWithdrawal) | **POST** /private-api/convert-withdrawal/{transactionID}/confirm | POST /private-api/convert-withdrawal/{transactionID}/confirm |
| [**createAcquiring()**](DefaultApi.md#createAcquiring) | **POST** /acquiring/{slug}/pay | POST /acquiring/{slug}/pay |
| [**createBalances()**](DefaultApi.md#createBalances) | **POST** /private-api/balances/{balanceID} | POST /private-api/balances/{balanceID} |
| [**createConvertWithdrawal()**](DefaultApi.md#createConvertWithdrawal) | **POST** /private-api/convert-withdrawal | POST /private-api/convert-withdrawal |
| [**createCryptoOrder()**](DefaultApi.md#createCryptoOrder) | **POST** /private-api/crypto-orders/{slug} | POST /private-api/crypto-orders/{slug} |
| [**createCryptoTopups()**](DefaultApi.md#createCryptoTopups) | **POST** /private-api/crypto-topups/{slug} | POST /private-api/crypto-topups/{slug} |
| [**createInstantConvertWithdrawal()**](DefaultApi.md#createInstantConvertWithdrawal) | **POST** /private-api/convert-withdrawal/instant | POST /private-api/convert-withdrawal/instant |
| [**createMassPayout()**](DefaultApi.md#createMassPayout) | **POST** /mass-payouts | POST /mass-payouts |
| [**createRefund()**](DefaultApi.md#createRefund) | **POST** /private-api/refunds/orders/{orderID} | POST /private-api/refunds/orders/{orderID} |
| [**createWithdrawal()**](DefaultApi.md#createWithdrawal) | **POST** /private-api/{slug}/withdrawal | POST /private-api/{slug}/withdrawal |
| [**getAcquiringOrderID()**](DefaultApi.md#getAcquiringOrderID) | **GET** /acquiring/{slug}/order/{orderID} | GET /acquiring/{slug}/order/{orderID} |
| [**getBalanceBalanceID()**](DefaultApi.md#getBalanceBalanceID) | **GET** /private-api/balances/{balanceID} | GET /private-api/balances/{balanceID} |
| [**getBalanceBalances()**](DefaultApi.md#getBalanceBalances) | **GET** /private-api/balances/ | GET /private-api/balances/ |
| [**getCryptoOrderOrderID()**](DefaultApi.md#getCryptoOrderOrderID) | **GET** /private-api/crypto-orders/{slug}/{orderID} | GET /private-api/crypto-orders/{slug}/{orderID} |
| [**getCryptoOrderSlug()**](DefaultApi.md#getCryptoOrderSlug) | **GET** /private-api/crypto-orders/{slug} | GET /private-api/crypto-orders/{slug} |
| [**getCurrenciesCryptoOrderTargetCurrencies()**](DefaultApi.md#getCurrenciesCryptoOrderTargetCurrencies) | **GET** /currencies/crypto-order-target-currencies | GET /currencies/crypto-order-target-currencies |
| [**getCurrenciesCryptoTopupTargetCurrencies()**](DefaultApi.md#getCurrenciesCryptoTopupTargetCurrencies) | **GET** /private-api/currencies/crypto-topup-target-currencies | GET /private-api/currencies/crypto-topup-target-currencies |
| [**getCurrenciesCurrencies()**](DefaultApi.md#getCurrenciesCurrencies) | **GET** /private-api/convert-withdrawal/currencies | GET /private-api/convert-withdrawal/currencies |
| [**getCurrenciesCurrencies1()**](DefaultApi.md#getCurrenciesCurrencies1) | **GET** /acquiring/{slug}/currencies | GET /acquiring/{slug}/currencies |
| [**getExchangeRatesCurrencyTicker()**](DefaultApi.md#getExchangeRatesCurrencyTicker) | **GET** /private-api/exchange-rates/{currencyTicker} | GET /private-api/exchange-rates/{currencyTicker} |
| [**getOrderOrderId()**](DefaultApi.md#getOrderOrderId) | **GET** /private-api/orders/{slug}/{orderId} | GET /private-api/orders/{slug}/{orderId} |
| [**getOrderSlug()**](DefaultApi.md#getOrderSlug) | **GET** /private-api/orders/{slug} | GET /private-api/orders/{slug} |
| [**getOrderStatuses()**](DefaultApi.md#getOrderStatuses) | **GET** /private-api/order-statuses | GET /private-api/order-statuses |
| [**getRateRates()**](DefaultApi.md#getRateRates) | **GET** /rates | GET /rates |
| [**getTransactionTransactionID()**](DefaultApi.md#getTransactionTransactionID) | **GET** /private-api/transactions/{transactionID} | GET /private-api/transactions/{transactionID} |
| [**getTransactionTransactions()**](DefaultApi.md#getTransactionTransactions) | **GET** /private-api/transactions | GET /private-api/transactions |
| [**getWithdrawalFees()**](DefaultApi.md#getWithdrawalFees) | **GET** /private-api/withdrawals/fees | GET /private-api/withdrawals/fees |
| [**refreshConvertWithdrawal()**](DefaultApi.md#refreshConvertWithdrawal) | **POST** /private-api/convert-withdrawal/{transactionID}/refresh | POST /private-api/convert-withdrawal/{transactionID}/refresh |


## `completeCryptoOrder()`

```php
completeCryptoOrder($slug, $order_id): \PayPlayClient\Model\GetCryptoOrderSlug200Response
```

POST /private-api/crypto-orders/{slug}/{orderID}/complete

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. Can be found on each payment page settings page in CRM. | |
| **order_id** | **string**| PayPlay internal order identifier | |

### Return type

[**\PayPlayClient\Model\GetCryptoOrderSlug200Response**](../Model/GetCryptoOrderSlug200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmConvertWithdrawal()`

```php
confirmConvertWithdrawal($transaction_id): \PayPlayClient\Model\GetCurrenciesCurrencies200Response
```

POST /private-api/convert-withdrawal/{transactionID}/confirm

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**| PayPlay transaction id | |

### Return type

[**\PayPlayClient\Model\GetCurrenciesCurrencies200Response**](../Model/GetCurrenciesCurrencies200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAcquiring()`

```php
createAcquiring($slug): \PayPlayClient\Model\GetCurrenciesCurrencies1200Response
```

POST /acquiring/{slug}/pay

### Example

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
$slug = 'slug_example'; // string | unique instance name defined for payment page. can be found on each payment page settings page in CRM.

try {
    $result = $apiInstance->createAcquiring($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAcquiring: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. can be found on each payment page settings page in CRM. | |

### Return type

[**\PayPlayClient\Model\GetCurrenciesCurrencies1200Response**](../Model/GetCurrenciesCurrencies1200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createBalances()`

```php
createBalances($balance_id): \PayPlayClient\Model\GetBalanceBalances200Response
```

POST /private-api/balances/{balanceID}

### Example

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
$balance_id = 'balance_id_example'; // string | balance id in specified balance currency

try {
    $result = $apiInstance->createBalances($balance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **balance_id** | **string**| balance id in specified balance currency | |

### Return type

[**\PayPlayClient\Model\GetBalanceBalances200Response**](../Model/GetBalanceBalances200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createConvertWithdrawal()`

```php
createConvertWithdrawal($currency, $amount, $target_currency, $address, $network, $memo, $external_id): \PayPlayClient\Model\GetCurrenciesCurrencies200Response
```

POST /private-api/convert-withdrawal

### Example

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
$currency = NULL; // mixed | the currency to be converted
$amount = NULL; // mixed | the amount in currency to be converted
$target_currency = NULL; // mixed | the currency into which the conversion will take place
$address = NULL; // mixed | the address of the crypto wallet to which the funds will be withdrawn
$network = NULL; // mixed | crypto wallet network
$memo = NULL; // mixed | crypto wallet memo
$external_id = NULL; // mixed | external id

try {
    $result = $apiInstance->createConvertWithdrawal($currency, $amount, $target_currency, $address, $network, $memo, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createConvertWithdrawal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | [**mixed**](../Model/.md)| the currency to be converted | |
| **amount** | [**mixed**](../Model/.md)| the amount in currency to be converted | |
| **target_currency** | [**mixed**](../Model/.md)| the currency into which the conversion will take place | |
| **address** | [**mixed**](../Model/.md)| the address of the crypto wallet to which the funds will be withdrawn | |
| **network** | [**mixed**](../Model/.md)| crypto wallet network | |
| **memo** | [**mixed**](../Model/.md)| crypto wallet memo | [optional] |
| **external_id** | [**mixed**](../Model/.md)| external id | [optional] |

### Return type

[**\PayPlayClient\Model\GetCurrenciesCurrencies200Response**](../Model/GetCurrenciesCurrencies200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCryptoOrder()`

```php
createCryptoOrder($slug): \PayPlayClient\Model\GetCryptoOrderSlug200Response
```

POST /private-api/crypto-orders/{slug}

### Example

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
$slug = 'slug_example'; // string | unique instance name defined for payment page. can be found on each payment page settings page in CRM.

try {
    $result = $apiInstance->createCryptoOrder($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCryptoOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. can be found on each payment page settings page in CRM. | |

### Return type

[**\PayPlayClient\Model\GetCryptoOrderSlug200Response**](../Model/GetCryptoOrderSlug200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCryptoTopups()`

```php
createCryptoTopups($slug): \PayPlayClient\Model\GetCryptoOrderSlug200Response
```

POST /private-api/crypto-topups/{slug}

### Example

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
$slug = 'slug_example'; // string | unique instance name defined for payment page. can be found on each payment page settings page in CRM.

try {
    $result = $apiInstance->createCryptoTopups($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCryptoTopups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. can be found on each payment page settings page in CRM. | |

### Return type

[**\PayPlayClient\Model\GetCryptoOrderSlug200Response**](../Model/GetCryptoOrderSlug200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createInstantConvertWithdrawal()`

```php
createInstantConvertWithdrawal($currency, $amount, $target_currency, $address, $network, $memo, $external_id): \PayPlayClient\Model\GetCurrenciesCurrencies200Response
```

POST /private-api/convert-withdrawal/instant

### Example

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
$currency = NULL; // mixed | the currency to be converted
$amount = NULL; // mixed | the amount in currency to be converted
$target_currency = NULL; // mixed | the currency into which the conversion will take place
$address = NULL; // mixed | the address of the crypto wallet to which the funds will be withdrawn
$network = NULL; // mixed | crypto wallet network
$memo = NULL; // mixed | crypto wallet memo
$external_id = NULL; // mixed | external id

try {
    $result = $apiInstance->createInstantConvertWithdrawal($currency, $amount, $target_currency, $address, $network, $memo, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createInstantConvertWithdrawal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | [**mixed**](../Model/.md)| the currency to be converted | |
| **amount** | [**mixed**](../Model/.md)| the amount in currency to be converted | |
| **target_currency** | [**mixed**](../Model/.md)| the currency into which the conversion will take place | |
| **address** | [**mixed**](../Model/.md)| the address of the crypto wallet to which the funds will be withdrawn | |
| **network** | [**mixed**](../Model/.md)| crypto wallet network | |
| **memo** | [**mixed**](../Model/.md)| crypto wallet memo | [optional] |
| **external_id** | [**mixed**](../Model/.md)| external id | [optional] |

### Return type

[**\PayPlayClient\Model\GetCurrenciesCurrencies200Response**](../Model/GetCurrenciesCurrencies200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMassPayout()`

```php
createMassPayout(): \PayPlayClient\Model\CreateWithdrawal200Response
```

POST /mass-payouts

### Example

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

try {
    $result = $apiInstance->createMassPayout();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createMassPayout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PayPlayClient\Model\CreateWithdrawal200Response**](../Model/CreateWithdrawal200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRefund()`

```php
createRefund($order_id): \PayPlayClient\Model\CreateRefund200Response
```

POST /private-api/refunds/orders/{orderID}

### Example

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
$order_id = 'order_id_example'; // string | PayPlay order id

try {
    $result = $apiInstance->createRefund($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| PayPlay order id | |

### Return type

[**\PayPlayClient\Model\CreateRefund200Response**](../Model/CreateRefund200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWithdrawal()`

```php
createWithdrawal($slug): \PayPlayClient\Model\CreateWithdrawal200Response
```

POST /private-api/{slug}/withdrawal

### Example

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
$slug = 'slug_example'; // string | unique instance name defined for the company.

try {
    $result = $apiInstance->createWithdrawal($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createWithdrawal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for the company. | |

### Return type

[**\PayPlayClient\Model\CreateWithdrawal200Response**](../Model/CreateWithdrawal200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAcquiringOrderID()`

```php
getAcquiringOrderID($slug, $order_id): \PayPlayClient\Model\GetCurrenciesCurrencies1200Response
```

GET /acquiring/{slug}/order/{orderID}

### Example

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
$slug = 'slug_example'; // string | unique instance name defined for payment page. can be found on each payment page settings page in CRM.
$order_id = 'order_id_example'; // string | PayPlay internal order id

try {
    $result = $apiInstance->getAcquiringOrderID($slug, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAcquiringOrderID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. can be found on each payment page settings page in CRM. | |
| **order_id** | **string**| PayPlay internal order id | |

### Return type

[**\PayPlayClient\Model\GetCurrenciesCurrencies1200Response**](../Model/GetCurrenciesCurrencies1200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBalanceBalanceID()`

```php
getBalanceBalanceID($balance_id): \PayPlayClient\Model\GetBalanceBalances200Response
```

GET /private-api/balances/{balanceID}

### Example

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
$balance_id = 'balance_id_example'; // string | balance id in specified balance currency

try {
    $result = $apiInstance->getBalanceBalanceID($balance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBalanceBalanceID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **balance_id** | **string**| balance id in specified balance currency | |

### Return type

[**\PayPlayClient\Model\GetBalanceBalances200Response**](../Model/GetBalanceBalances200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBalanceBalances()`

```php
getBalanceBalances($balance_id): \PayPlayClient\Model\GetBalanceBalances200Response
```

GET /private-api/balances/

### Example

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
$balance_id = NULL; // mixed | balance id in specified balance currency

try {
    $result = $apiInstance->getBalanceBalances($balance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBalanceBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **balance_id** | [**mixed**](../Model/.md)| balance id in specified balance currency | |

### Return type

[**\PayPlayClient\Model\GetBalanceBalances200Response**](../Model/GetBalanceBalances200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCryptoOrderOrderID()`

```php
getCryptoOrderOrderID($slug, $order_id): \PayPlayClient\Model\GetCryptoOrderSlug200Response
```

GET /private-api/crypto-orders/{slug}/{orderID}

### Example

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
$order_id = 'order_id_example'; // string | unique identifier of order

try {
    $result = $apiInstance->getCryptoOrderOrderID($slug, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCryptoOrderOrderID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. Can be found on each payment page settings page in CRM. | |
| **order_id** | **string**| unique identifier of order | |

### Return type

[**\PayPlayClient\Model\GetCryptoOrderSlug200Response**](../Model/GetCryptoOrderSlug200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCryptoOrderSlug()`

```php
getCryptoOrderSlug($slug): \PayPlayClient\Model\GetCryptoOrderSlug200Response
```

GET /private-api/crypto-orders/{slug}

### Example

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

try {
    $result = $apiInstance->getCryptoOrderSlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCryptoOrderSlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. Can be found on each payment page settings page in CRM. | |

### Return type

[**\PayPlayClient\Model\GetCryptoOrderSlug200Response**](../Model/GetCryptoOrderSlug200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrenciesCryptoOrderTargetCurrencies()`

```php
getCurrenciesCryptoOrderTargetCurrencies($slug, $order_id): \PayPlayClient\Model\GetCryptoOrderSlug200Response
```

GET /currencies/crypto-order-target-currencies

### Example

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
$slug = NULL; // mixed | unique instance name defined for payment page. Can be found on each payment page settings page in CRM.
$order_id = NULL; // mixed | PayPlay internal order identifier

try {
    $result = $apiInstance->getCurrenciesCryptoOrderTargetCurrencies($slug, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCurrenciesCryptoOrderTargetCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | [**mixed**](../Model/.md)| unique instance name defined for payment page. Can be found on each payment page settings page in CRM. | |
| **order_id** | [**mixed**](../Model/.md)| PayPlay internal order identifier | |

### Return type

[**\PayPlayClient\Model\GetCryptoOrderSlug200Response**](../Model/GetCryptoOrderSlug200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrenciesCryptoTopupTargetCurrencies()`

```php
getCurrenciesCryptoTopupTargetCurrencies(): \PayPlayClient\Model\GetCryptoOrderSlug200Response
```

GET /private-api/currencies/crypto-topup-target-currencies

### Example

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

try {
    $result = $apiInstance->getCurrenciesCryptoTopupTargetCurrencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCurrenciesCryptoTopupTargetCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PayPlayClient\Model\GetCryptoOrderSlug200Response**](../Model/GetCryptoOrderSlug200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrenciesCurrencies()`

```php
getCurrenciesCurrencies($currency, $amount, $target_currency, $address, $network, $memo, $external_id): \PayPlayClient\Model\GetCurrenciesCurrencies200Response
```

GET /private-api/convert-withdrawal/currencies

### Example

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
$currency = NULL; // mixed | the currency to be converted
$amount = NULL; // mixed | the amount in currency to be converted
$target_currency = NULL; // mixed | the currency into which the conversion will take place
$address = NULL; // mixed | the address of the crypto wallet to which the funds will be withdrawn
$network = NULL; // mixed | crypto wallet network
$memo = NULL; // mixed | crypto wallet memo
$external_id = NULL; // mixed | external id

try {
    $result = $apiInstance->getCurrenciesCurrencies($currency, $amount, $target_currency, $address, $network, $memo, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCurrenciesCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | [**mixed**](../Model/.md)| the currency to be converted | |
| **amount** | [**mixed**](../Model/.md)| the amount in currency to be converted | |
| **target_currency** | [**mixed**](../Model/.md)| the currency into which the conversion will take place | |
| **address** | [**mixed**](../Model/.md)| the address of the crypto wallet to which the funds will be withdrawn | |
| **network** | [**mixed**](../Model/.md)| crypto wallet network | |
| **memo** | [**mixed**](../Model/.md)| crypto wallet memo | [optional] |
| **external_id** | [**mixed**](../Model/.md)| external id | [optional] |

### Return type

[**\PayPlayClient\Model\GetCurrenciesCurrencies200Response**](../Model/GetCurrenciesCurrencies200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrenciesCurrencies1()`

```php
getCurrenciesCurrencies1($slug): \PayPlayClient\Model\GetCurrenciesCurrencies1200Response
```

GET /acquiring/{slug}/currencies

### Example

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
$slug = 'slug_example'; // string | unique instance name defined for payment page. can be found on each payment page settings page in CRM.

try {
    $result = $apiInstance->getCurrenciesCurrencies1($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCurrenciesCurrencies1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. can be found on each payment page settings page in CRM. | |

### Return type

[**\PayPlayClient\Model\GetCurrenciesCurrencies1200Response**](../Model/GetCurrenciesCurrencies1200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExchangeRatesCurrencyTicker()`

```php
getExchangeRatesCurrencyTicker($currency_ticker): \PayPlayClient\Model\GetOrderOrderId200Response
```

GET /private-api/exchange-rates/{currencyTicker}

### Example

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
$currency_ticker = 'currency_ticker_example'; // string | The currencyTicker parameter in the URL path

try {
    $result = $apiInstance->getExchangeRatesCurrencyTicker($currency_ticker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExchangeRatesCurrencyTicker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_ticker** | **string**| The currencyTicker parameter in the URL path | |

### Return type

[**\PayPlayClient\Model\GetOrderOrderId200Response**](../Model/GetOrderOrderId200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderOrderId()`

```php
getOrderOrderId($slug, $order_id): \PayPlayClient\Model\GetOrderOrderId200Response
```

GET /private-api/orders/{slug}/{orderId}

### Example

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
$slug = 'slug_example'; // string | unique instance name defined for payment page. can be found on each payment page settings page in CRM.
$order_id = 'order_id_example'; // string | unique identifier of order

try {
    $result = $apiInstance->getOrderOrderId($slug, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrderOrderId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. can be found on each payment page settings page in CRM. | |
| **order_id** | **string**| unique identifier of order | |

### Return type

[**\PayPlayClient\Model\GetOrderOrderId200Response**](../Model/GetOrderOrderId200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderSlug()`

```php
getOrderSlug($slug): \PayPlayClient\Model\GetOrderOrderId200Response
```

GET /private-api/orders/{slug}

### Example

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
$slug = 'slug_example'; // string | unique instance name defined for payment page. can be found on each payment page settings page in CRM.

try {
    $result = $apiInstance->getOrderSlug($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrderSlug: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. can be found on each payment page settings page in CRM. | |

### Return type

[**\PayPlayClient\Model\GetOrderOrderId200Response**](../Model/GetOrderOrderId200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderStatuses()`

```php
getOrderStatuses($transaction_id): \PayPlayClient\Model\GetOrderOrderId200Response
```

GET /private-api/order-statuses

### Example

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
$transaction_id = NULL; // mixed | PayPlay internal transaction id

try {
    $result = $apiInstance->getOrderStatuses($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrderStatuses: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | [**mixed**](../Model/.md)| PayPlay internal transaction id | |

### Return type

[**\PayPlayClient\Model\GetOrderOrderId200Response**](../Model/GetOrderOrderId200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRateRates()`

```php
getRateRates(): \PayPlayClient\Model\GetOrderOrderId200Response
```

GET /rates

### Example

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

try {
    $result = $apiInstance->getRateRates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getRateRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PayPlayClient\Model\GetOrderOrderId200Response**](../Model/GetOrderOrderId200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionTransactionID()`

```php
getTransactionTransactionID($transaction_id): \PayPlayClient\Model\GetOrderOrderId200Response
```

GET /private-api/transactions/{transactionID}

### Example

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
$transaction_id = 'transaction_id_example'; // string | PayPlay internal transaction id

try {
    $result = $apiInstance->getTransactionTransactionID($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTransactionTransactionID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**| PayPlay internal transaction id | |

### Return type

[**\PayPlayClient\Model\GetOrderOrderId200Response**](../Model/GetOrderOrderId200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionTransactions()`

```php
getTransactionTransactions(): \PayPlayClient\Model\GetOrderOrderId200Response
```

GET /private-api/transactions

### Example

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

try {
    $result = $apiInstance->getTransactionTransactions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTransactionTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PayPlayClient\Model\GetOrderOrderId200Response**](../Model/GetOrderOrderId200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWithdrawalFees()`

```php
getWithdrawalFees(): \PayPlayClient\Model\CreateWithdrawal200Response
```

GET /private-api/withdrawals/fees

### Example

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

try {
    $result = $apiInstance->getWithdrawalFees();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getWithdrawalFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PayPlayClient\Model\CreateWithdrawal200Response**](../Model/CreateWithdrawal200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshConvertWithdrawal()`

```php
refreshConvertWithdrawal($transaction_id): \PayPlayClient\Model\GetCurrenciesCurrencies200Response
```

POST /private-api/convert-withdrawal/{transactionID}/refresh

### Example

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
    $result = $apiInstance->refreshConvertWithdrawal($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->refreshConvertWithdrawal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**| PayPlay transaction id | |

### Return type

[**\PayPlayClient\Model\GetCurrenciesCurrencies200Response**](../Model/GetCurrenciesCurrencies200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
