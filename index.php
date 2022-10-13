<?php
require __DIR__ . '/vendor/autoload.php';

use App\Pages\MainPage;

$parserMainPage = new MainPage();
print_r($parserMainPage->getDOMList()['count']);
