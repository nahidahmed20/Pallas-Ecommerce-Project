<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.subCategory.index',['sub_categories' => SubCategory::all()]);
    }
    public function create()
    {
        return view('admin.subCategory.add',['categories' => Category::all()]);
    }
    public function store(Request $request)
    {
        SubCategory::newSubCategory($request);
        return back()->with('message','Sub category info added successfully');
    }
    public function edit($id)
    {
        return view('admin.subCategory.edit',[
            'sub_category' => SubCategory::find($id),
            'categories' => Category::all(),
        ]);
    }
    public function update(Request $request, $id)
    {
        SubCategory::updateSubCategory($request, $id);
        return redirect('/sub-category/manage')->with('message','Sub category info update successfully');
    }
    public function delete($id)
    {
        SubCategory::deleteSubCategory($id);
        return redirect('/sub-category/manage')->with('message','Sub category info delete successfully');
    }

}
