<?php

declare(strict_types=1);

use App\ReceiptFactory;
use App\ReceiptsRepository;

require_once "vendor/autoload.php";

const RECEIPTS_DIR = __DIR__ . '/receipts';

// сейчас у нас только 1 товар - билет на vogue show
const DEFAULT_SERVICE = 'Vogue Night Show';
const DEFAULT_AMOUNT = 5000;

try {
    // pay();

    $receiptFactory = new ReceiptFactory();

    $order = $receiptFactory->make(
        $_POST['name'],
        DEFAULT_SERVICE,
        DEFAULT_AMOUNT
    );

    $receiptsRepository = new ReceiptsRepository(RECEIPTS_DIR);

    $receiptsRepository->save(time().'.txt', $order);
} catch (\Throwable $e) {
    die($e->getMessage());
}

header('Location: http://localhost:8080');
die('successful payment');