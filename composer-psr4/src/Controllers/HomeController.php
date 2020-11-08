<?php
namespace App\Controllers;

use  App\Models\Foo;

class HomeController
{
    public function index()
    {
        $foo = new Foo();
        $foo->setName('Fanta');
        return $foo->getName();
    }
}