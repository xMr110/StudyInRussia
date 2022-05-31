<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function customeMethod(User $user)
    {
        return 0;
    }

    public function viewAny(User $user)
    {
        if(in_array($user->power,["ADMIN"]))
        return 1;
    }

    public function view(User $user,User $model)
    {
        if(in_array($user->power,["ADMIN"]))
            return 1;
    }

    public function create(User $user)
    {
        if(in_array($user->power,["ADMIN"]))
            return 1;
    }

    public function update(User $user, User $model)
    {
        if(in_array($user->power,["ADMIN"]))
            return 1;
    }

    public function delete(User $user, User $model)
    {
        if(in_array($user->power,["ADMIN"]))
            return 1;
    }

    public function restore(User $user, User $model)
    {
        if(in_array($user->power,["ADMIN"]))
            return 1;
    }

    public function forceDelete(User $user, User $model)
    {
        if(in_array($user->power,["ADMIN"]))
            return 1;
    }

    public function control(User $user){
        return 1;
    }

}
