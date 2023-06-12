<?php

namespace BronosPay;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected static $APIKEY = "";

    protected static function setApiKeyFromEnvironment()
    {
        $apiKey = getenv("BRONOS_PAY_PHP_TEST_API_KEY");

        if ($apiKey !== false) {
            self::$APIKEY = $apiKey;
        }
    }

    protected function setUp(): void
    {
        parent::setUp();
        self::setApiKeyFromEnvironment();
    }

    protected function createSandboxClient(): Client
    {
        return new Client(self::$APIKEY, true);
    }
}
