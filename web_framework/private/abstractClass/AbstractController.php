<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 20/10/2019
 * Time: 17:26
 */

namespace abstractClass;


use interfaces\ControllerInterface;
use interfaces\ResponseInterface;

abstract class AbstractController implements ControllerInterface, ResponseInterface {

    protected $requestAction;

    public function isValidRequest() {
       return method_exists($this,$this->requestAction);
    }

    public function runRequest() {
        $action = $this->requestAction;
        $this->$action();
    }

    abstract function setDefaultRequest();

}