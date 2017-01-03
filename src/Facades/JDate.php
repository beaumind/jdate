<?php

namespace Beaumind\Jdate\Facades;

use Illuminate\Support\Facades\Facade;

class JDate extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'jdate';
    }

}