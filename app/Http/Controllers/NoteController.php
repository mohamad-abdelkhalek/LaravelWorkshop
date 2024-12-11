<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    //

    public function crsftoken()
    {
        return csrf_token();
    }

    // All Notes
    function index()
    {
        return response()->json(Note::all());
    }

    // One Note
    function show(Request $request){
        $note = Note::find($request->id);
        return response()->json($note);
    }

    // Update Note
    public function update(Request $request, $id)
{
    // Validate request data
    $validatedData = $request->all();

    // Find the note by ID
    $note = Note::find($id);

    if (!$note) {
        return response()->json(['error' => 'Note not found'], 404);
    }

    // Update the note
    $note->update($validatedData);

    // Return the updated note as JSON
    return response()->json($note);
}

    // Delete - Destroy
    public function destroy($id){
        $note = Note::destroy($id);
        return response()->json($note);
    }
}
