# WheelSizeApiClient\SearchByRimApi

All URIs are relative to *https://api.wheel-size.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**boltPatterns**](SearchByRimApi.md#boltPatterns) | **GET** /by_rim/bp/ | List rim bolt patterns
[**centreBores**](SearchByRimApi.md#centreBores) | **GET** /by_rim/cb/ | List rim centre bores
[**diameters**](SearchByRimApi.md#diameters) | **GET** /by_rim/rd/ | List rim diameters
[**offsets**](SearchByRimApi.md#offsets) | **GET** /by_rim/of/ | List rim offsets
[**searchByRim**](SearchByRimApi.md#searchByRim) | **GET** /by_rim/search/ | Search by rim
[**searchByRimModifications**](SearchByRimApi.md#searchByRimModifications) | **GET** /by_rim/search/modifications/ | Search by rim modifications
[**widths**](SearchByRimApi.md#widths) | **GET** /by_rim/rw/ | List rim widths


# **boltPatterns**
> \WheelSizeApiClient\Model\BoltPatternReportOutput boltPatterns($rim_diameter, $rim_width, $rim_offset_min, $rim_offset_max, $cb_min, $cb_max, $stud_holes, $pcd, $region, $ordering)

List rim bolt patterns

Returns rim bolt pattern values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByRimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rim_diameter = 8.14; // float | Rim **`diameter`** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**`GET /by_rim/rd/`**_ to get a list of available *`value`* values. (e.g. `19`)
$rim_width = 8.14; // float | Rim **`width`** is the distance measured in inches from bead seat to bead seat. You can use _**`GET /by_rim/rw/`**_ to get a list of available *`value`* values. (e.g. `7.5`)
$rim_offset_min = 56; // int | Minimum rim **`offset`** value.  If set, **`rim_offset`** value should be empty and **`rim_offset_max`** should be defined.  Value difference between **`rim_offset_max`** and **`rim_offset_min`** must be equal to or less than 50. (e.g. `33`)
$rim_offset_max = 56; // int | Maximum rim **`offset`** value.  If set, **`rim_offset`** value should be empty and **`rim_offset_min`** should be defined.  Value difference between **`rim_offset_max`** and **`rim_offset_min`** must be equal to or less than 50. (e.g. `53`)
$cb_min = 8.14; // float | Minimum **`centre bore`** value.  If set, **`cb`** value should be empty and **`cb_max`** should be defined.  Value difference between **`cb_max`** and **`cb_min`** must be equal to or less than 50. (e.g. `60`)
$cb_max = 8.14; // float | Maximum **`centre bore`** value.  If set, **`cb`** value should be empty and **`cb_min`** should be defined.  Value difference between **`cb_max`** and **`cb_min`** must be equal to or less than 50. (e.g. `75`)
$stud_holes = 56; // int | **`Stud holes`** are the holes that the center cap covers, in which lug nuts go into to hold the wheel together.  Wheels can have __*`4`*__, __*`5`*__, __*`6`*__, or __*`8`*__ stud holes. (e.g. `5`)
$pcd = 8.14; // float | Pitch circle diameter, mm (e.g. `115`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`value`*

try {
    $result = $apiInstance->boltPatterns($rim_diameter, $rim_width, $rim_offset_min, $rim_offset_max, $cb_min, $cb_max, $stud_holes, $pcd, $region, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByRimApi->boltPatterns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rim_diameter** | **float**| Rim **&#x60;diameter&#x60;** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**&#x60;GET /by_rim/rd/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;19&#x60;) | [optional]
 **rim_width** | **float**| Rim **&#x60;width&#x60;** is the distance measured in inches from bead seat to bead seat. You can use _**&#x60;GET /by_rim/rw/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;7.5&#x60;) | [optional]
 **rim_offset_min** | **int**| Minimum rim **&#x60;offset&#x60;** value.  If set, **&#x60;rim_offset&#x60;** value should be empty and **&#x60;rim_offset_max&#x60;** should be defined.  Value difference between **&#x60;rim_offset_max&#x60;** and **&#x60;rim_offset_min&#x60;** must be equal to or less than 50. (e.g. &#x60;33&#x60;) | [optional]
 **rim_offset_max** | **int**| Maximum rim **&#x60;offset&#x60;** value.  If set, **&#x60;rim_offset&#x60;** value should be empty and **&#x60;rim_offset_min&#x60;** should be defined.  Value difference between **&#x60;rim_offset_max&#x60;** and **&#x60;rim_offset_min&#x60;** must be equal to or less than 50. (e.g. &#x60;53&#x60;) | [optional]
 **cb_min** | **float**| Minimum **&#x60;centre bore&#x60;** value.  If set, **&#x60;cb&#x60;** value should be empty and **&#x60;cb_max&#x60;** should be defined.  Value difference between **&#x60;cb_max&#x60;** and **&#x60;cb_min&#x60;** must be equal to or less than 50. (e.g. &#x60;60&#x60;) | [optional]
 **cb_max** | **float**| Maximum **&#x60;centre bore&#x60;** value.  If set, **&#x60;cb&#x60;** value should be empty and **&#x60;cb_min&#x60;** should be defined.  Value difference between **&#x60;cb_max&#x60;** and **&#x60;cb_min&#x60;** must be equal to or less than 50. (e.g. &#x60;75&#x60;) | [optional]
 **stud_holes** | **int**| **&#x60;Stud holes&#x60;** are the holes that the center cap covers, in which lug nuts go into to hold the wheel together.  Wheels can have __*&#x60;4&#x60;*__, __*&#x60;5&#x60;*__, __*&#x60;6&#x60;*__, or __*&#x60;8&#x60;*__ stud holes. (e.g. &#x60;5&#x60;) | [optional]
 **pcd** | **float**| Pitch circle diameter, mm (e.g. &#x60;115&#x60;) | [optional]
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;value&#x60;* | [optional]

### Return type

[**\WheelSizeApiClient\Model\BoltPatternReportOutput**](../Model/BoltPatternReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **centreBores**
> \WheelSizeApiClient\Model\CentreBoreReportOutput centreBores($rim_diameter, $rim_width, $rim_offset, $rim_offset_min, $rim_offset_max, $bolt_pattern, $region, $ordering)

List rim centre bores

Returns rim centre bore values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByRimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rim_diameter = 8.14; // float | Rim **`diameter`** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**`GET /by_rim/rd/`**_ to get a list of available *`value`* values. (e.g. `19`)
$rim_width = 8.14; // float | Rim **`width`** is the distance measured in inches from bead seat to bead seat. You can use _**`GET /by_rim/rw/`**_ to get a list of available *`value`* values. (e.g. `7.5`)
$rim_offset = 56; // int | Rim **`offset`** is a distance between wheel mounting surface where it is bolted to hub and the centerline of rim. You can use _**`GET /by_rim/of/`**_ to get a list of available *`value`* values. (e.g. `38`)
$rim_offset_min = 56; // int | Minimum rim **`offset`** value.  If set, **`rim_offset`** value should be empty and **`rim_offset_max`** should be defined.  Value difference between **`rim_offset_max`** and **`rim_offset_min`** must be equal to or less than 50. (e.g. `33`)
$rim_offset_max = 56; // int | Maximum rim **`offset`** value.  If set, **`rim_offset`** value should be empty and **`rim_offset_min`** should be defined.  Value difference between **`rim_offset_max`** and **`rim_offset_min`** must be equal to or less than 50. (e.g. `53`)
$bolt_pattern = "bolt_pattern_example"; // string | **`Bolt pattern`** is expressed as the number of lugs by the diameter of an imaginary circle formed by the centers of the wheel lugs. You can use _**`GET /by_rim/bp/`**_ to get a list of available *`value`* values. (e.g. `5x114.3`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`value`*

try {
    $result = $apiInstance->centreBores($rim_diameter, $rim_width, $rim_offset, $rim_offset_min, $rim_offset_max, $bolt_pattern, $region, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByRimApi->centreBores: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rim_diameter** | **float**| Rim **&#x60;diameter&#x60;** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**&#x60;GET /by_rim/rd/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;19&#x60;) | [optional]
 **rim_width** | **float**| Rim **&#x60;width&#x60;** is the distance measured in inches from bead seat to bead seat. You can use _**&#x60;GET /by_rim/rw/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;7.5&#x60;) | [optional]
 **rim_offset** | **int**| Rim **&#x60;offset&#x60;** is a distance between wheel mounting surface where it is bolted to hub and the centerline of rim. You can use _**&#x60;GET /by_rim/of/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;38&#x60;) | [optional]
 **rim_offset_min** | **int**| Minimum rim **&#x60;offset&#x60;** value.  If set, **&#x60;rim_offset&#x60;** value should be empty and **&#x60;rim_offset_max&#x60;** should be defined.  Value difference between **&#x60;rim_offset_max&#x60;** and **&#x60;rim_offset_min&#x60;** must be equal to or less than 50. (e.g. &#x60;33&#x60;) | [optional]
 **rim_offset_max** | **int**| Maximum rim **&#x60;offset&#x60;** value.  If set, **&#x60;rim_offset&#x60;** value should be empty and **&#x60;rim_offset_min&#x60;** should be defined.  Value difference between **&#x60;rim_offset_max&#x60;** and **&#x60;rim_offset_min&#x60;** must be equal to or less than 50. (e.g. &#x60;53&#x60;) | [optional]
 **bolt_pattern** | **string**| **&#x60;Bolt pattern&#x60;** is expressed as the number of lugs by the diameter of an imaginary circle formed by the centers of the wheel lugs. You can use _**&#x60;GET /by_rim/bp/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;5x114.3&#x60;) | [optional]
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;value&#x60;* | [optional]

### Return type

[**\WheelSizeApiClient\Model\CentreBoreReportOutput**](../Model/CentreBoreReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **diameters**
> \WheelSizeApiClient\Model\DiameterReportOutput diameters($bolt_pattern, $region, $ordering)

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

$apiInstance = new WheelSizeApiClient\Api\SearchByRimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bolt_pattern = "bolt_pattern_example"; // string | **`Bolt pattern`** is expressed as the number of lugs by the diameter of an imaginary circle formed by the centers of the wheel lugs. You can use _**`GET /by_rim/bp/`**_ to get a list of available *`value`* values. (e.g. `5x114.3`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`value`*

try {
    $result = $apiInstance->diameters($bolt_pattern, $region, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByRimApi->diameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bolt_pattern** | **string**| **&#x60;Bolt pattern&#x60;** is expressed as the number of lugs by the diameter of an imaginary circle formed by the centers of the wheel lugs. You can use _**&#x60;GET /by_rim/bp/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;5x114.3&#x60;) | [optional]
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;value&#x60;* | [optional]

### Return type

[**\WheelSizeApiClient\Model\DiameterReportOutput**](../Model/DiameterReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **offsets**
> \WheelSizeApiClient\Model\OffsetReportOutput offsets($rim_diameter, $rim_width, $bolt_pattern, $region, $ordering)

List rim offsets

Returns rim offset values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByRimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rim_diameter = 8.14; // float | Rim **`diameter`** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**`GET /by_rim/rd/`**_ to get a list of available *`value`* values. (e.g. `19`)
$rim_width = 8.14; // float | Rim **`width`** is the distance measured in inches from bead seat to bead seat. You can use _**`GET /by_rim/rw/`**_ to get a list of available *`value`* values. (e.g. `7.5`)
$bolt_pattern = "bolt_pattern_example"; // string | **`Bolt pattern`** is expressed as the number of lugs by the diameter of an imaginary circle formed by the centers of the wheel lugs. You can use _**`GET /by_rim/bp/`**_ to get a list of available *`value`* values. (e.g. `5x114.3`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`value`*

try {
    $result = $apiInstance->offsets($rim_diameter, $rim_width, $bolt_pattern, $region, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByRimApi->offsets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rim_diameter** | **float**| Rim **&#x60;diameter&#x60;** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**&#x60;GET /by_rim/rd/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;19&#x60;) | [optional]
 **rim_width** | **float**| Rim **&#x60;width&#x60;** is the distance measured in inches from bead seat to bead seat. You can use _**&#x60;GET /by_rim/rw/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;7.5&#x60;) | [optional]
 **bolt_pattern** | **string**| **&#x60;Bolt pattern&#x60;** is expressed as the number of lugs by the diameter of an imaginary circle formed by the centers of the wheel lugs. You can use _**&#x60;GET /by_rim/bp/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;5x114.3&#x60;) | [optional]
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;value&#x60;* | [optional]

### Return type

[**\WheelSizeApiClient\Model\OffsetReportOutput**](../Model/OffsetReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchByRim**
> \WheelSizeApiClient\Model\SearchByRimCarReportOutput searchByRim($bolt_pattern, $rim_diameter, $rim_width, $rim_width_min, $rim_width_max, $rim_offset, $rim_offset_min, $rim_offset_max, $cb, $cb_min, $cb_max, $region, $mode, $add_configurator, $configurator, $ordering)

Search by rim

Retrieve a list of car models (along with their production years) compatible with a specified rim.   Enhance the rim description with this compatibility list, offering customers a comprehensive view  of all the car models that can accommodate this particular rim.  ### Demos in action:    - Enrich your product card by showing matching vehicles [Info](https://api-demo.wheel-size.com/info/by_rim/)    - Search for cars by rim parameters [Form](https://api-demo.wheel-size.com/form/by_rim/)    - Wheel Configurator Demo [Product Page](https://api-demo.wheel-size.com/configurator/by_rim/)   ### Required parameters:     - *`bolt_pattern`*;    - *`rim_diameter`*;    - *`rim_width`* or range combination: *`rim_width_min`* and *`rim_width_max`*;  Note:  if all three values are set (*`rim_width`*, *`rim_width_min`*, *`rim_width_max`*), an error occurs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByRimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bolt_pattern = "5x114.3"; // string | **`Bolt pattern`** is expressed as the number of lugs by the diameter of an imaginary circle formed by the centers of the wheel lugs. You can use _**`GET /by_rim/bp/`**_ to get a list of available *`value`* values. (e.g. `5x114.3`)
$rim_diameter = 19; // float | Rim **`diameter`** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**`GET /by_rim/rd/`**_ to get a list of available *`value`* values. (e.g. `19`)
$rim_width = 8.14; // float | Rim **`width`** is the distance measured in inches from bead seat to bead seat. You can use _**`GET /by_rim/rw/`**_ to get a list of available *`value`* values. (e.g. `7.5`)
$rim_width_min = 8.14; // float | Minimum rim **`width`** value.  If set, **`rim_width`** value should be empty and **`rim_width_max`** should be defined.  Value difference between **`rim_width_max`** and **`rim_width_min`** must be equal to or less than 2.0. (e.g. `7.0`)
$rim_width_max = 8.14; // float | Maximum rim **`width`** value.  If set, **`rim_width`** value should be empty and **`rim_width_min`** should be defined.  Value difference between **`rim_width_max`** and **`rim_width_min`** must be equal to or less than 2.0. (e.g. `8.0`)
$rim_offset = 56; // int | Rim **`offset`** is a distance between wheel mounting surface where it is bolted to hub and the centerline of rim. You can use _**`GET /by_rim/of/`**_ to get a list of available *`value`* values. (e.g. `38`)
$rim_offset_min = 56; // int | Minimum rim **`offset`** value.  If set, **`rim_offset`** value should be empty and **`rim_offset_max`** should be defined.  Value difference between **`rim_offset_max`** and **`rim_offset_min`** must be equal to or less than 50. (e.g. `33`)
$rim_offset_max = 56; // int | Maximum rim **`offset`** value.  If set, **`rim_offset`** value should be empty and **`rim_offset_min`** should be defined.  Value difference between **`rim_offset_max`** and **`rim_offset_min`** must be equal to or less than 50. (e.g. `53`)
$cb = 8.14; // float | Centre bore value, mm (e.g. `60`)
$cb_min = 8.14; // float | Minimum **`centre bore`** value.  If set, **`cb`** value should be empty and **`cb_max`** should be defined.  Value difference between **`cb_max`** and **`cb_min`** must be equal to or less than 50. (e.g. `60`)
$cb_max = 8.14; // float | Maximum **`centre bore`** value.  If set, **`cb`** value should be empty and **`cb_min`** should be defined.  Value difference between **`cb_max`** and **`cb_min`** must be equal to or less than 50. (e.g. `75`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$mode = "mode_example"; // string | The **`Mode`** is used to set the search mode for data on the axes of wheelpairs. By default, the search uses the axles of the front and rear wheelset. **`Mode`** possible values: __*`both`*__, __*`front_only`*__ or __*`rear_only`*__. (e.g. `both`)
$add_configurator = true; // bool | Optional parameter for Wheel Configurator API specifics.  If set to true, information on linked Wheel Configurator templates will be included. (e.g. `true`)
$configurator = true; // bool | Optional parameter for Wheel Configurator API specifics.  If set to true, car models without linked Wheel Configurator templates will be omitted from the results. (e.g. `true`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`make`*, *`model`*

try {
    $result = $apiInstance->searchByRim($bolt_pattern, $rim_diameter, $rim_width, $rim_width_min, $rim_width_max, $rim_offset, $rim_offset_min, $rim_offset_max, $cb, $cb_min, $cb_max, $region, $mode, $add_configurator, $configurator, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByRimApi->searchByRim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bolt_pattern** | **string**| **&#x60;Bolt pattern&#x60;** is expressed as the number of lugs by the diameter of an imaginary circle formed by the centers of the wheel lugs. You can use _**&#x60;GET /by_rim/bp/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;5x114.3&#x60;) |
 **rim_diameter** | **float**| Rim **&#x60;diameter&#x60;** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**&#x60;GET /by_rim/rd/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;19&#x60;) |
 **rim_width** | **float**| Rim **&#x60;width&#x60;** is the distance measured in inches from bead seat to bead seat. You can use _**&#x60;GET /by_rim/rw/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;7.5&#x60;) | [optional]
 **rim_width_min** | **float**| Minimum rim **&#x60;width&#x60;** value.  If set, **&#x60;rim_width&#x60;** value should be empty and **&#x60;rim_width_max&#x60;** should be defined.  Value difference between **&#x60;rim_width_max&#x60;** and **&#x60;rim_width_min&#x60;** must be equal to or less than 2.0. (e.g. &#x60;7.0&#x60;) | [optional]
 **rim_width_max** | **float**| Maximum rim **&#x60;width&#x60;** value.  If set, **&#x60;rim_width&#x60;** value should be empty and **&#x60;rim_width_min&#x60;** should be defined.  Value difference between **&#x60;rim_width_max&#x60;** and **&#x60;rim_width_min&#x60;** must be equal to or less than 2.0. (e.g. &#x60;8.0&#x60;) | [optional]
 **rim_offset** | **int**| Rim **&#x60;offset&#x60;** is a distance between wheel mounting surface where it is bolted to hub and the centerline of rim. You can use _**&#x60;GET /by_rim/of/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;38&#x60;) | [optional]
 **rim_offset_min** | **int**| Minimum rim **&#x60;offset&#x60;** value.  If set, **&#x60;rim_offset&#x60;** value should be empty and **&#x60;rim_offset_max&#x60;** should be defined.  Value difference between **&#x60;rim_offset_max&#x60;** and **&#x60;rim_offset_min&#x60;** must be equal to or less than 50. (e.g. &#x60;33&#x60;) | [optional]
 **rim_offset_max** | **int**| Maximum rim **&#x60;offset&#x60;** value.  If set, **&#x60;rim_offset&#x60;** value should be empty and **&#x60;rim_offset_min&#x60;** should be defined.  Value difference between **&#x60;rim_offset_max&#x60;** and **&#x60;rim_offset_min&#x60;** must be equal to or less than 50. (e.g. &#x60;53&#x60;) | [optional]
 **cb** | **float**| Centre bore value, mm (e.g. &#x60;60&#x60;) | [optional]
 **cb_min** | **float**| Minimum **&#x60;centre bore&#x60;** value.  If set, **&#x60;cb&#x60;** value should be empty and **&#x60;cb_max&#x60;** should be defined.  Value difference between **&#x60;cb_max&#x60;** and **&#x60;cb_min&#x60;** must be equal to or less than 50. (e.g. &#x60;60&#x60;) | [optional]
 **cb_max** | **float**| Maximum **&#x60;centre bore&#x60;** value.  If set, **&#x60;cb&#x60;** value should be empty and **&#x60;cb_min&#x60;** should be defined.  Value difference between **&#x60;cb_max&#x60;** and **&#x60;cb_min&#x60;** must be equal to or less than 50. (e.g. &#x60;75&#x60;) | [optional]
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **mode** | **string**| The **&#x60;Mode&#x60;** is used to set the search mode for data on the axes of wheelpairs. By default, the search uses the axles of the front and rear wheelset. **&#x60;Mode&#x60;** possible values: __*&#x60;both&#x60;*__, __*&#x60;front_only&#x60;*__ or __*&#x60;rear_only&#x60;*__. (e.g. &#x60;both&#x60;) | [optional]
 **add_configurator** | **bool**| Optional parameter for Wheel Configurator API specifics.  If set to true, information on linked Wheel Configurator templates will be included. (e.g. &#x60;true&#x60;) | [optional]
 **configurator** | **bool**| Optional parameter for Wheel Configurator API specifics.  If set to true, car models without linked Wheel Configurator templates will be omitted from the results. (e.g. &#x60;true&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;make&#x60;*, *&#x60;model&#x60;* | [optional]

### Return type

[**\WheelSizeApiClient\Model\SearchByRimCarReportOutput**](../Model/SearchByRimCarReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchByRimModifications**
> \WheelSizeApiClient\Model\SearchByRimModificationReportOutput searchByRimModifications($make, $model, $bolt_pattern, $rim_diameter, $rim_width, $rim_width_min, $rim_width_max, $rim_offset, $rim_offset_min, $rim_offset_max, $cb, $cb_min, $cb_max, $region, $mode, $configurator, $ordering, $limit, $offset)

Search by rim modifications

Returns detailed information about vehicle modifications with specified rim parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByRimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$make = "mitsubishi"; // string | A car's **`Make`** is the brand of the vehicle. You can use _**`GET /makes/`**_ to get a list of available *`slug`* values. (e.g. `mitsubishi`)
$model = "outlander"; // string | The particular **`Model`** of the brand. You can use _**`GET /models/`**_ to get a list of available *`slug`* values. (e.g. `outlander`)
$bolt_pattern = "5x114.3"; // string | **`Bolt pattern`** is expressed as the number of lugs by the diameter of an imaginary circle formed by the centers of the wheel lugs. You can use _**`GET /by_rim/bp/`**_ to get a list of available *`value`* values. (e.g. `5x114.3`)
$rim_diameter = 19; // float | Rim **`diameter`** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**`GET /by_rim/rd/`**_ to get a list of available *`value`* values. (e.g. `19`)
$rim_width = 7.5; // float | Rim **`width`** is the distance measured in inches from bead seat to bead seat. You can use _**`GET /by_rim/rw/`**_ to get a list of available *`value`* values. (e.g. `7.5`)
$rim_width_min = 8.14; // float | Minimum rim **`width`** value.  If set, **`rim_width`** value should be empty and **`rim_width_max`** should be defined.  Value difference between **`rim_width_max`** and **`rim_width_min`** must be equal to or less than 2.0. (e.g. `7.0`)
$rim_width_max = 8.14; // float | Maximum rim **`width`** value.  If set, **`rim_width`** value should be empty and **`rim_width_min`** should be defined.  Value difference between **`rim_width_max`** and **`rim_width_min`** must be equal to or less than 2.0. (e.g. `8.0`)
$rim_offset = 56; // int | Rim **`offset`** is a distance between wheel mounting surface where it is bolted to hub and the centerline of rim. You can use _**`GET /by_rim/of/`**_ to get a list of available *`value`* values. (e.g. `38`)
$rim_offset_min = 56; // int | Minimum rim **`offset`** value.  If set, **`rim_offset`** value should be empty and **`rim_offset_max`** should be defined.  Value difference between **`rim_offset_max`** and **`rim_offset_min`** must be equal to or less than 50. (e.g. `33`)
$rim_offset_max = 56; // int | Maximum rim **`offset`** value.  If set, **`rim_offset`** value should be empty and **`rim_offset_min`** should be defined.  Value difference between **`rim_offset_max`** and **`rim_offset_min`** must be equal to or less than 50. (e.g. `53`)
$cb = 8.14; // float | Centre bore value, mm (e.g. `60`)
$cb_min = 8.14; // float | Minimum **`centre bore`** value.  If set, **`cb`** value should be empty and **`cb_max`** should be defined.  Value difference between **`cb_max`** and **`cb_min`** must be equal to or less than 50. (e.g. `60`)
$cb_max = 8.14; // float | Maximum **`centre bore`** value.  If set, **`cb`** value should be empty and **`cb_min`** should be defined.  Value difference between **`cb_max`** and **`cb_min`** must be equal to or less than 50. (e.g. `75`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$mode = "mode_example"; // string | The **`Mode`** is used to set the search mode for data on the axes of wheelpairs. By default, the search uses the axles of the front and rear wheelset. **`Mode`** possible values: __*`both`*__, __*`front_only`*__ or __*`rear_only`*__. (e.g. `both`)
$configurator = 56; // int | 
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`make`*, *`model`*, *`trim`*, *`start_year`*, *`end_year`*
$limit = 50; // int | 
$offset = 0; // int | 

try {
    $result = $apiInstance->searchByRimModifications($make, $model, $bolt_pattern, $rim_diameter, $rim_width, $rim_width_min, $rim_width_max, $rim_offset, $rim_offset_min, $rim_offset_max, $cb, $cb_min, $cb_max, $region, $mode, $configurator, $ordering, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByRimApi->searchByRimModifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **make** | **string**| A car&#39;s **&#x60;Make&#x60;** is the brand of the vehicle. You can use _**&#x60;GET /makes/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;mitsubishi&#x60;) |
 **model** | **string**| The particular **&#x60;Model&#x60;** of the brand. You can use _**&#x60;GET /models/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;outlander&#x60;) |
 **bolt_pattern** | **string**| **&#x60;Bolt pattern&#x60;** is expressed as the number of lugs by the diameter of an imaginary circle formed by the centers of the wheel lugs. You can use _**&#x60;GET /by_rim/bp/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;5x114.3&#x60;) |
 **rim_diameter** | **float**| Rim **&#x60;diameter&#x60;** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**&#x60;GET /by_rim/rd/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;19&#x60;) |
 **rim_width** | **float**| Rim **&#x60;width&#x60;** is the distance measured in inches from bead seat to bead seat. You can use _**&#x60;GET /by_rim/rw/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;7.5&#x60;) |
 **rim_width_min** | **float**| Minimum rim **&#x60;width&#x60;** value.  If set, **&#x60;rim_width&#x60;** value should be empty and **&#x60;rim_width_max&#x60;** should be defined.  Value difference between **&#x60;rim_width_max&#x60;** and **&#x60;rim_width_min&#x60;** must be equal to or less than 2.0. (e.g. &#x60;7.0&#x60;) | [optional]
 **rim_width_max** | **float**| Maximum rim **&#x60;width&#x60;** value.  If set, **&#x60;rim_width&#x60;** value should be empty and **&#x60;rim_width_min&#x60;** should be defined.  Value difference between **&#x60;rim_width_max&#x60;** and **&#x60;rim_width_min&#x60;** must be equal to or less than 2.0. (e.g. &#x60;8.0&#x60;) | [optional]
 **rim_offset** | **int**| Rim **&#x60;offset&#x60;** is a distance between wheel mounting surface where it is bolted to hub and the centerline of rim. You can use _**&#x60;GET /by_rim/of/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;38&#x60;) | [optional]
 **rim_offset_min** | **int**| Minimum rim **&#x60;offset&#x60;** value.  If set, **&#x60;rim_offset&#x60;** value should be empty and **&#x60;rim_offset_max&#x60;** should be defined.  Value difference between **&#x60;rim_offset_max&#x60;** and **&#x60;rim_offset_min&#x60;** must be equal to or less than 50. (e.g. &#x60;33&#x60;) | [optional]
 **rim_offset_max** | **int**| Maximum rim **&#x60;offset&#x60;** value.  If set, **&#x60;rim_offset&#x60;** value should be empty and **&#x60;rim_offset_min&#x60;** should be defined.  Value difference between **&#x60;rim_offset_max&#x60;** and **&#x60;rim_offset_min&#x60;** must be equal to or less than 50. (e.g. &#x60;53&#x60;) | [optional]
 **cb** | **float**| Centre bore value, mm (e.g. &#x60;60&#x60;) | [optional]
 **cb_min** | **float**| Minimum **&#x60;centre bore&#x60;** value.  If set, **&#x60;cb&#x60;** value should be empty and **&#x60;cb_max&#x60;** should be defined.  Value difference between **&#x60;cb_max&#x60;** and **&#x60;cb_min&#x60;** must be equal to or less than 50. (e.g. &#x60;60&#x60;) | [optional]
 **cb_max** | **float**| Maximum **&#x60;centre bore&#x60;** value.  If set, **&#x60;cb&#x60;** value should be empty and **&#x60;cb_min&#x60;** should be defined.  Value difference between **&#x60;cb_max&#x60;** and **&#x60;cb_min&#x60;** must be equal to or less than 50. (e.g. &#x60;75&#x60;) | [optional]
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **mode** | **string**| The **&#x60;Mode&#x60;** is used to set the search mode for data on the axes of wheelpairs. By default, the search uses the axles of the front and rear wheelset. **&#x60;Mode&#x60;** possible values: __*&#x60;both&#x60;*__, __*&#x60;front_only&#x60;*__ or __*&#x60;rear_only&#x60;*__. (e.g. &#x60;both&#x60;) | [optional]
 **configurator** | **int**|  | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;make&#x60;*, *&#x60;model&#x60;*, *&#x60;trim&#x60;*, *&#x60;start_year&#x60;*, *&#x60;end_year&#x60;* | [optional]
 **limit** | **int**|  | [optional] [default to 50]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

[**\WheelSizeApiClient\Model\SearchByRimModificationReportOutput**](../Model/SearchByRimModificationReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **widths**
> \WheelSizeApiClient\Model\WidthReportOutput widths($rim_diameter, $bolt_pattern, $region, $ordering)

List rim widths

Returns rim width values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByRimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rim_diameter = 8.14; // float | Rim **`diameter`** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**`GET /by_rim/rd/`**_ to get a list of available *`value`* values. (e.g. `19`)
$bolt_pattern = "bolt_pattern_example"; // string | **`Bolt pattern`** is expressed as the number of lugs by the diameter of an imaginary circle formed by the centers of the wheel lugs. You can use _**`GET /by_rim/bp/`**_ to get a list of available *`value`* values. (e.g. `5x114.3`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`value`*

try {
    $result = $apiInstance->widths($rim_diameter, $bolt_pattern, $region, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByRimApi->widths: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rim_diameter** | **float**| Rim **&#x60;diameter&#x60;** is the distance measured in inches across the face of the wheel, from bead seat to bead seat. You can use _**&#x60;GET /by_rim/rd/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;19&#x60;) | [optional]
 **bolt_pattern** | **string**| **&#x60;Bolt pattern&#x60;** is expressed as the number of lugs by the diameter of an imaginary circle formed by the centers of the wheel lugs. You can use _**&#x60;GET /by_rim/bp/&#x60;**_ to get a list of available *&#x60;value&#x60;* values. (e.g. &#x60;5x114.3&#x60;) | [optional]
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;value&#x60;* | [optional]

### Return type

[**\WheelSizeApiClient\Model\WidthReportOutput**](../Model/WidthReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

