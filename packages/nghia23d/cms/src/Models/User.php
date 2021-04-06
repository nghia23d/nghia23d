<?php

namespace nghia23d\cms\Models;

use App\Models\User as MainUser;

class User extends MainUser
{
    const ROLE_BLOCK   = 0;
    const ROLE_ADMIN   = 1;
    const ROLE_MANAGER = 2;
    const ROLE_USER    = 3;

    public function createAdmin($email, $password){

       return $this->create([
            'name' => $email,
            'email' => $email,
            'password' =>  bcrypt($password),
            'email_verified_at' => now()
        ]);
    }
   
}
