<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $this->_validateRequest($request);

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

    public function update(Request $request, User $user)
    {
        $this->_validateRequest($request);

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

    private function _validateRequest($request)
    {
        return  $request->validate([
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
        ]);
    }
}
