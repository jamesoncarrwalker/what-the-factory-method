<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 20/10/2019
 * Time: 16:06
 */

namespace model\response;


use interfaces\ResponseHeadersManagerInterface;
use interfaces\ResponseInterface;

class ErrorResponse implements ResponseInterface, ResponseHeadersManagerInterface {


    public function setHeaders() {
        // TODO: Implement setHeaders() method.
    }

    public function getHeaders() {
        // TODO: Implement getHeaders() method.
    }

    public function clearHeaders() {
        // TODO: Implement clearHeaders() method.
    }

    public function getResponseType() {
        // TODO: Implement getResponseType() method.
    }

    public function setResponseData($data) {
        // TODO: Implement setResponseData() method.
    }

    public function outputResponse() {
        // TODO: Implement outputResponse() method.
    }
}