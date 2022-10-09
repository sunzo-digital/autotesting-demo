<?php

declare(strict_types=1);

use App\ReceiptFactory;
use PHPUnit\Framework\TestCase;

class ReceiptFactoryTest extends TestCase
{
    public function testFactory(): void
    {
        $break = str_repeat('-', 30);

        $expected = "Дорогой \"Какой-то чел\"!\n{$break}\n"
        . "Спасибо за заказ: \"Билет на шоу\"\n{$break}\n"
        . "С вас было списано: 3000 тг.\n{$break}\n"
        . "Ждем вас снова!\n";

        $factory = new ReceiptFactory();

        $actual = $factory->make(
            'Какой-то чел',
            'Билет на шоу',
            3000,
        );

        $this->assertEquals($expected, $actual, 'фабрика создает некорректные чеки');
    }

}