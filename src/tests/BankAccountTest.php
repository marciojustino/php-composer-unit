<?php
use PHPUnit\Framework\TestCase;
use My\Library\Account\BankAccount;

final class BankAccountTest extends TestCase {
    private $bankAccount;

    /**
     * Setup test case
     *
     * @return void
     */
    public static function setUpBeforeClass() {
        $this->bankAccount = new BankAccount(4000);
    }

    /**
     * Test get galance
     *
     * @return void
     */
    public function testGetBalance() {
        $this->assertEquals(0, $this->bankAccount->getBalance());
    }

    /**
     * Test cash out account
     *
     * @return void
     */
    public function testCashOutAccount() {
        $status = $this->bankAccount->cashOut(4000);
        $this->assertEquals(true, $status);
        $this->assertEquals(0,$this->bankAccount->getBalance());
    }
}
?>