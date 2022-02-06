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
        $userDetails = array(
            'fullname' => trim(strip_tags($request['fullname'])),
            'email'    => trim(strip_tags($request['email'])),
        );

        $user = $this->userRepository->addUser($userDetails);

        return [
            'message' => 'User has been added',
            'user'    => $user
        ];
    }
}
