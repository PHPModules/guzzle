<?php

namespace PHPModules\Guzzle;

use GuzzleHttp\Client;

class ConfigProvider
{
    public function __invoke() : array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    public function getDependencies() : array
    {
        return [
            'invokables' => [
                Client::class => Client::class,
            ],
        ];
    }
}
