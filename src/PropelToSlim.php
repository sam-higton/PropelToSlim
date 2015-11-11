<?php
namespace PropelToSlim;
use Slim;

class PropelToSlim extends Slim\Slim {

    private $schemaPath;
    private $schemaMap;
    private $propelToSlimSettings;

    public function __construct (array $userSettings = array()) {
        $this->schemaPath = $userSettings['propelToSlim']['schemaPath'];
        $this->schemaMap = new SchemaMap($this->schemaPath);
        $this->propelToSlimSettings = $userSettings['propelToSlim'];
        return parent::__construct($userSettings);
    }

    public function initApi () {
        $basePath = $this->setting('api:basePath');

    }

    public function setting ($settingName) {
        $settingRoute = explode(':',$settingName);
        $setting = $this->propelToSlimSettings;
        foreach($settingRoute as $routePart) {
            if(isset($setting[$routePart])) {
                $setting = $setting[$routePart];
            } else {
                return NULL;
            }
        }
        return $setting;
    }


    public function initAdmin () {

    }

}