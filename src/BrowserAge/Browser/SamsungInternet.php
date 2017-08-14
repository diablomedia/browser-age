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
                // https://web.archive.org/web/20160201235250/https://play.google.com/store/apps/details?id=com.sec.android.app.sbrowser&hl=en
                '3.2.38' => '2015-10-26',
                // http://web.archive.org/web/20160601172745/http://developer.samsung.com:80/technical-doc/view.do?v=T000000202L
                '4.0' => '2016-03-21',
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
