<?php

namespace SundanceSolutions\InertiaCrud\Tests;

use Illuminate\Support\Facades\File;
use SundanceSolutions\InertiaCrud\Generator\ControllerTransformer;
use SundanceSolutions\InertiaCrud\Generator\GeneratorRepository;

class ControllerTransformerTest extends TestCase
{
    public function test_copies_to_folders()
    {
        File::shouldReceive('exists')->andReturnTrue();
        File::shouldReceive('allFiles')->andReturn(
            [
                new \Symfony\Component\Finder\SplFileInfo('Foo.vue', '', 'foo.bar'),
            ]
        );

        File::shouldReceive('get')
            ->andReturn('Foo bar [RESOURCE_PROPER] [RESOURCE_SINGULAR_KEY]');
        File::shouldReceive('put')
            ->withArgs(function ($filePath, $content) {
                $this->assertStringContainsString('Foo bar Foo foo', $content);

                return true;
            });
        $generator = new GeneratorRepository();
        $generator->handle('Foo', 'Foos');

        $controllerGenerator = new ControllerTransformer();
        $controllerGenerator->handle($generator);
    }
}
