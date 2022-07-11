<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function WishlistAdd($id){
        $userid=Auth::id();
        $check=Wishlist::where('user_id',$userid)->where('product_id',$id)->first();
        $data=new Wishlist();
        $data->user_id      =$userid;
        $data->product_id   =$id;

        if(Auth::check()){

            if($check){
                $notification = array(
                    'messege' => 'Already has in your wishlist',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);

            }else{
                $data->save();
                $notification = array(
                    'messege' => 'Add to wishlist',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);

            }

        }else{
            $notification = array(
                'messege' => 'Login Your Account First',
                'alert-type' => 'warnning'
            );
            return redirect()->route('login')->with($notification);
        }
    }
}
