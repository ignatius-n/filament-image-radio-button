<?php

namespace Alkoumi\FilamentImageRadioButton\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alkoumi\FilamentImageRadioButton\FilamentImageRadioButton
 */
class FilamentImageRadioButton extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Alkoumi\FilamentImageRadioButton\FilamentImageRadioButton::class;
    }
}
