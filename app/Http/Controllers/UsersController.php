<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Users\UserStoreFormRequest;
use App\Services\PostServices;

use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        return response()->json([
            'res' => 'get all users'
        ]);
    }

    public function store(UserStoreFormRequest $request)
    {
        $validated = $request->validated();
        return response()->json([
            'res' => $validated
        ]);
    }
}
