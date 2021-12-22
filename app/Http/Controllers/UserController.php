<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index() {
        $users = $this->userRepository->getAll();
        return view('user.list',compact('users'));
    }
    public function show($id) {
        $user = $this->userRepository->getById($id);
        return view('user.detail',compact('user'));
    }
    public function delete($id) {
        $this->userRepository->delete($id);
        return redirect()->route('users.index');
    }
    public function create() {
        return view('user.create');
    }
    public function store(Request $request) {
        $this->userRepository->create($request);
        return redirect()->route('users.index');
    }



}
