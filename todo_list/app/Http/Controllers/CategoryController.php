<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends BaseController
{

    public function list()
    {
        $categories = Category::all();
        return response()->json([
            "result" => count($categories),
            "data" => $categories,
        ]);
    }
    
    public function read(int $id)
    {
        $category = Category::find($id);
        if(!$category){
            return response()->json([
                "error" => "Category not found",
            ], 404);
        }
        return response()->json([
            "data" => $category,
        ]);
    }
}
