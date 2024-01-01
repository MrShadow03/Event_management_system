<?php

namespace App\Http\Controllers;

use App\Models\EventCard;
use App\Traits\ImageHandling;
use Illuminate\Http\Request;

class EventCardController extends Controller
{
    use ImageHandling;
    
    public function index(){
        // $cards = [[
        //     'title' => 'Wedding Reception',
        //     'description' => 'We understand the significance of your special day and strive to make it truly unforgettable. Our elegant and versatile event spaces provide the perfect backdrop for your dream wedding reception.',
        //     'image' => 'default.png'
        // ], [
        //     'title' => 'Lifestyle Occasions',
        //     'description' => 'We believe that life is meant to be celebrated, and every occasion is an opportunity to create lasting memories. Whether you’re planning a small gathering or a grand event, we’re here to make your special moments extraordinary.',
        //     'image' => 'default.png'
        // ], [
        //     'title' => 'Corporate Events',
        //     'description' => 'We believe that life is meant to be celebrated, and every occasion is an opportunity to create lasting memories. Whether you’re planning a small gathering or a grand event, we’re here to make your special moments extraordinary.',
        //     'image' => 'default.png'
        // ]];

        // foreach($cards as $card){
        //     EventCard::create([
        //         'title' => $card['title'],
        //         'description' => $card['description'],
        //         'image' => $card['image']
        //     ]);
        // }
        
        $event_cards = EventCard::all();
        return view('admin.pages.event_cards', [
            'event_cards' => $event_cards
        ]);
    }

    public function update(Request $request){
        $request->validate([
            'id' => 'required | exists:event_cards,id',
            'title' => 'required | max:255',
            'description' => 'nullable',
            'image' => 'nullable | image | max:2048 | mimes:jpg,jpeg,png,webp',
        ]);


        $event_card = EventCard::find($request->id);
        $event_card->title = $request->title;
        $event_card->description = $request->description;
        $event_card->image = $this->updateImage('image', 'event-cards', $event_card->image, 'default.png');
        $event_card->save();

        return redirect()->back()->with('success', 'Event card updated successfully');
    }

    public function changeStatus(Request $request){
        $event_card = EventCard::find($request->id);
        $event_card->status = !$event_card->status;
        $event_card->save();

        return redirect()->back()->with('success', 'Event card status updated successfully');
    }
}
