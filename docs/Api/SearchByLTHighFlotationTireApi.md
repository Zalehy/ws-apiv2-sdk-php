# WheelSizeApiClient\SearchByLTHighFlotationTireApi

All URIs are relative to *https://api.wheel-size.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**hfOverallDiameters**](SearchByLTHighFlotationTireApi.md#hfOverallDiameters) | **GET** /by_hf_tire/od/ | List overall diameters
[**hfRimDiameters**](SearchByLTHighFlotationTireApi.md#hfRimDiameters) | **GET** /by_hf_tire/rd/ | List rim diameters
[**hfSearchByTire**](SearchByLTHighFlotationTireApi.md#hfSearchByTire) | **GET** /by_hf_tire/search/ | Search by LT High Flotation Tire
[**hfSearchByTireModifications**](SearchByLTHighFlotationTireApi.md#hfSearchByTireModifications) | **GET** /by_hf_tire/search/modifications/ | Search by LT High Flotation Tire
[**hfSectionWidths**](SearchByLTHighFlotationTireApi.md#hfSectionWidths) | **GET** /by_hf_tire/sw/ | List section widths (inches)


# **hfOverallDiameters**
> \WheelSizeApiClient\Model\OverallDiameterReportOutput hfOverallDiameters($region, $ordering)

List overall diameters

Returns overall diameter values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByLTHighFlotationTireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`value`*

try {
    $result = $apiInstance->hfOverallDiameters($region, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByLTHighFlotationTireApi->hfOverallDiameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;value&#x60;* | [optional]

### Return type

[**\WheelSizeApiClient\Model\OverallDiameterReportOutput**](../Model/OverallDiameterReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hfRimDiameters**
> \WheelSizeApiClient\Model\RimDiameterReportOutput hfRimDiameters($overall_diameter, $section_width, $region, $ordering)

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

$apiInstance = new WheelSizeApiClient\Api\SearchByLTHighFlotationTireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$overall_diameter = 8.14; // float | **`Overall diameter`** is the diameter of the inflated tire without any load, inches. You can use _**`GET /by_hf_tire/od/`**_ to get a list of available *`value`* values. (e.g. `37`)
$section_width = 8.14; // float | **`Section width`** is the width of the tire in inches. You can use _**`GET /by_hf_tire/sw/`**_ to get a list of available *`value`* values. (e.g. `12.5`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`value`*

try {
    $result = $apiInstance->hfRimDiameters($overall_diameter, $section_width, $region, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByLTHighFlotationTireApi->hfRimDiameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **overall_diameter** | **float**| **&#x60;Overall diameter&#x60;** is the diameter of the inflated tire without any load, inches. You can use _**&#x60;GET /by_hf_tire/od/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;37&#x60;) | [optional]
 **section_width** | **float**| **&#x60;Section width&#x60;** is the width of the tire in inches. You can use _**&#x60;GET /by_hf_tire/sw/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;12.5&#x60;) | [optional]
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;value&#x60;* | [optional]

### Return type

[**\WheelSizeApiClient\Model\RimDiameterReportOutput**](../Model/RimDiameterReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hfSearchByTire**
> \WheelSizeApiClient\Model\SearchByHFTireCarReportOutput hfSearchByTire($overall_diameter, $section_width, $rim_diameter, $mode, $region, $ordering)

Search by LT High Flotation Tire

Returns a list of cars with the specified parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByLTHighFlotationTireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$overall_diameter = 37; // float | **`Overall diameter`** is the diameter of the inflated tire without any load, inches. You can use _**`GET /by_hf_tire/od/`**_ to get a list of available *`value`* values. (e.g. `37`)
$section_width = 12.5; // float | **`Section width`** is the width of the tire in inches. You can use _**`GET /by_hf_tire/sw/`**_ to get a list of available *`value`* values. (e.g. `12.5`)
$rim_diameter = 16.5; // float | Rim **`diameter`** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**`GET /by_hf_tire/rd/`**_ to get a list of available *`value`* values. (e.g. `16.5`)
$mode = "mode_example"; // string | The **`Mode`** is used to set the search mode for data on the axes of wheelpairs. By default, the search uses the axles of the front and rear wheelset. **`Mode`** possible values: __*`both`*__, __*`front_only`*__ or __*`rear_only`*__. (e.g. `both`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`make`*, *`model`*

try {
    $result = $apiInstance->hfSearchByTire($overall_diameter, $section_width, $rim_diameter, $mode, $region, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByLTHighFlotationTireApi->hfSearchByTire: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **overall_diameter** | **float**| **&#x60;Overall diameter&#x60;** is the diameter of the inflated tire without any load, inches. You can use _**&#x60;GET /by_hf_tire/od/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;37&#x60;) |
 **section_width** | **float**| **&#x60;Section width&#x60;** is the width of the tire in inches. You can use _**&#x60;GET /by_hf_tire/sw/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;12.5&#x60;) |
 **rim_diameter** | **float**| Rim **&#x60;diameter&#x60;** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**&#x60;GET /by_hf_tire/rd/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;16.5&#x60;) |
 **mode** | **string**| The **&#x60;Mode&#x60;** is used to set the search mode for data on the axes of wheelpairs. By default, the search uses the axles of the front and rear wheelset. **&#x60;Mode&#x60;** possible values: __*&#x60;both&#x60;*__, __*&#x60;front_only&#x60;*__ or __*&#x60;rear_only&#x60;*__. (e.g. &#x60;both&#x60;) | [optional]
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;make&#x60;*, *&#x60;model&#x60;* | [optional]

### Return type

[**\WheelSizeApiClient\Model\SearchByHFTireCarReportOutput**](../Model/SearchByHFTireCarReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hfSearchByTireModifications**
> \WheelSizeApiClient\Model\SearchByHFTireModificationReportOutput hfSearchByTireModifications($overall_diameter, $section_width, $rim_diameter, $make, $model, $mode, $region, $ordering, $limit, $offset)

Search by LT High Flotation Tire

Returns detailed information about vehicle modifications with specified rim parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByLTHighFlotationTireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$overall_diameter = 37; // float | **`Overall diameter`** is the diameter of the inflated tire without any load, inches. You can use _**`GET /by_hf_tire/od/`**_ to get a list of available *`value`* values. (e.g. `37`)
$section_width = 12.5; // float | **`Section width`** is the width of the tire in inches. You can use _**`GET /by_hf_tire/sw/`**_ to get a list of available *`value`* values. (e.g. `12.5`)
$rim_diameter = 16.5; // float | Rim **`diameter`** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**`GET /by_hf_tire/rd/`**_ to get a list of available *`value`* values. (e.g. `16.5`)
$make = "hummer"; // string | A car's **`Make`** is the brand of the vehicle. You can use _**`GET /makes/`**_ to get a list of available *`slug`* values. (e.g. `hummer`)
$model = "h1"; // string | The particular **`Model`** of the brand. You can use _**`GET /models/`**_ to get a list of available *`slug`* values. (e.g. `h1`)
$mode = "mode_example"; // string | The **`Mode`** is used to set the search mode for data on the axes of wheelpairs. By default, the search uses the axles of the front and rear wheelset. **`Mode`** possible values: __*`both`*__, __*`front_only`*__ or __*`rear_only`*__. (e.g. `both`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`make`*, *`model`*, *`trim`*, *`start_year`*, *`end_year`*
$limit = 50; // int | 
$offset = 0; // int | 

try {
    $result = $apiInstance->hfSearchByTireModifications($overall_diameter, $section_width, $rim_diameter, $make, $model, $mode, $region, $ordering, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByLTHighFlotationTireApi->hfSearchByTireModifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **overall_diameter** | **float**| **&#x60;Overall diameter&#x60;** is the diameter of the inflated tire without any load, inches. You can use _**&#x60;GET /by_hf_tire/od/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;37&#x60;) |
 **section_width** | **float**| **&#x60;Section width&#x60;** is the width of the tire in inches. You can use _**&#x60;GET /by_hf_tire/sw/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;12.5&#x60;) |
 **rim_diameter** | **float**| Rim **&#x60;diameter&#x60;** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**&#x60;GET /by_hf_tire/rd/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;16.5&#x60;) |
 **make** | **string**| A car&#39;s **&#x60;Make&#x60;** is the brand of the vehicle. You can use _**&#x60;GET /makes/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;hummer&#x60;) |
 **model** | **string**| The particular **&#x60;Model&#x60;** of the brand. You can use _**&#x60;GET /models/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;h1&#x60;) |
 **mode** | **string**| The **&#x60;Mode&#x60;** is used to set the search mode for data on the axes of wheelpairs. By default, the search uses the axles of the front and rear wheelset. **&#x60;Mode&#x60;** possible values: __*&#x60;both&#x60;*__, __*&#x60;front_only&#x60;*__ or __*&#x60;rear_only&#x60;*__. (e.g. &#x60;both&#x60;) | [optional]
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;make&#x60;*, *&#x60;model&#x60;*, *&#x60;trim&#x60;*, *&#x60;start_year&#x60;*, *&#x60;end_year&#x60;* | [optional]
 **limit** | **int**|  | [optional] [default to 50]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

[**\WheelSizeApiClient\Model\SearchByHFTireModificationReportOutput**](../Model/SearchByHFTireModificationReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hfSectionWidths**
> \WheelSizeApiClient\Model\SectionWidthReportOutput hfSectionWidths($overall_diameter, $region, $ordering)

List section widths (inches)

Returns section width values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByLTHighFlotationTireApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$overall_diameter = 8.14; // float | **`Overall diameter`** is the diameter of the inflated tire without any load, inches. You can use _**`GET /by_hf_tire/od/`**_ to get a list of available *`value`* values. (e.g. `37`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`value`*

try {
    $result = $apiInstance->hfSectionWidths($overall_diameter, $region, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByLTHighFlotationTireApi->hfSectionWidths: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **overall_diameter** | **float**| **&#x60;Overall diameter&#x60;** is the diameter of the inflated tire without any load, inches. You can use _**&#x60;GET /by_hf_tire/od/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;37&#x60;) | [optional]
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;value&#x60;* | [optional]

### Return type

[**\WheelSizeApiClient\Model\SectionWidthReportOutput**](../Model/SectionWidthReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

