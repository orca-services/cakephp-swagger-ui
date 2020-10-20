<?php

namespace SwaggerUi\Controller;

use Cake\Core\Configure;
use Cake\Http\Response;
use Symfony\Component\Yaml\Yaml;

/**
 * SwaggerUi Controller Trait
 *
 * @property \Cake\Http\Response $response The CakePHP HTTP Response it uses.
 * @todo Test by utilizing a small test app with route, config & controller.
 */
trait SwaggerUiTrait
{
    /**
     * The Swagger UI
     *
     * @param string|null $apiName The configuration name of the API to show, defaults to "default".
     * @return \Cake\Http\Response|null|void
     */
    public function swaggerUi($apiName = 'default')
    {
        $openApiSpecification = $this->_getSpecificationFile($apiName);
        $openApiSpecification = Yaml::parseFile($openApiSpecification);
        $openApiSpecification = json_encode($openApiSpecification);
        $this->set('openApiSpecification', $openApiSpecification);
        $this->set('title', $apiName);
        $this->render('SwaggerUi.SwaggerUi/index');
    }

    /**
     * The Swagger UI
     *
     * @param string|null $apiName The configuration name of the API to show, defaults to "default".
     * @return \Cake\Http\Response
     */
    public function swaggerFile($apiName = 'default'): Response
    {
        $openApiSpecification = $this->_getSpecificationFile($apiName);
        $this->response = $this->response->withFile($openApiSpecification);

        return $this->response;
    }

    /**
     * Get the OpenAPI specification file for the given API name
     *
     * @param string $apiName The API
     * @return string The OpenAPI specification file path.
     */
    protected function _getSpecificationFile($apiName): string
    {
        $configKey = 'SwaggerUi.apis.' . $apiName . '.file';
        $openApiSpecification = Configure::consumeOrFail($configKey);

        return $openApiSpecification;
    }
}
