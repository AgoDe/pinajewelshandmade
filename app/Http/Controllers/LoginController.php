<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function create()
    {
        return view('customer-session.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email'     => 'required|email',
            'password'  => 'required',
        ]);

        if(! auth()->attempt($attributes)){
            // se il login fallisce torno indietro con un messaggio di errore
            throw ValidationException::withMessages(['email' => 'I dati di accesso non sono corretti']);
        }

        session()->regenerate(); // per evitare alcuni tipi di attacchi
        $slug = auth()->guard('customers')->user()->slug;
        return Redirect::route('dashboard', [$slug])->with('success', 'Hai appena effettuato il login');

    }

    public function dashboard($slug)
    {
        return view('customer-session.dashboard', [
            'slug' => $slug,
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Hai appena effetuato il logout');

    }
}
