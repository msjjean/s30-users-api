<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Users\UserStoreFormRequest;
use App\Services\UsersService;


class UsersController extends Controller
{
    private $userService; 

    public function __construct(UsersService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $returnData = $this->userService->getAllUsers();
        return response()->json($returnData);
    }

    public function store(UserStoreFormRequest $request)
    {
        $returnData = $this->userService->addUser($request->validated());
        return response()->json($returnData);
    }
}

