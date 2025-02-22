<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\updateTaskRequest;
use App\Models\Taskmanager;
use Illuminate\Http\Request;

class TaskmanagerController extends Controller
{

    public function store(StoreTaskRequest $request  )
    {        // Validate and store the request data using Laravel's built-in request validation

        $task =  Taskmanager::create($request->validated());
        return response()->json($task, 201);
        // Validate the request
        // HTTP request parameters
        // $validatedData = $request->validate([
        //     'title' =>'required|max:255',
        //     'description' =>'required',
        //     'priority' => 'in:low,medium,high'
        // ]);

        // Create a new task with the validated data
        // $task = new Taskmanager();
        // $task->title = $validatedData['title'];
        // $task->description = $validatedData['description'];
        // $task->priority = $validatedData['priority'];
        // $task->save();

        // Return the created task as JSON with a 201 status code
        // return response()->json($task, 201);
    }

    public function update(updateTaskRequest $request, $id)
    {
        $task = Taskmanager::findOrFail($id);
        if (!$task) {
            return response()->json([
               'message' => 'Task not found'
            ], 404);
        }
        $task->update($request->validated());
        return response()->json($task, 200);
        
    }

    

    public function index()
    {
        // Fetch all tasks using Laravel's Eloquent ORM 
        $tasks = Taskmanager::all();
        return response()->json($tasks, 200);
    }


    public function show($id)
    {
        $task = Taskmanager::find($id);
        if (!$task) {
            return response()->json([
                'message' => 'Task not found'
            ], 404);
        }
        return response()->json($task, 200);
    }

    public function destroy($id)
    {
        $task = Taskmanager::find($id);
        if (!$task) {
            return response()->json([
                'message' => 'Task not found'
            ], 404);
        }
        $task->delete();
        return response()->json([
            'message' => 'Task deleted successfully'
        ], 200);
    }
}