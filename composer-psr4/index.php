<?php
require __DIR__ . '/vendor/autoload.php';
use App\Controllers\HomeController;


$homeCtrl = new HomeController();
echo $homeCtrl->index();