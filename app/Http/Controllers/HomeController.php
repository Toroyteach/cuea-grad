<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Carbon\Carbon;
use App\Models\Resource;
use App\Models\Feedback;
use App\Models\Faq;
use App\Models\Graduation;
use App\Models\Timer;

class HomeController extends Controller
{
    public function index()
    {

        $faqs = Faq::where('is_active', true)
            ->where('is_published', true)
            ->get();

        // Retrieve latest news
        $latestNews = News::where('is_published', true)
            ->where('published_date', '<', Carbon::now())
            ->orderBy('published_date', 'desc')
            ->paginate(3);

        //Also send the carousel images if need

        return view('pages.home', compact('faqs', 'latestNews'));
    }

    public function events()
    {

        $news = News::where('is_published', true)
            ->where('published_date', '<', Carbon::now())
            ->orderBy('published_date', 'desc')
            ->paginate(6);

        return view('pages.events', compact('news'));
    }

    public function contact()
    {

        return view('pages.contact');
    }

    public function resources()
    {
        $graduations = Graduation::with('resources')
            ->whereHas('resources', function ($query) {
                $query->where('is_downloadable', true);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(3);

        return view('pages.resource', compact('graduations'));
    }


    public function storeFeedback(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Store the feedback in the 'feedback' model
        Feedback::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        // Redirect back with a success message
        return back()->with('success', 'Feedback submitted successfully!');
    }

    public function subscribe(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email|max:255',
        ]);

        // Store the feedback in the 'feedback' model
        Feedback::create([
            'email' => $request->input('email'),
        ]);

        // Redirect back with a success message
        return back()->with('success', 'Feedback submitted successfully!');
    }

    public function showNews($id)
    {
        $newsItem = News::with('media')->findOrFail($id);

        // Retrieve the latest news items for the sidebar
        $latestNews = News::latest()->take(5)->get();

        return view('pages.singleevent', compact('newsItem', 'latestNews'));
    }

    public function getGraduantsResults()
    {
        return view('pages.results');
    }
}
