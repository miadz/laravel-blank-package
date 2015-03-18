<?php namespace MyVendor\MyPackage;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use MyVendor\MyPackage\Handlers\Package;

class PackageServiceProvider extends ServiceProvider
{
	/**
	 * @var bool $defer Indicates if loading of the provider is deferred.
	 */
	protected $defer = false;

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{

		$this->publishes([
			__DIR__.'/../config/package.php' => config_path('package.php')
		], 'config');

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->mergeConfigFrom(
			__DIR__.'/../config/package.php', 'package'
		);

		$this->registerAliases();

		$this->registerServices();

		$this->registerConsoleCommands();
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return string
	 */
	public function provides()
	{
		return ['mypackage'];
	}

	/**
	 * Register the AppKit aliases / facades.
	 *
	 * @return void
	 */
	protected function registerAliases() {

		$aliases = AliasLoader::getInstance();
        $aliases->alias(
            'MyPackage',
            'MyVendor\MyPackage\Facades\PackageFacade'
        );
	}

	/**
	 * Register the package services.
	 *
	 * @return void
	 */
	protected function registerServices()
	{

		$this->app->bindShared('mypackage', function ($app) {
			return new Package($app['config']);
		});
	}

	/**
	 * Register the package console commands.
	 *
	 * @return void
	 */
	protected function registerConsoleCommands()
	{
		$this->registerCommand();
	}

	/**
	 * Register the "mypackage:command" console command.
	 *
	 * @return Console\PackageCommand
	 */
	protected function registerCommand()
	{
		$this->app->bindShared('mypackage.command', function($app) {
			return new Console\PackageCommand();
		});
	}
}
