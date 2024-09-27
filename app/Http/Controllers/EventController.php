<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    // Menampilkan daftar event
//     public function index()
//     {
//         $events = Event::all();
//         return view('events.index', compact('events'));
//     }

//     // Menampilkan form untuk membuat event baru
//     public function create()
//     {
//         return view('events.create');
//     }

//     // Menyimpan event baru ke database
//     public function store(Request $request)
//     {
//         $request->validate([
//             'name' => 'required',
//             'date' => 'required|date',
//             'location' => 'required',
//         ]);

//         Event::create($request->all());

//         return redirect()->route('events.index')
//                          ->with('success', 'Event created successfully.');
//     }

//     // Menampilkan form untuk mengedit event
//     public function edit($id)
//     {
//         $event = Event::find($id);
//         return view('events.edit', compact('event'));
//     }

//     // Memperbarui event yang sudah ada
//     public function update(Request $request, $id)
//     {
//         $request->validate([
//             'name' => 'required',
//             'date' => 'required|date',
//             'location' => 'required',
//         ]);

//         $event = Event::find($id);
//         $event->update($request->all());

//         return redirect()->route('events.index')
//                          ->with('success', 'Event updated successfully.');
//     }

//     // Menghapus event dari database
//     public function destroy($id)
//     {
//         $event = Event::find($id);
//         $event->delete();

//         return redirect()->route('events.index')
//                          ->with('success', 'Event deleted successfully.');
//     }
// }
public function index()
    {
        return view('sidebar.event'); // Pastikan view ini ada
    }
}