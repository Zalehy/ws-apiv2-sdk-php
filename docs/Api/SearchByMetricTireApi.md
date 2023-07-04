# WheelSizeApiClient\SearchByMetricTireApi

All URIs are relative to *https://api.wheel-size.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aspectRatio**](SearchByMetricTireApi.md#aspectRatio) | **GET** /by_tire/ar/ | List aspect ratios
[**diameters**](SearchByMetricTireApi.md#diameters) | **GET** /by_tire/rd/ | List rim diameters
[**searchByTire**](SearchByMetricTireApi.md#searchByTire) | **GET** /by_tire/search/ | Search by Metric Tire
[**searchByTireModifications**](SearchByMetricTireApi.md#searchByTireModifications) | **GET** /by_tire/search/modifications/ | Search by Metric Tire
[**sectionWidths**](SearchByMetricTireApi.md#sectionWidths) | **GET** /by_tire/sw/ | List section widths (mm)


# **aspectRatio**
> \WheelSizeApiClient\Model\AspectRatioMetricReportOutput aspectRatio($section_width, $region, $ordering)

List aspect ratios

Returns aspect ratio values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByMetricTireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$section_width = 8.14; // float | **`Section width`** is the width of the tire in mm. You can use _**`GET /by_tire/sw/`**_ to get a list of available *`value`* values. (e.g. `225`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`value`*

try {
    $result = $apiInstance->aspectRatio($section_width, $region, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByMetricTireApi->aspectRatio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **section_width** | **float**| **&#x60;Section width&#x60;** is the width of the tire in mm. You can use _**&#x60;GET /by_tire/sw/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;225&#x60;) | [optional]
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;value&#x60;* | [optional]

### Return type

[**\WheelSizeApiClient\Model\AspectRatioMetricReportOutput**](../Model/AspectRatioMetricReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **diameters**
> \WheelSizeApiClient\Model\RimDiameterMetricReportOutput diameters($section_width, $aspect_ratio, $region, $ordering)

List rim diameters

Returns rim diameter values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByMetricTireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$section_width = 8.14; // float | **`Section width`** is the width of the tire in mm. You can use _**`GET /by_tire/sw/`**_ to get a list of available *`value`* values. (e.g. `225`)
$aspect_ratio = 56; // int | The **`Aspect ratio`** is indicated on the tire sidewall as a percentage. It's the height of the sidewall measured from wheel rim to top of the tread, expressed as a percentage of tire width. You can use _**`GET /by_tire/ar`**_ to get a list of available *`value`* values. (e.g. `50`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`value`*

try {
    $result = $apiInstance->diameters($section_width, $aspect_ratio, $region, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByMetricTireApi->diameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **section_width** | **float**| **&#x60;Section width&#x60;** is the width of the tire in mm. You can use _**&#x60;GET /by_tire/sw/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;225&#x60;) | [optional]
 **aspect_ratio** | **int**| The **&#x60;Aspect ratio&#x60;** is indicated on the tire sidewall as a percentage. It&#39;s the height of the sidewall measured from wheel rim to top of the tread, expressed as a percentage of tire width. You can use _**&#x60;GET /by_tire/ar&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;50&#x60;) | [optional]
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;value&#x60;* | [optional]

### Return type

[**\WheelSizeApiClient\Model\RimDiameterMetricReportOutput**](../Model/RimDiameterMetricReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchByTire**
> \WheelSizeApiClient\Model\SearchByMetricTireCarReportOutput searchByTire($section_width, $aspect_ratio, $rim_diameter, $region, $mode, $ordering)

Search by Metric Tire

Returns a list of cars with the specified parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByMetricTireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$section_width = 225; // float | **`Section width`** is the width of the tire in mm. You can use _**`GET /by_tire/sw/`**_ to get a list of available *`value`* values. (e.g. `225`)
$aspect_ratio = 50; // int | The **`Aspect ratio`** is indicated on the tire sidewall as a percentage. It's the height of the sidewall measured from wheel rim to top of the tread, expressed as a percentage of tire width. You can use _**`GET /by_tire/ar`**_ to get a list of available *`value`* values. (e.g. `50`)
$rim_diameter = 19; // float | Rim **`diameter`** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**`GET /by_tire/rd`**_ to get a list of available *`value`* values. (e.g. `19`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$mode = "mode_example"; // string | The **`Mode`** is used to set the search mode for data on the axes of wheelpairs. By default, the search uses the axles of the front and rear wheelset. **`Mode`** possible values: __*`both`*__, __*`front_only`*__ or __*`rear_only`*__. (e.g. `both`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`make`*, *`model`*

try {
    $result = $apiInstance->searchByTire($section_width, $aspect_ratio, $rim_diameter, $region, $mode, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByMetricTireApi->searchByTire: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **section_width** | **float**| **&#x60;Section width&#x60;** is the width of the tire in mm. You can use _**&#x60;GET /by_tire/sw/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;225&#x60;) |
 **aspect_ratio** | **int**| The **&#x60;Aspect ratio&#x60;** is indicated on the tire sidewall as a percentage. It&#39;s the height of the sidewall measured from wheel rim to top of the tread, expressed as a percentage of tire width. You can use _**&#x60;GET /by_tire/ar&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;50&#x60;) |
 **rim_diameter** | **float**| Rim **&#x60;diameter&#x60;** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**&#x60;GET /by_tire/rd&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;19&#x60;) |
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **mode** | **string**| The **&#x60;Mode&#x60;** is used to set the search mode for data on the axes of wheelpairs. By default, the search uses the axles of the front and rear wheelset. **&#x60;Mode&#x60;** possible values: __*&#x60;both&#x60;*__, __*&#x60;front_only&#x60;*__ or __*&#x60;rear_only&#x60;*__. (e.g. &#x60;both&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;make&#x60;*, *&#x60;model&#x60;* | [optional]

### Return type

[**\WheelSizeApiClient\Model\SearchByMetricTireCarReportOutput**](../Model/SearchByMetricTireCarReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchByTireModifications**
> \WheelSizeApiClient\Model\SearchByMetricTireModificationReportOutput searchByTireModifications($make, $model, $section_width, $aspect_ratio, $rim_diameter, $region, $mode, $ordering, $limit, $offset)

Search by Metric Tire

Returns detailed information about vehicle modifications with specified rim parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByMetricTireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$make = "mitsubishi"; // string | A car's **`Make`** is the brand of the vehicle. You can use _**`GET /makes/`**_ to get a list of available *`slug`* values. (e.g. `mitsubishi`)
$model = "outlander"; // string | The particular **`Model`** of the brand. You can use _**`GET /models/`**_ to get a list of available *`slug`* values. (e.g. `outlander`)
$section_width = 225; // float | **`Section width`** is the width of the tire in mm. You can use _**`GET /by_tire/sw/`**_ to get a list of available *`value`* values. (e.g. `225`)
$aspect_ratio = 50; // int | The **`Aspect ratio`** is indicated on the tire sidewall as a percentage. It's the height of the sidewall measured from wheel rim to top of the tread, expressed as a percentage of tire width. You can use _**`GET /by_tire/ar/`**_ to get a list of available *`value`* values. (e.g. `50`)
$rim_diameter = 19; // float | Rim **`diameter`** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**`GET /by_tire/rd/`**_ to get a list of available *`value`* values. (e.g. `19`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$mode = "mode_example"; // string | The **`Mode`** is used to set the search mode for data on the axes of wheelpairs. By default, the search uses the axles of the front and rear wheelset. **`Mode`** possible values: __*`both`*__, __*`front_only`*__ or __*`rear_only`*__. (e.g. `both`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`make`*, *`model`*, *`trim`*, *`start_year`*, *`end_year`*
$limit = 50; // int | 
$offset = 0; // int | 

try {
    $result = $apiInstance->searchByTireModifications($make, $model, $section_width, $aspect_ratio, $rim_diameter, $region, $mode, $ordering, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByMetricTireApi->searchByTireModifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **make** | **string**| A car&#39;s **&#x60;Make&#x60;** is the brand of the vehicle. You can use _**&#x60;GET /makes/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;mitsubishi&#x60;) |
 **model** | **string**| The particular **&#x60;Model&#x60;** of the brand. You can use _**&#x60;GET /models/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;outlander&#x60;) |
 **section_width** | **float**| **&#x60;Section width&#x60;** is the width of the tire in mm. You can use _**&#x60;GET /by_tire/sw/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;225&#x60;) |
 **aspect_ratio** | **int**| The **&#x60;Aspect ratio&#x60;** is indicated on the tire sidewall as a percentage. It&#39;s the height of the sidewall measured from wheel rim to top of the tread, expressed as a percentage of tire width. You can use _**&#x60;GET /by_tire/ar/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;50&#x60;) |
 **rim_diameter** | **float**| Rim **&#x60;diameter&#x60;** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**&#x60;GET /by_tire/rd/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;19&#x60;) |
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **mode** | **string**| The **&#x60;Mode&#x60;** is used to set the search mode for data on the axes of wheelpairs. By default, the search uses the axles of the front and rear wheelset. **&#x60;Mode&#x60;** possible values: __*&#x60;both&#x60;*__, __*&#x60;front_only&#x60;*__ or __*&#x60;rear_only&#x60;*__. (e.g. &#x60;both&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;make&#x60;*, *&#x60;model&#x60;*, *&#x60;trim&#x60;*, *&#x60;start_year&#x60;*, *&#x60;end_year&#x60;* | [optional]
 **limit** | **int**|  | [optional] [default to 50]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

[**\WheelSizeApiClient\Model\SearchByMetricTireModificationReportOutput**](../Model/SearchByMetricTireModificationReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sectionWidths**
> \WheelSizeApiClient\Model\SectionWidthMetricReportOutput sectionWidths($region, $ordering)

List section widths (mm)

Returns section width values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByMetricTireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`value`*

try {
    $result = $apiInstance->sectionWidths($region, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByMetricTireApi->sectionWidths: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;value&#x60;* | [optional]

### Return type

[**\WheelSizeApiClient\Model\SectionWidthMetricReportOutput**](../Model/SectionWidthMetricReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

