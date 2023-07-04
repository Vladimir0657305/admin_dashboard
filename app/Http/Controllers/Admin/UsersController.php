<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', [
            'users' => $users
        ]);
    }
    public function edit($userId)
    {
        // dd($userId);
        $users = User::all();
        $roles = Role::all();
        // $user = $users->find($userId);
        $edit_user = User::findOrFail($userId);
        // dd($edit_user);
        return view('admin.users.edit', [
            'users' => $users,
            'edit_user' => $edit_user,
            'roles' => $roles
        ]);
    }
    

    public function users_update(Request $request, User $user)
    {
        $user->id = $request->id;
        if (isset($request->name)) {
            $user->name = $request->name;
        } else {
            $user->name = '';
        }
        if (isset($request->email)) {
            $user->email = $request->email;
        } else {
            $user->email = '';
        }
        $user->password = '';
        $user->roles()->sync($request->roles);
        $user->save();
        return redirect()->back()->withSuccess('Пользователь успешно обновлен!');
    }
public function destroy(User $user)
    {
        $user -> delete();
        return redirect()->back()->withSuccess('Пользователь успешно удален!');
    }
}