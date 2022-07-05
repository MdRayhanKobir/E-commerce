<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminSetiingController extends Controller
{


    public function Logout()
    {
        Auth::logout();

        $notification = array(
            'message' => 'Successfully Logout',
            'alert-type' => 'success'
        );
        return redirect()->route('login')->with($notification);
    }


    public function ChangePassword()
    {
        return view('admin.setting.pass_update');
    }


    public function ChangePassStore(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);
        $hashpassword = Admin::find(1)->password;
        if (Hash::check($request->oldpassword, $hashpassword)) {
            $user = Admin::find(1);
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
