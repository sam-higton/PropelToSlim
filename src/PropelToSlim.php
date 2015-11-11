<?php
namespace PropelToSlim;
use Slim;

class PropelToSlim extends Slim\Slim {

    private $schemaPath;
    private $schemaMap;

    public function __construct (array $userSettings = array()) {
        $this->schemaPath = $userSettings['propelToSlim']['schemaPath'];
        $this->schemaMap = new SchemaMap($this->schemaPath);
        return parent::__construct($userSettings);
    }

    public function initApi () {

    }

    public function initAdmin () {

    }

}