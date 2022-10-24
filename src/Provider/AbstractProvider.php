<?php


namespace Radon\MultiCourier\Provider;


use Illuminate\Http\JsonResponse;

abstract class AbstractProvider implements ProviderRoadmap
{
    protected $senderObject;

    abstract public function sendRequest();

    /**
     * @param $result
     * @param $data
     * @return JsonResponse
     * @since v1.0.20
     * @version v1.0.20
     */
    public function generateReport($result, $data): JsonResponse
    {
        return response()->json([
            'status' => 'response',
            'response' => $result,
            'provider' => get_class($this),
            'send_time' => date('Y-m-d H:i:s'),
        ]);
    }

    /**
     * @return mixed
     */
    abstract public function errorException();

}
