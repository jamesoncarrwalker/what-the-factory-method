<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 12/10/2019
 * Time: 14:02
 */
namespace factory;

use abstractClass\AbstractRequestObject;
use frontController\ErrorResponseFrontController;
use frontController\WebFrontController;
use model\dependencyChecker\DependencyCheckerController;
use model\finder\FinderController;
use interfaces\FrontControllerInterface;
use model\object\SessionManagerWeb;
use model\request\AjaxRequestObject;
use model\request\ApiRequestObject;
use model\request\AppRequestObject;
use model\request\WebRequestObject;
use model\response\ErrorResponse;
use model\response\WebResponse;


class FrontControllerFactory {


    public static function createFrontController(AbstractRequestObject $requestObject) : FrontControllerInterface {

        $authenticator = AuthenticatorFactory::getAuthenticator($requestObject);
        $finderController = new FinderController(new DependencyCheckerController(ConnectionFactory::createConnectionObject($requestObject)));

        if($requestObject instanceof WebRequestObject ) {
            return new WebFrontController($requestObject, new WebResponse(), $finderController, $authenticator , new SessionManagerWeb());
        } else if ($requestObject instanceof AjaxRequestObject) {
            //TODO:: return an ajax controller (will probably be a web controller with a json output
        } else if ($requestObject instanceof ApiRequestObject) {
            //TODO:: return an api controller
        } else if ($requestObject instanceof AppRequestObject) {
            //TODO:: return an app controller and response
        } else {
            return new ErrorResponseFrontController($requestObject, new ErrorResponse(), null, null);
        }
    }
}