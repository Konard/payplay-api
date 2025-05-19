<?php
// Proof-of-concept: Get a list of available currencies for a payment page (PayPlay Static Wallets API)
// Requires API key and slug to be set via environment variables
$apiKey = getenv('PAYPLAY_API_KEY');
$slug = getenv('PAYPLAY_SLUG');
$baseUrl = 'https://api.payplay.io';

if (!$apiKey || !$slug) {
    fwrite(STDERR, "Error: PAYPLAY_API_KEY and PAYPLAY_SLUG environment variables must be set.\n");
    exit(1);
}

function apiRequest($url, $apiKey) {
    $headers = [
        "Content-Type: application/json",
        // If API key is required as a header, uncomment the next line:
        // "X-PAYPLAY-KEY: $apiKey",
    ];
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER     => $headers,
    ]);
    $response = curl_exec($ch);
    if ($response === false) {
        echo "cURL error: " . curl_error($ch) . PHP_EOL;
        curl_close($ch);
        return null;
    }
    curl_close($ch);
    return json_decode($response, true);
}

// Get a list of available currencies
echo "Getting available currencies for slug: $slug\n";
$currenciesUrl = "$baseUrl/acquiring/$slug/currencies";
$currencies = apiRequest($currenciesUrl, $apiKey);
echo "Currencies response:\n";
print_r($currencies); 