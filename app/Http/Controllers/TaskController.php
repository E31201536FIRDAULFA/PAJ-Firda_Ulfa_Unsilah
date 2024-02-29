<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function index(){
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
    }

    public function show(Task $task){
        return view('task.show',compact('task'));
    }

    public function create(){
        return view('task.create');
    }

    public function store(Request $request){

        //$validateData = $request->validated();

         $data = [
             'name' => $request->name,
             'description' => $request->description,
         ];

         //dd($data);
         Task::create($data);
         return redirect('/task');
}

public function Showupdate(Request $request, $id)
{
    $tasks= Task::findOrFail($id);
    $tasks->update($request->all());
    return redirect('/task');
}

public function edit( $id){
    $tasks= Task::findOrFail($id);
    return view('task.edit', compact('tasks'));
}

}
