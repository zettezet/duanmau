<?php
class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function getAccountNumber() { return $this->accountNumber; }
    public function getBalance() { return $this->balance; }

    public function setAccountNumber($accountNumber) { $this->accountNumber = $accountNumber; }
    public function setBalance($balance) { $this->balance = $balance; }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }

    public function info() {
        echo "Account: {$this->accountNumber}, Balance: " . ($this->balance) . "<br>";
    }
}

class SavingAccount extends BankAccount {
    private $interestRate;

    public function __construct($accountNumber, $balance, $interestRate) {
        parent::__construct($accountNumber, $balance);
        $this->interestRate = $interestRate;
    }

    public function addInterest() {
        $interest = $this->getBalance() * $this->interestRate;
        $this->deposit($interest);
    }

    public function info() {
        echo "Saving Account: " . $this->getAccountNumber() .", Balance: " . ($this->getBalance()) .", Interest Rate: " . ($this->interestRate * 100) . "%<br>";
    }
}

class CheckingAccount extends BankAccount {
    private $transactionFee;

    public function __construct($accountNumber, $balance, $transactionFee) {
        parent::__construct($accountNumber, $balance);
        $this->transactionFee = $transactionFee;
    }

    public function withdraw($amount) {
        $total = $amount + $this->transactionFee;
        return parent::withdraw($total);
    }

    public function info() {
        echo "Checking Account: " . $this->getAccountNumber() .", Balance: " . ($this->getBalance()) .", Transaction Fee: " . ($this->transactionFee) . "<br>";
    }
}

$saving = new SavingAccount("PH001", 10000000, 0.05);
$saving->addInterest();
$saving->info();

$checking = new CheckingAccount("PH002", 2000000, 10000);
$checking->withdraw(1000000);
$checking->info();