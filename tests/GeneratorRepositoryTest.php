<?php

namespace SundanceSolutions\InertiaCrud\Tests;

use SundanceSolutions\InertiaCrud\Generator\GeneratorRepository;

class GeneratorRepositoryTest extends TestCase
{
    public function test_keys()
    {
        $generator = new GeneratorRepository();

        $generator->handle('Foo', 'Foos');

        $this->assertEquals('foos', $generator->resource_plural_key);
        $this->assertEquals('foo', $generator->resource_singular_key);
    }
}
