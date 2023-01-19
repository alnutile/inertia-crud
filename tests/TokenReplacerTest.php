<?php

namespace SundanceSolutions\InertiaCrud\Tests;

use Facades\SundanceSolutions\InertiaCrud\Generator\ControllerTransformer;
use Facades\SundanceSolutions\InertiaCrud\Generator\VueTransformer;
use Illuminate\Support\Facades\File;
use SundanceSolutions\InertiaCrud\Generator\GeneratorRepository;
use SundanceSolutions\InertiaCrud\Generator\TokenReplacer;

class TokenReplacerTest extends TestCase
{
    public function test_replaces_tokens()
    {
        ControllerTransformer::shouldReceive('handle')->once();
        VueTransformer::shouldReceive('handle')->once();
        $generator = new GeneratorRepository();
        $generator->handle('Foo', 'Foos');

        $content = File::get(__DIR__.'/../STUBS/Controllers/ResourceController.php');

        $tokenReplacer = new TokenReplacer();

        $results = $tokenReplacer->handle($generator, $content);

        $this->assertStringNotContainsString('[RESOURCE_PROPER_PLURAL]', $results);
        $this->assertStringNotContainsString('[RESOURCE_SINGULAR_KEY]', $results);
        $this->assertStringNotContainsString('[RESOURCE_PROPER]', $results);
    }
}
