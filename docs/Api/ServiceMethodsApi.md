# WheelSizeApiClient\ServiceMethodsApi

All URIs are relative to *https://api.wheel-size.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**regions**](ServiceMethodsApi.md#regions) | **GET** /regions/ | Available regions


# **regions**
> \WheelSizeApiClient\Model\RegionsReportOutput regions()

Available regions

Returns all sales distribution regions. Note: the sales region is where the vehicle was officially sold or is still being sold.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\ServiceMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->regions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceMethodsApi->regions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\WheelSizeApiClient\Model\RegionsReportOutput**](../Model/RegionsReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

