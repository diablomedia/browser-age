<?php

namespace BrowserAge\Browser;

use BrowserAge\Browser;
use BrowserAge\BrowserAge;

class Silk extends Browser
{
    protected $versions = [
        'android' => [
            BrowserAge::STABILITY_STABLE => [
                // https://aws.amazon.com/releasenotes/Amazon-Silk/9846671730260809
                '3.0' => '2013-05-09',
                // The rest of these are based on our logs, so aren't exact. Still looking for a
                // good source of the actual release dates for this browser
                '3.11' => '2014-01-07',
                '3.12' => '2014-01-27',
                '3.13' => '2014-02-11',
                '3.14' => '2014-02-25',
                '3.15' => '2014-03-12',
                '3.16' => '2014-04-11',
                '3.17' => '2014-04-29',
                '3.19' => '2014-06-07',
                '3.20' => '2014-06-16',
                '3.21' => '2014-06-20',
                '3.23' => '2014-08-06',
                '3.24' => '2014-08-07',
                '3.25' => '2014-09-03',
                '3.26' => '2014-09-10',
                '3.30' => '2014-09-12',
                '3.32' => '2014-10-13',
                '3.33' => '2014-10-15',
                '3.35' => '2014-10-22',
                '3.37' => '2014-11-05',
                '3.38' => '2014-11-22',
                '3.40' => '2014-12-02',
                '3.41' => '2014-12-12',
                '3.44' => '2015-01-28',
                '3.45' => '2015-02-03',
                '3.46' => '2015-02-09',
                '3.47' => '2015-03-06',
                '3.48' => '2015-03-24',
                // No hits from the versions between these two, perhaps don't exist? (browscap has many versions here)
                '3.65' => '2015-04-15',
                '3.66' => '2015-04-28',
                '3.67' => '2015-06-23',
                '3.68' => '2015-07-27',
                '3.69' => '2015-10-20',
                '3.70' => '2015-11-19',
                //'44.1.54' => '2015-09-30', Just a few events on this day and in October same year
                '44.1.77' => '2015-08-06',
                '44.1.81' => '2015-08-11',
                //'44.2.28' => '', In our logs this one shows up after the one below, omitting for now
                '44.2.49' => '2015-09-16',
                '45.1.99' => '2015-10-06',
                '45.1.102' => '2015-10-25',
                '46.1.66' => '2015-11-02',
                '46.2.33' => '2015-11-10',
                '46.3.1' => '2015-11-19',
                '47.1.79' => '2015-12-11',
                '47.1.80' => '2015-12-17',
                '47.1.81' => '2015-12-18',
                '47.2.3' => '2016-01-04',
                '47.3.2' => '2016-01-25',
                '48.1.51' => '2016-02-08',
                '48.2.2' => '2016-02-29',
                //'48.3.1' => '2016-03-22', Only saw one event with this version
                '49.1.30' => '2016-03-22',
                '49.2.1' => '2016-03-24',
                '49.3.1' => '2016-03-31',
                '50.1.77' => '2016-05-09',
                '50.2.1' => '2016-05-16',
                '51.1.116' => '2016-07-06',
                '51.2.1' => '2016-07-14',
                '51.3.4' => '2016-08-04',
                '52.1.79' => '2016-08-23',
                '53.2.53' => '2016-09-24',
                '53.3.5' => '2016-10-07',
                '53.4.2' => '2016-10-23',
                '54.1.112' => '2016-11-09',
                '54.2.3' => '2016-11-18',
                '54.3.1' => '2016-11-30',
                '54.4.4' => '2016-12-14',
                '55.1.62' => '2016-12-28',
                '55.2.6' => '2017-01-16',
                '56.1.61' => '2017-02-09',
                '56.2.4' => '2017-02-21',
                '57.1.109' => '2017-04-05',
                '57.2.2' => '2017-04-08',
                '58.1.81' => '2017-05-10',
                '58.2.6' => '2017-05-19',
                '58.3.1' => '2017-06-08',
                '58.4.1' => '2017-06-15',
                '59.1.92' => '2017-06-20',
                '59.2.2' => '2017-06-20',
                '59.3.1' => '2017-07-05',
                '60.1.332' => '2017-08-18',
                '60.2.12' => '2017-09-01',
                '61.1.77' => '2017-10-06',
                '61.2.1' => '2017-10-12',
                '61.3.1' => '2017-10-17',
            ],
        ],
    ];
}
