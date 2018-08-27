<?php
use My\Library\Account\BankAccount;

$account = new BankAccount(100000.00);
$currentBalance = $account->getBalance();
echo "<p>Account balance: $currentBalance</p>";
$operation = $account->cashOut(4500.00);
echo "<p>Cashing out 4.500 </p><strong>$operation</strong>";
$operation = $account->cashIn(5000.00);
echo "<p>Cashing in 5.000</p><strong>$operation</strong>";
echo "<p>New account balance: <strong>{$account->getBalance()}</strong></p>"

?>
