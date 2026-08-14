# Changelog

All notable changes to this project will be documented in this file.

We mostly adhere to [Keep a Changelog 1.1.0](https://keepachangelog.com/en/1.0.0/)
but use the following change types: "Added", "Changed", "Fixed" & "Dependencies Updated".

This project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased](https://github.com/orca-services/cakephp-swagger-ui/commits/main/)

### Added

### Changed

### Fixed

### Dependencies Updated

- cakephp/cakephp updated from 5.3.6 to 5.4.1 minor
- cakephp/cakephp-codesniffer updated from 5.3.0 to 5.3.1 patch
- phpunit/phpunit updated from 10.5.63 to 10.5.64 patch

## [2.0.0](https://github.com/orca-services/cakephp-swagger-ui/releases/tag/2.0.0) - 2026-06-30

### Changed

- Upgraded Swagger UI to 5.32.8 [#23](https://github.com/orca-services/cakephp-swagger-ui/issues/23)
- Bump support for CakePHP to 5.x [#23](https://github.com/orca-services/cakephp-swagger-ui/issues/23)
- Update the minimum required PHP Version to PHP
  8.2 [#23](https://github.com/orca-services/cakephp-swagger-ui/issues/23)

### Dependencies Updated

- cakephp/cakephp updated from 4.6.3 to 5.3.6 major [#23](https://github.com/orca-services/cakephp-swagger-ui/issues/23)
- cakephp/cakephp-codesniffer updated from 4.7.1 to 5.3.0 major [#23](https://github.com/orca-services/cakephp-swagger-ui/issues/23)
- phpunit/phpunit updated from 9.6.34 to 10.5.63 major [#23](https://github.com/orca-services/cakephp-swagger-ui/issues/23)

## [1.0.6](https://github.com/orca-services/cakephp-swagger-ui/releases/tag/1.0.6) - 2026-06-24

### Changed

- Improved overall documentation
- Exclude repository-only files from archives to reduce Composer distribution package
  size [#21](https://github.com/orca-services/cakephp-swagger-ui/issues/21)

### Dependencies Updated

- cakephp/cakephp-codesniffer updated from 3.3.0 to 4.7.1 major

## [1.0.5](https://github.com/orca-services/cakephp-swagger-ui/releases/tag/1.0.5) - 2026-02-11

### Changed

- Improved SwaggerUiTrait doc blocks

### Fixed

- Fix CVE-2026-24765 by updating PHPUnit
- Fix CVE-2026-23643 by updating CakePHP

### Dependencies Updated

- cakephp/cakephp updated from 4.5.0 to 4.6.3 minor
- phpunit/phpunit updated from 9.6.13 to 9.6.34 patch

## [1.0.4](https://github.com/orca-services/cakephp-swagger-ui/releases/tag/1.0.4) - 2025-10-27

### Added

- Added PHPUnit as dev dependency

### Changed

- Upgraded Swagger UI to 5.29.4 #15

### Dependencies Updated

- phpunit/phpunit installed in version 9.6.13
- laminas/laminas-zendframework-bridge removed (installed version was 1.4.1)
- psr/http-message updated from 1.0.1 to 1.1 minor
- psr/http-server-handler updated from 1.0.1 to 1.0.2 patch
- psr/http-server-middleware updated from 1.0.1 to 1.0.2 patch
- psr/http-client updated from 1.0.1 to 1.0.3 patch
- psr/container updated from 2.0.1 to 2.0.2 patch
- psr/http-factory updated from 1.0.1 to 1.0.2 patch
- laminas/laminas-diactoros updated from 2.14.0 to 2.17.0 minor
- laminas/laminas-httphandlerrunner updated from 1.5.0 to 2.2.0 major
- composer/ca-bundle updated from 1.3.5 to 1.3.7 patch
- cakephp/chronos updated from 2.3.2 to 2.4.3 minor
- cakephp/cakephp updated from 4.3.11 to 4.5.0 minor
- squizlabs/php_codesniffer updated from 3.7.1 to 3.7.2 patch
- symfony/polyfill-ctype updated from v1.27.0 to v1.28.0 minor
- symfony/yaml updated from v5.4.19 to v5.4.30 patch
- SwaggerUI upgraded from v5.17.14 to v5.29.4 minor #15

## [1.0.3](https://github.com/orca-services/cakephp-swagger-ui/releases/tag/1.0.3) - 2023-3-6

- Disable auto layout in template

## [1.0.2](https://github.com/orca-services/cakephp-swagger-ui/releases/tag/1.0.2) - 2023-02-10

### Fixed

- Required missing symfony/yaml dependency

### Dependencies Updated

- symfony/yaml installed in version v5.4.19

## [1.0.1](https://github.com/orca-services/cakephp-swagger-ui/releases/tag/1.0.1) - 2023-01-30

### Changed

- Correct minimum CakePHP requirement

## [1.0.0](https://github.com/orca-services/cakephp-swagger-ui/releases/tag/1.0.0) - 2023-01-30

### Changed

- Upgrade PHP version 7.1.x
- Upgrade PHP version 7.2.x
- Upgrade CakePHP version to 4.0.x

## [0.2.0](https://github.com/orca-services/cakephp-swagger-ui/releases/tag/0.2.0) - 2022-01-31

### Added

- Added CakePHP codesniffer as dev dependency
- Added cs-check & cs-fix composer scripts
- Added PhpStorm configuration
- Added documentation on how to update the Swagger UI code

### Changed

- Upgraded Swagger UI to v4.4.0

### Dependencies Updated

- squizlabs/php_codesniffer added in version 3.5.6
- cakephp/cakephp-codesniffer added in version 3.3.0
- psr/log updated from 1.1.3 to 1.1.4 patch
- laminas/laminas-zendframework-bridge updated from 1.1.1 to 1.4.1 minor
- aura/intl updated from 3.0.0 to 3.0.1 patch
- cakephp/cakephp updated from 3.9.3 to 3.10.2 minor
- squizlabs/php_codesniffer updated from 3.5.6 to 3.6.2 minor

## [0.1.0](https://github.com/orca-services/cakephp-swagger-ui/releases/tag/0.1.0) - 2020-10-21

### Added

- Added plugin in initial working state
