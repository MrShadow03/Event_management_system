<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\Service;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //list of sections
        /*
            Banner
            Section Banner
            Top header
            About_company
            About_us
            Services
            Projects
            Review
            Team
            History
            FAQ
            Map
            Quote_CTA
            Consultation_CTA
            Consultation_CTA_short
            Contact_us
        */
        $section = new Section();
        $section->name = 'subscription-cta';
        // $section->title = 'About Us';
        // $section->heading = 'our skilled Team grow your business.';
        // $section->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.';
        // $bullet_points = 'Performing market research.*Doing financial analysis.*Planning a budget.*Creating business plans.*Developing a marketing strategy.*Setting goals and objectives.*Managing client accounts.*Analyzing data.';
        // $section->bullets = $bullet_points;
        // $section->image = 'section/default.webp';
        $section->save();

        $pages = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $section->pages()->attach($pages);

        return $section->name.' created';
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Section $section)
    {
        $request->validate([
            'id' => 'required | exists:sections,id',
            'title' => 'required | max:255',
            'heading' => 'required | max:255',
            'description' => 'nullable | string',
        ]);

        $section = Section::find($request->id);
        $section->title = $request->title;
        $section->heading = $request->heading;
        $section->description = $request->description;
        $section->save();

        return redirect()->back()->with('success', 'Section settings updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        //
    }
}
