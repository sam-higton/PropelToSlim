<?php
namespace PropelToSlim;
class SchemaMap {

    private $namespace = '';
    private $schemaXML;
    private $map = array();

    public function __construct ($schemaPath) {
        $this->schemaXML = simplexml_load_file($schemaPath);
        if(isset($this->schemaXML['namespace'])) {
            $this->namespace = $this->schemaXML['namespace'];
        }
    }

    public function generateMap () {

    }

}