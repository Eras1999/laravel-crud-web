<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request) {
        $task = new Task;
        $task->task = $request->task;
        $task->save();
    
        $data = Task::all(); // Fetch all tasks again after saving
        return view('task')->with('tasks', $data); // Pass tasks back to the view
    }
    
    public function UpdateTaskAsCompleted($id){
        $task=Task::find($id);
        $task->iscompleted=1;
        $task->save();
        return redirect()->back();
    }

    public function UpdateTaskAsnotCompleted($id){
        $task=Task::find($id);
        $task->iscompleted=0;
        $task->save();
        return redirect()->back();
    }

    public function deletetask($id){
        $task=Task::find($id);     
        $task->delete();
        return redirect()->back();
    }

    public function updatetaskview($id){
        $task=Task::find($id);        
        return view('updatetask')->with('taskdata', $task); 
    }

    public function updatetask(Request $request) {
        $id = $request->id;
        $task = $request->task;
    
        // Find the task by id or fail
        $data = Task::findOrFail($id); // This will throw a 404 error if the task is not found
    
        // Update the task field
        $data->task = $task;
        $data->save();
    
        // Retrieve all tasks
        $datas = Task::all();
    
        // Pass the tasks to the view
        return view('task')->with('tasks', $datas);
    }
    
    
}
