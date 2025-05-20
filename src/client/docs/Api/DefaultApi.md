# PayPlayClient\DefaultApi

All URIs are relative to https://api.payplay.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**confirmConvertWithdrawal()**](DefaultApi.md#confirmConvertWithdrawal) | **POST** /private-api/convert-withdrawal/{transactionID}/confirm | POST /private-api/convert-withdrawal/{transactionID}/confirm |
| [**createBalances()**](DefaultApi.md#createBalances) | **POST** /private-api/balances/{balanceID} | POST /private-api/balances/{balanceID} |
| [**createConvertWithdrawal()**](DefaultApi.md#createConvertWithdrawal) | **POST** /private-api/convert-withdrawal | POST /private-api/convert-withdrawal |
| [**createCryptoOrders()**](DefaultApi.md#createCryptoOrders) | **POST** /private-api/crypto-orders/{slug} | POST /private-api/crypto-orders/{slug} |
| [**createCryptoOrdersComplete()**](DefaultApi.md#createCryptoOrdersComplete) | **POST** /private-api/crypto-orders/{slug}/{orderID}/complete | POST /private-api/crypto-orders/{slug}/{orderID}/complete |
| [**createCryptoTopups()**](DefaultApi.md#createCryptoTopups) | **POST** /private-api/crypto-topups/{slug} | POST /private-api/crypto-topups/{slug} |
| [**createMassPayout()**](DefaultApi.md#createMassPayout) | **POST** /mass-payouts | POST /mass-payouts |
| [**createRefundsOrders()**](DefaultApi.md#createRefundsOrders) | **POST** /private-api/refunds/orders/{orderID} | POST /private-api/refunds/orders/{orderID} |
| [**createWithdrawal()**](DefaultApi.md#createWithdrawal) | **POST** /private-api/{slug}/withdrawal | POST /private-api/{slug}/withdrawal |
| [**getAcquiringCurrencies()**](DefaultApi.md#getAcquiringCurrencies) | **GET** /acquiring/{slug}/currencies | GET /acquiring/{slug}/currencies |
| [**getAcquiringOrder()**](DefaultApi.md#getAcquiringOrder) | **GET** /acquiring/{slug}/order/{orderID} | GET /acquiring/{slug}/order/{orderID} |
| [**getBalance()**](DefaultApi.md#getBalance) | **GET** /private-api/balances/{balanceID} | GET /private-api/balances/{balanceID} |
| [**getBalances()**](DefaultApi.md#getBalances) | **GET** /private-api/balances/ | GET /private-api/balances/ |
| [**getConvertWithdrawalCurrencies()**](DefaultApi.md#getConvertWithdrawalCurrencies) | **GET** /private-api/convert-withdrawal/currencies | GET /private-api/convert-withdrawal/currencies |
| [**getCryptoOrder()**](DefaultApi.md#getCryptoOrder) | **GET** /private-api/crypto-orders/{slug} | GET /private-api/crypto-orders/{slug} |
| [**getCryptoOrders()**](DefaultApi.md#getCryptoOrders) | **GET** /private-api/crypto-orders/{slug}/{orderID} | GET /private-api/crypto-orders/{slug}/{orderID} |
| [**getCurrencyCryptoOrderTargetCurrencies()**](DefaultApi.md#getCurrencyCryptoOrderTargetCurrencies) | **GET** /currencies/crypto-order-target-currencies | GET /currencies/crypto-order-target-currencies |
| [**getCurrencyCryptoTopupTargetCurrencies()**](DefaultApi.md#getCurrencyCryptoTopupTargetCurrencies) | **GET** /private-api/currencies/crypto-topup-target-currencies | GET /private-api/currencies/crypto-topup-target-currencies |
| [**getExchangeRate()**](DefaultApi.md#getExchangeRate) | **GET** /private-api/exchange-rates/{currencyTicker} | GET /private-api/exchange-rates/{currencyTicker} |
| [**getOrder()**](DefaultApi.md#getOrder) | **GET** /private-api/orders/{slug} | GET /private-api/orders/{slug} |
| [**getOrderStatuses()**](DefaultApi.md#getOrderStatuses) | **GET** /private-api/order-statuses | GET /private-api/order-statuses |
| [**getOrders()**](DefaultApi.md#getOrders) | **GET** /private-api/orders/{slug}/{orderId} | GET /private-api/orders/{slug}/{orderId} |
| [**getRates()**](DefaultApi.md#getRates) | **GET** /rates | GET /rates |
| [**getTransaction()**](DefaultApi.md#getTransaction) | **GET** /private-api/transactions/{transactionID} | GET /private-api/transactions/{transactionID} |
| [**getTransactions()**](DefaultApi.md#getTransactions) | **GET** /private-api/transactions | GET /private-api/transactions |
| [**getWithdrawalFees()**](DefaultApi.md#getWithdrawalFees) | **GET** /private-api/withdrawals/fees | GET /private-api/withdrawals/fees |
| [**instantConvertWithdrawal()**](DefaultApi.md#instantConvertWithdrawal) | **POST** /private-api/convert-withdrawal/instant | POST /private-api/convert-withdrawal/instant |
| [**payAcquiring()**](DefaultApi.md#payAcquiring) | **POST** /acquiring/{slug}/pay | POST /acquiring/{slug}/pay |
| [**refreshConvertWithdrawal()**](DefaultApi.md#refreshConvertWithdrawal) | **POST** /private-api/convert-withdrawal/{transactionID}/refresh | POST /private-api/convert-withdrawal/{transactionID}/refresh |


## `confirmConvertWithdrawal()`

```php
confirmConvertWithdrawal($transaction_id): \PayPlayClient\Model\GetConvertWithdrawalCurrencies200Response
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

[**\PayPlayClient\Model\GetConvertWithdrawalCurrencies200Response**](../Model/GetConvertWithdrawalCurrencies200Response.md)

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
createBalances($balance_id): \PayPlayClient\Model\GetBalances200Response
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

[**\PayPlayClient\Model\GetBalances200Response**](../Model/GetBalances200Response.md)

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
createConvertWithdrawal($currency, $amount, $target_currency, $address, $network, $memo, $external_id): \PayPlayClient\Model\GetConvertWithdrawalCurrencies200Response
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

[**\PayPlayClient\Model\GetConvertWithdrawalCurrencies200Response**](../Model/GetConvertWithdrawalCurrencies200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCryptoOrders()`

```php
createCryptoOrders($slug): \PayPlayClient\Model\GetCryptoOrder200Response
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
    $result = $apiInstance->createCryptoOrders($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCryptoOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. can be found on each payment page settings page in CRM. | |

### Return type

[**\PayPlayClient\Model\GetCryptoOrder200Response**](../Model/GetCryptoOrder200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCryptoOrdersComplete()`

```php
createCryptoOrdersComplete($slug, $order_id): \PayPlayClient\Model\GetCryptoOrder200Response
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
    $result = $apiInstance->createCryptoOrdersComplete($slug, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCryptoOrdersComplete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. Can be found on each payment page settings page in CRM. | |
| **order_id** | **string**| PayPlay internal order identifier | |

### Return type

[**\PayPlayClient\Model\GetCryptoOrder200Response**](../Model/GetCryptoOrder200Response.md)

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
createCryptoTopups($slug): \PayPlayClient\Model\GetCryptoOrder200Response
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

[**\PayPlayClient\Model\GetCryptoOrder200Response**](../Model/GetCryptoOrder200Response.md)

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

## `createRefundsOrders()`

```php
createRefundsOrders($order_id): \PayPlayClient\Model\CreateRefundsOrders200Response
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
    $result = $apiInstance->createRefundsOrders($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createRefundsOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| PayPlay order id | |

### Return type

[**\PayPlayClient\Model\CreateRefundsOrders200Response**](../Model/CreateRefundsOrders200Response.md)

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

## `getAcquiringCurrencies()`

```php
getAcquiringCurrencies($slug): \PayPlayClient\Model\GetAcquiringCurrencies200Response
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
    $result = $apiInstance->getAcquiringCurrencies($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAcquiringCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. can be found on each payment page settings page in CRM. | |

### Return type

[**\PayPlayClient\Model\GetAcquiringCurrencies200Response**](../Model/GetAcquiringCurrencies200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAcquiringOrder()`

```php
getAcquiringOrder($slug, $order_id): \PayPlayClient\Model\GetAcquiringCurrencies200Response
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
    $result = $apiInstance->getAcquiringOrder($slug, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAcquiringOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. can be found on each payment page settings page in CRM. | |
| **order_id** | **string**| PayPlay internal order id | |

### Return type

[**\PayPlayClient\Model\GetAcquiringCurrencies200Response**](../Model/GetAcquiringCurrencies200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBalance()`

```php
getBalance($balance_id): \PayPlayClient\Model\GetBalances200Response
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
    $result = $apiInstance->getBalance($balance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **balance_id** | **string**| balance id in specified balance currency | |

### Return type

[**\PayPlayClient\Model\GetBalances200Response**](../Model/GetBalances200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBalances()`

```php
getBalances($balance_id): \PayPlayClient\Model\GetBalances200Response
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
    $result = $apiInstance->getBalances($balance_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **balance_id** | [**mixed**](../Model/.md)| balance id in specified balance currency | |

### Return type

[**\PayPlayClient\Model\GetBalances200Response**](../Model/GetBalances200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConvertWithdrawalCurrencies()`

```php
getConvertWithdrawalCurrencies($currency, $amount, $target_currency, $address, $network, $memo, $external_id): \PayPlayClient\Model\GetConvertWithdrawalCurrencies200Response
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
    $result = $apiInstance->getConvertWithdrawalCurrencies($currency, $amount, $target_currency, $address, $network, $memo, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getConvertWithdrawalCurrencies: ', $e->getMessage(), PHP_EOL;
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

[**\PayPlayClient\Model\GetConvertWithdrawalCurrencies200Response**](../Model/GetConvertWithdrawalCurrencies200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCryptoOrder()`

```php
getCryptoOrder($slug): \PayPlayClient\Model\GetCryptoOrder200Response
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
    $result = $apiInstance->getCryptoOrder($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCryptoOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. Can be found on each payment page settings page in CRM. | |

### Return type

[**\PayPlayClient\Model\GetCryptoOrder200Response**](../Model/GetCryptoOrder200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCryptoOrders()`

```php
getCryptoOrders($slug, $order_id): \PayPlayClient\Model\GetCryptoOrder200Response
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
    $result = $apiInstance->getCryptoOrders($slug, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCryptoOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. Can be found on each payment page settings page in CRM. | |
| **order_id** | **string**| unique identifier of order | |

### Return type

[**\PayPlayClient\Model\GetCryptoOrder200Response**](../Model/GetCryptoOrder200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrencyCryptoOrderTargetCurrencies()`

```php
getCurrencyCryptoOrderTargetCurrencies($slug, $order_id): \PayPlayClient\Model\GetCryptoOrder200Response
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
    $result = $apiInstance->getCurrencyCryptoOrderTargetCurrencies($slug, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCurrencyCryptoOrderTargetCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | [**mixed**](../Model/.md)| unique instance name defined for payment page. Can be found on each payment page settings page in CRM. | |
| **order_id** | [**mixed**](../Model/.md)| PayPlay internal order identifier | |

### Return type

[**\PayPlayClient\Model\GetCryptoOrder200Response**](../Model/GetCryptoOrder200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrencyCryptoTopupTargetCurrencies()`

```php
getCurrencyCryptoTopupTargetCurrencies(): \PayPlayClient\Model\GetCryptoOrder200Response
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
    $result = $apiInstance->getCurrencyCryptoTopupTargetCurrencies();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCurrencyCryptoTopupTargetCurrencies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PayPlayClient\Model\GetCryptoOrder200Response**](../Model/GetCryptoOrder200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExchangeRate()`

```php
getExchangeRate($currency_ticker): \PayPlayClient\Model\GetOrders200Response
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
    $result = $apiInstance->getExchangeRate($currency_ticker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getExchangeRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency_ticker** | **string**| The currencyTicker parameter in the URL path | |

### Return type

[**\PayPlayClient\Model\GetOrders200Response**](../Model/GetOrders200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($slug): \PayPlayClient\Model\GetOrders200Response
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
    $result = $apiInstance->getOrder($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. can be found on each payment page settings page in CRM. | |

### Return type

[**\PayPlayClient\Model\GetOrders200Response**](../Model/GetOrders200Response.md)

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
getOrderStatuses($transaction_id): \PayPlayClient\Model\GetOrders200Response
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

[**\PayPlayClient\Model\GetOrders200Response**](../Model/GetOrders200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($slug, $order_id): \PayPlayClient\Model\GetOrders200Response
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
    $result = $apiInstance->getOrders($slug, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. can be found on each payment page settings page in CRM. | |
| **order_id** | **string**| unique identifier of order | |

### Return type

[**\PayPlayClient\Model\GetOrders200Response**](../Model/GetOrders200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRates()`

```php
getRates(): \PayPlayClient\Model\GetOrders200Response
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
    $result = $apiInstance->getRates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PayPlayClient\Model\GetOrders200Response**](../Model/GetOrders200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransaction()`

```php
getTransaction($transaction_id): \PayPlayClient\Model\GetOrders200Response
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
    $result = $apiInstance->getTransaction($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**| PayPlay internal transaction id | |

### Return type

[**\PayPlayClient\Model\GetOrders200Response**](../Model/GetOrders200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactions()`

```php
getTransactions(): \PayPlayClient\Model\GetOrders200Response
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
    $result = $apiInstance->getTransactions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\PayPlayClient\Model\GetOrders200Response**](../Model/GetOrders200Response.md)

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

## `instantConvertWithdrawal()`

```php
instantConvertWithdrawal($currency, $amount, $target_currency, $address, $network, $memo, $external_id): \PayPlayClient\Model\GetConvertWithdrawalCurrencies200Response
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
    $result = $apiInstance->instantConvertWithdrawal($currency, $amount, $target_currency, $address, $network, $memo, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->instantConvertWithdrawal: ', $e->getMessage(), PHP_EOL;
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

[**\PayPlayClient\Model\GetConvertWithdrawalCurrencies200Response**](../Model/GetConvertWithdrawalCurrencies200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payAcquiring()`

```php
payAcquiring($slug): \PayPlayClient\Model\GetAcquiringCurrencies200Response
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
    $result = $apiInstance->payAcquiring($slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->payAcquiring: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **slug** | **string**| unique instance name defined for payment page. can be found on each payment page settings page in CRM. | |

### Return type

[**\PayPlayClient\Model\GetAcquiringCurrencies200Response**](../Model/GetAcquiringCurrencies200Response.md)

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
refreshConvertWithdrawal($transaction_id): \PayPlayClient\Model\GetConvertWithdrawalCurrencies200Response
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

[**\PayPlayClient\Model\GetConvertWithdrawalCurrencies200Response**](../Model/GetConvertWithdrawalCurrencies200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
