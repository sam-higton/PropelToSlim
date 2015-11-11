<?php
namespace PropelToSlim;
class SchemaMap {

    private $namespace = false;
    private $schemaXML;
    private $map = array();

    public function __construct ($schemaPath) {
        $this->schemaXML = simplexml_load_file($schemaPath);
        if(isset($this->schemaXML['namespace'])) {
            $this->namespace = $this->schemaXML['namespace'];
        }
        $this->generateMap();
    }

    public function generateMap () {
        foreach($this->schemaXML->table as $table) {
            if(isset($table['phpName'])) {
                $this->map[(string) $table['name']] = new ClassMap($table['phpName']);
            } else {
                $this->map[(string) $table['name']] = new ClassMap($table['name']);
            }
        }
    }

}