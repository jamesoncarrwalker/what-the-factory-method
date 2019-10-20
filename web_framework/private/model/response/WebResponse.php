<?php
namespace model\response;

use interfaces\ResponseHeadersManagerInterface;
use interfaces\ResponseInterface;


/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 12/10/2019
 * Time: 19:39
 */
class WebResponse implements ResponseInterface, ResponseHeadersManagerInterface {


    protected function setResponseType() {
        // TODO: Implement setResponseType() method.
    }

    public function getResponseType() {
        // TODO: Implement getResponseType() method.
    }

    public function getResponse() {
        // TODO: Implement getResponse() method.
    }

    function setResponseData($data) {
        // TODO: Implement setResponseData() method.
    }

    public function outputResponse() {
        // TODO: Implement outputResponse() method.
    }

    public function setHeaders() {
        // TODO: Implement setHeaders() method.
    }

    public function getHeaders() {
        // TODO: Implement getHeaders() method.
    }

    public function clearHeaders() {
        // TODO: Implement clearHeaders() method.
    }
}