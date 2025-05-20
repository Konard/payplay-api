# PayPlay API

> ⚠️ **Disclaimer**: This is an unofficial, community-maintained repository. It is not officially supported by PayPlay. For official API support, please contact PayPlay directly at support@payplay.io.

## Overview

This repository contains the OpenAPI specification and generated PHP client for the PayPlay API. The API provides endpoints for managing cryptocurrency transactions, balances, orders, and more.

## Quick Start

### Installation

1. Install the client library using Composer:
```bash
composer require payplay/client
```

2. Configure and use the client:
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use PayPlay\Client\Api\DefaultApi;
use PayPlay\Client\Configuration;

// Configure API client
$config = Configuration::getDefaultConfiguration()
    ->setHost('https://api.payplay.io')
    ->setApiKey('Authorization', 'your-api-key-here');

// Create API instance
$api = new DefaultApi(null, $config);

try {
    // Get balances
    $result = $api->getBalances();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBalances: ', $e->getMessage(), PHP_EOL;
}
```

## Using the Client

### Available Endpoints

The client provides access to all API endpoints through the `DefaultApi` class. Here are some common operations:

#### Balances
- `getBalances()` - Get all balances
- `getBalance($balanceID)` - Get balance by ID
- `createBalances($balanceID)` - Create a new balance

#### Orders
- `getOrder($slug)` - Get orders for a merchant
- `getOrders($slug, $orderId)` - Get order details
- `createCryptoOrders($slug)` - Create a new crypto order
- `getCryptoOrder($slug)` - Get crypto orders for a merchant
- `getCryptoOrders($slug, $orderID)` - Get crypto order details
- `createCryptoOrdersComplete($slug, $orderID)` - Complete a crypto order

#### Transactions
- `getTransactions()` - List all transactions
- `getTransaction($transactionID)` - Get transaction details

#### Withdrawals
- `createWithdrawal($slug, $body)` - Create a withdrawal
- `getWithdrawalFees()` - Get withdrawal fees
- `createConvertWithdrawal($currency, $amount, $targetCurrency, $address, $network, $memo, $externalId)` - Create a conversion withdrawal
- `confirmConvertWithdrawal($transactionID)` - Confirm a conversion withdrawal
- `refreshConvertWithdrawal($transactionID)` - Refresh a conversion withdrawal
- `instantConvertWithdrawal()` - Create an instant conversion withdrawal

#### Mass Payouts
- `createMassPayout()` - Create a mass payout

#### Acquiring
- `getAcquiringCurrencies($slug)` - Get available currencies for acquiring
- `getAcquiringOrder($slug, $orderID)` - Get acquiring order details
- `payAcquiring($slug, $body)` - Process an acquiring payment

#### Currencies and Rates
- `getRates()` - Get current exchange rates
- `getExchangeRate($currencyTicker)` - Get exchange rate for a specific currency
- `getCurrencyCryptoOrderTargetCurrencies()` - Get available target currencies for crypto orders
- `getCurrencyCryptoTopupTargetCurrencies()` - Get available target currencies for crypto topups

For a complete list of available endpoints and their parameters, see the [API Documentation](src/client/docs/Api/DefaultApi.md).

### Models

The client includes strongly-typed model classes for all request and response objects. These are located in the `PayPlay\Client\Model` namespace. For example:

```php
use PayPlay\Client\Model\GetBalances200Response;
use PayPlay\Client\Model\GetBalances200ResponseBalancesInner;

// Create a new balance request
$balance = new GetBalances200ResponseBalancesInner();
$balance->setCurrency('USDT');
$balance->setAmount('100.00');
```

For detailed model documentation, see the [Model Documentation](src/client/docs/Model/).

### Error Handling

The client throws exceptions for API errors:

```php
try {
    $result = $api->getBalances();
} catch (\PayPlay\Client\ApiException $e) {
    // Handle API errors (e.g., 400, 401, 403, 404, etc.)
    echo "API Error: " . $e->getMessage() . "\n";
    echo "Response Body: " . $e->getResponseBody() . "\n";
} catch (Exception $e) {
    // Handle other errors
    echo "Error: " . $e->getMessage() . "\n";
}
```

### Authentication

The client supports Bearer token authentication. Set your API key in the configuration:

```php
$config = Configuration::getDefaultConfiguration()
    ->setApiKey('Authorization', 'Bearer your-token-here');
