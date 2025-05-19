Below is a "state of the art (2025)" snapshot of the most widely-used approaches for turning an **`openapi.yaml`** file into a set of typed PHP classes (models + client wrappers), together with concrete CLI snippets and integration advice.

---

### 1. Battle-tested open-source CLIs

| Generator | What it gives you | Command |
|-----------|------------------|---------|
| **OpenAPI Generator** | PSR-4-namespaced models, PSR-18 client, optional Laravel/PSR-15 servers. Actively maintained; PHP templates recently bumped to **PHP ≥ 8.1**. | `openapi-generator-cli generate -i openapi.yaml -g php -o generated-client --additional-properties="composerPackageName=acme/sdk,phpVersion=8.2"` |
| **Jane OpenAPI** | Very lean, serializer-first client that plays nicely with Symfony, HTTPlug & Psalm. Lets you point to a **php-cs-fixer** config so the generated code follows your house style. | `vendor/bin/jane-openapi generate openapi.yaml src/Client --namespace="Acme\\Api" --client-name=AcmeClient` |
| **Swagger Codegen v3** | The predecessor to OpenAPI Generator; still useful when you rely on its template set. | `swagger-codegen generate -i openapi.yaml -l php -o client` |

**Example usage for OpenAPI Generator:**
```bash
openapi-generator-cli generate \
  -i openapi.yaml -g php \
  -o generated-client \
  --additional-properties="composerPackageName=acme/sdk,phpVersion=8.2"
```

**Example usage for Jane OpenAPI:**
```bash
vendor/bin/jane-openapi generate openapi.yaml src/Client \
  --namespace="Acme\\Api" --client-name=AcmeClient
```

**When to choose one of these:**  
*You own the build, want everything local, and prefer 100% FOSS tooling that can be wired into CI/CD.*

---

### 2. Modern hosted / hybrid SDK generators

These services accept an OpenAPI spec (often via GitHub Action or CLI) and return a ready-to-publish Composer package. They emphasise *ergonomics*—pagination helpers, retries, typed errors, etc.—over total template control.

| Service | Highlights | Getting started |
|---------|------------|-----------------|
| **Speakeasy** | Generates opinionated, fluent SDKs with automatic pagination & retry logic and a `speakeasy validate / generate` workflow. | Install via `brew install speakeasy-api/homebrew-tap/speakeasy` |
| **liblab** | Focus on "framework-native" PHP (Laravel-friendly), customisable auth flows, and a managed **docs+package** pipeline. | Cloud portal or `liblab generate --lang php` |
| **Fern** | Open-source CLI that runs locally *or* in the cloud, producing multi-language SDKs and a docs website from a single config. | Install via `curl -sSL https://sh.fern.build | bash` |

**Example usage for Speakeasy:**
```bash
brew install speakeasy-api/homebrew-tap/speakeasy
speakeasy validate openapi.yaml
speakeasy generate --lang php --out sdk-php
```

**Example usage for Fern:**
```bash
curl -sSL https://sh.fern.build | bash
fern init && fern generate --language php
```

**When to choose one of these:**  
*You want a polished developer experience quickly and don't mind a SaaS component (often free for OSS).*

---

### 3. Selection guidelines

1. **PHP version & coding standards**
   - OpenAPI Generator now targets **PHP 8.1+**—make sure your runtime matches.
   - Jane lets you inject your own `php-cs-fixer` or `ecs` config so the generated code ships already formatted.

2. **HTTP layer**
   - Prefer generators that emit PSR-18 clients so you can swap Guzzle, Symfony HttpClient, etc. at runtime.

3. **Customising the output**
   - With FOSS CLIs you tweak JSON config or override mustache/twig templates.
   - Hosted tools expose flags (Speakeasy) or YAML config (Fern, liblab) for naming, auth, and error-handling conventions.

4. **CI/CD integration**
   - Commit `openapi.yaml` to the repo.
   - Add a **GitHub Action** (or GitLab CI job) that regenerates the client on spec changes and runs `phpstan/php-cs-fixer`.
   - Option A: commit generated code.
   - Option B: publish to a private Packagist/L satis repository and require it like any other dependency.

5. **Testing & static analysis**
   - Even generated code benefits from contract tests—spin up a mock server (Prism, WireMock) in CI and hit the SDK.
   - Run **Psalm or PHPStan** at level 8–9; modern generators emit a complete `phpdoc` type surface.

---

### 4. Quick "good default" recipe

If you just need something straightforward, minimal footprint, and framework-agnostic:

```bash
# 1. Install generator once
npm i -g @openapitools/openapi-generator-cli

# 2. Generate and re-generate on demand
openapi-generator-cli generate \
  -i openapi.yaml \
  -g php \
  -o src/AcmeSdk \
  --additional-properties="invokerPackage=Acme\\Sdk,composerPackageName=acme/sdk,phpVersion=8.2,enumUnknownDefaultCase=true"

# 3. Wire into composer.json
{
  "scripts": {
    "sdk:regen": "openapi-generator-cli generate -i openapi.yaml -g php -o src/AcmeSdk --skip-validate-spec"
  }
}
```

Add `composer sdk:regen` to your CI so the SDK never drifts from the spec.

---

## TL;DR

- **Start with OpenAPI Generator** for local, fully open-source builds.
- **Switch to Jane** if you're deep in Symfony or need ultra-lightweight clients.
- **Evaluate Speakeasy / liblab / Fern** when you want best-in-class DX, pagination helpers, and automatic docs without maintaining template forks.

Whichever route you pick, keep the spec authoritative, run generation in CI, and treat the resulting PHP classes as *generated code*—commit or package them, but never edit by hand.