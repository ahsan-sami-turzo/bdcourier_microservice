<?php


namespace Radon\MultiCourier\Handler;


use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ErrorException extends \Exception
{
    /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param Request $request
     * @return Response
     */
    public function render(Request $request)
    {

    }
}
