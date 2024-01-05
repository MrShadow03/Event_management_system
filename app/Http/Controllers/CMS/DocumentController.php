<?php

namespace App\Http\Controllers\CMS;

use App\Models\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function index(){
        $documents = Document::all();

        // get the size pf each document
        foreach($documents as $document){
            $document->size = Storage::exists('public/'.$document->path) ? Storage::size('public/'.$document->path) : 0;
            $document->size = ceil($document->size / 1024);
            $document->extension = pathinfo(storage_path('app/'.$document->path), PATHINFO_EXTENSION);
        }
    
        return view('admin.pages.documents', [
            'documents' => $documents
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required | unique:documents',
            'document' => 'required|mimes:pdf|max:10240'
        ]);

        $path = $request->file('document')->storeAs(
            'documents', 
            $request->name.'.'.$request->file('document')->extension(),
            'public'
        );

        $document = new Document();
        $document->name = $request->name;
        $document->path = $path;
        $document->save();

        return redirect()->back()->with('success', 'Document uploaded successfully.');
    }

    public function update(Request $request){
        $request->validate([
            'id' => 'required',
            'name' => 'required | unique:documents,name,'.$request->id,
        ]);

        $document = Document::find($request->id);
        $document->name = $request->name;
        $document->save();

        return redirect()->back()->with('success', 'Document updated successfully.');
    }

    public function destroy($id){
        $document = Document::find($id);
        Storage::exists('public/'.$document->path) ? Storage::delete('public/'.$document->path) : null;

        $document->delete();
        return redirect()->back()->with('success', 'Document deleted successfully.');
    }

    public function changeStatus(Request $request){
        $document = Document::find($request->id);
        $document->status = !$document->status;
        $document->save();

        return redirect()->back()->with('success', $document->status ? 'Document linked successfully.' : 'Document unlinked.');
    }
}
