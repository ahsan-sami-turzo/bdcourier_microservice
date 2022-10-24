<?php namespace Radon\MultiCourier\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Radon\MultiCourier\MultiCourier via(string $provider)
 *
 * @see \Radon\MultiCourier\MultiCourier
 */
class MultiCourier extends Facade
{
    /**
     * @return string
     * @version v1.0.1
     * @since v1.0.1
     */
    protected static function getFacadeAccessor(): string
    {
        return 'MultiCourier';
    }
}
