<?php

class Injection {
    private $mysqli;
    private $username;
    private $password;
    private $query;
    private $results;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
        $this->mysqli = new mysqli("localhost", "ngy_adv_web_user", "5zd5z42K~", "ngy_adv_web");
        $this->query = "SELECT * FROM sql_injection WHERE username = '" . $this->username . "' AND password = '"  . $this->password . "'";
        if($this->mysqli) {
            $result = $this->mysqli->query($this->query);
            $this->results = "";
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $this->results .= "<article>" . $row['username'] . " " . $row['password'] . "</article>";
                }
            } else {
                $this->results = "No results";
            }
            $this->mysqli->close();
        } else {
            $this->results = "failed";
        }
    }

    public function getResults() {
        return $this->results;
    }

    public function add() {
        $this->mysqli = new mysqli("localhost", "ngy_adv_web_user", "5zd5z42K~", "ngy_adv_web");
        // $this->query = "INSERT INTO sql_injection (username, password) VALUES ('" . $this->username . "', '" . $this->password . "')";
        // THIS IS THE ONLY AND MOST IMPORTANT THING YOU NEED TO CARE ABOUT TO PREVENT SQL INJECTION
        $this->query = sprintf("INSERT INTO sql_injection (username, password) VALUES ('%s', '%s')",
                  $this->mysqli->real_escape_string($this->username),
                  $this->mysqli->real_escape_string($this->password));
        
        if($this->mysqli) {
            $result = $this->mysqli->query($this->query);
            $this->results = "";
            if($result) {
                $this->results = "Added";
            } else {
                $this->results = "Failed to add";
            }
            $this->mysqli->close();
        } else {
            $this->results = "failed";
        }
    }
}

?>