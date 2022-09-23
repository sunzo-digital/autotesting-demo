<?php

use App\ReceiptFactory;
use PHPUnit\Framework\TestCase;

class ReceiptFactoryTest extends TestCase
{
    public function testFromArray(): void
    {
        $expected = "Доргой \"Какой-то чел\"!"
        . "\n Спасибо за заказ: \"Билет на шоу\""
        . "\n С вас было списано: 3000 тг."
        . "Ждем вас снова!";

        $factory = new ReceiptFactory();

        $actual = $factory->fromArray([
            'amount' => '3000',
            'userName' => 'Какой-то чел',
            'orderName' => 'Билет на шоу',
        ]);

        $this->assertEquals($expected, $actual);
    }

}