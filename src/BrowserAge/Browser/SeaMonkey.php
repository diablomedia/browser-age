<?php

namespace BrowserAge\Browser;

use BrowserAge\Browser;
use BrowserAge\BrowserAge;

class SeaMonkey extends Browser
{
    /*
     * These all come from SeaMonkey site (https://www.seamonkey-project.org/releases/)
     * except where noted.
     */
    protected $versions = [
        'desktop' => [
            BrowserAge::STABILITY_STABLE => [
                // Link on release page for 1.0 goes to 1.0.4, found this on wikipedia
                // https://en.wikipedia.org/wiki/SeaMonkey#Release_history
                '1.0'    => '2006-01-30',
                '1.0.1'  => '2006-04-13',
                '1.0.2'  => '2006-06-01',
                '1.0.3'  => '2006-06-27',
                '1.0.4'  => '2006-08-02',
                '1.0.5'  => '2006-09-14',
                '1.0.6'  => '2006-11-08',
                '1.0.7'  => '2006-12-20',
                '1.0.8'  => '2007-02-28',
                '1.0.9'  => '2007-05-30',
                '1.1'    => '2007-01-18',
                '1.1.1'  => '2007-02-28',
                '1.1.2'  => '2007-05-30',
                '1.1.3'  => '2007-07-19',
                '1.1.4'  => '2007-08-03',
                '1.1.5'  => '2007-10-19',
                '1.1.6'  => '2007-11-05',
                '1.1.7'  => '2007-11-30',
                '1.1.8'  => '2008-02-07',
                '1.1.9'  => '2008-03-25',
                '1.1.10' => '2008-07-02',
                '1.1.11' => '2008-07-15',
                '1.1.12' => '2008-09-23',
                '1.1.13' => '2008-11-12',
                '1.1.14' => '2008-12-16',
                '1.1.15' => '2009-03-18',
                '1.1.16' => '2009-04-08',
                '1.1.17' => '2009-06-22',
                '1.1.18' => '2009-09-03',
                '1.1.19' => '2010-03-16',
                '2.0'    => '2009-12-15',
                '2.0.1'  => '2009-12-15',
                '2.0.2'  => '2010-01-11',
                '2.0.3'  => '2010-02-17',
                '2.0.4'  => '2010-03-30',
                '2.0.5'  => '2010-06-22',
                '2.0.6'  => '2010-07-20',
                '2.0.7'  => '2010-09-07',
                '2.0.8'  => '2010-09-07',
                '2.0.9'  => '2010-10-20',
                '2.0.10' => '2010-10-28',
                '2.0.11' => '2010-12-09',
                '2.0.12' => '2011-03-02',
                '2.0.13' => '2011-03-23',
                '2.0.14' => '2011-04-28',
                '2.1'    => '2011-06-10',
                '2.2'    => '2011-07-07',
                '2.3'    => '2011-08-16',
                '2.3.1'  => '2011-08-23',
                '2.3.2'  => '2011-08-31',
                '2.3.3'  => '2011-09-06',
                '2.4'    => '2011-09-27',
                '2.4.1'  => '2011-09-29',
                '2.5'    => '2011-11-22',
                '2.6'    => '2011-12-20',
                '2.6.1'  => '2011-12-22',
                '2.7'    => '2012-01-31',
                '2.7.1'  => '2012-02-10',
                '2.7.2'  => '2012-02-17',
                '2.8'    => '2012-03-13',
                '2.9'    => '2012-04-24',
                '2.9.1'  => '2012-04-30',
                '2.10'   => '2012-06-06',
                '2.10.1' => '2012-06-16',
                '2.11'   => '2012-07-17',
                '2.12'   => '2012-08-28',
                '2.12.1' => '2012-09-10',
                '2.13'   => '2012-10-09',
                '2.13.1' => '2012-10-12',
                '2.13.2' => '2012-10-27',
                '2.14'   => '2012-11-20',
                '2.14.1' => '2012-11-30',
                '2.15'   => '2013-01-08',
                '2.15.1' => '2013-01-20',
                '2.15.2' => '2013-02-04',
                '2.16'   => '2013-02-21',
                '2.16.1' => '2013-03-08',
                '2.16.2' => '2013-03-13',
                '2.17'   => '2013-04-02',
                '2.17.1' => '2013-04-14',
                '2.19'   => '2013-07-02',
                '2.20'   => '2013-08-06',
                '2.21'   => '2013-09-17',
                '2.22'   => '2013-10-30',
                '2.22.1' => '2013-11-18',
                '2.23'   => '2013-12-12',
                '2.24'   => '2014-02-06',
                '2.25'   => '2014-03-19',
                '2.26'   => '2014-06-16',
                '2.26.1' => '2014-06-16',
                '2.29'   => '2014-09-07',
                '2.29.1' => '2014-09-24',
                '2.30'   => '2014-10-15',
                '2.31'   => '2014-12-04',
                '2.32'   => '2015-01-13',
                '2.32.1' => '2015-02-06',
                '2.33'   => '2015-03-10',
                '2.33.1' => '2015-03-23',
                '2.35'   => '2015-09-03',
                '2.38'   => '2015-09-26',
                '2.39'   => '2015-11-08',
                '2.40'   => '2016-03-14',
                '2.46'   => '2016-12-22',
                '2.48'   => '2017-07-31',
                '2.49.1' => '2017-11-04',
                '2.49.2' => '2018-02-15',
                '2.49.3' => '2018-05-04',
                '2.49.4' => '2018-07-27',
            ],
        ]
    ];

    public function getVersions()
    {
        $this->versions['windows'] = $this->versions['desktop'];
        $this->versions['linux']   = $this->versions['desktop'];
        $this->versions['mac']     = $this->versions['desktop'];
        unset($this->versions['desktop']);

        return parent::getVersions();
    }
}
