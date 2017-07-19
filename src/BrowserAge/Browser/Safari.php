<?php

namespace BrowserAge\Browser;

use BrowserAge\BrowserAge;
use BrowserAge\Browser;

class Safari extends Browser
{
    /*
     * These all come from Wikipedia (https://en.wikipedia.org/wiki/Safari_version_history)
     * except where noted.
     */
    protected $versions = [
        'mac' => [
            BrowserAge::STABILITY_STABLE => [
                '1.0' => '2003-06-23',
                '1.0.3' => '2004-08-13',
                '1.1' => '2003-10-24',
                '1.2' => '2004-02-02',
                '1.3' => '2005-04-15',
                '1.3.1' => '2005-08-29',
                '1.3.2' => '2006-01-11',
                '2.0' => '2005-04-29',
                '2.0.2' => '2005-10-31',
                '2.0.4' => '2006-01-10',
                '3.0' => '2007-06-11',
                '3.0.2' => '2007-06-22',
                '3.0.3' => '2007-07-31',
                '3.0.4' => '2007-10-26',
                '3.1' => '2008-03-18',
                '3.1.1' => '2008-04-16',
                '3.1.2' => '2008-06-30',
                '3.2' => '2008-11-13',
                '3.2.1' => '2008-11-24',
                '3.2.3' => '2009-05-12',
                '4.0' => '2009-06-08',
                '4.0.1' => '2009-06-17',
                '4.0.2' => '2009-07-08',
                '4.0.3' => '2009-08-11',
                '4.0.4' => '2009-11-11',
                '4.0.5' => '2010-03-11',
                '4.1' => '2010-06-07',
                '4.1.1' => '2010-07-28',
                '4.1.2' => '2010-09-07',
                '4.1.3' => '2010-11-18',
                '5.0' => '2010-06-07',
                '5.0.1' => '2010-07-28',
                '5.0.2' => '2010-09-07',
                '5.0.3' => '2010-11-18',
                '5.0.4' => '2011-03-09',
                '5.0.5' => '2011-04-14',
                '5.0.6' => '2011-07-20',
                '5.1' => '2011-07-20',
                '5.1.1' => '2011-10-12',
                '5.1.2' => '2011-11-29',
                '5.1.3' => '2012-02-01',
                '5.1.4' => '2012-03-12',
                '5.1.5' => '2012-03-26',
                '5.1.6' => '2012-05-09',
                '5.1.7' => '2012-05-09',
                '5.1.8' => '2013-03-14',
                '5.1.9' => '2013-04-16',
                '5.1.10' => '2013-09-12',
                '6.0' => '2012-07-25',
                '6.0.1' => '2012-09-21',
                '6.0.2' => '2012-11-01',
                '6.0.3' => '2013-03-14',
                '6.0.4' => '2013-04-16',
                '6.0.5' => '2013-06-05',
                '6.1' => '2013-06-11',
                '6.1.1' => '2013-12-16',
                '6.1.2' => '2014-02-25',
                '6.1.3' => '2014-04-01',
                '6.1.4' => '2014-05-21',
                '6.1.5' => '2014-06-30',
                '6.1.6' => '2014-08-13',
                '6.2' => '2015-09-18',
                '6.2.1' => '2014-12-04',
                '6.2.2' => '2014-12-11',
                '6.2.3' => '2015-01-27',
                '6.2.4' => '2015-03-17',
                '6.2.5' => '2015-04-08',
                '6.2.6' => '2015-05-06',
                '6.2.7' => '2015-06-30',
                '6.2.8' => '2015-08-13',
                '7.0' => '2013-10-22',
                '7.0.1' => '2013-12-16',
                '7.0.2' => '2014-02-25',
                '7.0.3' => '2014-04-01',
                '7.0.4' => '2014-05-21',
                '7.0.5' => '2014-06-30',
                '7.0.6' => '2014-08-13',
                '7.1' => '2014-09-18',
                '7.1.1' => '2014-12-04',
                '7.1.2' => '2014-12-11',
                '7.1.3' => '2015-01-27',
                '7.1.4' => '2015-03-17',
                '7.1.5' => '2015-04-08',
                '7.1.6' => '2015-05-06',
                '7.1.7' => '2015-06-30',
                '7.1.8' => '2015-08-13',
                '8.0' => '2015-10-16',
                '8.0.1' => '2014-12-04',
                '8.0.2' => '2014-12-11',
                '8.0.3' => '2015-01-27',
                '8.0.4' => '2015-03-17',
                '8.0.5' => '2015-04-08',
                '8.0.6' => '2015-05-06',
                '8.0.7' => '2015-06-30',
                '8.0.8' => '2015-08-13',
                '9.0' => '2015-09-30',
                '9.0.1' => '2015-10-21',
                '9.0.2' => '2015-12-08',
                '9.0.3' => '2015-01-15',
                '9.1' => '2016-03-21',
                '9.1.1' => '2016-05-17',
                '9.1.2' => '2016-07-18',
                '9.1.3' => '2016-09-01',
                '10.0' => '2016-09-20',
                '10.0.1' => '2016-10-24',
                '10.0.2' => '2016-12-13',
                '10.0.3' => '2017-01-23',
                '10.1' => '2017-03-27',
            ],
        ],
        'ios' => [
            BrowserAge::STABILITY_STABLE => [
                '3.0' => '2007-06-29',
                '3.1.1' => '2008-07-11',
                '4.0' => '2009-06-17',
                '4.0.5' => '2010-06-21',
                '5.0.2' => '2010-11-22',
                // Wikipedia has no info for anything greater than 5.0.2
                // These versions are based on a mixture of useragents and ios release history
                // iOS versions come from Wikipedia: https://en.wikipedia.org/wiki/IOS_version_history
                // Assuming Safari 6.0 was released with iOS 6.0
                '6.0' => '2012-09-19',
                // Assuming Safari 7.0 was released with iOS 7.0
                '7.0' => '2013-09-18',
                // Assuming Safari 8.0 was released with iOS 8.0
                '8.0' => '2014-09-17',
                // Assuming Safari 9.0 was released with iOS 9.0
                '9.0' => '2015-09-16',
                // Assuming Safari 10.0 was released with iOS 10.0
                '10.0' => '2016-09-16',
            ],
        ],
        'windows' => [
            BrowserAge::STABILITY_STABLE => [
                '3.0' => '2007-06-11',
                '3.0.1' => '2007-06-13',
                '3.0.2' => '2007-06-22',
                '3.0.3' => '2007-08-01',
                '3.0.4' => '2007-11-14',
                '3.1' => '2008-03-18',
                '3.1.1' => '2008-04-16',
                '3.1.2' => '2008-06-19',
                '3.2' => '2008-11-13',
                '3.2.1' => '2008-11-24',
                '3.2.2' => '2009-02-12',
                '3.2.3' => '2009-05-12',
                '4.0' => '2008-06-11',
                '4.0.1' => '2009-06-08',
                '4.0.2' => '2009-07-08',
                '4.0.3' => '2009-08-11',
                '4.0.4' => '2009-11-11',
                '4.0.5' => '2010-03-11',
                '5.0' => '2010-06-07',
                '5.0.1' => '2010-07-28',
                '5.0.2' => '2010-09-07',
                '5.0.3' => '2010-11-18',
                '5.0.4' => '2011-03-09',
                '5.0.5' => '2011-04-14',
                '5.1' => '2011-07-20',
                '5.1.1' => '2011-10-12',
                '5.1.2' => '2011-11-29',
                '5.1.4' => '2012-03-12',
                '5.1.5' => '2012-03-26',
                '5.1.7' => '2012-05-09',
            ],
        ],
    ];
}
