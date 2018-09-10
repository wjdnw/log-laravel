<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/4
 * Time: 15:46
 */

namespace Wjdnw\LogLaravel\Facades;


use Illuminate\Support\Facades\Facade;

class LogLaravelFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'loglaravel';
    }
}