<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleDisconnectController extends Controller
{
    public function disconnect(Request $request)
    {
        $user = Auth::user();

        // Revocar el token de acceso de Google
        $user->tokens->each->delete();

        // Desasociar la ID de Google del usuario (si es necesario)
        // $user->google_id = null;
        // $user->save();

        return redirect()->route('dashboard')->with('status', 'Disconnected from Google successfully.');
    }
}

