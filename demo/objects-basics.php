<?php

ini_set('display_errors', 1);

$globalId = 0;

class BankAccount
{
    private $accountNumber;
    // private $owner;
    // private $balance = 0;
    private $overdraft = 100;

    public function __construct(private $owner, private $balance = 0)
    {
        global $globalId;
        $globalId++;
        $this->accountNumber = $globalId;
        // $this->owner = $name;
        // $this->balance = $amount;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function getId()
    {
        return $this->accountNumber;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    private function setBalance($balance)
    {
        $this->balance = $balance;
    }
    public function deposit($amount)
    {
        $this->setBalance($this->getBalance() + $amount);
    }
    public function withdrawl($amount)
    {
        // 0 - 200 = -200 < -100 (insufficient funds)
        if ($this->getBalance() - $amount < -$this->overdraft) {
            echo "Insufficient funds";
        } else {
            $this->setBalance($this->getBalance() - $amount);
        }
    }
}

// $account = new BankAccount();

// $account->accountNumber = 1;
// $account->balance = 100;

// echo "Account #: ", $account->accountNumber;
// echo "<br>";
// echo "Balance: ", $account->balance;

$account1 = new BankAccount("John", 1000);
echo "account1 id: ", $account1-> getId(), " owner", $account1->getOwner();
echo "<br>";
$account1->deposit(100);
echo "Balance: ", $account1->getBalance();
echo "<br>";

$account2 = new BankAccount("Tommy", 0);
echo "account2 id: ", $account2-> getId(), " owner", $account2->getOwner();
echo "<br>";
// $account2->withdrawl(200);
$account2->withdrawl(99);
echo "<br>";
echo "Balance: ", $account2->getBalance();
echo "<br>";

$account3 = new BankAccount("Peter", 2);
echo "account3 id: ", $account3-> getId(), " owner", $account3->getOwner();
echo "<br>";
echo "Balance: ", $account3->getBalance();
echo "<br>";