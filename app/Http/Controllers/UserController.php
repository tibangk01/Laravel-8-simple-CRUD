<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('users.index', compact(['users']));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {
        User::create($request->only(['first_name', 'last_name']));

        return redirect()
            ->route('user.index')
            ->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        return view('users.show', compact(['user']));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact(['user']));
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update($request->only(['first_name', 'last_name']));

        return redirect()
            ->route('user.index', $user)
            ->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()
            ->back()
            ->with('success', 'User deleted successfully');
    }
}
