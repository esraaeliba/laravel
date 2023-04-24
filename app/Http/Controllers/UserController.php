<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $allUsers = User::all();
        return response()->json(
            [
                'valid' => true,
                'message' => 'retrieved successfully',
                'users' => $allUsers,
            ],
            200,
        );
    }

    public function store(Request $request)
    {
     
        $validator = Validator::make($request->all(), [
            'first_name'  => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
            'country' => ['required', 'string'],
            'address' => ['required', 'string'],
            
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
 
        $newUsers = User::create($request->all());
        return response()->json(
            [
                'valid' => true,
                'message' => 'created successfully',
                'user' => $newUsers,
            ],
            200,
        );
    }

    
    public function show(User $user)
    {
        return response()->json(
            [
                'valid' => true,
                'message' => 'retrieved successfully',
                'user' => $user,
            ],
            200,
        );
    }


    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [

            'first_name'  => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
            'country' => ['required', 'string'],
            'address' => ['required', 'string'],
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
        $newUsers = User::create($request->all());
        return response()->json(
            [
                'valid' => true,
                'message' => 'created successfully',
                'user' => $newUsers,
            ],
            200,
        );
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(
            [
                'valid' => true,
                'message' => 'deleted successfully',
                'user' => $user,
            ],
            200,
        );
    }
}
