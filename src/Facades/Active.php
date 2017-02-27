<?php

namespace storecamp\htmlelements\Facades;

use Illuminate\Support\Facades\Facade;


class Active extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'active';
    }

}
