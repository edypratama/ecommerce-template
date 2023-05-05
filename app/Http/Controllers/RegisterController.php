<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index() {

        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request) {

        $validateData = $request->validate([

            'name' => ['required', 'min:5', 'unique:users'],
            'email' => ['required', 'unique:users', 'email:dns'],
            'password' => ['required', 'min:5']
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        // $request->session()->flash('success', 'Registrasion succesfull please login');

        return redirect('/login')->with('success', 'Registrasion succesfull please login');
    }
}
