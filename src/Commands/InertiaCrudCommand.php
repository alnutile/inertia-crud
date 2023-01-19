<?php

namespace SundanceSolutions\InertiaCrud\Commands;

use Illuminate\Console\Command;

class InertiaCrudCommand extends Command
{
    public $signature = 'inertia-crud';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