```

## Documentation

- [API Documentation](src/client/docs/Api/DefaultApi.md) - Complete API endpoint documentation
- [Model Documentation](src/client/docs/Model/) - Documentation for all model classes
- [Examples](examples/php/) - Example code for common operations

## Support

This is an unofficial repository. For official API support, please contact PayPlay directly at support@payplay.io.

For issues with this client library or suggestions for improvements, please create an issue in this repository.

---

## For Developers

This section contains information for developers who want to contribute to or modify the client library.

### Directory Structure
```
payplay-api/
├── docs/                    # API documentation in markdown format
├── examples/               # Example code for using the API
│   └── php/               # PHP examples
│       └── static-wallets/
│           └── currencies/
├── generator/             # OpenAPI schema generator
├── src/                   # Generated client code
│   └── client/           # PHP client library
│       ├── docs/         # Generated API documentation
│       ├── lib/          # Core library files
│       └── test/         # Unit tests
└── openapi.yaml          # OpenAPI specification
```

### Naming Conventions

#### Operation IDs
The API uses consistent operation ID generation rules:
- Operation IDs are generated from HTTP method and path segments
- Words are deduplicated (case-insensitive)
- Resource names are singularized/pluralized appropriately
- Common prefixes like 'api', 'private', 'public' are removed
- Parameter segments are handled consistently
- Examples:
  - `POST /private-api/{slug}/withdrawal` → `createWithdrawal`
  - `GET /private-api/withdrawals/fees` → `getWithdrawalFees`
  - `POST /mass-payouts` → `createMassPayouts`

#### Files and Directories
- Use hyphens (`-`) as separators in file and directory names
- Example: `static-wallets`, `get-currencies`, `api-client.php`

#### Examples
- ✅ `static-wallets-get-currencies.php`
- ✅ `api-client-example.php`
- ❌ `static_wallets_get_currencies.php` (uses underscores)
- ❌ `staticWalletsGetCurrencies.php` (uses camelCase)

### Development Setup

#### Prerequisites

1. PHP 8.2 or later
2. Composer (PHP package manager)
3. Node.js (for running the OpenAPI schema generator)
4. OpenAPI Generator CLI

#### Installation

1. Install OpenAPI Generator CLI:
```bash
npm install @openapitools/openapi-generator-cli -g
```

2. Install development dependencies:
```bash
composer install
```

### Generating the Schema

The OpenAPI schema is generated from markdown documentation files:

```bash
node generator/generate-openapi.mjs
```

This will:
1. Parse all markdown files in the `docs/` directory
2. Generate operation IDs using the defined rules
3. Create a complete OpenAPI schema in `openapi.yaml`
4. Include all endpoints, models, and security schemes

### Generating the Client

To generate the PHP client classes, run:

```bash
openapi-generator-cli generate \
  -i openapi.yaml \
  -g php \
  -o src/client \
  --additional-properties="invokerPackage=PayPlay\\Client,composerPackageName=payplay/client,phpVersion=8.2,enumUnknownDefaultCase=true"
```

### Regenerating the Client

To regenerate the client after updating the OpenAPI specification:

```bash
openapi-generator-cli generate \
  -i openapi.yaml \
  -g php \
  -o src/client \
  --additional-properties="invokerPackage=PayPlay\\Client,composerPackageName=payplay/client,phpVersion=8.2,enumUnknownDefaultCase=true" \
  --skip-validate-spec
```

### Development Tools

#### Running Tests

```bash
cd src/client
composer test
```

#### Code Style

The generated code follows PSR-12 standards. You can format the code using PHP CS Fixer:

```bash
cd src/client
composer cs-fix
```

### Recent Updates

- Updated operation ID generation rules for better consistency
- Added deduplication of words in operation IDs
- Improved handling of resource names (singular/plural)
- Enhanced path normalization
- Added support for mass payout operations
- Updated model classes for all endpoints
- Added comprehensive test coverage for new models
