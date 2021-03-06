<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Impl\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function create($request)
    {
       return $this->model->create([
           'name'=> $request->name,
           'email' => $request->email,
           'password' => $request->password
       ]);
    }

    public function update($request)
    {
        $model = $this->model::findOrFail($request->id);
        $model->name = $request->name;
        $model->email = $request->email;
        $model->password = $request->password;
        $model->save();
    }
}
