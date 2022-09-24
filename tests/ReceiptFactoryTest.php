<?php

declare(strict_types=1);

use App\ReceiptFactory;
use PHPUnit\Framework\TestCase;

class ReceiptFactoryTest extends TestCase
{
    public function testFromArray(): void
    {
        $expected = "Дорогой \"Какой-то чел\"!\n"
        . "Спасибо за заказ: \"Билет на шоу\"\n"
        . "С вас было списано: 3000 тг.\n"
        . "Ждем вас снова!\n";

        $factory = new ReceiptFactory();

        $actual = $factory->make(
            'Какой-то чел',
            'Билет на шоу',
            3000,
        );

        $this->assertEquals($expected, $actual);
    }

}