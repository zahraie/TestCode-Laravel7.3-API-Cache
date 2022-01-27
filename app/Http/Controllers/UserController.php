<?php

namespace App\Http\Controllers;

use  App\Http\Requests\CreateUserRequest;
use  App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function show(User $user)
    {
     
        return $user;
    }

    public function create(CreateUserRequest $request)
    {
        $user=$request->all();
        $user['password']=bcrypt($user['password']);
        $user = User::create($user);
        return response($user, 201);
    }

    public function update(User $user,UpdateUserRequest $request)
    {

        $data=$request->all();
        if(isset($data['password'])){
            $data['password']=bcrypt($data['password']);
        }
    
        $user->update($data);
        return response($user, 202);
    }
}
