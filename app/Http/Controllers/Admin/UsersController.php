<?php

namespace App\Http\Controllers\Admin;

use App\Entity\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(20);

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store()
    {
        $user = User::create($this->validateRequest());

        return redirect()->route('admin.users.show', $user);
    }

    public function show(User $user)
    {
        return view('admin.users.show', $user);
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', $user);
    }

    public function update(Request $request, User $user)
    {
        $user->update($this->validateRequest());

        return view('admin.users.show', $user);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return view('admin.users.index');
    }

    protected function validateRequest(): array
    {
        return  (\request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]));

    }
}
