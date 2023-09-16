<?php

namespace App\Livewire;

use App\Models\GraduantsResults;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Livewire\Component;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;


class Graduants extends Component
{

    use WithRateLimiting;

    public $admission;

    public $showResultsDiv;

    public $graduate = [];

    protected $rules = [
        'admission' => 'required|min:4',
    ];


    public function openDiv()
    {
        $this->showResultsDiv =! $this->showResultsDiv;
    }


    public function getResults()
    {
        $this->validate();

        $this->showResultsDiv = false;

        try {
            $this->rateLimit(10);
            // Define a unique cache key based on the admission number
            $cacheKey = 'graduate_' . $this->admission;
    
            // Check if the data is cached
            if (Cache::has($cacheKey)) {
                $post = Cache::get($cacheKey);
                $this->graduate = $post;
                $this->showResultsDiv = true;
            } else {
                // If data is not cached, retrieve it from the database
                $post = DB::table('graduants_results')
                    ->where('reg_adm_no', '=', $this->admission)
                    ->first();
    
                if (!$post) {
                    session()->flash('info', 'Sorry! No Records Found');
                    return;
                }
    
                // Store the data in cache for a specified duration (e.g., 60 minutes)
                Cache::put($cacheKey, $post, 60);
                $this->graduate = $post;
                $this->showResultsDiv = true;
            }
    
        } catch (TooManyRequestsException $exception) {

            $this->showResultsDiv = false;

            session()->flash('throttle', 'Too Many attempts from this device, try again after 1 minute');
        }
    }

    public function render()
    {
        return view('livewire.graduants');
    }
}
