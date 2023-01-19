<?php

namespace SundanceSolutions\InertiaCrud\Tests;

use Illuminate\Support\Facades\Storage;
use SundanceSolutions\InertiaCrud\Generator\GeneratorRepository;

class ControllerTransformerTest extends TestCase
{
    public function test_copies_to_folders()
    {
        $this->markTestSkipped('@TODO had to do the token replacer first');
        Storage::fake('local');
        $generator = new GeneratorRepository();
        $generator->handle('Foo', 'Foos');

        Storage::disk('local')->assertExists(
            'app/Http/Controllers/FooController.php'
        );
    }
}
