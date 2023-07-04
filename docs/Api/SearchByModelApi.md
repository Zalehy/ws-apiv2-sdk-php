# WheelSizeApiClient\SearchByModelApi

All URIs are relative to *https://api.wheel-size.com/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generations**](SearchByModelApi.md#generations) | **GET** /generations/ | List generations
[**makes**](SearchByModelApi.md#makes) | **GET** /makes/ | List manufacturers
[**models**](SearchByModelApi.md#models) | **GET** /models/ | List models
[**modifications**](SearchByModelApi.md#modifications) | **GET** /modifications/ | List modifications
[**searchByModel**](SearchByModelApi.md#searchByModel) | **GET** /search/by_model/ | Search by model
[**years**](SearchByModelApi.md#years) | **GET** /years/ | List years


# **generations**
> \WheelSizeApiClient\Model\GenerationsReportOutput generations($make, $model, $region, $ordering)

List generations

Returns all generations for the provided *`make`* and *`model`* parameters  All *`array`* parameters can have multiple values. For example, `region=eudm&region=usdm`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$make = "mitsubishi"; // string | A car's **`Make`** is the brand of the vehicle. You can use _**`GET /makes/`**_ to get a list of available *`slug`* values. (e.g. `mitsubishi`)
$model = "outlander"; // string | The particular **`Model`** of the brand. You can use _**`GET /models/`**_ to get a list of available *`slug`* values. (e.g. `outlander`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`start`*

try {
    $result = $apiInstance->generations($make, $model, $region, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByModelApi->generations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **make** | **string**| A car&#39;s **&#x60;Make&#x60;** is the brand of the vehicle. You can use _**&#x60;GET /makes/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;mitsubishi&#x60;) |
 **model** | **string**| The particular **&#x60;Model&#x60;** of the brand. You can use _**&#x60;GET /models/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;outlander&#x60;) |
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;start&#x60;* | [optional]

### Return type

[**\WheelSizeApiClient\Model\GenerationsReportOutput**](../Model/GenerationsReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **makes**
> \WheelSizeApiClient\Model\MakesReportOutput makes($year, $region, $ordering, $lang, $brands, $brands_exclude)

List manufacturers

Returns all manufacturers from the database  All *`array`* parameters can have multiple values. For example, `region=eudm&region=usdm`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | You can use _**`GET /years/`**_ to get a list of available *`slug`* values. (e.g. `2015`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$ordering = "slug"; // string | Comma-separated list without spaces. Supported field names: *`slug`*
$lang = "lang_example"; // string | Use this parameter to get translations for the fields of the following objects: **`Make`**, **`Model`**, **`Region`**. The field *`name_en`* always has the original English name. By default `en` language is used.  Currently, translation works in Сhinese (`zh-cn`) and Japanese (`ja`) languages only.
$brands = "brands_example"; // string | Provide data for selected car manufacturers. Use _**`GET /makes/`**_ method to get the full list. (e.g. `mitsubishi,nissan,toyota`)
$brands_exclude = "brands_exclude_example"; // string | Exclude data for selected car manufacturers. Use _**`GET /makes/`**_ method to get the full list. (e.g. `geely,great-wall`)

try {
    $result = $apiInstance->makes($year, $region, $ordering, $lang, $brands, $brands_exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByModelApi->makes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| You can use _**&#x60;GET /years/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;2015&#x60;) | [optional]
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;slug&#x60;* | [optional] [default to slug]
 **lang** | **string**| Use this parameter to get translations for the fields of the following objects: **&#x60;Make&#x60;**, **&#x60;Model&#x60;**, **&#x60;Region&#x60;**. The field *&#x60;name_en&#x60;* always has the original English name. By default &#x60;en&#x60; language is used.  Currently, translation works in Сhinese (&#x60;zh-cn&#x60;) and Japanese (&#x60;ja&#x60;) languages only. | [optional]
 **brands** | **string**| Provide data for selected car manufacturers. Use _**&#x60;GET /makes/&#x60;**_ method to get the full list. (e.g. &#x60;mitsubishi,nissan,toyota&#x60;) | [optional]
 **brands_exclude** | **string**| Exclude data for selected car manufacturers. Use _**&#x60;GET /makes/&#x60;**_ method to get the full list. (e.g. &#x60;geely,great-wall&#x60;) | [optional]

### Return type

[**\WheelSizeApiClient\Model\MakesReportOutput**](../Model/MakesReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **models**
> \WheelSizeApiClient\Model\ModelsReportOutput models($make, $year, $region, $ordering, $lang)

List models

Returns all models for the provided *`make`* parameter  All *`array`* parameters can have multiple values. For example, `region=eudm&region=usdm`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$make = "mitsubishi"; // string | A car's **`Make`** is the brand of the vehicle. You can use _**`GET /makes/`**_ to get a list of available *`slug`* values. (e.g. `mitsubishi`)
$year = 56; // int | You can use _**`GET /years/`**_ to get a list of available *`slug`* values. (e.g. `2015`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`slug`*
$lang = "lang_example"; // string | Use this parameter to get translations for the fields of the following objects: **`Make`**, **`Model`**, **`Region`**. The field *`name_en`* always has the original English name. By default `en` language is used.  Currently, translation works in Сhinese (`zh-cn`) and Japanese (`ja`) languages only.

try {
    $result = $apiInstance->models($make, $year, $region, $ordering, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByModelApi->models: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **make** | **string**| A car&#39;s **&#x60;Make&#x60;** is the brand of the vehicle. You can use _**&#x60;GET /makes/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;mitsubishi&#x60;) |
 **year** | **int**| You can use _**&#x60;GET /years/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;2015&#x60;) | [optional]
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;slug&#x60;* | [optional]
 **lang** | **string**| Use this parameter to get translations for the fields of the following objects: **&#x60;Make&#x60;**, **&#x60;Model&#x60;**, **&#x60;Region&#x60;**. The field *&#x60;name_en&#x60;* always has the original English name. By default &#x60;en&#x60; language is used.  Currently, translation works in Сhinese (&#x60;zh-cn&#x60;) and Japanese (&#x60;ja&#x60;) languages only. | [optional]

### Return type

[**\WheelSizeApiClient\Model\ModelsReportOutput**](../Model/ModelsReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifications**
> \WheelSizeApiClient\Model\ModificationsReportOutput modifications($make, $model, $year, $generation, $region, $fuel, $horsepower, $horsepower_min, $horsepower_max, $trim, $trim_level, $ordering, $lang)

List modifications

Returns all modifications for the provided *`make`*, *`model`*, *`year`* or *`generation`* parameters. Please note that you need to specify at least one of the following parameters: *`year`* or *`generation`*.  All *`array`* parameters can have multiple values. For example, `region=eudm&region=usdm`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$make = "mitsubishi"; // string | A car's **`Make`** is the brand of the vehicle. You can use _**`GET /makes/`**_ to get a list of available *`slug`* values. (e.g. `mitsubishi`)
$model = "outlander"; // string | The particular **`Model`** of the brand. You can use _**`GET /models/`**_ to get a list of available *`slug`* values. (e.g. `outlander`)
$year = 56; // int | You can use _**`GET /years/`**_ to get a list of available *`slug`* values. (e.g. `2015`)
$generation = "generation_example"; // string | Vehicle **`Generation`** refers to the life cycle of a design for a specific make and model. You can use _**`GET /generations/`**_ to get a list of available *`slug`* values. (e.g. `18d10dc6e6`)
$region = array("region_example"); // string[] | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$fuel = "fuel_example"; // string | Engine **`Fuel`** is a fuel that is used to provide power to the engine in motor vehicles (e.g. `diesel`)
$horsepower = 8.14; // float | Horsepower value (1hp = 550 ft⋅lbf/s), hp.  If defined, the search will be performed within the range of ±2.7hp (e.g. `150`)
$horsepower_min = 8.14; // float | Minimum horsepower value, hp. (e.g. `125`)
$horsepower_max = 8.14; // float | Maximum horsepower value, hp. (e.g. `225`)
$trim = "trim_example"; // string | Provides a non-strict search by engine/trim name. (e.g. `('2.0 PHEV', '2.0 TDI SCR BlueMotion 4Motion')`)  Typically used for integration with other systems (i.e. search by license plate).  To narrow down your results use **`fuel`** and/or **`horsepower`** filters.
$trim_level = "trim_level_example"; // string | Provides a case-insensitive search by trim level. (e.g. `EX-L, Touring, Executive`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`trim`*, *`start_year`*, *`end_year`*
$lang = "lang_example"; // string | Use this parameter to get translations for the fields of the following objects: **`Make`**, **`Model`**, **`Region`**. The field *`name_en`* always has the original English name. By default `en` language is used.  Currently, translation works in Сhinese (`zh-cn`) and Japanese (`ja`) languages only.

try {
    $result = $apiInstance->modifications($make, $model, $year, $generation, $region, $fuel, $horsepower, $horsepower_min, $horsepower_max, $trim, $trim_level, $ordering, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByModelApi->modifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **make** | **string**| A car&#39;s **&#x60;Make&#x60;** is the brand of the vehicle. You can use _**&#x60;GET /makes/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;mitsubishi&#x60;) |
 **model** | **string**| The particular **&#x60;Model&#x60;** of the brand. You can use _**&#x60;GET /models/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;outlander&#x60;) |
 **year** | **int**| You can use _**&#x60;GET /years/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;2015&#x60;) | [optional]
 **generation** | **string**| Vehicle **&#x60;Generation&#x60;** refers to the life cycle of a design for a specific make and model. You can use _**&#x60;GET /generations/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;18d10dc6e6&#x60;) | [optional]
 **region** | [**string[]**](../Model/string.md)| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **fuel** | **string**| Engine **&#x60;Fuel&#x60;** is a fuel that is used to provide power to the engine in motor vehicles (e.g. &#x60;diesel&#x60;) | [optional]
 **horsepower** | **float**| Horsepower value (1hp &#x3D; 550 ft⋅lbf/s), hp.  If defined, the search will be performed within the range of ±2.7hp (e.g. &#x60;150&#x60;) | [optional]
 **horsepower_min** | **float**| Minimum horsepower value, hp. (e.g. &#x60;125&#x60;) | [optional]
 **horsepower_max** | **float**| Maximum horsepower value, hp. (e.g. &#x60;225&#x60;) | [optional]
 **trim** | **string**| Provides a non-strict search by engine/trim name. (e.g. &#x60;(&#39;2.0 PHEV&#39;, &#39;2.0 TDI SCR BlueMotion 4Motion&#39;)&#x60;)  Typically used for integration with other systems (i.e. search by license plate).  To narrow down your results use **&#x60;fuel&#x60;** and/or **&#x60;horsepower&#x60;** filters. | [optional]
 **trim_level** | **string**| Provides a case-insensitive search by trim level. (e.g. &#x60;EX-L, Touring, Executive&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;trim&#x60;*, *&#x60;start_year&#x60;*, *&#x60;end_year&#x60;* | [optional]
 **lang** | **string**| Use this parameter to get translations for the fields of the following objects: **&#x60;Make&#x60;**, **&#x60;Model&#x60;**, **&#x60;Region&#x60;**. The field *&#x60;name_en&#x60;* always has the original English name. By default &#x60;en&#x60; language is used.  Currently, translation works in Сhinese (&#x60;zh-cn&#x60;) and Japanese (&#x60;ja&#x60;) languages only. | [optional]

### Return type

[**\WheelSizeApiClient\Model\ModificationsReportOutput**](../Model/ModificationsReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchByModel**
> \WheelSizeApiClient\Model\SearchByModelReportOutput searchByModel($make, $model, $year, $generation, $modification, $region, $add_configurator, $ordering, $lang)

Search by model

Returns all modifications for the provided *`make`*, *`model`*, *`year`*, *`generation`*, *`modification`* or *`region`* parameters. Please note that the search query provides access to wheel fitment data.  In addition to the required parameters, there are restrictions on the combination of parameters. You need to provide:  1. *`make`* parameter; 2. *`model`* parameter; 3. at least one of the following parameters: *`year`* or *`generation`*; 4. at least one of the following parameters: *`modification`* or *`region`*.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$make = "mitsubishi"; // string | A car's **`Make`** is the brand of the vehicle. You can use _**`GET /makes/`**_ to get a list of available *`slug`* values. (e.g. `mitsubishi`)
$model = "outlander"; // string | The particular **`Model`** of the brand. You can use _**`GET /models/`**_ to get a list of available *`slug`* values. (e.g. `outlander`)
$year = 56; // int | You can use _**`GET /years/`**_ to get a list of available *`slug`* values. (e.g. `2015`)
$generation = "generation_example"; // string | Vehicle **`Generation`** refers to the life cycle of a design for a specific make and model. You can use _**`GET /generations/`**_ to get a list of available *`slug`* values. (e.g. `18d10dc6e6`)
$modification = "modification_example"; // string | Vehicle **`Modification`** is a variant of the engine of a car model, in some cases supplemented by the following parameters: drivetrain, body, transmission and country of production. You can use _**`GET /modifications/`**_ to get a list of available *`slug`* values. (e.g. `7bb1166e91`)
$region = "region_example"; // string | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$add_configurator = true; // bool | Optional parameter for Wheel Configurator API specifics.  If set to true, information on linked Wheel Configurator templates will be included. (e.g. `true`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`trim`*, *`start_year`*, *`end_year`*
$lang = "lang_example"; // string | Use this parameter to get translations for the fields of the following objects: **`Make`**, **`Model`**, **`Region`**. The field *`name_en`* always has the original English name. By default `en` language is used.  Currently, translation works in Сhinese (`zh-cn`) and Japanese (`ja`) languages only.

try {
    $result = $apiInstance->searchByModel($make, $model, $year, $generation, $modification, $region, $add_configurator, $ordering, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByModelApi->searchByModel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **make** | **string**| A car&#39;s **&#x60;Make&#x60;** is the brand of the vehicle. You can use _**&#x60;GET /makes/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;mitsubishi&#x60;) |
 **model** | **string**| The particular **&#x60;Model&#x60;** of the brand. You can use _**&#x60;GET /models/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;outlander&#x60;) |
 **year** | **int**| You can use _**&#x60;GET /years/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;2015&#x60;) | [optional]
 **generation** | **string**| Vehicle **&#x60;Generation&#x60;** refers to the life cycle of a design for a specific make and model. You can use _**&#x60;GET /generations/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;18d10dc6e6&#x60;) | [optional]
 **modification** | **string**| Vehicle **&#x60;Modification&#x60;** is a variant of the engine of a car model, in some cases supplemented by the following parameters: drivetrain, body, transmission and country of production. You can use _**&#x60;GET /modifications/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;7bb1166e91&#x60;) | [optional]
 **region** | **string**| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **add_configurator** | **bool**| Optional parameter for Wheel Configurator API specifics.  If set to true, information on linked Wheel Configurator templates will be included. (e.g. &#x60;true&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;trim&#x60;*, *&#x60;start_year&#x60;*, *&#x60;end_year&#x60;* | [optional]
 **lang** | **string**| Use this parameter to get translations for the fields of the following objects: **&#x60;Make&#x60;**, **&#x60;Model&#x60;**, **&#x60;Region&#x60;**. The field *&#x60;name_en&#x60;* always has the original English name. By default &#x60;en&#x60; language is used.  Currently, translation works in Сhinese (&#x60;zh-cn&#x60;) and Japanese (&#x60;ja&#x60;) languages only. | [optional]

### Return type

[**\WheelSizeApiClient\Model\SearchByModelReportOutput**](../Model/SearchByModelReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **years**
> \WheelSizeApiClient\Model\YearsReportOutput years($make, $model, $region, $ordering)

List years

Returns all years for the provided *`make`* parameter  All *`array`* parameters can have multiple values. For example, `region=eudm&region=usdm`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: user_key
$config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKey('user_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WheelSizeApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('user_key', 'Bearer');

$apiInstance = new WheelSizeApiClient\Api\SearchByModelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$make = "make_example"; // string | A car's **`Make`** is the brand of the vehicle. You can use _**`GET /makes/`**_ to get a list of available *`slug`* values. (e.g. `mitsubishi`)
$model = "model_example"; // string | The particular **`Model`** of the brand. You can use _**`GET /models/`**_ to get a list of available *`slug`* values. (e.g. `outlander`)
$region = "region_example"; // string | A **`Region`** is the region where the car was officially sold or is still being sold. You can use _**`GET /regions/`**_ to get a list of available *`slug`* values. (e.g. `usdm`)
$ordering = "ordering_example"; // string | Comma-separated list without spaces. Supported field names: *`slug`*

try {
    $result = $apiInstance->years($make, $model, $region, $ordering);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchByModelApi->years: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **make** | **string**| A car&#39;s **&#x60;Make&#x60;** is the brand of the vehicle. You can use _**&#x60;GET /makes/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;mitsubishi&#x60;) | [optional]
 **model** | **string**| The particular **&#x60;Model&#x60;** of the brand. You can use _**&#x60;GET /models/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;outlander&#x60;) | [optional]
 **region** | **string**| A **&#x60;Region&#x60;** is the region where the car was officially sold or is still being sold. You can use _**&#x60;GET /regions/&#x60;**_ to get a list of available *&#x60;slug&#x60;* values. (e.g. &#x60;usdm&#x60;) | [optional]
 **ordering** | **string**| Comma-separated list without spaces. Supported field names: *&#x60;slug&#x60;* | [optional]

### Return type

[**\WheelSizeApiClient\Model\YearsReportOutput**](../Model/YearsReportOutput.md)

### Authorization

[user_key](../../README.md#user_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

