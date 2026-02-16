<?php

class BankAccount
{
    private $accountNumber;
    private $balance = 0;

    public function __construct($accountNumber, $initialBalance)
    {
         if ($initialBalance < 0) {
            throw new Exception("Initial balance cannot be negative");
        }
        
        if (empty($accountNumber)) {
            throw new Exception("Account number is required");
        }
        
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    public function setAccountNumber($number)
    {
        $this->accountNumber = $number;
    }

    public function getAccountNumber()
    {
        echo "Account number: {$this->accountNumber}";
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
            return true;
        }
        return false;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    private function logTransaction($type, $amount)
    {
        echo "Transaction: {$type} - {$amount}\n";
    }
}

$account = new BankAccount("ACC001", 1000);
echo $account->getBalance();