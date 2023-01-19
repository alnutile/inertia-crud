<?php

namespace SundanceSolutions\InertiaCrud;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use SundanceSolutions\InertiaCrud\Commands\InertiaCrudCommand;

class InertiaCrudServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('inertia-crud')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_inertia-crud_table')
            ->hasCommand(InertiaCrudCommand::class);
    }
}
