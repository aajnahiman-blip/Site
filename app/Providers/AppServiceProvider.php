<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema ;
use Illuminate\Support\Facades\View;
use App\Models\Produit;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       View::composer('*', function ($view) {
        $categories = Produit::select('categorie')->distinct()->get();
        $view->with('categories', $categories);
    });
    }
}
