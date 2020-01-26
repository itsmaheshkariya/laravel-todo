<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodoController extends Controller
{
    public function show(){
        return view('welcome',['todos'=>Todo::all(),'todo'=>new Todo()]);
    }
    public function showid($id){
        return view('welcome',['todos'=>Todo::all(),'todo'=>Todo::find($id)]);
    }

    public function delete($id){
        Todo::destroy($id);
        return redirect('/');

    }
    public function create(Request $request){
        if($request['id']!=''){
            $todo = Todo::find($request['id']);
            $todo->text = $request['text'];
            $todo->save();
            return redirect('/');
        }else{
            $todo = new Todo();
            $todo->text = $request['text'];
            $todo->save();
            return redirect('/');
        }



    }
}
