<?php

namespace App\Providers;

use Illuminate\Foundation\Vite;
use Illuminate\Support\ServiceProvider;

class ViteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $urlBase = URL_BASE;
        $cdn = $urlBase . 'cdn/assets/';
        Vite::macro('images', fn ($asset) => $this->asset("resources/images/{$asset}"));
        Vite::macro('imgApoio', function ($img) use ($cdn) {
            return "{$cdn}images/apoio/{$img}";
        });
    }
}
