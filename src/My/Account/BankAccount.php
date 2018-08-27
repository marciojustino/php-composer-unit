<?php
namespace My\Library\Account {

    /**
     * Bank Account
     */
    class BankAccount implements FinancialAccount
    {
        private $balance;
        private $number;

        public function __construct($initialBalance)
        {
            if (!is_double($initialBalance)) {
                $this->balance = 0;
            } else if ($initialBalance > 0) {
                $this->balance = $initialBalance;
            } else {
                $this->balance = 0;
            }
        }

        public function getBalance()
        {
            return $this->balance;
        }

        public function cashOut($value)
        {
            if (!is_double($value)) {
                return false;
            }

            if (($this->balance - $value) < 0) {
                return false;
            }

            $this->balance -= $value;
            return true;
        }

        public function cashIn($value)
        {
            if (!is_double($value)) {
                return false;
            }

            $this->balance += $value;

            return true;
        }

        public function getNumber()
        {
            $this->number;
        }
    }
}
