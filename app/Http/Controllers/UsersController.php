<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Users\UserStoreFormRequest;
use App\Services\UsersService;


class UsersController extends Controller
{
    private $userService; 

    /**
     * Inject the UsersService class to this controller via constructor
     * 
     * @param UsersService $userService
     */
    public function __construct(UsersService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Fetch all users
     *
     * @return string JSON response 
     */
    public function index()
    {
        $returnData = $this->userService->getAllUsers();
        return response()->json($returnData);
    }

    /**
     * Store or add a new user
     *
     * @param UserStoreFormRequest $request
     * @return string JSON response
     */
    public function store(UserStoreFormRequest $request)
    {
        $returnData = $this->userService->addUser($request->validated());
        return response()->json($returnData);
    }
}

