<?php
    include_once 'models/model.php';
   
    class Controller {
        private $model;
        public function __construct($connection) {
            $this->model = new userModel($connection);
        }
        public function showUsers() {
            $users = $this->model->selectUsers();
            include 'views/home.php';
        }
        public function showForm() {
            include 'views/form.php';
        }
        public function add() {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            if (!$name || !$email || !$address) {
                echo "<p>Missing information</p>";
                $this->showForm();
                return;
            } else if($this->model->insertUser($name, $email, $address)){
                echo "<p>Added user: $name, $email, $address</p>";
            } else {
                echo "<p>Could not add user</p>";
            }
            $this->showUsers();
        }
    }
    
    $connection2 = new connectionObject("localhost", "ngy_adv_web_user", "5zd5z42K~", "ngy_adv_web");
    $controller = new Controller($connection2);

    // $controller->showUsers();
    // $controller->showForm();
    // $controller->add();
    // if page gets information, add it
    // otherwise show form
    if(isset($_POST['submit'])) {
        $controller->add();
    } else {
        $controller->showForm();
    }

?>