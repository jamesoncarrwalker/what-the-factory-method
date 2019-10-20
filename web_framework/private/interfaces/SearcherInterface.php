<?php
/**
 * Created by PhpStorm.
 * User: jamesskywalker
 * Date: 12/10/2019
 * Time: 19:29
 */

namespace interfaces;


interface SearcherInterface {

    public function setSearch(string $query);

    public function runSearch();

    public function getResult();

}