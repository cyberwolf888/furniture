<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Cart;
use Validator;

class HomeController extends Controller
{

    //Home
    public function index()
    {
        return view('home');
    }

    //Product
    public function product_detail($id)
    {
        $model = Product::findOrFail($id);
        return view('product_detail',['model'=>$model]);
    }

    //Cart
    public function cart_insert(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $details = ProductDetail::where('product_id',$product->id)->pluck('value','label')->toArray();
        Cart::instance('cart')->add($product->id, $product->name, $request->qty, $product->price, $details)->associate('App\Models\Product');
        return response()->json([
            'status' => '1'
        ]);
    }

    public function cart_delete(Request $request)
    {
        $rowId = $request->rowId;
        Cart::instance('cart')->remove($rowId);

        return redirect()->back();
    }

    //Subscribe
    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|max:12|unique:subscribe'
        ]);

        if ($validator->fails()) {
            return '0';
        }

        $model = new Subscribe();
        $model->phone = $request->phone;
        $model->save();
        return '1';
    }
}
