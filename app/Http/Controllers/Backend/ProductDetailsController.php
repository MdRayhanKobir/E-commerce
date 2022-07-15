<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductDetailsController extends Controller
{
    public function ProductDetails($id,$product_name){
    $product=Product::find($id);
    $color=$product->product_color;
    $product_color=explode(',',$color);

    $size=$product->product_size;
    $product_size=explode(',',$size);

    return view('frontend.pages.product_details',compact('product','product_color','product_size'));

    }


    public function ProducAdd( Request $request, $id){

        $product=DB::table('products')->where('id',$id)->first();

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
                'messege' => 'Product Successfully Added',
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
            'messege' => 'Product Successfully Added',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
        }

    }
}
