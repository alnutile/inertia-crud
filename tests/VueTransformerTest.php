<?php

namespace SundanceSolutions\InertiaCrud\Tests;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use SundanceSolutions\InertiaCrud\Generator\ControllerTransformer;
use SundanceSolutions\InertiaCrud\Generator\GeneratorRepository;
use SundanceSolutions\InertiaCrud\Generator\VueTransformer;

class VueTransformerTest extends TestCase
{
    public function test_handles_vue()
    {
        File::shouldReceive('allFiles')->andReturn(
            [
                new \Symfony\Component\Finder\SplFileInfo("Foo.vue", "", "foo.bar"),
                new \Symfony\Component\Finder\SplFileInfo("ResourceForm.vue", "", "foo.bar")
            ]
        );

        File::shouldReceive('exists')->andReturnTrue();

        File::shouldReceive('get')
            ->andReturn('Foo bar [RESOURCE_PROPER] [RESOURCE_SINGULAR_KEY]');

        File::shouldReceive('put')
            ->withArgs(function ($filePath, $content) {
            $this->assertStringContainsString('Foo bar Foo foo', $content);
            return true;
        });

        $generator = new GeneratorRepository();
        $generator->handle('Foo', 'Foos');

        $transformer = new VueTransformer();
        $transformer->handle($generator);
    }
}
