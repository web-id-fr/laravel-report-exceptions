<?php

namespace WebID\LaravelReportExceptions;

use Illuminate\Support\ServiceProvider;

class LaravelReportExceptionsServiceProvider extends ServiceProvider
{
    /**
     * Return the views to publish
     *
     * @return array
     */
    protected function getViewFiles(): array
    {
        return [
            __DIR__ . '/resources/views' => base_path('resources/views/vendor/report-exceptions/'),
        ];
    }

    /**
     * Return the languages files to publish
     *
     * @return array
     */
    protected function getLangFiles(): array
    {
        return [
            __DIR__ . '/resources/lang' => base_path('resources/lang/'),
        ];
    }

    /**
     * Return the config files to publish
     *
     * @return array
     */
    protected function getConfigFiles(): array
    {
        return [
            __DIR__ . '/config/report-exceptions.php' => config_path('report-exceptions.php'),
        ];
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Get associative arrays of publishable files ( package_path => published_path )
        $publishViews = $this->getViewFiles();
        $publishLang = $this->getLangFiles();
        $publishConfig = $this->getConfigFiles();

        // Load views, translations & config from published files
        $this->loadViewsFrom(head($publishViews), 'lre');
        $this->loadTranslationsFrom(head($publishLang), 'lre');

        // Define publishable files (email template, translations & config
        $this->publishes($publishViews, 'views');
        $this->publishes($publishLang, 'lang');
        $this->publishes($publishConfig, 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $publishConfig = $this->getConfigFiles();

        $this->mergeConfigFrom(key($publishConfig), 'report-exceptions');
    }
}
