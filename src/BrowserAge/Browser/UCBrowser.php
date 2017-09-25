<?php

namespace BrowserAge\Browser;

use BrowserAge\Browser;
use BrowserAge\BrowserAge;

class UCBrowser extends Browser
{
    protected $versions = [
        'android' => [
            BrowserAge::STABILITY_STABLE => [
                // https://web.archive.org/web/20120518143022/https://play.google.com/store/apps/details?id=com.UCMobile.intl&hl=en
                '8.2.3' => '2012-04-28',
                // https://web.archive.org/web/20121028055044/https://play.google.com/store/apps/details?id=com.UCMobile.intl&hl=en
                '8.4.1' => '2012-10-25',
                // https://web.archive.org/web/20130215014357/https://play.google.com/store/apps/details?id=com.UCMobile.intl&hl=en
                '8.6.1' => '2013-02-14',
                // https://web.archive.org/web/20130526122240/https://play.google.com/store/apps/details?id=com.UCMobile.intl&hl=en
                '9.0.1' => '2013-05-23',
                // https://web.archive.org/web/20130816005830/https://play.google.com/store/apps/details?id=com.UCMobile.intl&hl=en
                '9.2.0' => '2013-08-07',
                // https://web.archive.org/web/20130930081257/https://play.google.com/store/apps/details?id=com.UCMobile.intl&hl=en
                '9.3.1' => '2013-09-29',
                // https://web.archive.org/web/20131222022358/https://play.google.com/store/apps/details?id=com.UCMobile.intl&hl=en
                '9.4.1' => '2013-12-20',
                // https://web.archive.org/web/20140124093302/https://play.google.com/store/apps/details?id=com.UCMobile.intl&hl=en
                '9.5.0' => '2014-01-14',
                // Rest of these come from https://www.apk4fun.com/history/1158/
                // (cross-checked a few of them with the archive.org snapshot of google play store)
                '9.7.5' => '2014-04-23',
                '9.8.0' => '2014-06-02',
                '9.8.9' => '2014-07-08',
                '9.9.2' => '2014-08-12',
                '9.9.4' => '2014-09-21',
                '9.9.6' => '2014-10-21',
                '10.0.0' => '2014-10-26',
                '10.0.1' => '2014-11-20',
                '10.0.2' => '2014-12-17',
                '10.1.0' => '2015-01-16',
                '10.2.0' => '2015-02-05',
                '10.3.0' => '2015-03-18',
                '10.4.1' => '2015-04-16',
                '10.5.0' => '2015-05-15',
                '10.5.2' => '2015-07-01',
                '10.6.2' => '2015-08-07',
                '10.7.0' => '2015-09-05',
                '10.7.5' => '2015-11-09',
                '10.9.8.770' => '2016-05-16',
                '10.10.0.796' => '2016-06-08',
                '10.10.5.809' => '2016-07-25',
                '10.10.8.820' => '2016-08-09',
                '11.0.0.828' => '2016-08-27',
                '11.0.5.850' => '2016-10-13',
                '11.0.8.855' => '2016-11-07',
                '11.1.0.882' => '2016-11-28',
                '11.1.5.890' => '2016-12-26',
                '11.2.0.915' => '2017-01-22',
                '11.2.5.932' => '2017-03-14',
                '11.2.8.945' => '2017-03-27',
                '11.3.0.950' => '2017-04-26',
                '11.3.2.960' => '2017-05-22',
                '11.3.5.972' => '2017-06-10',
                '11.3.8.976' => '2017-06-29',
                '11.4.2.995' => '2017-08-18',
                '11.4.5.1005' => '2017-09-18',
            ],
        ],
        // These are from the Version History in the app store (not web accessible)
        'ios' => [
            BrowserAge::STABILITY_STABLE => [
                '10.3.0.665' => '2015-10-20',
                '10.3.7.665' => '2015-11-11',
                '10.4.0.693' => '2015-11-20',
                '10.4.5.709' => '2015-12-06',
                '10.4.7.719' => '2015-12-21',
                '10.4.9.722' => '2016-01-06',
                '10.5.7.770' => '2016-05-15',
                '10.6.0.759' => '2016-03-17',
                '10.6.1.777' => '2016-03-22',
                '10.6.5.761' => '2016-03-31',
                '10.6.8.776' => '2016-04-19',
                '10.7.0.782' => '2016-04-27',
                '10.7.2.795' => '2016-05-09',
                '10.7.3.808' => '2016-06-21',
                '10.8.0.835' => '2016-08-22',
                '10.8.2.852' => '2016-09-06',
                '10.8.4.865' => '2016-09-27',
                '10.8.5.876' => '2016-10-22',
                '10.8.6.889' => '2016-11-30',
                '10.8.7.903' => '2016-12-15',
                '10.8.8.920' => '2017-02-06',
                '10.8.9.968' => '2017-05-18',
                '10.9.0.989' => '2017-07-17',
                '10.9.1.998' => '2017-07-25',
            ],
        ],
        'windows' => [
            BrowserAge::STABILITY_STABLE => [
                // http://www.ucweb.com/desktop/history.html
                '5.0.1104.0' => '2015-05-19',
                '5.1.1369.1226' => '2015-06-23',
                '5.2.1369.1414' => '2015-06-30',
                '5.2.2509.1042' => '2015-07-16',
                '5.2.2787.1029' => '2015-07-23',
                '5.2.3635.1033' => '2015-08-11',
                '5.4.4237.1032' => '2015-08-27',
                '5.4.5426.1034' => '2015-09-24',
                // http://filehippo.com/download_ucbrowser/history/2/
                '5.5.7608.1012' => '2015-11-30',
                '5.5.8071.1003' => '2015-12-07',
                '5.5.8807.1010' => '2015-12-28',
                '5.5.9936.1004' => '2016-01-15',
                '5.5.9936.1231' => '2016-02-02',
                '5.6.10764.1009' => '2016-03-16',
                '5.6.11651.1011' => '2016-04-06',
                // http://filehippo.com/download_ucbrowser/history/
                '5.6.12265.1017' => '2016-06-06',
                '5.6.13108.1008' => '2016-06-15',
                '5.7.15533.1010' => '2016-09-26',
                '5.7.16281.1003' => '2016-11-07',
                '6.0.1308.1011' => '2017-01-10',
                '6.0.1807.1000' => '2017-02-08',
                '6.1.2015.1007' => '2017-02-28',
                '6.1.2909.1022' => '2017-06-21',
                '6.1.2909.1403' => '2017-08-11',
                '7.0.6.1042' => '2017-09-06',
            ],
        ],
    ];
}
