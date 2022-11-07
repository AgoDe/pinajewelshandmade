<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    protected $redirectTo = '/dashboard';

    public function create()
    {
        return view('pages.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages(['email' => 'I dati di accesso non sono corretti']);
        }

        session()->regenerate();

        return Redirect::route('dashboard')->with('success', 'Hai appena effettuato il login');
    }


    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Hai appena effetuato il logout');

    }

    public function dashboard()
    {
        return view('pages.dashboard', [

        ]);
    }
}
