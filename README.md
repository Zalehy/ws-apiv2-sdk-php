# ws-apiv2-sdk-php
The Wheel Fitment API provides a programmatic gateway to the comprehensive database and services of www.wheel-size.com. This API is expertly designed to retrieve detailed information regarding the vehicle fitment database for rims and tires, encompassing both original equipment (OE) and  aftermarket fitments, along with plus/minus sizing fitment data. Our offerings are further diversified  by including a multitude of country-specific and language-specific options.  We take pride in the extensive coverage of our fitment data, which nearly spans 100% for vehicles manufactured since the year 2000. Moreover, to ensure the utmost accuracy and relevance of the information we provide, our fitment data is meticulously updated on a daily basis.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: v2
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.wheel-size.com/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*SearchByLTHighFlotationTireApi* | [**hfOverallDiameters**](docs/Api/SearchByLTHighFlotationTireApi.md#hfoveralldiameters) | **GET** /by_hf_tire/od/ | List overall diameters
*SearchByLTHighFlotationTireApi* | [**hfRimDiameters**](docs/Api/SearchByLTHighFlotationTireApi.md#hfrimdiameters) | **GET** /by_hf_tire/rd/ | List rim diameters
*SearchByLTHighFlotationTireApi* | [**hfSearchByTire**](docs/Api/SearchByLTHighFlotationTireApi.md#hfsearchbytire) | **GET** /by_hf_tire/search/ | Search by LT High Flotation Tire
*SearchByLTHighFlotationTireApi* | [**hfSearchByTireModifications**](docs/Api/SearchByLTHighFlotationTireApi.md#hfsearchbytiremodifications) | **GET** /by_hf_tire/search/modifications/ | Search by LT High Flotation Tire
*SearchByLTHighFlotationTireApi* | [**hfSectionWidths**](docs/Api/SearchByLTHighFlotationTireApi.md#hfsectionwidths) | **GET** /by_hf_tire/sw/ | List section widths (inches)
*SearchByMetricTireApi* | [**aspectRatio**](docs/Api/SearchByMetricTireApi.md#aspectratio) | **GET** /by_tire/ar/ | List aspect ratios
*SearchByMetricTireApi* | [**diameters**](docs/Api/SearchByMetricTireApi.md#diameters) | **GET** /by_tire/rd/ | List rim diameters
*SearchByMetricTireApi* | [**searchByTire**](docs/Api/SearchByMetricTireApi.md#searchbytire) | **GET** /by_tire/search/ | Search by Metric Tire
*SearchByMetricTireApi* | [**searchByTireModifications**](docs/Api/SearchByMetricTireApi.md#searchbytiremodifications) | **GET** /by_tire/search/modifications/ | Search by Metric Tire
*SearchByMetricTireApi* | [**sectionWidths**](docs/Api/SearchByMetricTireApi.md#sectionwidths) | **GET** /by_tire/sw/ | List section widths (mm)
*SearchByModelApi* | [**generations**](docs/Api/SearchByModelApi.md#generations) | **GET** /generations/ | List generations
*SearchByModelApi* | [**makes**](docs/Api/SearchByModelApi.md#makes) | **GET** /makes/ | List manufacturers
*SearchByModelApi* | [**models**](docs/Api/SearchByModelApi.md#models) | **GET** /models/ | List models
*SearchByModelApi* | [**modifications**](docs/Api/SearchByModelApi.md#modifications) | **GET** /modifications/ | List modifications
*SearchByModelApi* | [**searchByModel**](docs/Api/SearchByModelApi.md#searchbymodel) | **GET** /search/by_model/ | Search by model
*SearchByModelApi* | [**years**](docs/Api/SearchByModelApi.md#years) | **GET** /years/ | List years
*SearchByRimApi* | [**boltPatterns**](docs/Api/SearchByRimApi.md#boltpatterns) | **GET** /by_rim/bp/ | List rim bolt patterns
*SearchByRimApi* | [**centreBores**](docs/Api/SearchByRimApi.md#centrebores) | **GET** /by_rim/cb/ | List rim centre bores
*SearchByRimApi* | [**diameters**](docs/Api/SearchByRimApi.md#diameters) | **GET** /by_rim/rd/ | List rim diameters
*SearchByRimApi* | [**offsets**](docs/Api/SearchByRimApi.md#offsets) | **GET** /by_rim/of/ | List rim offsets
*SearchByRimApi* | [**searchByRim**](docs/Api/SearchByRimApi.md#searchbyrim) | **GET** /by_rim/search/ | Search by rim
*SearchByRimApi* | [**searchByRimModifications**](docs/Api/SearchByRimApi.md#searchbyrimmodifications) | **GET** /by_rim/search/modifications/ | Search by rim modifications
*SearchByRimApi* | [**widths**](docs/Api/SearchByRimApi.md#widths) | **GET** /by_rim/rw/ | List rim widths
*ServiceMethodsApi* | [**regions**](docs/Api/ServiceMethodsApi.md#regions) | **GET** /regions/ | Available regions
*TiresVoteComAPIApi* | [**tires**](docs/Api/TiresVoteComAPIApi.md#tires) | **GET** /tires/ | false
*WheelUpstepsApi* | [**getUpsteps**](docs/Api/WheelUpstepsApi.md#getupsteps) | **GET** /upsteps/ | List rim and tire combinations


## Documentation For Models

 - [AspectRatioMetricReportOutput](docs/Model/AspectRatioMetricReportOutput.md)
 - [Body](docs/Model/Body.md)
 - [BoltPatternData](docs/Model/BoltPatternData.md)
 - [BoltPatternReportOutput](docs/Model/BoltPatternReportOutput.md)
 - [CentreBoreReportOutput](docs/Model/CentreBoreReportOutput.md)
 - [DiameterReportOutput](docs/Model/DiameterReportOutput.md)
 - [Difference](docs/Model/Difference.md)
 - [Engine](docs/Model/Engine.md)
 - [FloatSearchParamsData](docs/Model/FloatSearchParamsData.md)
 - [Generation](docs/Model/Generation.md)
 - [GenerationsData](docs/Model/GenerationsData.md)
 - [GenerationsMeta](docs/Model/GenerationsMeta.md)
 - [GenerationsReportOutput](docs/Model/GenerationsReportOutput.md)
 - [IntegerSearchParamsData](docs/Model/IntegerSearchParamsData.md)
 - [MakesData](docs/Model/MakesData.md)
 - [MakesDataBase](docs/Model/MakesDataBase.md)
 - [MakesMeta](docs/Model/MakesMeta.md)
 - [MakesReportOutput](docs/Model/MakesReportOutput.md)
 - [ModelsData](docs/Model/ModelsData.md)
 - [ModelsDataBase](docs/Model/ModelsDataBase.md)
 - [ModelsMeta](docs/Model/ModelsMeta.md)
 - [ModelsReportOutput](docs/Model/ModelsReportOutput.md)
 - [ModificationsData](docs/Model/ModificationsData.md)
 - [ModificationsMeta](docs/Model/ModificationsMeta.md)
 - [ModificationsReportOutput](docs/Model/ModificationsReportOutput.md)
 - [OffsetReportOutput](docs/Model/OffsetReportOutput.md)
 - [OverallDiameterReportOutput](docs/Model/OverallDiameterReportOutput.md)
 - [RegionsData](docs/Model/RegionsData.md)
 - [RegionsMeta](docs/Model/RegionsMeta.md)
 - [RegionsReportOutput](docs/Model/RegionsReportOutput.md)
 - [Rim](docs/Model/Rim.md)
 - [RimDiameterMetricReportOutput](docs/Model/RimDiameterMetricReportOutput.md)
 - [RimDiameterReportOutput](docs/Model/RimDiameterReportOutput.md)
 - [SearchByHFTireCarReportOutput](docs/Model/SearchByHFTireCarReportOutput.md)
 - [SearchByHFTireModificationReportOutput](docs/Model/SearchByHFTireModificationReportOutput.md)
 - [SearchByMetricTireCarReportOutput](docs/Model/SearchByMetricTireCarReportOutput.md)
 - [SearchByMetricTireModificationReportOutput](docs/Model/SearchByMetricTireModificationReportOutput.md)
 - [SearchByModelData](docs/Model/SearchByModelData.md)
 - [SearchByModelMeta](docs/Model/SearchByModelMeta.md)
 - [SearchByModelReportOutput](docs/Model/SearchByModelReportOutput.md)
 - [SearchByRimCarReportOutput](docs/Model/SearchByRimCarReportOutput.md)
 - [SearchByRimModificationReportOutput](docs/Model/SearchByRimModificationReportOutput.md)
 - [SearchParamsCarsData](docs/Model/SearchParamsCarsData.md)
 - [SearchParamsCarsMeta](docs/Model/SearchParamsCarsMeta.md)
 - [SearchParamsMeta](docs/Model/SearchParamsMeta.md)
 - [SearchParamsModificationsData](docs/Model/SearchParamsModificationsData.md)
 - [SearchParamsModificationsMeta](docs/Model/SearchParamsModificationsMeta.md)
 - [SectionWidthMetricReportOutput](docs/Model/SectionWidthMetricReportOutput.md)
 - [SectionWidthReportOutput](docs/Model/SectionWidthReportOutput.md)
 - [Technical](docs/Model/Technical.md)
 - [Tire](docs/Model/Tire.md)
 - [TireCar](docs/Model/TireCar.md)
 - [TireMake](docs/Model/TireMake.md)
 - [UpstepsData](docs/Model/UpstepsData.md)
 - [UpstepsMeta](docs/Model/UpstepsMeta.md)
 - [UpstepsReportOutput](docs/Model/UpstepsReportOutput.md)
 - [Wheel](docs/Model/Wheel.md)
 - [WheelFasteners](docs/Model/WheelFasteners.md)
 - [WheelPair](docs/Model/WheelPair.md)
 - [WidthReportOutput](docs/Model/WidthReportOutput.md)
 - [YearsData](docs/Model/YearsData.md)
 - [YearsMeta](docs/Model/YearsMeta.md)
 - [YearsReportOutput](docs/Model/YearsReportOutput.md)


## Documentation For Authorization


## user_key

- **Type**: API key
- **API key parameter name**: user_key
- **Location**: URL query string


## Author

info@wheel-size.com


