<?php

namespace App\Providers;

use App\Models\Timer;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
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

        View::composer('layouts.app', function ($view) {

            $timer = Timer::where('is_active', true)
            ->where('target_date', '>=', Carbon::now())
            ->orderBy('target_date', 'asc')
            ->first();

            if($timer){

                $formattedDate = Carbon::parse($timer->target_date)->format('d/m/Y');
    
                $view->with('timer', $formattedDate);
            } else {

                $view->with('timer', null);
            }

        });
    }
}
