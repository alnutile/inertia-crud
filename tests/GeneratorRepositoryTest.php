<?php

namespace SundanceSolutions\InertiaCrud\Tests;

use Facades\SundanceSolutions\InertiaCrud\Generator\ControllerTransformer;
use Facades\SundanceSolutions\InertiaCrud\Generator\VueTransformer;
use SundanceSolutions\InertiaCrud\Generator\GeneratorRepository;

class GeneratorRepositoryTest extends TestCase
{
    public function test_keys()
    {
        ControllerTransformer::shouldReceive('handle')->once();
        VueTransformer::shouldReceive('handle')->once();
        $generator = new GeneratorRepository();

        $generator->handle('Foo', 'Foos');

        $this->assertEquals('foos', $generator->resource_plural_key);
        $this->assertEquals('foo', $generator->resource_singular_key);
    }

    public function test_path()
    {
        ControllerTransformer::shouldReceive('handle')->once();
        VueTransformer::shouldReceive('handle')->once();
        $generator = new GeneratorRepository();

        $generator->handle('Foo', 'Foos');

        $this->assertStringContainsString('../STUBS/', $generator->getRootPathOrStubs());
    }
}
