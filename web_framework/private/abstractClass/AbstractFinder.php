<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 15/10/2019
 * Time: 13:10
 */

namespace abstractClass;


use interfaces\SearcherInterface;
use interfaces\ValidatorInterface;

/**
 * Class AbstractFinder
 * @package abstractClass
 * is a wrapper for the interfaces primarily
 */

abstract class AbstractFinder implements ValidatorInterface, SearcherInterface {

    protected $type;

    public function __construct() {
        $this->setFinderType();
    }

    abstract protected function setFinderType();

    abstract public function isValid() : bool;

}