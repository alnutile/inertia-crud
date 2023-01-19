<?php

namespace SundanceSolutions\InertiaCrud\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SundanceSolutions\InertiaCrud\InertiaCrud
 */
class InertiaCrud extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \SundanceSolutions\InertiaCrud\InertiaCrud::class;
    }
}
