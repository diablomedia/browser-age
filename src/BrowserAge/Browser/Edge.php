<?php

namespace BrowserAge\Browser;

use BrowserAge\Browser;
use BrowserAge\BrowserAge;

class Edge extends Browser
{
    /*
     * Data for these comes from: https://en.wikipedia.org/wiki/Microsoft_Edge
     * These are the "EdgeHTML" versions, which is what are reported in useragents
     */
    protected $versions = [
        'windows' => [
            BrowserAge::STABILITY_BETA => [
                '12.10049' => '2015-03-03',
                '12.10061' => '2015-04-22',
                '12.10074' => '2015-04-29',
                '12.10122' => '2015-05-20',
                '12.10130' => '2015-05-29',
                '12.10158' => '2015-06-29',
                '12.10159' => '2015-06-30',
                '12.10162' => '2015-07-02',
                '12.10166' => '2015-07-09',
                '12.10525' => '2015-08-18',
                '12.10532' => '2015-08-27',
                '13.10547' => '2015-09-18',
                '13.10565' => '2015-10-12',
                '13.10576' => '2015-10-29',
                '13.11082' => '2015-12-16',
                '13.11099' => '2016-01-13',
                '13.11102' => '2016-01-21',
                '13.14251' => '2016-01-27',
                '13.14257' => '2016-02-03',
                '14.14267' => '2016-02-18',
                '14.14271' => '2016-02-24',
                '14.14279' => '2016-03-04',
                '14.14291' => '2016-03-17',
                '14.14295' => '2016-03-25',
                '14.14316' => '2016-04-06',
                '14.14328' => '2016-04-22',
                '14.14332' => '2016-04-26',
                '14.14342' => '2016-05-10',
                '14.14352' => '2016-05-31',
                '14.14901' => '2016-08-11',
                '14.14905' => '2016-08-17',
                '14.14915' => '2016-08-31',
                '14.14926' => '2016-09-14',
                '14.14931' => '2016-09-21',
                '14.14936' => '2016-09-28',
                '15.14942' => '2016-10-07',
                '15.14946' => '2016-10-13',
                '15.14951' => '2016-10-19',
                '15.14955' => '2016-10-25',
                '15.14959' => '2016-11-03',
                '15.14965' => '2016-11-09',
                '15.14971' => '2016-11-17',
                '15.14977' => '2016-12-01',
                '15.14986' => '2016-12-14',
            ],
            BrowserAge::STABILITY_STABLE => [
                '12.10240' => '2015-07-15',
                '13.10586' => '2015-11-05',
                '14.14393' => '2016-08-02',
                '15.15063' => '2017-04-11',
                '16.16299' => '2017-09-26',
            ],
        ],
        'ios' => [
            // History comes from Apple Store (not web accessible)
            BrowserAge::STABILITY_STABLE => [
                '41.4' => '2017-11-30',
                '41.6' => '2017-12-13',
                '41.8' => '2018-01-10',
                '41.9' => '2018-01-19',
            ],
        ],
        'android' => [
            // History here comes from our logs, the google play store doesn't list the same
            // version numbers as what's reported in the UA
            BrowserAge::STABILITY_STABLE => [
                '41.0.0.1136' => '2017-11-09',
                '41.0.0.1138' => '2017-11-16',
                '41.0.0.1172' => '2017-11-24',
                '41.0.0.1265' => '2017-11-28',
                '41.0.0.1267' => '2017-11-29',
                '41.0.0.1270' => '2017-12-05',
                '41.0.0.1273' => '2018-01-02',
                '41.0.0.1552' => '2018-01-13',
                '41.0.0.1561' => '2018-01-18',
            ],
        ],
    ];
}
