<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 16/10/2019
 * Time: 13:05
 */

namespace model\object;


use interfaces\SessionManagerInterface;


class SessionManagerWeb implements SessionManagerInterface {

    //this will control session starting/destroying as well (similar to setting the connection object at the right time)

    public function setSession(string $name, $value) {
        $this->initSession();
        $_SESSION[$name] = $value;
    }

    public function getSession(string $name, $value) {
        $this->initSession();
        if(isset($_SESSION[$name])) return $_SESSION[$name];
        else return false;
    }

    public function clearSession() {
        if(session_status() == PHP_SESSION_NONE) return;
        else session_destroy();
    }

    private function initSession() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
}