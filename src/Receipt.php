<?php
namespace TDD;
Class Receipt {
    public function getTotalItems (array $items = []) {
        return array_sum($items);
    }

    public function calculateTax ($amount, $tax) {
        return ($amount * $tax);
    }
}