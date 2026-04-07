<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
   
    public function index()
    {
        return view('character.index', [
            'e' => Event::all(),
        ]);
    }

    public function add(Request $request)
    {
        $eventId = $request->input('character_id');
        return redirect()->route('characters.index')->with('success', 'Character added to your account.');
    }


    public function create()
    {
        return view('character.create_event');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'file' => 'required|mimes:png,jpg,webp',
            'event_type' => 'required|string|max:255',
            'description'=> 'required',
        ]);

        $filePaths = [];

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_file.' . $file->getClientOriginalExtension();
            $path = 'public/assets/img/events/';
            $file->move($path, $filename);
            $filePaths['file'] = $path . $filename;
        }

        event::create([
            'file' => $filePaths['file'] ?? null,
            'event_type' => $request->event_type,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard');
    }

    public function edit(event $event)
    {
        return view('character.edit_event', ['event' => $event]);
    }

    public function update(Request $request, event $event)
    {
        $data = $request->validate([
            'file' => 'nullable|mimes:png,jpg,webp',
            'event_type' => 'required|string|max:255',
            'description'=> 'required',
        ]);

        $filePaths = [];

        if ($request->hasFile('file')) {
            // Store the old file path
            $oldFilePath = $event->file;

            $file = $request->file('file');
            $filename = time() . '_file.' . $file->getClientOriginalExtension();
            $path = 'public/assets/img/events/';
            $file->move($path, $filename);
            $filePaths['file'] = $path . $filename;

            // Delete the old file
            if (File::exists($oldFilePath)) {
                File::delete($oldFilePath);
            }
        }

        $event->update([
            'file' => $filePaths['file'] ?? $event->file,
            'event_type' => $request->event_type,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard')->with('success', 'Event updated successfully');
    }

    public function destroy(event $event)
    {
        // Delete the event file if it exists
        if (File::exists($event->file)) {
            File::delete($event->file);
        }

        $event->delete();

        return redirect()->route('dashboard')->with('success', 'Event deleted successfully');
    }
}
