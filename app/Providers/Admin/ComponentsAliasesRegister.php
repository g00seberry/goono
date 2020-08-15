<?php

namespace App\Providers\Admin;

use App\View\Components\Admin\Layout\Sidebar;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ComponentsAliasesRegister extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('dashboard-sidebar', Sidebar::class);
    }
}
