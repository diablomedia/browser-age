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
    ];
}
