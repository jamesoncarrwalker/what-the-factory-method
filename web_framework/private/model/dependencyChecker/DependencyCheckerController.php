<?php
namespace model\dependencyChecker;
use interfaces\DependenciesInterface;

/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 12/10/2019
 * Time: 20:25
 */
class DependencyCheckerController implements DependenciesInterface {

    private $dependenciesArray = [];

    public function hasDependencies(string $name) : bool {
       return isset($this->dependenciesArray[$name]);

    }

    public function setDependencies() {
        // TODO: Implement setDependencies() method.
    }

    public function getDependencies(string $name) : array {
        // TODO: Implement getDependencies() method.
        return [];
    }
}