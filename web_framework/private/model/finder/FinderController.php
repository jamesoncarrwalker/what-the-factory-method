<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 12/10/2019
 * Time: 19:38
 */

namespace model\finder;


use abstractClass\AbstractFinder;
use constants\AbstractConstFinderTypes;
use interfaces\ControllerInterface;
use interfaces\DependenciesInterface;

class FinderController extends AbstractFinder {

    private $dependencyChecker;
    private $controllerName;
    private $controllerLocation;
    private $controllerRoute;

    public function __construct(DependenciesInterface $dependencyChecker) {
        parent::__construct();
        $this->dependencyChecker = $dependencyChecker;
    }

    public function setSearch(string $query) {
        $this->controllerName = $query == '' ? 'Landing' : ucfirst($query);
    }

    public function runSearch() {
        $this->controllerLocation = 'private/controller/' . $this->controllerName . 'Controller.php';
        $this->controllerRoute = "\\controller\\" . $this->controllerName . 'Controller';
    }

    public function getResult() :ControllerInterface {
        if($this->dependencyChecker->hasDependencies($this->controllerName)) {
            //run the DependencyChecker and set the controller
            $controller = new $this->controllerRoute(...$this->dependencyChecker->getDependencies($this->controllerName));
        } else {
            $controller = new $this->controllerRoute();//set the controller
        }
        return $controller;
    }

    public function isValid() : bool {
       return file_exists($this->controllerLocation);
    }

    protected function setFinderType() {
        $this->type = AbstractConstFinderTypes::CONTROLLER;
    }
}