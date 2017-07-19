<?php

namespace BrowserAge;

use DateTime;

class Browser
{
    protected $versions = [];
    protected $version;
    protected $platform;
    protected $minimumStability = BrowserAge::STABILITY_STABLE;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    protected function matchDepth($version, $compare)
    {
        $depth = count(explode('.', $version));

        return implode('.', array_slice(explode('.', $compare), 0, $depth));
    }

    protected function findNearestVersion($version, $versions)
    {
        foreach ($versions as $versionCheck) {
            $originalVersionCheck = $versionCheck;
            $versionCheck = $this->matchDepth($version, $versionCheck);
            if (version_compare($versionCheck, $version) >= 0) {
                return $originalVersionCheck;
            }
        }

        return '';
    }

    protected function incrementVersion($version)
    {
        $parts = explode('.', $version);

        $parts[count($parts) - 1]++;

        return implode('.', $parts);
    }

    public function calculateAge($platform = null, $stability = null)
    {
        if ($platform !== null) {
            $this->platform = $platform->getName();
        }

        $this->minimumStability = $stability;
        $versions = $this->getVersions();

        $found = $this->findNearestVersion($this->version, array_keys($versions));

        $age = new AgeResult();

        if ($found === array_keys($versions)[0]) {
            $age->releaseDateRange = [
                'start' => [
                    'date' => null,
                    'version' => null,
                    'inclusive' => false,
                ],
                'end' => [
                    'date' => new DateTime($versions[$found]),
                    'version' => $found,
                    'inclusive' => $this->version === $this->matchDepth($this->version, $found),
                ],
            ];
        } elseif ($found === '') {
            $age->releaseDateRange = [
                'start' => [
                    'date' => DateTime($versions[array_keys($versions)[count($versions) - 1]]),
                    'version' => array_keys($versions)[count($versions) - 1],
                    'inclusive' => $this->version === $this->matchDepth($this->version, array_keys($versions)[count($versions) - 1]),
                ],
                'end' => [
                    'date' => null,
                    'version' => null,
                    'inclusive' => false,
                ],
            ];
        } else {
            $nextFound = $this->findNearestVersion($this->incrementVersion($this->version), array_keys($versions));
            if ($nextFound === $found) {
                $age->releaseDateRange = [
                    'start' => [
                        'date' => new DateTime($versions[array_keys($versions)[array_search($found, array_keys($versions)) - 1]]),
                        'version' => array_keys($versions)[array_search($found, array_keys($versions)) - 1],
                        'inclusive' => $this->version === $this->matchDepth($this->version, array_keys($versions)[array_search($found, array_keys($versions)) - 1]),
                    ],
                    'end' => [
                        'date' => new DateTime($versions[$found]),
                        'version' => $found,
                        'inclusive' => $this->version === $this->matchDepth($this->version, $found),
                    ],
                ];
            } else {
                $age->releaseDateRange = [
                    'start' => [
                        'date' => new DateTime($versions[$found]),
                        'version' => $found,
                        'inclusive' => $this->version === $this->matchDepth($this->version, $found),
                    ],
                    'end' => [
                        'date' => new DateTime($versions[$nextFound]),
                        'version' => $nextFound,
                        'inclusive' => $this->version === $this->matchDepth($this->version, $nextFound),
                    ],
                ];
            }
        }

        return $age;
    }

    public function getVersions()
    {
        $usedVersions = [];

        if ($this->platform && isset($this->versions[$this->platform])) {
            $onlyPlatform = $this->platform;
        } else {
            $onlyPlatform = 'all';
        }

        foreach ($this->versions as $platform => $stabilities) {
            if ($onlyPlatform === 'all' || $platform === $onlyPlatform || $platform === 'all') {
                foreach ($stabilities as $stability => $versions) {
                    if ($stability >= $this->minimumStability) {
                        foreach ($versions as $version => $releaseDate) {
                            if (isset($usedVersions[$version])) {
                                $existing = DateTime::createFromFormat('Y-m-d', $usedVersions[$version]);
                                $new = DateTime::createFromFormat('Y-m-d', $releaseDate);

                                if ($new <= $existing) {
                                    $usedVersions[$version] = $releaseDate;
                                }
                            } else {
                                $usedVersions[$version] = $releaseDate;
                            }
                        }
                    }
                }
            }
        }

        uksort($usedVersions, 'version_compare');

        return $usedVersions;
    }
}
