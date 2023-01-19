<?php

namespace SundanceSolutions\InertiaCrud\Commands;

use Illuminate\Console\Command;

class InertiaCrudCommand extends Command
{
    public $signature = 'inertia-crud:create
    {resource_proper : Your model name capitalized e.g. Foo}
    {resource_proper_plural : Same as above but add an s eg Foos so I do not need to figure that out yet}
    ';

    public $description = 'My command';

    public function handle(): int
    {
        $resource_proper = $this->argument('resource_proper');

        $resource_proper_plural = $this->argument('resource_proper_plural');

        $this->comment('Gonna go make your some files one moment');

        //ask if git commit so they can see the files made

        $this->comment('All done');

        return self::SUCCESS;
    }
}
