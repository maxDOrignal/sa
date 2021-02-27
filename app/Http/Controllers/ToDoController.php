<?php

namespace App\Http\Controllers;

use App\Events\TasksAdded;
use App\Models\_List;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    
    public function index()
    {
        // varibles
        $title  = 'ToDoList'; 
        $styles = ['index.css'];
        $js     = ['add.js'];
        $lists = _List::orderByDesc('id') -> limit(5) -> get();

        // return view with styles and title varibles
        return view('index', compact('styles','js','title','lists'));
    }

    public function showMore(Request $r) 
    {
        $from =  $r ->to  ;
        $to =  $r ->to - 4;

        $lists = _List::where([
            ['id' ,'<' , $from],
            ['id' ,'>=' ,$to]
        ]) -> orderByDesc('id') -> get();
        return $lists;
    }

    public function add(Request $r) {

        $data = _List::create([
            'content' => $r -> content
        ]);

        event(new TasksAdded($data));
    }

    
}
