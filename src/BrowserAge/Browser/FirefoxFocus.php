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
                // https://itunes.apple.com/us/app/firefox-focus-privacy-browser/id1055677337?mt=8
                '3.0' => '2017-01-26',
                '3.0.1' => '2017-01-30',
                '3.1' => '2017-03-08',
                '3.2' => '2017-04-25',
                '3.3' => '2017-06-20',
                '3.3.1' => '2017-07-17',
                '3.4' => '2017-07-31',
                '3.5' => '2017-08-20',
                '3.5.1' => '2017-08-24',
                '3.6' => '2017-09-05',
                '3.6.1' => '2017-09-08',
                '3.7' => '2017-09-12',
                '3.8' => '2017-09-22',
                '3.9' => '2017-10-19',
                '3.10' => '2017-10-28',
                '3.10.1' => '2017-11-02',
                '3.11' => '2017-11-18',
                '4.0' => '2017-12-10',
                '4.0.1' => '2017-12-10',
                '4.0.2' => '2018-01-17',
                '4.0.3' => '2018-02-17',
                '4.1' => '2018-05-29',
                '6.0' => '2018-07-10',
                '6.1' => '2018-07-25',
                '6.1.1' => '2018-07-31',
            ],
        ],
        'android' => [
            BrowserAge::STABILITY_STABLE => [
                // https://web.archive.org/web/20170707033607/https://play.google.com/store/apps/details?id=org.mozilla.focus&hl=en
                '1.0' => '2017-06-19',
                // https://web.archive.org/web/20170809040518/https://play.google.com/store/apps/details?id=org.mozilla.focus&hl=en
                '1.1' => '2017-07-28',
                // https://github.com/mozilla-mobile/focus-android/releases/tag/v1.2
                // Missed the play store update for this, but found the release tag on github
                '1.2' => '2017-08-17',
                // https://web.archive.org/web/20170911170150/https://play.google.com/store/apps/details?id=org.mozilla.focus&hl=en
                '1.3' => '2017-08-31',
                // https://web.archive.org/web/20171002164944/https://play.google.com/store/apps/details?id=org.mozilla.focus&hl=en
                '2.0' => '2017-10-02',
                // https://github.com/mozilla-mobile/focus-android/releases/tag/v2.1
                '2.1' => '2017-10-09',
                // https://github.com/mozilla-mobile/focus-android/releases/tag/v2.2
                '2.2' => '2017-10-19',
                // https://web.archive.org/web/20171120184447/https://play.google.com/store/apps/details?id=org.mozilla.focus&hl=en
                '2.3' => '2017-11-17',
                // https://github.com/mozilla-mobile/focus-android/releases/tag/v2.4
                '2.4' => '2017-11-27',
                // https://github.com/mozilla-mobile/focus-android/releases/tag/v2.5
                '2.5' => '2017-11-27',
                // https://web.archive.org/web/20180108175925/https://play.google.com/store/apps/details?id=org.mozilla.focus&hl=en
                '4.0.1' => '2017-12-19',
                // https://github.com/mozilla-mobile/focus-android/releases/tag/v4.0.2-RC1
                '4.0.2' => '2018-01-11',
                // https://github.com/mozilla-mobile/focus-android/releases/tag/V4.1
                '4.1' => '2018-03-22',
                // https://github.com/mozilla-mobile/focus-android/releases/tag/v4.2
                '4.2' => '2018-04-18',
                // https://github.com/mozilla-mobile/focus-android/releases/tag/v5.0
                '5.0' => '2018-05-14',
                // https://github.com/mozilla-mobile/focus-android/releases/tag/v5.2-RC3
                '5.2' => '2018-06-22',
                // https://github.com/mozilla-mobile/focus-android/releases/tag/V6.0-RC5
                '6.0' => '2018-07-05',
                // https://github.com/mozilla-mobile/focus-android/releases/tag/v6.1.1-RC3
                '6.1.1' => '2018-08-08',
            ],
        ],
    ];
}
