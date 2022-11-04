<?php

declare(strict_types=1);

namespace App;

class ReceiptGenerator
{
    public function make(string $userName, string $service, int $amount): string
    {
        $format = "Дорогой \"%s\"!"
            . "Спасибо за заказ: \"%s\""
            . "С вас было списано: %d тг."
            . "Ждем вас снова!";

//        $format = "Дорогой \"%s\"!\n"
//            . "Спасибо за заказ: \"%s\"\n"
//            . "С вас было списано: %d тг.\n"
//            . "Ждем вас снова!\n";

        return sprintf($format, $userName, $service, $amount);
    }

}