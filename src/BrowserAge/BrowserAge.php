<?php

namespace BrowserAge;

class BrowserAge
{
    public const STABILITY_BETA   = 100;
    public const STABILITY_STABLE = 200;

    protected $minimumStability = self::STABILITY_STABLE;
    protected $browser;
    protected $platform;

    public function __construct($browser = null, $browserVersion = null, $platform = null, $platformVersion = null)
    {
        if ($browser !== null) {
            switch (strtolower($browser)) {
                case 'chrome':
                    $browser = new Browser\Chrome();
                    break;
                case 'firefox':
                    $browser = new Browser\Firefox();
                    break;
                case 'firefox focus':
                    $browser = new Browser\FirefoxFocus();
                    break;
                case 'edge':
                case 'edge mobile':
                    $browser = new Browser\Edge();
                    break;
                case 'internetexplorer':
                case 'internet explorer':
                case 'ie':
                case 'iemobile':
                    $browser = new Browser\InternetExplorer();
                    break;
                case 'safari':
                    $browser = new Browser\Safari();
                    break;
                case 'opera':
                case 'opera mobile':
                    $browser = new Browser\Opera();
                    break;
                case 'opera mini':
                    $browser = new Browser\OperaMini();
                    break;
                case 'samsung':
                case 'samsung browser':
                case 'samsung internet':
                    $browser = new Browser\SamsungInternet();
                    break;
                case 'seamonkey':
                    $browser = new Browser\SeaMonkey();
                    break;
                case 'silk':
                    $browser = new Browser\Silk();
                    break;
                case 'yandex browser':
                    $browser = new Browser\YandexBrowser();
                    break;
                case 'uc browser':
                    $browser = new Browser\UCBrowser();
                    break;
                default:
                    throw new \Exception('Browser "' . $browser . '" is not supported.');
            }

            $this->setBrowser($browser, $browserVersion);
        }

        if ($platform !== null) {
            switch (strtolower($platform)) {
                case 'windows':
                case 'win':
                case 'win32':
                case 'win64':
                case 'win31':
                case 'win16':
                case 'win95':
                case 'win98':
                case 'winme':
                case 'winnt':
                case 'win2000':
                case 'winxp':
                case 'winvista':
                case 'win7':
                case 'win8':
                case 'win8.1':
                case 'win10':
                    $platform = new Platform\Windows();
                    break;
                case 'winphone':
                case 'winmobile':
                case 'winphone8.1':
                case 'winphone8':
                case 'winphone7.5':
                case 'winphone':
                case 'winphone7':
                case 'winphone6':
                    $platform = new Platform\WinPhone();
                    break;
                case 'mac':
                case 'osx':
                case 'macos':
                    $platform = new Platform\Mac();
                    break;
                case 'linux':
                    $platform = new Platform\Linux();
                    break;
                case 'chromeos':
                    $platform = new Platform\ChromeOS();
                    break;
                case 'android':
                    $platform = new Platform\Android();
                    break;
                case 'ios':
                    $platform = new Platform\iOS();
                    break;
                default:
                    $platform = null;
                    break;
            }

            if ($platform !== null) {
                $this->setPlatform($platform, $platformVersion);
            }
        }
    }

    public function setBrowser(Browser $browser, $version = null): void
    {
        $this->browser = $browser;
        if ($version !== null) {
            $this->browser->setVersion($version);
        }
    }

    public function setPlatform(Platform $platform, $version = null): void
    {
        $this->platform = $platform;
        if ($version !== null) {
            $this->platform->setVersion($version);
        }
    }

    public function setMinimumStability($stability): void
    {
        $this->minimumStability = $stability;
    }

    public function calculateAge()
    {
        if (!$this->browser) {
            throw new \Exception('Browser not set, must be defined using "setBrowser" method');
        }

        return [
            'browser'  => $this->browser->calculateAge($this->platform, $this->minimumStability),
            'platform' => [],
        ];
    }
}
