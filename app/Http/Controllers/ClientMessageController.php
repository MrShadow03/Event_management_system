<?php

namespace App\Http\Controllers;

use App\Models\ClientMessage;
use Illuminate\Http\Request;

class ClientMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $messages = ClientMessage::orderby('id', 'desc')->get();
        
        if(isset(request()->type)){
            if(request()->type == 'important'){
                $messages = ClientMessage::where('is_important', true)->orderby('id', 'desc')->get();
            }elseif(request()->type == 'unread'){
                $messages = ClientMessage::where('is_unread', true)->orderby('id', 'desc')->get();
            }
        }
        $newMessageCount = ClientMessage::where('created_at', '>=', now()->subDays(7))->count();

        return view('admin.pages.inbox.messages', [
            'messages' => $messages,
            'newMessageCount' => $newMessageCount,
        ]);
    }

    /**
     * Toggle the important status of the specified resource from storage.
     */
    public function toggleImportant(){
        $message = ClientMessage::find(request()->id);
        $message->is_important = !$message->is_important;
        $message->save();

        return redirect()->back();
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(){
        //get the message with the specified id
        $message = ClientMessage::find(request()->id);
        
        //if the message does not exist, return error
        if(!$message){
            return redirect()->back()->with('error', 'Message does not exist');
        }
        
        //mark the message as read
        $message->is_unread = false;
        $message->save();
        
        $newMessageCount = ClientMessage::where('created_at', '>=', now()->subDays(7))->count();
        $messages = ClientMessage::orderby('id', 'desc')->get();
        //return the view with the message
        return view('admin.pages.inbox.reply', [
            'messages' => $messages,
            'message' => $message,
            'newMessageCount' => $newMessageCount,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClientMessage $clientMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClientMessage $clientMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClientMessage $clientMessage)
    {
        //
    }
}
