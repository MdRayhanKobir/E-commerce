<?php

namespace App\Http\Controllers\UserBackend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function UserPassChange(){
        return view('profile.update-password-form');
    }

    public function UserPassUpdate(Request $request){
        $validated = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);
        $hashpassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashpassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            $notification = array(
                'message' => 'Successfully Update Password',
                'alert-type' => 'success'
            );

            return redirect()->route('login')->with($notification);
        } else {
            return redirect()->back();
        }

    }
}
