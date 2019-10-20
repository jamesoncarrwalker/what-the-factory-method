<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 16/10/2019
 * Time: 13:01
 */

namespace interfaces;


interface SessionManagerInterface {

    public function setSession(string $name, $value);

    public function getSession(string $name,$value);

    public function clearSession();
}