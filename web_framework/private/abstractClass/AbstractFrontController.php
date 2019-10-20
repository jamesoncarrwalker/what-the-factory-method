<?php
namespace abstractClass;


use interfaces\AuthenticatorInterface;
use interfaces\FrontControllerInterface;
use interfaces\ResponseInterface;
use interfaces\SearcherInterface;

/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 12/10/2019
 * Time: 19:31
 */
abstract class AbstractFrontController implements FrontControllerInterface {

    protected $finderController;
    protected $responseObject;
    protected $requestObject;
    protected $authenticator;

    protected $controller;

    public function __construct(AbstractRequestObject $requestObject, ResponseInterface $responseObject, SearcherInterface $finderController, AuthenticatorInterface $authenticator) {
        $this->requestObject = $requestObject;
        $this->responseObject = $responseObject;
        $this->finderController = $finderController;
        $this->authenticator = $authenticator;

    }


}