<?php 

namespace App\Repositories;

interface UsersRepositoryInterface
{
    public function getAllUsers();
    
    public function addUser(array $userDetails);
}