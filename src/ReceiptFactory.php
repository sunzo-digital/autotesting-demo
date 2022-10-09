<?php

declare(strict_types=1);

namespace App;

class ReceiptFactory
{
    public function make(string $userName, string $service, int $amount): string
    {
        $break = str_repeat('-', 30);

        $format = "Дорогой \"%s\"!\n{$break}"
            . "Спасибо за заказ: \"%s\"\n{$break}"
            . "С вас было списано: %d тг.\n{$break}"
            . "Ждем вас снова!\n";

//        $format = "Дорогой \"%s\"!\n{$break}\n"
//            . "Спасибо за заказ: \"%s\"\n{$break}\n"
//            . "С вас было списано: %d тг.\n{$break}\n"
//            . "Ждем вас снова!\n";

        return sprintf($format, $userName, $service, $amount);
    }

}