<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

use App\Http\Requests\ToDo\CreateRequest;
use App\Http\Requests\ToDo\UpdateRequest;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }

    public function create(CreateRequest $request) 
    {
        $todo = new Todo();
        $todo->content = $request->get('content');
        $todo->save();
        return redirect('/');
    }

    public function update(UpdateRequest $request) 
    {
        $todo = Todo::find($request->id);
        $todo->content = $request->get('content');
        $todo->save();
        return redirect('/');
    }

    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return redirect('/');
    }
}