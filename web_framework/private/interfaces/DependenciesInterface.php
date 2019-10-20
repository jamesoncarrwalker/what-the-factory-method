<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 12/10/2019
 * Time: 20:24
 */

namespace interfaces;


interface DependenciesInterface {

    public function hasDependencies(string $className) : bool;

    public function setDependencies();

    public function getDependencies(string $className) : array;
}