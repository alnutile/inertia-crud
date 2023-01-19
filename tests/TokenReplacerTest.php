<?php

namespace SundanceSolutions\InertiaCrud\Tests;

use Illuminate\Support\Facades\File;
use SundanceSolutions\InertiaCrud\Generator\GeneratorRepository;
use SundanceSolutions\InertiaCrud\Generator\TokenReplacer;

class TokenReplacerTest extends TestCase
{
    public function test_replaces_tokens()
    {
        $generator = new GeneratorRepository();
        $generator->setup('Foo', 'Foos');

        $content = File::get(__DIR__.'/../STUBS/Controllers/ResourceController.php');

        $tokenReplacer = new TokenReplacer();

        $results = $tokenReplacer->handle($generator, $content);

        $this->assertStringNotContainsString('[RESOURCE_PROPER_PLURAL]', $results);
        $this->assertStringNotContainsString('[RESOURCE_SINGULAR_KEY]', $results);
        $this->assertStringNotContainsString('[RESOURCE_PROPER]', $results);
    }
}
