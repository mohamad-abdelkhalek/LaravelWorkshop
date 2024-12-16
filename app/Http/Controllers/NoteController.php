<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $notes = Note::all();
        return view("note.index", ["notes" => $notes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("note.create");
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        //
        return view("note.show", ['note' => $note]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
        return view("note.edit", ['note' => $note]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
{
    // Validate input
    $request->validate([
        'title' => 'required|string|max:255',
        'note' => 'required|string',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validate each uploaded image
    ]);

    $images = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            // Generate a unique file name
            $imageName = uniqid() . '.' . $image->extension();
            // Store the file in 'public/uploads' directory
            $image->storeAs('public/uploads', $imageName);
            $images[] = $imageName;
        }
    }

    // Prepare update data
    $update_data = [
        'title' => $request->title,
        'note' => $request->note,
        'image' => json_encode($images) // Encode the images array as JSON for storage
    ];

    // Update the note
    $note->update($update_data);

    // Redirect to the show route
    return redirect()->route("notes.show", $note)->with('success', 'Note updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
