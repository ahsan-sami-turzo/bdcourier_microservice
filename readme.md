Bangladeshi courier service api endpoints library for i.e., e-courier, pathao 


# Installation

### Step 1:

```
composer require radon/multicourier
```

### Step 2:

```
php artisan vendor:publish --provider=Radon\MultiCourier\MultiCourierServiceProvider
```

### Step 3:

Set **.env** configuration for individual couriers

```PATHAO_CLIENT_ID=XXX 
PATHAO_CLIENT_SECRET="XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"
PATHAO_USERNAME="xxxx@example.com"
PATHAO_PASSWORD="xxxxxx"
PATHAO_GRANT_TYPE="password"

ECOURIER_API_KEY='xxx'
ECOURIER_API_SECRET='xxx'
ECOURIER_USER_ID='xxxx'
ECOURIER_ENVIRONMENT='xxxx'
```

#### Sample Code Requesting to E-courier

<pre>
use Radon\MultiCourier\Provider\ECourier;
use Radon\MultiCourier\Courier;


$courier = Courier::getInstance();
$courier->setProvider(ECourier::class, 'local'); /* local/production */
$courier->setConfig([
    'API-KEY' => 'xxx',
    'API-SECRET' => 'xxxx',
    'USER-ID' => 'xxxx',
]);
$courier->setParams(['city'=>'Dhaka']);
$thanas = $courier->getThanas(); //get thana
$cities = $courier->getCities(); //get city
</pre>

<pre>
//place order
use Radon\MultiCourier\Provider\ECourier;
use Radon\MultiCourier\Courier;


$courier = Courier::getInstance();
$courier->setProvider(ECourier::class, 'local'); /* local/production */
$courier->setConfig([
    'API-KEY' => 'xxx',
    'API-SECRET' => 'xxx',
    'USER-ID' => 'xxx',
]);
$orderData = array(
    'recipient_name' => 'XXXXX',
    'recipient_mobile' => '017XXXXX',
    'recipient_city' => 'Dhaka',
    'recipient_area' => 'Badda',
    'recipient_thana' => 'Badda',
    'recipient_address' => 'Full Address',
    'package_code' => '#XXXX',
    'product_price' => '1500',
    'payment_method' => 'COD',
    'recipient_landmark' => 'DBBL ATM',
    'parcel_type' => 'BOX',
    'requested_delivery_time' => '2019-07-05',
    'delivery_hour' => 'any',
    'recipient_zip' => '1212',
    'pick_hub' => '18490',
    'product_id' => 'DAFS',
    'pick_address' => 'Gudaraghat new mobile',
    'comments' => 'Please handle carefully',
    'number_of_item' => '3',
    'actual_product_price' => '1200',
    'pgwid' => 'XXX',
    'pgwtxn_id' => 'XXXXXX'
);

$courier->setParams($orderData);
$response = $courier->placeOrder();


</pre>


#### Sample Code Requesting to Pathao

<pre>
use Radon\MultiCourier\Courier;
use Radon\MultiCourier\Provider\Pathao;

$courier = Courier::getInstance();
$courier->setProvider(Pathao::class, 'local'); /* local/production */
$courier->setMethod('get');
$courier->setRequestEndpoint('cities/1/zone-list', []); //second param should be array. its optional. you should form params here
$response = $courier->send();
</pre>

# Available Methods to Interact with Provider's Api
### _getInstance()_
### _getConfig()_
### _setConfig()_
### _getParams()_
### _setParams()_
### _getProvider()_
### _setProvider()_
### _getCities()_
### _getThanas()_
### _trackOrder()_
### _trackChildOrder()_
### _getPackages()_
### _placeOrder()_
### _cancelOrder()_
### _cancelChildOrder()_
### _fraudStatusCheck()_
### _getAreas()_
### _getPostCodes()_
### _getBranches()_
### _printLabel()_
### _boostSms()_
### _topupSms()_
### _topTransactionStatus()_
### _topupOtp()_

#### Currently Supported Courier Gateways

* **ECourier**
* **Pathao**
