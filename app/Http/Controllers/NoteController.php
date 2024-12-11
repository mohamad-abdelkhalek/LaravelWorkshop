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
    function update(Request $request, $id){
        return $id;
    }

}
