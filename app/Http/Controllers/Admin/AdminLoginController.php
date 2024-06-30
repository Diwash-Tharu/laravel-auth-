<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    //
    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        // echo "login";
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

            if(Auth::attempt($request->only('email','password'))){
                // if(auth()->user()->is_admin == 1){
                //     return redirect()->route('admin.dashboard');
                // }else{
                //     return redirect()->route('home');
                // }
                // return redirect()->route('admin.dashboard');
                // echo "login";
                return redirect()->route('admin.dashboard');
            }else{
                // return redirect()->route('admin.dashboard')->with('error','Invalid Login Details');
            }
    }

    // function checklogin(Request $request)
    // {
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required|alphaNum|min:3'
    //     ]);

    //     $user_data = array(
    //         'email' => $request->get('email'),
    //         'password' => $request->get('password')
    //     );

    //     if (Auth::attempt($user_data)) {
    //         return redirect('admin/successlogin');
    //     } else {
    //         return back()->with('error', 'Wrong Login Details');
    //     }
    // }


}
