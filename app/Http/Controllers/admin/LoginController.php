<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use http\Env\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    protected $redirectTo = '/admin';

    public function _construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function create()
    {
        return view('admin.session.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
           'email'      => 'required|unique',
           'password'   => 'required|min:6',
        ]);

        if (! Auth::guard('admin')->attempt($attributes)) {
            throw ValidationException::withMessages(['email' => 'I dati di accesso non sono corretti']);
        }

        session()->regenerate();
        return redirect()->intended(route('admin.dashboard'))->with('success', 'Bentornato!');

    }

    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('admin.login');
    }




}
