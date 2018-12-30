<?php

namespace App\Http\Controllers;

use App\Note;
use App\File;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();
        return view("note/list",[
            'notes'=>$notes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('note/new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $note = new Note;
        $note->name = $request->name;
        $note->content = $request->content;
        $note->link = $request->link;
        $note->status = $request->status;
        $note->save();
        if($request->hasfile('files'))
        {
            foreach($request->file('files') as $file)
            {
                $name = time().'.'.$file->getClientOriginalName();
                $file->move(public_path('file'), $name);  
                $note_file = new File; 
                $note_file->name = $name;
                $note->files()->save($note_file);
            }        
        }
        return view('note.view',['note' => $note]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        return view('note/view',['note' => $note]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        // var_dump($request->all());
        // die();
        $note->name = $request->name;
        $note->content = $request->content;
        $note->link = $request->link;
        $note->status = $request->status;
        if($request->hasfile('files'))
        {
            foreach($request->file('files') as $file)
            {
                $name = time().'.'.$file->getClientOriginalName();
                $file->move(public_path('file'), $name);  
                $note_file = new File; 
                $note_file->name = $name;
                $note->files()->save($note_file);
            }        
        }
        $note->save();
        return view('note.view',['note' => $note]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notes.index');
    }

    public function filedestroy(Note $note, File $file)
    {
        $file->delete();
        return redirect()->route('notes.show',['note' => $note]);
    }
}
