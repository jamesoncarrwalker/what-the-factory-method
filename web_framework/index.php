<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 20/09/2019
 * Time: 15:05
 */

use factory\FrontControllerFactory;
use factory\RequestObjectFactory;
use interfaces\ResponseHeadersManagerInterface;

/**
 * @return bool
 *
 * set up the autoloader
 */

function setAutoLoader() {
    return spl_autoload_register(
        function($class) {
            $class = 'private/' .  str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
            include_once $class;
        }
    );
}

setAutoLoader();

/**
 *
 * decide what kind of request we are dealing with
 * @return \AbstractClass\AbstractRequestObject
 *
 */

$requestObject = RequestObjectFactory::createRequestObject();

/**
 *
 * @return \interfaces\FrontControllerInterface
 */

$frontController = FrontControllerFactory::createFrontController($requestObject);

$frontController->setController();
$response = $frontController->runRequest();

/**
 *
 * if we have defined any specific header information the make sure we set it
 *
 */
if($response instanceof ResponseHeadersManagerInterface) $response->setHeaders();

$response->outputResponse();



