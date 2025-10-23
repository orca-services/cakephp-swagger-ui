# How to Update the Swagger UI Code

The Swagger UI in this CakePHP plugin is used as ["Plain old HTML/CSS/JS (Standalone)"](https://github.com/swagger-api/swagger-ui/blob/master/docs/usage/installation.md#plain-old-htmlcssjs-standalone).

To update the Swagger UI, the following steps need to be taken:

1. Update the [Swagger UI HTML template](../templates/SwaggerUi/index.php) after the marker comment with content of the [**latest tagged** Swagger UI HTML distributable](https://github.com/swagger-api/swagger-ui/edit/master/dist/index.html)
2. Revert various code parts (**attention to actual new changes**)
   1. Page title
   2. Icon links
   3. Script links
   4. "Swagger UI call region" taken from ```swagger-initializer.js``` (spec/url, standalone preset & layout)
3. Update the [Swagger UI CSS](../webroot/css/swagger-ui.css) with the [**latest tagged** Swagger UI CSS  distributable](https://github.com/swagger-api/swagger-ui/blob/master/dist/swagger-ui.css)
4. Update the [Swagger UI 16px favicon](../webroot/img/favicon-16x16.png) with the [**latest tagged** Swagger UI 16px favicon distributable](https://github.com/swagger-api/swagger-ui/blob/master/dist/favicon-16x16.png)
5. Update the [Swagger UI 32px favicon](../webroot/img/favicon-32x32.png) with the [**latest tagged** Swagger UI 32px favicon distributable](https://github.com/swagger-api/swagger-ui/blob/master/dist/favicon-32x32.png)
6. Update the [Swagger UI JS](../webroot/js/swagger-ui.js) with the [**latest tagged** Swagger UI JS  distributable](https://github.com/swagger-api/swagger-ui/blob/master/dist/swagger-ui.js)
7. Update the [Swagger UI Bundle JS](../webroot/js/swagger-ui-bundle.js) with the [**latest tagged** Swagger UI Bundle JS  distributable](https://github.com/swagger-api/swagger-ui/blob/master/dist/swagger-ui-bundle.js)
8. Update the [Swagger UI Preset JS](../webroot/js/swagger-ui-standalone-preset.js) with the [**latest tagged** Swagger UI Preset JS  distributable](https://github.com/swagger-api/swagger-ui/blob/master/dist/swagger-ui-standalone-preset.js)


