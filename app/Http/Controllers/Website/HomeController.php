<?php

namespace App\Http\Controllers\Website;

use App\Models\Page;
use App\Models\Banner;
use App\Models\Section;
use App\Models\Service;
use App\Models\Feedback;
use App\Models\EventCard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $banners = Banner::where('status', 1)->get();
        $event_cards = EventCard::where('status', 1)->get();
        $services = Service::with('images')->get();
        $feedbacks = Feedback::where('status', 1)->get();
        $sections = Page::where('name', 'Home')->first()->sections;

        return view('website.pages.home', [
            'banners' => $banners,
            'event_cards' => $event_cards,
            'services' => $services,
            'feedbacks' => $feedbacks,
            'sections' => $sections,
        ]);
    }
}
