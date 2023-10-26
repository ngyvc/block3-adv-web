<?php

class ObjectName {
    private $property1;
    private $property2 = 0;
    public $isActive = false;

    public function __construct() {
        $this->property1 = "not set";
    }
    private function getProperty1() {
        return $this->property1;
    }
    private function setProperty1($newValue) {
        $this->property1 = $newValue;
    }
    public function ask() {
        return "property1: " . $this->getProperty1() . " property2: " . $this->property2;
    }
    public function action($data) {
        $this->setProperty1($data);
    }
}

$testObject1 = new ObjectName();
// $testObject1->action(123);
echo $testObject1->ask();
echo $testObject1->isActive ? "active" : "not-active";