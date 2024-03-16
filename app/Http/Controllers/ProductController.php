<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index',['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.add',[
            'categories'        => Category::all(),
            'sub_categories'    => SubCategory::all(),
            'brands'            => Brand::all(),
            'units'             => Unit::all()
        ]);
    }

    private $categoryId, $subCategories;
    public function getSubCategoryByCategory()
    {
        $this->categoryId = $_GET['id'];
        $this->subCategories = SubCategory::where('category_id',$this->categoryId)->get();
        return response()->json($this->subCategories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->product = Product::newProduct($request);
        ProductImage::newProductImage($request->other_image, $this->product->id);
        return back()->with('message','Product info save successfully..');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('admin.product.detail',['product' => Product::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('admin.product.edit',[
            'categories'        => Category::all(),
            'sub_categories'    => SubCategory::all(),
            'brands'            => Brand::all(),
            'units'             => Unit::all(),
            'product'           => Product::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        if ($request->file('other_image'))
        {
            ProductImage::updateProductOtherImage($request->file('other_image'),$id);
        }
        return redirect('/product')->with('message','Product info update successfully..');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Product::deleteProduct($id);
        ProductImage::deleteProductOtherImage($id);
        return redirect('/product')->with('message','Product info delete successfully..');
    }
}
