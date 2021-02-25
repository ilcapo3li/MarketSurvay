<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //
    public function getLogin (){
       // return  view('admin.test');
       return  view('admin.login');
       
    } 
    public function login (Request $request){
       
        //return  view('admin.dashboard');
       // return Redirect::route('admin.dashboard');
       //return route('admin.dashboard');
      // echo "hello";
    //   return redirect('/bicomatics/admin');
      //return back();
  //     $name=$request->name;
  //       if (Auth::attempt(['name' => $name])) {

  //       //     // The user is being remembered...
  //          return redirect()->route('admin.dashboard');
  //       // }
        
  //  }
  //   return redirect('/bicomatics/admin/login');
  //$credentials = $request->only('name');
  
  
  $name=$request->only('name');
  if (User::where('name', '=',  $name)->exists()) {
    session(['key' => $name]);
    //$request->session()->regenerate();
    return redirect()->route('admin.dashboard');
   // return redirect()->intended('/bicomatics/admin');

 }

// if (auth()->attempt(['name' =>$request-> input("name")]))
// {

//   return redirect()->route('admin.dashboard');

// }
    
    //$user = auth()->user();
        // if (auth()->attempt(['name' =>$request-> input("name")])) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('admin.dashboard');
        // }

        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ]);
    }
}


