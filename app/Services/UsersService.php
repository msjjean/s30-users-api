<?php 

namespace App\Services;

use App\Repositories\UsersRepositoryInterface;

class UsersService
{
    private $userRepository;

    public function __construct(UsersRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers()
    {
        $users = $this->userRepository->getAllUsers();
        return ['users' => $users];
    }

    public function addUser($request)
    {
        $user = $this->userRepository->addUser($request);
        return [
            'message' => 'User has been added',
            'user' => $user
        ];
    }
}
