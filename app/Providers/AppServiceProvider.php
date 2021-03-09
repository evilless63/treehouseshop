<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Post;
use App\Observers\AdminCategoryObserver;
use App\Observers\AdminOrderObserver;
use App\Observers\AdminProductObserver;
use App\Observers\AdminPostObserver;
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
        date_default_timezone_set('Europe/Minsk');
        Order::observe(AdminOrderObserver::class);
        Category::observe(AdminCategoryObserver::class);
        Product::observe(AdminProductObserver::class);
        Post::observe(AdminPostObserver::class);
    }
}
