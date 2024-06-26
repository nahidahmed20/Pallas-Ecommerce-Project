<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class PallasController extends Controller
{
    private $value, $products;
    public function index()
    {
        return view('website.home.index',[
            'products' => Product::orderBy('id','desc')->take(8)->get(),
            ]);
    }
    public function ajaxSearch()
    {
        $this->value = $_GET['value'];
        $this->products = Product::where('name','LIKE',"%$this->value%")->get(['id', 'name']);
        return response()->json($this->products);
    }
    public function category($id)
    {
        return view('website.category.index',[
            'products' => Product::where('category_id',$id)->orderBy('id','desc')->get(),
        ]);
    }
    public function product($id)
    {
        return view('website.product.index',[
            'product' => Product::find($id),
        ]);
    }
    public function subCategory($id)
    {
        return view('website.category.index',[
            'products' => Product::where('sub_category_id', $id)->orderBy('id', 'desc')->get(),
        ]);
    }

    public function productSports()
    {
        $product = Product::select('product_name')->get();
        return $product;
    }



}
