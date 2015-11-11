<?php
namespace PropelToSlim;
class ClassMap {

    private $classString;
    private $queryString;
    private $propelTableMap;

    public function __construct ($name, $namespace = false) {
        if($namespace) {
            $this->classString = $namespace . "\\" . $name;
            $this->queryString = $namespace . "\\" . $name . "Query";
        } else {
            $this->classString = $name;
            $this->queryString = $name . "Query";
        }
        $this->loadPropelTableMap($name, $namespace);
        return $this;
    }

    public function getInstance () {
        return new ${$this->classString}();
    }

    public function getQuery () {
        return new ${$this->queryString}();
    }

    public function loadPropelTableMap($name, $namespace = false) {
        if($namespace) {
            $mapString = $this->namespace . "\\Map\\" . $name . "TableMap";
        } else {
            $mapString = $this->namespace . "\\Map\\" . $name . "TableMap";
        }
        $this->propelTableMap = $mapString::getTableMap();

    }

}