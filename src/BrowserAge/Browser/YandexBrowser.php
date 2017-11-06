<?php

namespace BrowserAge\Browser;

use BrowserAge\Browser;
use BrowserAge\BrowserAge;

class YandexBrowser extends Browser
{
    protected $versions = [
        // These are from the Version History in the app store (not web accessible)
        'ios' => [
            BrowserAge::STABILITY_STABLE => [
                '16.10.2.134' => '2016-11-09',
                '16.10.3.82' => '2016-11-23',
                '16.11.0.2708' => '2016-12-07',
                '16.11.1.716' => '2017-01-12',
                '17.1.0.2148' => '2017-01-29',
                '17.1.1.1119' => '2017-02-16',
                '17.3.0.1781' => '2017-03-01',
                '17.3.1.778' => '2017-03-15',
                '17.3.2.107' => '2017-03-29',
                '17.4.0.2110' => '2017-04-10',
                '17.4.1.576' => '2017-04-10',
                '17.4.2.162' => '2017-05-09',
                '17.4.3.193' => '2017-05-17',
                '17.4.3.195' => '2017-05-19',
                '17.6.0.1578' => '2017-06-04',
                '17.6.1.730' => '2017-06-15',
                '17.6.2.226' => '2017-07-05',
                '17.7.0.1504' => '2017-07-16',
                '17.7.1.612' => '2017-07-27',
                '17.7.2.250' => '2017-08-08',
                '17.7.2.255' => '2017-08-09',
                '17.7.3.291' => '2017-08-21',
                '17.9.0.2031' => '2017-09-05',
                '17.9.1.726' => '2017-09-19',
                '17.9.2.238' => '2017-10-03',
                '17.9.2.250' => '2017-10-04',
                '17.10.0.1970' => '2017-10-18',
                '17.10.1.1004' => '2017-11-01',
            ],
        ],
    ];
}
