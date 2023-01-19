<?php

namespace SundanceSolutions\InertiaCrud\Tests;

use Illuminate\Support\Facades\File;
use SundanceSolutions\InertiaCrud\Generator\GeneratorRepository;
use SundanceSolutions\InertiaCrud\Generator\RoutesTransformer;

class RoutesTransformerTest extends TestCase
{
    public function test_handles_routes()
    {
        File::shouldReceive('get')
            ->andReturn('<?php Route::get("baz") ');

        File::shouldReceive('put')
            ->withArgs(function ($filePath, $content) {
                $this->assertStringContainsString("Route::get('/foos'", $content);

                return true;
            });

        $generator = new GeneratorRepository();
        $generator->setup('Foo', 'Foos');

        $transformer = new RoutesTransformer();
        $transformer->handle($generator);
    }
}
