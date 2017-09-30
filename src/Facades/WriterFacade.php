<?php

namespace Tomsoft\LaravelLog\Facades;

use Illuminate\Support\Facades\Facade;

class WriterFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'log.writer';
    }
}