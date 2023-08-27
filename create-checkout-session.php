use Razorpay\Api\Api;

$api_key = "rzp_test_tUsQssTcso0cvy";
$api_secret = "3AMNOtqChKgZzpyUU2cRu0sq";

$api = new Api($api_key, $api_secret);

session_start();

$api->order->create(array('receipt' => '123', 'amount' => 100, 'currency' => 'INR', 'notes'=> array('key1'=> 'value3','key2'=> 'value2')));