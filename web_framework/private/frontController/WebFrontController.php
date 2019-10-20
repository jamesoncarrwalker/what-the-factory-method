<?php
namespace frontController;

use abstractClass\AbstractFrontController;
use interfaces\AuthenticatorInterface;
use interfaces\ControllerInterface;
use interfaces\ResponseInterface;
use interfaces\SessionManagerInterface;
use model\finder\FinderController;
use model\request\WebRequestObject;
use model\response\ErrorResponse;
use model\response\WebResponse;

/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 12/10/2019
 * Time: 14:39
 */
class WebFrontController extends AbstractFrontController {

    protected $sessionManager;

    public function __construct(WebRequestObject $requestObject, WebResponse $responseObject, FinderController $finderController, AuthenticatorInterface $authenticator, SessionManagerInterface $sessionManager) {
        $this->sessionManager = $sessionManager;
        parent::__construct($requestObject, $responseObject, $finderController, $authenticator);
    }

    public function setController() {
        $this->finderController->setSearch($this->requestObject->getControllerName());
        $this->finderController->runSearch();
        if($this->finderController->isValid()) $this->controller = $this->finderController->getResult();
    }

    public function runRequest():ResponseInterface {
        if($this->controller instanceof ControllerInterface) {
            $this->controller->runRequest();
            $this->responseObject->setResponseData($this->controller);
        } else {
            $this->responseObject = new  ErrorResponse();
        }
        return $this->responseObject;
    }

}