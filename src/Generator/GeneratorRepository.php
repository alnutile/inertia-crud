<?php

namespace SundanceSolutions\InertiaCrud\Generator;

use Facades\SundanceSolutions\InertiaCrud\Generator\ControllerTransformer;
use Facades\SundanceSolutions\InertiaCrud\Generator\VueTransformer;
use Illuminate\Support\Facades\File;

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

        ControllerTransformer::handle($this);
        VueTransformer::handle($this);

        return $this;
    }

    public function putFile(string $pathWithName, string $content)
    {
        File::put($pathWithName, $content);
    }

    public function getRootPathOrStubs(): string
    {
        return __DIR__.'/../../STUBS/';
    }
}
