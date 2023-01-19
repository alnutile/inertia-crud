<?php

namespace SundanceSolutions\InertiaCrud\Generator;

class GeneratorRepository
{
    public string $resource_proper;

    public string $resource_proper_plural;

    public string $resource_singular_key;

    public string $resource_plural_key;

    public function handle($resource_proper, $resource_proper_plural)
    {
        $this->resource_proper = $resource_proper;
        $this->resource_proper_plural = $resource_proper_plural;
        $this->resource_singular_key = str($resource_proper)->lower()->toString();
        $this->resource_plural_key = str($resource_proper_plural)->lower()->toString();

        return $this;
    }

    public function getRootPathOrStubs(): string
    {
        return __DIR__.'/../../STUBS/';
    }
}
