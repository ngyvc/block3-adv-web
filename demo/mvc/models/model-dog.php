<?php

include_once("model-animal.php");

class Dog extends Animal {
    public function makeSound() {
        echo "The cat quarrels.";
    }
    public function bark() {
        return "bark!";
    }
}
?>