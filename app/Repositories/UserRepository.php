<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository
{
    public $table = 'users';
    public function getModel()
    {
        // TODO: Implement getModel() method.
        return User::class;
    }

    public function deleteById($id)
    {
        // TODO: Implement deleteById() method.
    }
}
