<?php

use App\ReceiptFactory;
use App\ReceiptsRepository;

require_once "vendor/autoload.php";

// сейчас у нас только 1 товар - билет на vogue show
const DEFAULT_SERVICE = 'Vogue Night Show';
const DEFAULT_AMOUNT = 5000;
/*
 * Сначала чек - просто текст черзе строчку
 * Затем приходит задание, добавить форматирование
 *
 * Кейс, когда коллега заметил, что форматирование неправильно
 * Кейс, когда другой колега заметил, что маленькая деталь в форматировании неправильная
 */


$receiptFactory = new ReceiptFactory();

$order = $receiptFactory->fromArray([
    'name' => $_POST['name'],
    'cardNumber' => $_POST['cardNumber'],
    'expiration' => $_POST['expiration'],
    'cvv' => $_POST['cvv'],
    'amount' => DEFAULT_AMOUNT,
    'service' => DEFAULT_SERVICE,
]);

$receiptsRepository = new ReceiptsRepository();

$receiptsRepository->save($order);