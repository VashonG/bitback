<?php

namespace App;

use MadWeb\Initializer\Contracts\Runner;

class Install
{
    public function production(Runner $run)
    {
        $this->devInstall($run);
    }

    public function local(Runner $run)
    {
        $this->devInstall($run);
    }
	
	protected function devInstall(Runner $run)
	{
		$run->external('npm', 'install')
            ->artisan('key:generate', ['--force' => true])
            ->artisan('storage:link')
			->external('php artisan vendor:publish --provider="PavelMironchik\LaravelBackupPanel\LaravelBackupPanelServiceProvider"')
			->external('php artisan vendor:publish --provider="Spatie\Backup\BackupServiceProvider"')
			->artisan('migrate')
    // webapp seeders
            ->artisan('db:seed', ['--class' =>'PagesTableSeeder'])
            ->artisan('db:seed', ['--class' => 'FootersTableSeeder'])
	// front seeders
			->artisan('db:seed', ['--class' => 'FaqCategoriesTableSeeder'])
            ->artisan('db:seed', ['--class' => 'FaqsTableSeeder'])
            ->artisan('db:seed', ['--class' => 'ContentBlocksTableSeeder'])
    // seo seeders
            ->artisan('db:seed', ['--class' => 'SitemapsTableSeeder'])
            // ->artisan('route:cache')
            // ->artisan('config:cache')
            ->artisan('event:cache')
            ->external('npm run dev');
	}
}
