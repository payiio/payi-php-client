<?php

namespace BronosPay;

class TestCase extends \PHPUnit\Framework\TestCase
{
    public const APIKEY = '88913948afa57a44078a88540efdc1d59db20a1f1ac9248249c73b057603335e';
    protected function createSandboxClient(): Client
    {
        return new Client(self::APIKEY, true);
    }
}
