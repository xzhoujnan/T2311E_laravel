<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        // select * from products
        // $products = Product::all()->toArray();

        // select * from products limit 4
        $products = Product::limit(4)->get()->toArray();
    
        return view('welcome',compact("products"));
    }

    public function about_us(){
        return view("about-us");
    }
}

public function category($id){
    $category = Category::findOrFail($id);
    $category = $category->toArray();
    $product = Product::where("categry_id",$id)->get()->toArray();
    return view("category-page",compact("cateogu","products"));
}
