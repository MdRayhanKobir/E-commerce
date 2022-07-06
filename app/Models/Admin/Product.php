<?php

namespace App\Models\Admin;

use App\Models\Admin\Category;
use App\Models\Admin\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    
    public function subcategory(){
        return $this->belongsTo(SubCategory::class,'subcategory_id','id');
    }
}