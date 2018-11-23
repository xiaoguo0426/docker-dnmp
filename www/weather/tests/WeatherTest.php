<?php
/**
 * Created by PhpStorm.
 * User: xiaoguo
 * Date: 18-11-23
 * Time: 上午12:00
 */

namespace Xiaoguo\Weather\Tests;

use PHPUnit\Framework\TestCase;
use Xiaoguo\Weather\Weather;
use Xiaoguo\Weather\Exceptions\InvalidArgumentException;

class WeatherTest extends TestCase
{

    public function testGetWeatherWithInvalidType()
    {

        $w = new Weather('mock-key');

        // 断言会抛出此异常类
        $this->expectException(InvalidArgumentException::class);

        // 断言异常消息为 'Invalid type value(base/all): foo'
        $this->expectExceptionMessage('Invalid type value(base/all): foo');

        $w->getWeather('深圳', 'foo');

        $this->fail('Failed to assert getWeather throw exception with invalid argument.');

    }


    public function testGetWeather()
    {


    }

    public function testGetHttpClient()
    {

    }

    public function testSetGuzzleOptions()
    {


    }


}

