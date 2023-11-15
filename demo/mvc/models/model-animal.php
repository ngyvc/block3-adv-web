<?php
class Animal {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function makeSound() {
        echo "The animal makes a sound.";
    }
}
?>