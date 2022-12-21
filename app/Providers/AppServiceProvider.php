<?php

namespace App\Providers;

use App\Contracts\BaseInterface;
use App\Contracts\MailInterface;
use App\Repositories\BaseRepository;
use App\Repositories\MailRepository;
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
        $this->app->bind(
            BaseInterface::class,
            BaseRepository::class
        );
        $this->app->bind(
            MailInterface::class,
            MailRepository::class
        );
        Schema::defaultStringLength(191);

    }
}
