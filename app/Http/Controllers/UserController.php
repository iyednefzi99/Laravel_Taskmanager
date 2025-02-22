<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public array $user = [
        [
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'john.doe@example.com'
        ],
        [
            'id' => 2,
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com'
        ],
        [
            'id' => 3,
            'name' => 'Alice Johnson',
            'email' => 'alice.johnson@example.com'
        ]
    ];


    public function index()
    {
        // foreach ($user as $user) {
        //     echo "ID: " . $user['id'] . ", Name: " . $user['name'] . ", Email: " . $user['email'] . "\n";
        // }
        return response()->json($this->user);
    }


    public function show($id)
    {
        $user = collect($this->user)->where('id', $id)->first();
        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        } else {
            return response()->json($user);
        }
    }
    public function getProfile($id)
    { 
        $profile = User::find($id)->profile;
        if (!$profile) {
            return response()->json(['error' => 'User not found'], 404);
        } else {
            return response()->json($profile);
        }

        // $user = User::find($id);
        // if (!$user) {
        //     return response()->json(['error' => 'User not found'], 404);
        // } else {
        //     return response()->json($user->profile );
        // }

        // $profile = Profile::where('user_id', $id)->first();
        // if (!$profile) {
        //     return response()->json(['error' => 'Profile not found'], 404);
        // } else {
        //     return response()->json($profile);
        // }
        
        }
    }

