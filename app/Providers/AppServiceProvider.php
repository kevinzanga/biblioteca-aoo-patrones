<?php

namespace App\Providers;
use App\Models\Autor;
use App\Factories\AutorFactory;
use App\Factories\ConcreteAutorFactory;
use App\Observers\AutorObserver;
use Illuminate\Support\ServiceProvider;
use App\Services\AutorService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register():void
    {
        $this->app->bind(AutorFactory::class, ConcreteAutorFactory::class);

        $this->app->singleton('autor', function ($app) {
            // Registrar el servicio AutorService y pasar la instancia de AutorFactory
            return new AutorService($app->make(AutorFactory::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Autor::observe(AutorObserver::class);
    }
}
