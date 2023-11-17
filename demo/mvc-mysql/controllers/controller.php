<?php
    include_once 'models/model.php';
   
    class Controller {
        private $model;
        public function __construct($connection) {
            $this->model = new userModel($connection);
        }
        public function start() {
            $users = $this->model->selectUsers();
            include 'views/home.php';
        }
    }
?>