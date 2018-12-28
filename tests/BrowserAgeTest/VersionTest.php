<?php

namespace BrowserAgeTest;

use PHPUnit\Framework\TestCase;
use BrowserAge\BrowserAge;

class VersionTest extends TestCase
{
    public function dataProviderVersions()
    {
        return [
            'chrome-mac-69-exact' => [
                'chrome', 'mac', '69.0.3497.81', ['start' => '2018-09-04', 'end' => '2018-09-11']
            ],
            'chrome-windows-67-exact' => [
                'chrome', 'windows', '67.0.3396.99', ['start' => '2018-06-25', 'end' => '2018-07-24']
            ]
        ];
    }

    /**
     * @dataProvider dataProviderVersions
     */
    public function testVersionAging($browser, $platform, $version, $expected): void
    {
        $ba = new BrowserAge($browser, $version, $platform);

        $age = $ba->calculateAge();

        $this->assertSame([
            'start' => isset($age['browser']->releaseDateRange['start']['date']) ? $age['browser']->releaseDateRange['start']['date']->format('Y-m-d') : null,
            'end'   => isset($age['browser']->releaseDateRange['end']['date']) ? $age['browser']->releaseDateRange['end']['date']->format('Y-m-d') : null,
        ], $expected);
    }
}
