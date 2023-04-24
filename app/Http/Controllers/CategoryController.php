<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $allCategories = Category::all();
        return response()->json(
            [
                'valid' => true,
                'message' => 'retrieved successfully',
                'Category' => $allCategories,
            ],
            200,
        );
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            
        ]);
        if ($validator->fails()) {
            return response()->json(
                [
                    'valid' => false,
                    'message' => 'something went wrong',
                    'errors' => $validator->errors()
                ],
                400,
            );
        }
 
        $newCategory = Category::create($request->all());
        return response()->json(
            [
                'valid' => true,
                'message' => 'created successfully',
                'Category' => $newCategory,
            ],
            200,
        );

        $newCategory = Category::create($request->all());
    }

    public function show(Category $category)
    {
        return response()->json(
            [
                'valid' => true,
                'message' => 'retrieved successfully',
                'category' => $category,
            ],
            200,
        );
    }

    public function update(Request $request, Category $category)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['sometimes', 'required', 'string'],
            
        ]);
        if ($validator->fails()) {
            return response()->json(
                [
                    'valid' => false,
                    'message' => 'something went wrong',
                    'errors' => $validator->errors()
                ],
                400,
            );
        }

        $category->update($request->all());
        return response()->json(
            [
                'valid' => true,
                'message' => 'updated successfully',
                'category' => $category,
            ],
            200,
        );
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(
            [
                'valid' => true,
                'message' => 'deleted successfully',
                'category' => $category,
            ],
            200,
        );
        
    }
}
