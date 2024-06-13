<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    public function shownote(){
        return view('noteapp.note');
    }
    public function addnote(Request $req){

        $insert=DB::table('notes_table')->insert([
            'title'=>$req->title,
            'content'=>$req->content,
            'user_id'=>Auth::user()->id,
        ]);
        if ($insert) {
           return view('noteapp.displaynote');
        } else {
            return("Note not sent...");
        }
    }
    public function display(){
        $select=DB::table('notes_table')->get();
        // return $select;
        return view('noteapp.displaynote', [
            'allnotes'=>$select
        ]);
    }
    public function show($id){
        $show=DB::table('notes_table')->where('note_id',$id)->first();
        return view('noteapp.view', [
            'note'=>$show
        ]);
    }
    public function edit($id){
        $edit=DB::table('notes_table')->where('note_id',$id)->first();
        return view('noteapp.edit', [
            'note'=>$edit
        ]);
    }
    public function update(Request $req, $id){
        $update=DB::table('notes_table')->where('note_id',$id)->update([
            'title'=>$req->title,
            'content'=>$req->content
        ]);
        return redirect('/displaynote');
    }
}
