<?php

namespace CleanCodeStudio\ExtendLaravelCollections;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class ExtendCollectionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    		Collection::mixin(new CollectionMacros)
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}