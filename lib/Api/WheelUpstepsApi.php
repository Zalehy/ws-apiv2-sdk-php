<?php
/**
 * WheelUpstepsApi
 * PHP version 5
 *
 * @category Class
 * @package  WheelSizeApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Wheel Fitment API
 *
 * The Wheel Fitment API provides a programmatic gateway to the comprehensive database and services of www.wheel-size.com. This API is expertly designed to retrieve detailed information regarding the vehicle fitment database for rims and tires, encompassing both original equipment (OE) and  aftermarket fitments, along with plus/minus sizing fitment data. Our offerings are further diversified  by including a multitude of country-specific and language-specific options.  We take pride in the extensive coverage of our fitment data, which nearly spans 100% for vehicles manufactured since the year 2000. Moreover, to ensure the utmost accuracy and relevance of the information we provide, our fitment data is meticulously updated on a daily basis.
 *
 * OpenAPI spec version: v2
 * Contact: info@wheel-size.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace WheelSizeApiClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use WheelSizeApiClient\ApiException;
use WheelSizeApiClient\Configuration;
use WheelSizeApiClient\HeaderSelector;
use WheelSizeApiClient\ObjectSerializer;

/**
 * WheelUpstepsApi Class Doc Comment
 *
 * @category Class
 * @package  WheelSizeApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WheelUpstepsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getUpsteps
     *
     * List rim and tire combinations
     *
     * @param  float $rim_diameter Rim **&#x60;diameter&#x60;** is the distance measured in inches across the face of the wheel, from bead seat to bead seat.  (e.g. &#x60;19&#x60;) (required)
     * @param  float $rim_width Rim **&#x60;width&#x60;** is the distance measured in inches from bead seat to bead seat.  (e.g. &#x60;7.5&#x60;) (required)
     * @param  int $rim_offset Rim **&#x60;offset&#x60;** is a distance between wheel mounting surface where it is bolted to hub and the centerline of rim.  (e.g. &#x60;38&#x60;) (required)
     * @param  float $section_width **&#x60;Section width&#x60;** is the width of the tire in mm.  (e.g. &#x60;225&#x60;) (required)
     * @param  int $aspect_ratio The **&#x60;Aspect ratio&#x60;** is indicated on the tire sidewall as a percentage. It&#39;s the height of the sidewall measured from wheel rim to top of the tread, expressed as a percentage of tire width.  (e.g. &#x60;50&#x60;) (required)
     * @param  int $steps How many *&#x60;steps&#x60;* for plus/minus rim diameters iterate (optional, default to 2)
     * @param  int $s_max Tire *&#x60;section width&#x60;* relative difference, % (e.g. &#x60;10&#x60;) (optional, default to 10)
     * @param  int $do_max Tire *&#x60;overall diameter&#x60;* relative difference, %  (e.g. &#x60;5&#x60;) (optional, default to 5)
     *
     * @throws \WheelSizeApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \WheelSizeApiClient\Model\UpstepsReportOutput
     */
    public function getUpsteps($rim_diameter, $rim_width, $rim_offset, $section_width, $aspect_ratio, $steps = '2', $s_max = '10', $do_max = '5')
    {
        list($response) = $this->getUpstepsWithHttpInfo($rim_diameter, $rim_width, $rim_offset, $section_width, $aspect_ratio, $steps, $s_max, $do_max);
        return $response;
    }

    /**
     * Operation getUpstepsWithHttpInfo
     *
     * List rim and tire combinations
     *
     * @param  float $rim_diameter Rim **&#x60;diameter&#x60;** is the distance measured in inches across the face of the wheel, from bead seat to bead seat.  (e.g. &#x60;19&#x60;) (required)
     * @param  float $rim_width Rim **&#x60;width&#x60;** is the distance measured in inches from bead seat to bead seat.  (e.g. &#x60;7.5&#x60;) (required)
     * @param  int $rim_offset Rim **&#x60;offset&#x60;** is a distance between wheel mounting surface where it is bolted to hub and the centerline of rim.  (e.g. &#x60;38&#x60;) (required)
     * @param  float $section_width **&#x60;Section width&#x60;** is the width of the tire in mm.  (e.g. &#x60;225&#x60;) (required)
     * @param  int $aspect_ratio The **&#x60;Aspect ratio&#x60;** is indicated on the tire sidewall as a percentage. It&#39;s the height of the sidewall measured from wheel rim to top of the tread, expressed as a percentage of tire width.  (e.g. &#x60;50&#x60;) (required)
     * @param  int $steps How many *&#x60;steps&#x60;* for plus/minus rim diameters iterate (optional, default to 2)
     * @param  int $s_max Tire *&#x60;section width&#x60;* relative difference, % (e.g. &#x60;10&#x60;) (optional, default to 10)
     * @param  int $do_max Tire *&#x60;overall diameter&#x60;* relative difference, %  (e.g. &#x60;5&#x60;) (optional, default to 5)
     *
     * @throws \WheelSizeApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \WheelSizeApiClient\Model\UpstepsReportOutput, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUpstepsWithHttpInfo($rim_diameter, $rim_width, $rim_offset, $section_width, $aspect_ratio, $steps = '2', $s_max = '10', $do_max = '5')
    {
        $returnType = '\WheelSizeApiClient\Model\UpstepsReportOutput';
        $request = $this->getUpstepsRequest($rim_diameter, $rim_width, $rim_offset, $section_width, $aspect_ratio, $steps, $s_max, $do_max);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\WheelSizeApiClient\Model\UpstepsReportOutput',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getUpstepsAsync
     *
     * List rim and tire combinations
     *
     * @param  float $rim_diameter Rim **&#x60;diameter&#x60;** is the distance measured in inches across the face of the wheel, from bead seat to bead seat.  (e.g. &#x60;19&#x60;) (required)
     * @param  float $rim_width Rim **&#x60;width&#x60;** is the distance measured in inches from bead seat to bead seat.  (e.g. &#x60;7.5&#x60;) (required)
     * @param  int $rim_offset Rim **&#x60;offset&#x60;** is a distance between wheel mounting surface where it is bolted to hub and the centerline of rim.  (e.g. &#x60;38&#x60;) (required)
     * @param  float $section_width **&#x60;Section width&#x60;** is the width of the tire in mm.  (e.g. &#x60;225&#x60;) (required)
     * @param  int $aspect_ratio The **&#x60;Aspect ratio&#x60;** is indicated on the tire sidewall as a percentage. It&#39;s the height of the sidewall measured from wheel rim to top of the tread, expressed as a percentage of tire width.  (e.g. &#x60;50&#x60;) (required)
     * @param  int $steps How many *&#x60;steps&#x60;* for plus/minus rim diameters iterate (optional, default to 2)
     * @param  int $s_max Tire *&#x60;section width&#x60;* relative difference, % (e.g. &#x60;10&#x60;) (optional, default to 10)
     * @param  int $do_max Tire *&#x60;overall diameter&#x60;* relative difference, %  (e.g. &#x60;5&#x60;) (optional, default to 5)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUpstepsAsync($rim_diameter, $rim_width, $rim_offset, $section_width, $aspect_ratio, $steps = '2', $s_max = '10', $do_max = '5')
    {
        return $this->getUpstepsAsyncWithHttpInfo($rim_diameter, $rim_width, $rim_offset, $section_width, $aspect_ratio, $steps, $s_max, $do_max)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getUpstepsAsyncWithHttpInfo
     *
     * List rim and tire combinations
     *
     * @param  float $rim_diameter Rim **&#x60;diameter&#x60;** is the distance measured in inches across the face of the wheel, from bead seat to bead seat.  (e.g. &#x60;19&#x60;) (required)
     * @param  float $rim_width Rim **&#x60;width&#x60;** is the distance measured in inches from bead seat to bead seat.  (e.g. &#x60;7.5&#x60;) (required)
     * @param  int $rim_offset Rim **&#x60;offset&#x60;** is a distance between wheel mounting surface where it is bolted to hub and the centerline of rim.  (e.g. &#x60;38&#x60;) (required)
     * @param  float $section_width **&#x60;Section width&#x60;** is the width of the tire in mm.  (e.g. &#x60;225&#x60;) (required)
     * @param  int $aspect_ratio The **&#x60;Aspect ratio&#x60;** is indicated on the tire sidewall as a percentage. It&#39;s the height of the sidewall measured from wheel rim to top of the tread, expressed as a percentage of tire width.  (e.g. &#x60;50&#x60;) (required)
     * @param  int $steps How many *&#x60;steps&#x60;* for plus/minus rim diameters iterate (optional, default to 2)
     * @param  int $s_max Tire *&#x60;section width&#x60;* relative difference, % (e.g. &#x60;10&#x60;) (optional, default to 10)
     * @param  int $do_max Tire *&#x60;overall diameter&#x60;* relative difference, %  (e.g. &#x60;5&#x60;) (optional, default to 5)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUpstepsAsyncWithHttpInfo($rim_diameter, $rim_width, $rim_offset, $section_width, $aspect_ratio, $steps = '2', $s_max = '10', $do_max = '5')
    {
        $returnType = '\WheelSizeApiClient\Model\UpstepsReportOutput';
        $request = $this->getUpstepsRequest($rim_diameter, $rim_width, $rim_offset, $section_width, $aspect_ratio, $steps, $s_max, $do_max);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getUpsteps'
     *
     * @param  float $rim_diameter Rim **&#x60;diameter&#x60;** is the distance measured in inches across the face of the wheel, from bead seat to bead seat.  (e.g. &#x60;19&#x60;) (required)
     * @param  float $rim_width Rim **&#x60;width&#x60;** is the distance measured in inches from bead seat to bead seat.  (e.g. &#x60;7.5&#x60;) (required)
     * @param  int $rim_offset Rim **&#x60;offset&#x60;** is a distance between wheel mounting surface where it is bolted to hub and the centerline of rim.  (e.g. &#x60;38&#x60;) (required)
     * @param  float $section_width **&#x60;Section width&#x60;** is the width of the tire in mm.  (e.g. &#x60;225&#x60;) (required)
     * @param  int $aspect_ratio The **&#x60;Aspect ratio&#x60;** is indicated on the tire sidewall as a percentage. It&#39;s the height of the sidewall measured from wheel rim to top of the tread, expressed as a percentage of tire width.  (e.g. &#x60;50&#x60;) (required)
     * @param  int $steps How many *&#x60;steps&#x60;* for plus/minus rim diameters iterate (optional, default to 2)
     * @param  int $s_max Tire *&#x60;section width&#x60;* relative difference, % (e.g. &#x60;10&#x60;) (optional, default to 10)
     * @param  int $do_max Tire *&#x60;overall diameter&#x60;* relative difference, %  (e.g. &#x60;5&#x60;) (optional, default to 5)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getUpstepsRequest($rim_diameter, $rim_width, $rim_offset, $section_width, $aspect_ratio, $steps = '2', $s_max = '10', $do_max = '5')
    {
        // verify the required parameter 'rim_diameter' is set
        if ($rim_diameter === null || (is_array($rim_diameter) && count($rim_diameter) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $rim_diameter when calling getUpsteps'
            );
        }
        // verify the required parameter 'rim_width' is set
        if ($rim_width === null || (is_array($rim_width) && count($rim_width) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $rim_width when calling getUpsteps'
            );
        }
        // verify the required parameter 'rim_offset' is set
        if ($rim_offset === null || (is_array($rim_offset) && count($rim_offset) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $rim_offset when calling getUpsteps'
            );
        }
        // verify the required parameter 'section_width' is set
        if ($section_width === null || (is_array($section_width) && count($section_width) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $section_width when calling getUpsteps'
            );
        }
        // verify the required parameter 'aspect_ratio' is set
        if ($aspect_ratio === null || (is_array($aspect_ratio) && count($aspect_ratio) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $aspect_ratio when calling getUpsteps'
            );
        }
        if ($steps !== null && $steps > 3) {
            throw new \InvalidArgumentException('invalid value for "$steps" when calling WheelUpstepsApi.getUpsteps, must be smaller than or equal to 3.');
        }
        if ($steps !== null && $steps < -3) {
            throw new \InvalidArgumentException('invalid value for "$steps" when calling WheelUpstepsApi.getUpsteps, must be bigger than or equal to -3.');
        }

        if ($s_max !== null && $s_max > 25) {
            throw new \InvalidArgumentException('invalid value for "$s_max" when calling WheelUpstepsApi.getUpsteps, must be smaller than or equal to 25.');
        }
        if ($s_max !== null && $s_max < 0) {
            throw new \InvalidArgumentException('invalid value for "$s_max" when calling WheelUpstepsApi.getUpsteps, must be bigger than or equal to 0.');
        }

        if ($do_max !== null && $do_max > 15) {
            throw new \InvalidArgumentException('invalid value for "$do_max" when calling WheelUpstepsApi.getUpsteps, must be smaller than or equal to 15.');
        }
        if ($do_max !== null && $do_max < 0) {
            throw new \InvalidArgumentException('invalid value for "$do_max" when calling WheelUpstepsApi.getUpsteps, must be bigger than or equal to 0.');
        }


        $resourcePath = '/upsteps/';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($rim_diameter !== null) {
            $queryParams['rim_diameter'] = ObjectSerializer::toQueryValue($rim_diameter);
        }
        // query params
        if ($rim_width !== null) {
            $queryParams['rim_width'] = ObjectSerializer::toQueryValue($rim_width);
        }
        // query params
        if ($rim_offset !== null) {
            $queryParams['rim_offset'] = ObjectSerializer::toQueryValue($rim_offset);
        }
        // query params
        if ($section_width !== null) {
            $queryParams['section_width'] = ObjectSerializer::toQueryValue($section_width);
        }
        // query params
        if ($aspect_ratio !== null) {
            $queryParams['aspect_ratio'] = ObjectSerializer::toQueryValue($aspect_ratio);
        }
        // query params
        if ($steps !== null) {
            $queryParams['steps'] = ObjectSerializer::toQueryValue($steps);
        }
        // query params
        if ($s_max !== null) {
            $queryParams['s_max'] = ObjectSerializer::toQueryValue($s_max);
        }
        // query params
        if ($do_max !== null) {
            $queryParams['do_max'] = ObjectSerializer::toQueryValue($do_max);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('user_key');
        if ($apiKey !== null) {
            $queryParams['user_key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
