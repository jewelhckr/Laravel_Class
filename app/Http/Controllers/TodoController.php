<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function showTodo(){
        return view('todo');
    }
    public function addTodo(Request $request){
        $insert=DB::table('todo_table')->insert([
            'todo_title'=>$request->todo_title,
            'todo'=>$request->todo
        ]);
        if ($insert) {
           return view('displaytodo');
        } else {
            return("Note not sent...");
        }
    }
    public function displayTodo(){
        $select = DB::table('todo_table')->get();

        return view('displaytodo', [
            'alltodos' => $select
        ]);
    }
    
}
