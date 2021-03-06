<?php namespace Sqlmigration\MigrationsSeedings;

use Illuminate\Support\ServiceProvider;

class SqlMigrationServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
       $this->app->singleton('artisan.sql.migration', function($app) {
            return new MigrationsCommand;
        });

        $this->commands('artisan.sql.migration');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}
