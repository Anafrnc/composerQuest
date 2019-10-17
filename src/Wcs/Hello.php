<?php

namespace App\Wcs;

class Hello
{
    public function talk(): string
    {
        return "Hello World";
    }
}


namespace HelloWorld;

class SayHello
{
    public static function world()
    {
        return 'Hello World, Composer!';
    }
}