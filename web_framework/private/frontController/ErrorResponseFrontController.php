<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 20/10/2019
 * Time: 20:06
 */

namespace frontController;


use abstractClass\AbstractFrontController;
use abstractClass\AbstractRequestObject;
use interfaces\AuthenticatorInterface;
use interfaces\ResponseInterface;
use interfaces\SearcherInterface;

class ErrorResponseFrontController extends AbstractFrontController {

    public function __construct(AbstractRequestObject $requestObject, ResponseInterface $responseObject, SearcherInterface $finderController, AuthenticatorInterface $authenticator) {
        parent::__construct($requestObject, $responseObject, $finderController, $authenticator);
        echo 'error response';
    }

    public function setController() {
        // TODO: Implement setController() method.
    }

    public function runRequest() :ResponseInterface {
        // TODO: Implement runRequest() method.
    }
}