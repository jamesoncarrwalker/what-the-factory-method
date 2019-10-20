<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 12/10/2019
 * Time: 19:58
 */

namespace interfaces;


interface ControllerInterface {

    public function isValidRequest();

    public function runRequest();

    public function setDefaultRequest();
}