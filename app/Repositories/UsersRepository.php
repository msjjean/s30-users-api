<?php 

namespace App\Repositories;

use App\Repositories\UsersRepositoryInterface;
use App\Models\User;

class UsersRepository implements UsersRepositoryInterface {
    
    /**
     * Fetch all users
     *
     * @return Object collection of users 
     */
    public function getAllUsers()
    {
        $users = User::latest()->get();
        return $users;
    }

    /**
     * Add a new user
     *
     * @param Array $request - validated data to store
     * @return Object $user  - newly added user record
     */
    public function addUser($request)
    {
        $user = User::create([
            'full_name' => $request['fullname'],
            'email'     => $request['email'],
        ]);

        return $user;
    }
}