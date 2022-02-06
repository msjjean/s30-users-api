<?php 

namespace App\Services;

use App\Repositories\UsersRepositoryInterface;

class UsersService
{
    private $userRepository;

    /**
     * Inject the UserRepositoryInterface to this Service class
     * 
     * @param UsersRepositoryInterface $userRepository
     */
    public function __construct(UsersRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Fetch all users
     *
     * @return Array of user collection
     */
    public function getAllUsers()
    {
        $users = $this->userRepository->getAllUsers();
        return ['users' => $users];
    }

    /**
     * Add a new user
     *
     * @param Array $request
     * @return Array containing an object of a newly added user (record) and a message
     */
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
