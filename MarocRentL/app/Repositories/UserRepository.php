<?php 

namespace App/Repositories 

use App/Models/User
    public function getAll()
    {
        return User::all();
    }
    public function getById($id)
    {
        return User::find($id);
    }