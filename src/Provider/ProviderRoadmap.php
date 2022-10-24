<?php


namespace Radon\MultiCourier\Provider;


interface ProviderRoadmap
{

    public function sendRequest();

    public function generateReport($result, $data);

    public function errorException();

    public function authorize();

    function placeOrder();

    function getOrders();
}
