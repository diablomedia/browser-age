<?php

namespace BrowserAge\Browser;

use BrowserAge\Browser;
use BrowserAge\BrowserAge;

class InternetExplorer extends Browser
{
    /*
     * Data for these comes from: https://en.wikipedia.org/wiki/Internet_Explorer_version_history
     * and for the mac: https://en.wikipedia.org/wiki/Internet_Explorer_for_Mac
     */
    protected $versions = [
        'windows' => [
            BrowserAge::STABILITY_STABLE => [
                '1.0' => '1995-08-16',
                // Wikipedia doesn't list the specific day
                '1.5' => '1996-01-01',
                '2.0' => '1995-11-22',
                // Wikipedia has this marked as "unknown"
                //'2.01' => '',
                '3.0' => '1996-08-13',
                // Wikipedia doesn't list the specific day
                '4.0' => '1997-09-01',
                '5.0' => '1999-03-18',
                '6.0' => '2001-08-27',
                '7.0' => '2006-10-18',
                '8.0' => '2009-03-19',
                '9.0' => '2011-03-14',
                '10.0' => '2012-10-26',
                '11.0' => '2013-10-17',
            ],
        ],
        'mac' => [
            BrowserAge::STABILITY_STABLE => [
                '2.0' => '1996-01-23',
                '3.0' => '1997-01-08',
                '4.0' => '1998-01-06',
                '4.5' => '1999-01-09',
                '5.0' => '2000-03-07',
            ],
        ],
        'winphone' => [
            BrowserAge::STABILITY_STABLE => [
                // Released with Windows Mobile 6.5 according to this:
                // https://en.wikipedia.org/wiki/Internet_Explorer_Mobile#Version_6
                // This date is the Windows Mobile 6.5 release date from here:
                // https://en.wikipedia.org/wiki/Windows_Mobile_6.5
                '6.0' => '2009-05-11',
                // Released with Windows Phone 7.0:
                // https://en.wikipedia.org/wiki/Internet_Explorer_Mobile#Version_7
                // Windows Phone 7.0 release date:
                // https://en.wikipedia.org/wiki/Windows_Phone_7
                '7.0' => '2010-10-21',
                // Released as part of the Windows Phone 7.5 update
                // https://en.wikipedia.org/wiki/Windows_Phone_version_history#Windows_Phone_7.5
                '9.0' => '2011-09-27',
                // Released with Windows Phone 8:
                // https://en.wikipedia.org/wiki/Internet_Explorer_Mobile#Version_10
                // https://en.wikipedia.org/wiki/Windows_Phone_8
                '10.0' => '2012-10-29',
                // https://en.wikipedia.org/wiki/Internet_Explorer_Mobile#Version_11
                '11.0' => '2014-07-15',
            ]
        ]
    ];
}
