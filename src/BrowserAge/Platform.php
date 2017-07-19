<?php

namespace BrowserAge;

class Platform
{
    protected $version;
    protected $name;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getName()
    {
        return $this->name;
    }
}
