<?php
/**
 * Created by PhpStorm.
 * User: xiaoguo
 * Date: 18-11-22
 * Time: 下午9:58
 */

namespace Xiaoguo\Weather;


use GuzzleHttp\Client;
use Xiaoguo\Weather\Exceptions\HttpException;
use Xiaoguo\Weather\Exceptions\InvalidArgumentException;

class Weather
{
    protected $key;

    protected $guzzleOptions = [];

    public function __construct(string $key)
    {
        $this->key = $key;//830bf9c78a90329e04d85e89fc8971b5
    }

    public function getHttpClient()
    {

        return new Client($this->guzzleOptions);
    }

    public function setGuzzleOptions(array $options)
    {
        $this->guzzleOptions = $options;
    }

    public function getWeather($city, string $type = 'base', string $format = 'json')
    {
        if (!in_array(strtolower($format), ['xml', 'json'])) {
            throw new InvalidArgumentException('Invalid response format:' . $format);
        }

        if (!in_array(strtolower($type), ['base', 'all'])) {
            throw new InvalidArgumentException('Invalid type value:' . $type);
        }

        $url = 'https://restapi.amap.com/v3/weather/weatherInfo';

        $query = array_filter([
            'key' => $this->key,
            'city' => $city,
            'output' => $format,
            'extensions' => $type
        ]);

        try {
            $response = $this->getHttpClient()->get($url, [
                'query' => $query
            ])->getBody()->getContents();

            return 'json' === $format ? \GuzzleHttp\json_decode($response, true) : $response;

        } catch (\Exception $exception) {
            throw new HttpException($exception->getMessage(), $exception->getCode());
        }

    }


}