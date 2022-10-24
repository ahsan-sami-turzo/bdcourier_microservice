<?php namespace Radon\MultiCourier\Facades;

use Illuminate\Support\Facades\Facade;


/**
 * @method static Radon\MultiCourier\Log\Log createLog(array $data)
 * @method static Radon\MultiCourier\Log\Log viewLastLog()
 * @method static Radon\MultiCourier\Log\Log viewAllLog()
 * @method static Radon\MultiCourier\Log\Log logByProvider()
 * @method static Radon\MultiCourier\Log\Log logByDefaultProvider()
 * @method static Radon\MultiCourier\Log\Log total()
 * @method static Radon\MultiCourier\Log\Log toArray()
 * @method static Radon\MultiCourier\Log\Log toJson()
 *
 * @see \Radon\MultiCourier\Log\Log
 */
class Logger extends Facade
{
    /**
     * @return string
     * @version v1.0.35
     * @since v1.0.35
     */
    protected static function getFacadeAccessor(): string
    {
        return 'MultiCourierLogger';
    }
}
