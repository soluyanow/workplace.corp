<?php
/*
 * CORE Level
 */
class Main
{
    private $settings = array();
    private $systemInit = false;

    function __construct() {
        $this->settings = $GLOBALS["SETTINGS"];
        $this->systemInit = false;
        $GLOBALS["SYSTEM"] = array();
    }

    function Init() {
        if(isset($this->settings["MODULES_ROOT"])) {
            $modules = array_diff(scandir($this->settings["MODULES_ROOT"]), array('..', '.'));
            foreach($modules as $module) {
                include_once($this->settings["MODULES_ROOT"]."/".$module);
                $this->systemInit = true;
            }
        }

        if(isset($this->settings["TEMPLATES_ROOT"])) {
            $templates = array_diff(scandir($this->settings["TEMPLATES_ROOT"]), array('..', '.'));
            foreach($templates as $template) {
                include_once($this->settings["TEMPLATES_ROOT"]."/".$template);
                $this->systemInit = true;
            }
        }

        if($this->systemInit) {
            $this->systemStart();
        }
    }

    private function setSessionParams() {
        if (!isset($_SESSION)) {
            ini_set('session.cookie_lifetime', 3600);
            ini_set('session.use_cookies', 1);
            session_start();
        }
    }

    private function systemStart() {



    }


}