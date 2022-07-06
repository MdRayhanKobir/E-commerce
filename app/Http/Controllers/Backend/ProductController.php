<?php

namespace App\Http\Controllers\Backend;

use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function ProductView(){

    }

    public function ProductAdd(){

        $category=Category::all();
        $brand=Brand::all();
        return view('admin.product.product_add',compact('category','brand'));
    }

    public function ProductStore(Request $request){


    }

    public function GetSubCategory($category_id){

        // // $subcategory=SubCategory::find($category_id)->all();
        // // return response()->json($subcategory);

        // $subcat=DB::table('sub_categories')->where('category_id',$category_id)->get();
        // return json_encode($subcat);

        $subcategory=SubCategory::where('category_id',$category_id)->get();
        return json_encode($subcategory);



    }





}
