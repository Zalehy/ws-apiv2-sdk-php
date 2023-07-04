# ModificationsData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**slug** | **string** | Identifier for the element. Value is a hash based on ID | 
**trim_scoring** | **float** | Relevance score is calculated based on the computing a &#39;trim&#39; similarity score  A Relevance score between 0 and 100, with 100 being the highest. (e.g. &#x60;84.4&#x60;) | [optional] 
**trim_attributes** | **string** | Trim attributes (e.g. &#x60;AWD&#x60;, can be __*&#x60;empty array&#x60;*__) | [optional] 
**trim_body_types** | **string** | Trim body types (e.g. &#x60;Convertible&#x60;, can be __*&#x60;empty array&#x60;*__) | [optional] 
**trim_levels** | **string** | Trim Levels (e.g. &#x60;EX-L, Touring, Executive&#x60;, can be __*&#x60;empty array&#x60;*__) | [optional] 
**make** | [**\WheelSizeApiClient\Model\MakesDataBase**](MakesDataBase.md) |  | 
**model** | [**\WheelSizeApiClient\Model\ModelsDataBase**](ModelsDataBase.md) |  | 
**generation** | [**\WheelSizeApiClient\Model\Generation**](Generation.md) |  | 
**start_year** | **int** |  | 
**end_year** | **int** |  | 
**engine** | [**\WheelSizeApiClient\Model\Engine**](Engine.md) |  | 
**regions** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


