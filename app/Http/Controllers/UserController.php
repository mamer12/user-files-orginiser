<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::with('files')->get();

        $userFiles = $users->map(function ($user) {
            $files = $user->files->pluck('title');
            return [
                'user_name' => $user->name,
                'files' => $files,
            ];
        });

        return response()->json(['users' => $userFiles]);


    }


}
