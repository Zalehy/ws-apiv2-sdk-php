# WheelSizeApiClient\WheelUpstepsApi

All URIs are relative to *https://api.wheel-size.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUpsteps**](WheelUpstepsApi.md#getUpsteps) | **GET** /upsteps/ | List rim and tire combinations


# **getUpsteps**
> \WheelSizeApiClient\Model\UpstepsReportOutput getUpsteps($rim_diameter, $rim_width, $rim_offset, $section_width, $aspect_ratio, $steps, $s_max, $do_max)

List rim and tire combinations

Get all possible rim and tire combinations based on pre-fitted original equipment (OE) wheel specs Note: we filter out unavailable options on the tire market from result.  #### Parameters:    - OE rim (Ex.: 17 ⨯ 7J ET45)    - OE ISO Metric tire (Ex.: 225/55 R17)    - number of steps to calculate plus (0..3) or minus (-3..0), by default +2    - tire section width - relative difference (0..25%), by default 10%    - tire overall diameter - relative difference(0..15%), by default 5%   #### Assumptions    - SAI, Steering-axis Inclination (kingpin inclination) angle is 18 degrees    - Camber Angle is 2 degrees with camber factor is 1 for all nominal aspect ratios  #### Calculation    We iterate over rim diameters, according to *`steps`* parameter provided, and through all aspect ratio and section width combinations available on the market.     We calculate the tire dimensions difference between the OE  and the iteration item.    If the permissible tolerance stays within *`s_max`* (section width max) and *`do_max`* (overall diameter max), we calculate wheel rim that can be fitted with this tire.    For the calculated wheel rims, the offset value is selected in such a way that the scrub radius remains identical to that of the OE wheel rim.  #### Materials used for calculation    - ISO 4000-1 (11 edition) Passenger car tyres and rims / Tyres (metric series)    - ISO 4000-2 (5 edition) Passenger car tyres and rims / Rims    - ISO 8855 (2 edition) Road vehicles / Vehicle dynamics and road-holding ability

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\WheelUpstepsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rim_diameter = 19; // float | Rim **`diameter`** is the distance measured in inches across the face of the wheel, from bead seat to bead seat.  (e.g. `19`)
$rim_width = 7.5; // float | Rim **`width`** is the distance measured in inches from bead seat to bead seat.  (e.g. `7.5`)
$rim_offset = 38; // int | Rim **`offset`** is a distance between wheel mounting surface where it is bolted to hub and the centerline of rim.  (e.g. `38`)
$section_width = 225; // float | **`Section width`** is the width of the tire in mm.  (e.g. `225`)
$aspect_ratio = 50; // int | The **`Aspect ratio`** is indicated on the tire sidewall as a percentage. It's the height of the sidewall measured from wheel rim to top of the tread, expressed as a percentage of tire width.  (e.g. `50`)
$steps = 2; // int | How many *`steps`* for plus/minus rim diameters iterate
$s_max = 10; // int | Tire *`section width`* relative difference, % (e.g. `10`)
$do_max = 5; // int | Tire *`overall diameter`* relative difference, %  (e.g. `5`)

try {
    $result = $apiInstance->getUpsteps($rim_diameter, $rim_width, $rim_offset, $section_width, $aspect_ratio, $steps, $s_max, $do_max);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WheelUpstepsApi->getUpsteps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rim_diameter** | **float**| Rim **&#x60;diameter&#x60;** is the distance measured in inches across the face of the wheel, from bead seat to bead seat.  (e.g. &#x60;19&#x60;) |
 **rim_width** | **float**| Rim **&#x60;width&#x60;** is the distance measured in inches from bead seat to bead seat.  (e.g. &#x60;7.5&#x60;) |
 **rim_offset** | **int**| Rim **&#x60;offset&#x60;** is a distance between wheel mounting surface where it is bolted to hub and the centerline of rim.  (e.g. &#x60;38&#x60;) |
 **section_width** | **float**| **&#x60;Section width&#x60;** is the width of the tire in mm.  (e.g. &#x60;225&#x60;) |
 **aspect_ratio** | **int**| The **&#x60;Aspect ratio&#x60;** is indicated on the tire sidewall as a percentage. It&#39;s the height of the sidewall measured from wheel rim to top of the tread, expressed as a percentage of tire width.  (e.g. &#x60;50&#x60;) |
 **steps** | **int**| How many *&#x60;steps&#x60;* for plus/minus rim diameters iterate | [optional] [default to 2]
 **s_max** | **int**| Tire *&#x60;section width&#x60;* relative difference, % (e.g. &#x60;10&#x60;) | [optional] [default to 10]
 **do_max** | **int**| Tire *&#x60;overall diameter&#x60;* relative difference, %  (e.g. &#x60;5&#x60;) | [optional] [default to 5]

### Return type

[**\WheelSizeApiClient\Model\UpstepsReportOutput**](../Model/UpstepsReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

