<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Task;

class TaskController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('todo.index');
    }

    public function list()
    {
        $tasks = Task::all();
        return response()->json([
            "results" => count($tasks),
            "data" => $tasks
        ]);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
        ]);

        if($validator->fails()){
            return response()->json([
                "error" => $validator->errors()
            ], 422);
        }

        $task = new Task();
        $task->name = $request->name;
        $task->priority_id = $request->priority_id;
        $task->category_id = $request->category_id;
        $task->save();

        return response()->json([
            "data" => $task
        ], 201);
    }

    public function read(int $id)
    {
        $task = Task::find($id);

        if(!$task){
            return response()->json([
                "error" => "Tasks not found",
            ], 404);
        }

        return response()->json([
            "data" => $task
        ]);
    }

    public function delete(int $id)
    {
        $task = Task::find($id);
        if (!$task) {
            return response()->json([
                "error" => "Task not found"
            ], 404);
        }
        $task->delete();
        return response(null, 204);
    }
}
