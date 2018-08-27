<?php
namespace My\Library\Account {
    interface FinancialAccount
    {
        function getBalance();
        function cashOut($value);
        function cashIn($value);
        function getNumber();
    }
}
