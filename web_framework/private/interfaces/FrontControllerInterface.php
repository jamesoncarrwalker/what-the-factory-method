<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 12/10/2019
 * Time: 14:40
 */

namespace interfaces;


interface FrontControllerInterface {

    public function setController();

    public function runRequest() :ResponseInterface;
}