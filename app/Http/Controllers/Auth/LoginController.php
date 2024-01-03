<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
class LoginController extends Controller
{
    public function googlelogin()
    { 
        try {
            $driver = Socialite::driver('google');
            return $driver->redirect();
        } catch (\Exception $e) {
            // Log exception details for debugging
            \Log::error('Google Login Error: ' . $e->getMessage());
            dd($e->getMessage());
        }
    }

    public function showLogin()
    {
       return view ('auth.login');
    }

    public function getAuthLoginData(){
        $authUser = Socialite::driver('google')->stateless()->user();
        if(is_null($authUser)) {
        $user=new User();
        $user->name  = $authUser->name;
        $user->email  = $authUser->email;
        $user->password =Hash::make('default_password');
        $user->save();
        \Auth::login($user);
    }else {
        $existingUser = User::where('email', $authUser->email)->first();

        if (!$existingUser) {
            // Create a new user if not found
            $existingUser = new User();
            $existingUser->name = $authUser->name;
            $existingUser->email = $authUser->email;
            $existingUser->password = Hash::make('default_password');
            $existingUser->save();
        }

        \Auth::login($existingUser);
    }

    return redirect()->route('home');
}

        // dd($authUser);
    //         $userFound = User::where('email', $authUser->email)->first();
    //    U     if(is_null($userFound)) {
    //             $user = new User();
    //             $user->name  =      $authUser->name;
    //             $user->email   =    $authUser->email;
    //             $user->avatar  =    $authUser->avatar;
    //             $user->auth_id  = $authUser->id;
    //             $user->save();
    //             Auth::login($user);
    //         }else {
    //             Auth::login($userFound);
    //         }
    //         return redirect('/profile/settings');
    // }
     public function logout(){
         \Auth::logout();
        return redirect()->url('googlelogin');
     }
//    public function __construct()
//   {
//       $this->middleware('guest')->except('logout');
//   }
}
