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
        //make the keys
        $this->resource_proper = $resource_proper;
        $this->resource_proper_plural = $resource_proper_plural;
        $this->resource_singular_key = str($resource_proper)->lower()->toString();
        $this->resource_plural_key = str($resource_proper_plural)->lower()->toString();
        //get all the files for each area and put them into place

        //Controller + Test

        //Vue

        return $this;
    }
}
