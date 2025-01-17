<?php
namespace App\Repositories;

use App\Models\User;

class UserRepository
{

    public function find($id)
    {
        return User::find($id);
    }

    public function create(array $data)
    {
        return User::create($data);
    }

    public function update($id, array $data)
    {
        return User::find($id)->update($data);
    }

    public function delete($id)
    {
        return User::find($id)->delete();
    }

    public function getAll()
    {
        return User::all();
    }

}
