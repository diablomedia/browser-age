<?php

namespace BrowserAge\Browser;

use BrowserAge\Browser;
use BrowserAge\BrowserAge;

class SamsungInternet extends Browser
{
    protected $versions = [
        'android' => [
            BrowserAge::STABILITY_STABLE => [
                //'3.0'
                //'4.0'
                //'4.0.10-53'
                // http://web.archive.org/web/20160906200633/http://developer.samsung.com/internet/android/releases
                '4.2' => '2016-08-02',
                // https://medium.com/samsung-internet-dev/announcing-samsung-internet-5-0-1ac2bfc14b78
                '5.0' => '2016-12-16',
                //'5.2'
                // https://medium.com/samsung-internet-dev/announcing-samsung-internet-v5-4-stable-fd941e0dcd58
                '5.4' => '2017-05-17',
            ],
        ],
    ];
}
