<?php

namespace Modules\Todo\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Todo\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todo::index', compact('todos'));
    }

    public function create(Request $request)
    {
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->save();

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->title = $request->title;
        $todo->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect()->back();
    }
}
