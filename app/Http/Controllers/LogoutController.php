<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //
    public function getLogout(Request $request){
        $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/bicomatics/admin/login');
    }
}
