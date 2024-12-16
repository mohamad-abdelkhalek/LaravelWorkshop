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
        //
        $images = [];
        foreach($request->file('images') as $image){
            $imageName = uniqid(time()).'.'.$image->getClientOriginalName();
            $image->storeAs('public/uploads', $imageName);
            $images[] = $imageName;
        }

        $update_data = ['title' => $request->title, 'note' => $request->note, 'image' => $images];
        $note->update($update_data);
        return redirect()->route("notes.show", $note);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
