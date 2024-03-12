<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Priority;

class PriorityController extends BaseController
{

    public function list()
    {
        $priorities = Priority::all();
        return response()->json([
            "result" => count($priorities),
            "data" => $priorities,
        ]);
    }
    
    public function read(int $id)
    {
        $priority = Priority::find($id);
        if(!$priority){
            return response()->json([
                "error" => "Priority level not found",
            ], 404);
        }
        return response()->json([
            "data" => $priority,
        ]);
    }
}
