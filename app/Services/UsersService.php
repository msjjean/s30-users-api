<?php 

namespace App\Services;

use App\Models\User;

class UsersService
{
    public function getAllUsers()
    {
        $users = User::latest()->get();
        return ['users' => $users];
    }

    public function addUser($request)
    {
        return ['user' => $request];
    }
}
