<?php

namespace MichelMelo\LinkedinShare\Facades;

class LinkedinShare extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return \MichelMelo\LinkedinShare\LinkedinShare::class;
    }
}
