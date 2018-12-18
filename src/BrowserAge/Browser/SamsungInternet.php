<?php

namespace BrowserAge\Browser;

use BrowserAge\Browser;
use BrowserAge\BrowserAge;

class SamsungInternet extends Browser
{
    protected $versions = [
        'android' => [
            BrowserAge::STABILITY_BETA => [
                // https://medium.com/samsung-internet-dev/new-samsung-internet-beta-introduces-protected-browsing-52f1ce7145f6
                '7.2' => '2018-03-08',
                // https://medium.com/samsung-internet-dev/samsung-internet-v7-4-beta-is-here-bdbc9be9f102
                '7.4' => '2018-06-05',
                // https://medium.com/samsung-internet-dev/hello-samsung-internet-8-2-beta-521e4b215fb3
                '8.2' => '2018-09-03',
            ],
            BrowserAge::STABILITY_STABLE => [
                // Based on first sighting in our logs
                //'1.0' => '',
                //'1.1' => '',
                //'2.0' => '',
                '2.1' => '2015-01-14',
                '3.0' => '2015-03-03',
                //'3.1' => '',
                //'3.2' => '',
                // https://web.archive.org/web/20160201235250/https://play.google.com/store/apps/details?id=com.sec.android.app.sbrowser&hl=en
                '3.2.38' => '2015-10-26',
                //'3.3' => '',
                //'3.4' => '',
                //'3.5' => '',
                // http://web.archive.org/web/20160601172745/http://developer.samsung.com:80/technical-doc/view.do?v=T000000202L
                '4.0' => '2016-03-21',
                //'4.0.10-53'
                // http://web.archive.org/web/20160906200633/http://developer.samsung.com/internet/android/releases
                '4.2' => '2016-08-02',
                // https://medium.com/samsung-internet-dev/announcing-samsung-internet-5-0-1ac2bfc14b78
                '5.0' => '2016-12-16',
                // From first sighting in our logs (may be a beta release date)
                '5.2' => '2017-03-03',
                // https://medium.com/samsung-internet-dev/announcing-samsung-internet-v5-4-stable-fd941e0dcd58
                '5.4' => '2017-05-17',
                // https://medium.com/samsung-internet-dev/samsung-internet-v6-2-now-stable-ab7f95ed8b4b
                '6.2' => '2017-10-30',
                // https://medium.com/samsung-internet-dev/lets-connect-with-samsung-internet-v6-4-stable-1f197d43a812
                '6.4' => '2018-02-19',
                // https://medium.com/samsung-internet-dev/7-2-stable-is-here-81fdbfca75b4
                '7.2' => '2018-06-20',
                // https://medium.com/samsung-internet-dev/samsung-internet-7-4-is-stable-lets-check-out-what-s-new-d5c7b56897de
                '7.4' => '2018-09-12',
            ],
        ],
    ];
}
