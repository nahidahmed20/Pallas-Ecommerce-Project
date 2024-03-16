<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    private $product;
    public function index()
    {
        return view('website.cart.index',['cart_products' => Cart::content()]);
    }
    public function addToCart(Request $request, $id)
    {
        $this->product = Product::find($id);
        Cart::add([
            'id'        => $this->product->id,
            'name'      => $this->product->name,
            'qty'       => $request->qty,
            'price'     => $this->product->selling_price,
            'options'   => [
                'image'  => $this->product->image,
            ]]);
        return redirect('cart/show');
    }
    public function updateCart(Request $request)
    {
        Cart::update($request->rowId, $request->qty);
        return back()->with('message','Cart info update successfully..');
    }
    public function removeCart($rowId)
    {
        Cart::remove($rowId);
        return back()->with('message','cart info delete successfully..');
    }
}
