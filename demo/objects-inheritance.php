<?php

ini_set('display_errors', 1);

class IdCard {
    protected $name;
    protected $dob;
    protected $address;
    protected $expiration;
    public function __construct($name,$dob,$address,$expiration) {
        $this->name = $name;
        $this->dob = $dob;
        $this->address = $address;
        $this->expiration = $expiration;
    }
    public function present() {
        echo "Id belongs to ", $this->name, " with this expiration date: ", $this->expiration, "<br/>";
    }
    public function renew($duration) {
        $this->expiration += $duration;
    }
    public function updateAddress($newAddr) {
        $this->address = $newAddr;
    }
    public function cancel(){
        $this->expiration = 0;
    }
}

class License extends IdCard {
    protected $classType;
    protected $points;
    protected $fees;
    public function __construct($name,$dob,$address,$expiration,$classType,$points,$fees) {
        if($expiration > 12) {
            parent::__construct($name,$dob,$address,12);
        } else {
            parent::__construct($name,$dob,$address,$expiration);
        }
        $this->classType = $classType;
        $this->points = $points;
        $this->fees = $fees;
    }
    public function isValid() {
        
    }
    public function viewPoints() {
        
    }
    public function reprimand() {
        
    }
    public function payFees() {
        
    }
    public function setType() {
        
    }
    public function setExpiration($duration) {
        $this->expiration = $duration;
    }
    public function renew($duration) {
        if($this->expiration + $duration > 12 ) {
            $this->expiration = 12;
        } else {
            $this->expiration += $duration;
        }
    }
}

$exampleId = new IdCard("Peter", "date", "123 Hello Drive", 120);
$exampleId->present();
$exampleId->renew(24);
$exampleId->present();

$exampleLicense = new License("Tommy", "dob", "234 World Drive", 6, 5, 15, 0);
$exampleLicense->present();
$exampleLicense->renew(1);
$exampleLicense->present();

?>