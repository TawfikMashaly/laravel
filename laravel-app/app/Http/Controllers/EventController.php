<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    // Show All Events
    public function index() {
        $events = Event::orderBy('id', 'desc')->simplePaginate(12);
        return view('pages.events', compact('events'));
    }

    // Creat New Event
    public function create() {
        return view('pages.create');
    }

    // Store new Event in DB
    public function store(Request $request) {
        // Validate Event
        $request->validate([
            'title' => 'required',
            'speaker' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        // Save to DB
        $event = new Event();
        $event->title = $request->title;
        $event->speaker = $request->speaker;
        $event->price = $request->price;
        $event->description = $request->description;

        // Save Event
        $event->save();
        
        // Redirect 
        return redirect('/events');
    }

    // Show an event
    public function show($id) {
        $event = Event::find($id);
        return view('pages.show' , compact('event'));
    }

    // Edit Event
    public function edit($id) {
        $event = Event::find($id);
        return view('pages.edit' , compact('event'));
    }

    // Update the existing Event in DB
    public function update($id , Request $request) {
        // Validate Event
        $request->validate([
            'title' => 'required',
            'speaker' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        // Find Event & Update it
        $event = Event::find($id);
        $event->title = $request->title;
        $event->speaker = $request->speaker;
        $event->price = $request->price;
        $event->description = $request->description;
        
        // Save Event
        $event->save();
        
        // Redirect 
        return redirect('/events');
    }

    // Delete Event
    public function destroy($id) {
        $event = Event::find($id);
        $event->delete();
        return redirect('/events');
    }

}

