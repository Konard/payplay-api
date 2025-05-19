# PayPlay Static Wallets API — Get Currencies (Proof of Concept)

## Endpoint
`GET /acquiring/{slug}/currencies`

## Environment Variables
- `PAYPLAY_API_KEY`: Your PayPlay API key (public token)
- `PAYPLAY_SLUG`: Your static wallets slug (from your PayPlay CRM payment page settings)

## How to Run
```sh
cd payplay-api/examples/php/static-wallets/currencies
# Build the Docker image (only needed once or after changes)
docker build -t payplay-get-currencies-poc .
# Run the test (uses defaults if env vars are not set)
docker run --rm payplay-get-currencies-poc
# Or explicitly set env vars:
docker run --rm -e PAYPLAY_API_KEY='your_api_key_here' -e PAYPLAY_SLUG='your_slug_here' payplay-get-currencies-poc
```

## Expected Output
- The script prints a list of available currencies for the given slug, including their IDs, tickers, networks, and limits.
- Example output (truncated):

```
Getting available currencies for slug: your_slug_here
Currencies response:
Array
(
    [0] => Array
        (
            [id] => ...
            [ticker] => ...
            [networks] => Array ...
        )
    ...
)
```

## Notes
- Do not commit real credentials to this file or this directory.
- If you see `[message] => Page not found`, check that the API key and slug are correct and active in PayPlay CRM. 