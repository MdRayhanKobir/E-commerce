<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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
            Cart::add($data);
            return response (['success' => 'Successfully added on your Cart']);
        }else{
            $data['id']=$product->id;
            $data['name']=$product->product_name;
            $data['qty']=1;
            $data['price']=$product->discount_price;
            $data['weight']=1;
            $data['options']['image']=$product->image_one;
            Cart::add($data);
            return response (['success' => 'Successfully added on your Cart']);
        }
    }



    public function ProductCheck(){
        $data=Cart::content();
        return response($data);
    }
}
