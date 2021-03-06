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
                '17.17134' => '2018-04-30',
                '18.17763' => '2018-11-13',
            ],
        ],
        'ios' => [
            // History comes from Apple Store https://itunes.apple.com/us/app/microsoft-edge/id1288723196?mt=8
            BrowserAge::STABILITY_STABLE => [
                '41.4'    => '2017-11-30',
                '41.6'    => '2017-12-13',
                '41.8'    => '2018-01-10',
                '41.9'    => '2018-01-19',
                '41.10'   => '2018-02-21',
                '41.11'   => '2018-02-28',
                '41.13'   => '2018-03-25',
                '41.14'   => '2018-04-22',
                '41.14.3' => '2018-05-01',
                '42.1.0'  => '2018-05-27',
                '42.1.1'  => '2018-05-29',
                '42.2.0'  => '2018-06-21',
                '42.3.0'  => '2018-07-17',
                '42.3.6'  => '2018-07-25',
                '42.3.11' => '2018-08-08',
                '42.4.2'  => '2018-08-20',
                '42.5.2'  => '2018-09-13',
                '42.5.3'  => '2018-09-19',
                '42.6.1'  => '2018-10-15',
                '42.6.3'  => '2018-10-23',
                '42.7.3'  => '2018-11-09',
                '42.7.4'  => '2018-11-18',
                '42.8.3'  => '2018-12-04',
                '42.8.5'  => '2018-12-05',
                '42.8.6'  => '2018-12-16',
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
                '41.0.0.1563' => '2018-02-02',
                '41.0.0.1656' => '2018-02-12',
                '41.0.0.1660' => '2018-03-04',
                '41.0.0.1662' => '2018-03-14',
                '41.0.0.1722' => '2018-03-17',
                '41.0.0.1726' => '2018-03-29',
                '41.0.0.1919' => '2018-04-20',
                '41.0.0.1920' => '2018-04-23',
                '41.0.0.1921' => '2018-04-25',
                '42.0.0.2028' => '2018-05-25',
                '42.0.0.2033' => '2018-06-05',
                '42.0.0.2053' => '2018-06-17',
                '42.0.0.2055' => '2018-06-19',
                '42.0.0.2057' => '2018-06-22',
                '42.0.0.2059' => '2018-07-13',
                '42.0.0.2222' => '2018-07-13',
                '42.0.0.2225' => '2018-07-13',
                '42.0.0.2227' => '2018-07-19',
                '42.0.0.2228' => '2018-07-20',
                '42.0.0.2231' => '2018-07-23',
                '42.0.0.2233' => '2018-07-30',
                '42.0.0.2238' => '2018-07-30',
                '42.0.0.2239' => '2018-08-01',
                '42.0.0.2285' => '2018-08-18',
            ],
        ],
    ];
}
