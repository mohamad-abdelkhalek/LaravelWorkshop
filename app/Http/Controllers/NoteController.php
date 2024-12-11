<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    //

    function index()
    {
        return response()->json(Note::all());
    }
}
