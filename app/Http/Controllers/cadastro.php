<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class cadastro extends Controller
{
    public function create(): View
    {
        $roles = new role();
        $roles = $roles->get();
        // dd('teste');
        return view('menu.cadastro')->with('roles', $roles);

    }


    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'gender' => $request->gender,
        //     'role_id' => $request->role_id
        // ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'role_id' => $request->role_id
        ]);

        // event(new Registered($user));
        
        
        // Auth::login($user);
        // return redirect(RouteServiceProvider::HOME);
        return view('dashboard');
    }
}
