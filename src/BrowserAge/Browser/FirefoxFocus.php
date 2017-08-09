<?php

namespace BrowserAge\Browser;

use BrowserAge\Browser;
use BrowserAge\BrowserAge;

class FirefoxFocus extends Browser
{
    protected $versions = [
        // These come from the Version History in the App Store (not web accessible)
        'ios' => [
            BrowserAge::STABILITY_STABLE => [
                '1.0' => '2015-12-08',
                '1.1' => '2016-09-12',
                '2.0' => '2016-11-17',
                '2.0.1' => '2016-11-29',
                '3.0' => '2017-01-26',
                '3.0.1' => '2017-01-30',
                '3.1' => '2017-03-08',
                '3.2' => '2017-04-25',
                '3.3' => '2017-06-20',
                '3.3.1' => '2017-07-17',
                '3.4' => '2017-07-31',
            ],
        ],
        'android' => [
            BrowserAge::STABILITY_STABLE => [
                // https://web.archive.org/web/20170707033607/https://play.google.com/store/apps/details?id=org.mozilla.focus&hl=en
                '1.0' => '2017-06-19',
                // https://web.archive.org/web/20170809040518/https://play.google.com/store/apps/details?id=org.mozilla.focus&hl=en
                '1.1' => '2017-07-28',
            ],
        ],
    ];
}
