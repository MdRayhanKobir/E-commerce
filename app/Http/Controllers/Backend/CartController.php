<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Wishlist;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function AddCart($id){
        $product=DB::table('products')->where('id',$id)->first();

        $data = array();
        if($product->discount_price==null){
            $data['id']=$product->id;
            $data['name']=$product->product_name;
            $data['qty']=1;
            $data['price']=$product->selling_price;
            $data['weight']=1;
            $data['options']['image']=$product->image_one;
            $data['options']['color']='';
            $data['options']['size']='';
            Cart::add($data);
            return response (['success' => 'Successfully added on your Cart']);
        }else{
            $data['id']=$product->id;
            $data['name']=$product->product_name;
            $data['qty']=1;
            $data['price']=$product->discount_price;
            $data['weight']=1;
            $data['options']['image']=$product->image_one;
            $data['options']['color']='';
            $data['options']['size']='';
            Cart::add($data);
            return response (['success' => 'Successfully added on your Cart']);
        }
    }



    public function ShowCart(){
        $cart=Cart::content();
        return view('frontend.pages.cart',compact('cart'));
    }

    public function CartRemove($id){
        Cart::remove($id);
        $notification = array(
            'messege' => 'Product Remove from  Cart ',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function CartItemUpdate(Request $request){

        $rowId=$request->productid;
        $qty=$request->qty;
        Cart::update($rowId,$qty);

        $notification = array(
            'messege' => 'Product Item updated successfully ',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function ModalCartView($id){
        $product = DB::table('products')
        ->join('categories','products.category_id','categories.id')
        ->join('sub_categories','products.subcategory_id','sub_categories.id')
        ->join('brands','products.brand_id','brands.id')
        ->select('products.*','categories.category_name','sub_categories.subcategory_name','brands.brand_name')
        ->where('products.id',$id)
        ->first();

$color = $product->product_color;
$product_color = explode(',', $color);

$size = $product->product_size;
$product_size = explode(',', $size);

return response(array(
'product' => $product,
'color' => $product_color,
'size' => $product_size,
));


    }


    public function ModalCartInsert(Request $request){
        $id=$request->product_id;
        $product=DB::table('products')->where('id',$id)->first();

        $color=$request->color;
        $size=$request->size;
        $qty=$request->qty;


        $data = array();
        if($product->discount_price==null){
            $data['id']=$product->id;
            $data['name']=$product->product_name;
            $data['qty']=$request->qty;
            $data['price']=$product->selling_price;
            $data['weight']=1;
            $data['options']['image']=$product->image_one;
            $data['options']['color']=$request->color;
            $data['options']['size']=$request->size;
            Cart::add($data);

            $notification = array(
                'messege' => 'Product added successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        }else{
            $data['id']=$product->id;
            $data['name']=$product->product_name;
            $data['qty']=$request->qty;
            $data['price']=$product->discount_price;
            $data['weight']=1;
            $data['options']['image']=$product->image_one;
            $data['options']['color']=$request->color;
            $data['options']['size']=$request->size;
            Cart::add($data);

            $notification = array(
                'messege' => 'Product added successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function CheckOut(){
        if(Auth::check()){
            $cart=Cart::content();
            return view('frontend.pages.checkout',compact('cart'));

        }else{

            $notification = array(
                'messege' => 'At first login you account',
                'alert-type' => 'warning'
            );
            return redirect()->route('login')->with($notification);


        }
    }

    public function UserWishlist(){
        $userid=Auth::id();
        $product=DB::table('wishlists')
                        ->join('products','wishlists.product_id','products.id')
                        ->select('products.*','wishlists.user_id')
                        ->where('wishlists.user_id',$userid)
                        ->get();
        return view('frontend.pages.wishlist',compact('product'));

    }

    public function UserCupon(Request $request){

        $cupon=$request->cupon;
        $check=DB::table('cupons')->where('cupon',$cupon)->first();
        if($check){
            Session::put('cupon',[
                'name'=>$check->cupon,
                'discount'=>$check->discount,
                'balance'=>Cart::subtotal()-$check->discount,
            ]);
            $notification = array(
                'messege' => 'Successfully Cupon Applied',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);


        }else{
            $notification = array(
                'messege' => ' Applied Cupon Wrong',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }

    public function CuponRemove(){
        Session::forget('cupon');

        $notification = array(
            'messege' => ' Successfully Cupon Remove',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    //=============== payment method==========
    public function PaymentPage(){
        $cart=Cart::Content();
        return view('frontend.pages.payment',compact('cart'));
    }





    // public function ProductCheck(){
    //     $data=Cart::content();
    //     return response($data);
    // }
}
