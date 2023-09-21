<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageSection;
use Illuminate\Http\Request;
use App\Traits\ImageHandling;

class PageController extends Controller
{
    use ImageHandling;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // get the pages with sections
        $pages = Page::with('sections')->get();
        return view('admin.pages.pages', [
            'pages' => $pages,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){
        $request->validate([
            'id' => 'required|exists:pages,id',
            'page_title' => 'required|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'meta_image' => 'nullable|mimes:jpeg,jpg,png,webp|max:10000',
        ]);

        $page = Page::find($request->id);
        $page->page_title = $request->page_title;
        $page->meta_title = $request->meta_title;
        $page->meta_description = $request->meta_description;
        $page->meta_keywords = $this->formatKeywords($request->meta_keywords);
        $page->meta_image = $this->updateImage('meta_image', 'page', $page->meta_image);
        $page->save();


        return redirect()->back()->with('success', 'Page updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function changeStatus(Request $request)
    {
        $page = Page::find($request->id);
        $page->status = !$page->status;
        $page->save();

        return redirect()->back()->with('success', 'Page status updated successfully');
    }

    public function changeSectionStatus(Request $request)
    {
        $page = PageSection::find($request->id);
        $page->status = !$page->status;
        $page->save();

        return redirect()->back()->with('success', 'Page status updated successfully');
    }

    protected function formatKeywords($jsonString) {
        $dataArray = json_decode($jsonString, true);

        if ($dataArray === null) {
            return ''; // Invalid JSON string
        }

        $values = array_column($dataArray, 'value');
        return implode(',', $values);
    }
}
