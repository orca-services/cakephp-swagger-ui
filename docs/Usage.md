# Usage

This plugin provides a trait that exposes two actions for serving Swagger UI and the underlying OpenAPI specification file.

## Configure your API specifications

Register one or more OpenAPI specification files in your app configuration (typically `config/app.php` or a dedicated config file loaded via `Configure::load()`):

```php
'SwaggerUi' => [
    'apis' => [
        'users' => [
            'file' => CONFIG . 'openapi' . DS . 'users.yaml',
        ],
        'products' => [
            'file' => CONFIG . 'openapi' . DS . 'products.yaml',
        ],
    ],
],
```

Each entry under `apis` is keyed by an **API** name that you'll reference when calling the actions. The `file` key must point to a **readable YAML file** containing **your OpenAPI specification**.

## Add the trait to a controller

Create (or reuse) a controller and pull in `SwaggerUiTrait`:

```php
<?php
namespace App\Controller;

use SwaggerUi\Controller\SwaggerUiTrait;

class DocsController extends AppController
{
    use SwaggerUiTrait;
}
```

The trait adds two actions to the controller:

- `swaggerUi($apiName = 'default')` renders the Swagger UI page for the given API, loading the YAML spec, converting it to JSON, and embedding it directly into the view.
- `swaggerFile($apiName = 'default')` returns the raw YAML specification as a downloadable file response.

If you omit `$apiName`, both actions fall back to the `default` configuration entry.

## Connect the routes

Wire the actions up in `config/routes.php`. A minimal setup serving a single API looks like this:

```php
$routes->scope('/', static function (RouteBuilder $builder) {
    $builder->connect('/docs', ['controller' => 'Docs', 'action' => 'swaggerUi']);
    $builder->connect('/docs/openapi.yaml', ['controller' => 'Docs', 'action' => 'swaggerFile']);
});
```

To expose multiple APIs, pass the API name as a parameter:

```php
$builder->connect('/docs/{api}', ['controller' => 'Docs', 'action' => 'swaggerUi'])
    ->setPatterns(['api' => '[a-z0-9\-_]+'])
    ->setPass(['api']);

$builder->connect('/docs/{api}/openapi.yaml', ['controller' => 'Docs', 'action' => 'swaggerFile'])
    ->setPatterns(['api' => '[a-z0-9\-_]+'])
    ->setPass(['api']);
```

With the example config above, visiting `/docs/admin` would render the admin API UI, while `/docs/admin/openapi.yaml` would serve the raw spec file.

## Authentication and authorization

The trait doesn't make any assumptions about who can access your documentation. If your API docs should be restricted, handle that the usual CakePHP way in the controller for instance, by allowing or denying specific actions in your authentication component's `beforeFilter()`:

```php
public function beforeFilter(\Cake\Event\EventInterface $event): void
{
    parent::beforeFilter($event);
    $this->Authentication->allowUnauthenticated(['swaggerUi', 'swaggerFile']);
}
```
