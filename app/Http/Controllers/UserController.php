<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\User;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $admin = User::skip(1)->limit(2)->get();
        return view('auth.index')->with('admins', $admin);
    }

    public function edit(User $profile)
    {
        return view('auth.edit', compact('profile'));
    }

    public function update(Request $request, User $profile)
    {
        $profile->update([
           'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('profile.index', ['profile' => $profile->id]);

    }


}
