<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Task;

class TasksController extends Controller
{

    //Get all Tasks
    public function index()
    {        
        $tasks = Task::oldest()->get();
        return response()->json($tasks);
    }

    // Get a specific Task
    public function show($id)
    {
        $task = Task::find($id);

        if(!$task)
            return response()->json(['error' => 'Task not found'], 404);

        return response()->json($task);
    }

    // Create a new Task
    public function create(Request $request)
    {

        $task = Task::create($request->all());

        return response()->json($task, 201);
    }

    // Delete a specific Task
    public function delete($id)
    {

        $id = json_decode($id, true);

        $task = Task::find($id);

        if(!$task)
            return response()->json(['error' => 'Task not found'], 404);
        
        $task->delete();

        return response()->json(['data' => 'Task id '.$id.' deleted'], 200);
    }

    //Delete multiples tasks at once
    public function multiDelete($ids)
    {

        $ids = json_decode($ids, true);

        foreach ($ids as $taskId) {

            $task = Task::find($taskId);

            if($task){
                $task->delete();
            }
        }

        $tasks = Task::get();
        return response()->json($tasks, 200);
    }

}
