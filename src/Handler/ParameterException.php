<?php


namespace Radon\MultiCourier\Handler;


use Illuminate\Http\Request;

/**
 * Class ParameterException
 * @package Radon\MultiCourierLog\Handler
 * @version v1.0.20
 * @since v1.0.20
 */
class ParameterException extends \Exception
{
    /**
     * Report the exception.
     *
     * @return void
     * @version v1.0.20
     * @since v1.0.20
     */
    public function report()
    {
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param Request $request
     * @return void
     * @version v1.0.20
     * @since v1.0.20
     */
    public function render(Request $request)
    {

    }
}
