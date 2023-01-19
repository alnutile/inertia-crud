<?php

namespace SundanceSolutions\InertiaCrud\Generator;

use Facades\SundanceSolutions\InertiaCrud\Generator\TokenReplacer;
use Illuminate\Support\Facades\File;

class ControllerTransformer
{
    public function handle(GeneratorRepository $generatorRepository)
    {
        $controllerStubPath = $generatorRepository->getRootPathOrStubs().'/Controllers/ResourceController.php';
        $controllerContent = File::get($controllerStubPath);

        $tranformed = TokenReplacer::handle($generatorRepository, $controllerContent);

        $name = sprintf('%sController.php', $generatorRepository->resource_proper);
        $destination = base_path('app/Http/Controllers/'.$name);

        $generatorRepository->putFile($destination, $tranformed);
    }
}
