<?php

namespace SundanceSolutions\InertiaCrud\Tests;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use SundanceSolutions\InertiaCrud\Generator\ControllerTransformer;
use SundanceSolutions\InertiaCrud\Generator\GeneratorRepository;

class ControllerTransformerTest extends TestCase
{
    public function test_copies_to_folders()
    {
        Storage::fake('local');
        File::shouldReceive('get')->twice()->andReturn('Foo bar [RESOURCE_PROPER] [RESOURCE_SINGULAR_KEY]');
        File::shouldReceive('put')->twice()->withArgs(function ($filePath, $content) {
            return $content === 'Foo bar Foo foo';
        });
        $generator = new GeneratorRepository();
        $generator->handle('Foo', 'Foos');

        $controllerGenerator = new ControllerTransformer();
        $controllerGenerator->handle($generator);
    }
}
