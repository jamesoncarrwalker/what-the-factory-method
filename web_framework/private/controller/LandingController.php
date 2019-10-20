<?php
namespace controller;
use interfaces\ControllerInterface;

/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 12/10/2019
 * Time: 13:47
 */
class LandingController implements ControllerInterface {

    public function __construct() {
        echo 'landing page';
    }

    public function isValidRequest() {
        // TODO: Implement isValidRequest() method.
    }

    public function runRequest() {
        // TODO: Implement runRequest() method.
    }

    public function setResponse() {
        // TODO: Implement setResponse() method.
    }

    public function getResponse() {
        // TODO: Implement getResponse() method.
    }

    public function getDefaultRequest() {
        // TODO: Implement getDefaultRequest() method.
    }

    public function setDefaultRequest() {
        // TODO: Implement setDefaultRequest() method.
    }
}