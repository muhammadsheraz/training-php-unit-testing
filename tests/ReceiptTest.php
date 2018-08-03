<?php
namespace TDD\Test;

require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
use PHPUnit\Framework\TestCase;
use TDD\Receipt;

Class ReceiptTest extends TestCase {
    public function setUp() {
        $this->Receipt = new Receipt();
    }

    public function tearDown() {
        unset($this->Receipt);
    }

    public function testTotal() {
        $items = [1,2,3,4,5];
        $totalItems = $this->Receipt->getTotalItems($items);
        $this->assertEquals(
            15,
            $totalItems,
            'Items Total is not equal'
        );
    }

    public function testTax() {
        $tax = 0.10;
        $amount = 10.00;

        $tax_amount = $this->Receipt->calculateTax($amount, $tax);

        $this->assertEquals(
            1,
            $tax_amount,
            "Tax amount is not correct"
        );
    }
}

?>