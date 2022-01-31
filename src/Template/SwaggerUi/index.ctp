<?php
/**
 * Swagger UI Template
 *
 * @var \App\View\AppView $this
 * @var string $title The title of the Swagger UI page.
 * @var string $swaggerSPecUrl The URL to the Open API specification file.
 */
$this->setLayout(false);
$swaggerSPecUrl = $swaggerSPecUrl ?? 'https://petstore.swagger.io/v2/swagger.json';

if (!isset($title)) {
    $title = 'API Specification';
}

// Modified Swagger UI template starts after closing PHP tag
?>
<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?> - Swagger UI</title>
    <?= $this->Html->css('/swagger_ui/css/swagger-ui.css') ?>
    <?= $this->Html->meta('icon', '/swagger_ui/img/favicon-32x32.png', ['sizes' => '32x32']) ?>
    <?= $this->Html->meta('icon', '/swagger_ui/img/favicon-16x16.png', ['sizes' => '16x16']) ?>
    <style>
        html
        {
            box-sizing: border-box;
            overflow: -moz-scrollbars-vertical;
            overflow-y: scroll;
        }

        *,
        *:before,
        *:after
        {
            box-sizing: inherit;
        }

        body
        {
            margin:0;
            background: #fafafa;
        }
    </style>
</head>

<body>
<div id="swagger-ui"></div>

<?= $this->Html->script('/swagger_ui/js/swagger-ui-bundle.js', ['charset' => 'UTF-8']) ?>
<?= $this->Html->script('/swagger_ui/js/swagger-ui-standalone-preset.js', ['charset' => 'UTF-8']) ?>
<script>
    window.onload = function() {
        // Begin Swagger UI call region
        const ui = SwaggerUIBundle({
            spec: <?= $openApiSpecification ?>,
            //url: "<?//= $swaggerSPecUrl ?>//",
            dom_id: '#swagger-ui',
            deepLinking: true,
            presets: [
                SwaggerUIBundle.presets.apis,
                // SwaggerUIStandalonePreset
            ],
            plugins: [
                SwaggerUIBundle.plugins.DownloadUrl
            ],
            // layout: "StandaloneLayout"
        })
        // End Swagger UI call region

        window.ui = ui
    }
</script>
</body>
</html>
