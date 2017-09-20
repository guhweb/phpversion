<?php

namespace PHPVersion;

class PHPVersion {

    public function getPhpVersion()
    {
        return phpversion();
    }

    public function getPhpInfo()
    {
        echo $this->phpInfo();
    }

    private function phpInfo()
    {
        return phpinfo();
    }
}