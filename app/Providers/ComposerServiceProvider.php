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

        View::composer('pages.home', function ($view) {

            $timer = Timer::where('is_active', true)
            ->where('target_date', '>=', Carbon::now())
            ->orderBy('target_date', 'asc')
            ->first();

            if($timer){

                $formattedDate = $timer->target_date;
                $title = $timer->title;
                $titledeadline = $timer->titledeadline;
    
                $view->with('timer', $formattedDate);
                $view->with('timertitle', $title);
                $view->with('timerdeadline', $titledeadline);
            } else {

                $view->with('timer', null);
                $view->with('timertitle', '');
                $view->with('timerdeadline', '');
            }

        });
    }
}
