<?php

namespace App\Providers;

use App\Observers\InsertIntoLoginInfo;
use App\Observers\InsertIntoSeperateTable;
use App\Users_File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Users_File::observe(InsertIntoSeperateTable::class);
        Users_File::observe(InsertIntoLoginInfo::class);
    }
}
