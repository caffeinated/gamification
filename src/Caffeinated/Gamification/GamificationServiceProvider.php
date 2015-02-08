<?php
namespace Caffeinated\Gamification;

use Illuminate\Support\ServiceProvider;

class GamificationServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Boot the service provider
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__.'/../../config' => config_path()
		], 'config');

		$this->publishes([
			__DIR__.'/../../migrations' => $this->app->databasePath().'/migrations'
		], 'migrations');
	}

	/**
	 * Register the service provider
	 *
	 * @return void
	 */
	public function register()
	{
		$this->mergeConfigFrom(
			__DIR__.'/../../config/gamification.php', 'gamification'
		);
	}
}