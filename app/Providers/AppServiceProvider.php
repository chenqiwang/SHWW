<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //查询tab_navigation实现二级联动
        $navigation = DB::table('tab_navigation')->get();

        //查询tab_topic
        $label = DB::table('tab_label')->get();
        //共享tab_navigation
        view()->share('navigation', $navigation);
        //共享tab_label
        view()->share('label', $label);
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
