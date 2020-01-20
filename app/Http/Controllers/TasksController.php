<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;

class TasksController extends Controller
{
    public function index() 
    {

      return Task::all();

    }


    public function store(Request $request) 
    {

        $request->validate([
          'name'=>'required|max:64',
          'complete'=>'required'
        ]);
        $task = Task::create([
            'name'=>$request->input('name'),
            'complete'=>$request->input('complete')
        ]);

        return $task;
  
      }

      public function show(Task $task) 
      {

        return $task;
  
      }

      public function update(Request $request, Task $task) 
      {

        $request->validate([
          'name'=>'required|max:64'
        ]);

        $task->name = $request->input('name');

        $task->save();

        return $task;
  
      }

      public function erase(Task $task) 
      {

        $task->delete();

        return response()->json(['sucesso'=>true]);
  
      }
}
