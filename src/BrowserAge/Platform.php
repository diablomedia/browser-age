<?php

namespace BrowserAge;

class Platform
{
    protected $version;
    protected $name;

    public function setVersion($version): void
    {
        $this->version = $version;
    }

    public function getName()
    {
        return $this->name;
    }
}
