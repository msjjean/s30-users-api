<?php 

namespace App\Repositories;

use App\Repositories\UsersRepositoryInterface;
use App\Models\User;

class UsersRepository implements UsersRepositoryInterface {
    
    public function getAllUsers()
    {
        $users = User::latest()->get();
        return $users;
    }

    public function addUser($request)
    {
        $user = User::create([
            'full_name' => $request['fullname'],
            'email'     => $request['email'],
        ]);

        return $user;
    }
}