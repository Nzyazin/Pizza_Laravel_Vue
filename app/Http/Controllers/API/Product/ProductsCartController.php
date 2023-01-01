<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsCartController extends Controller
{
    public function index() {
        return Cart::with('product')->orderBy('created_at', 'desc')->get();
    }

    public function store(Request $request) {
        $item = Cart::where('product_id', $request->product_id);
        if ($item->count()){
            $item->increment('quantity');
            $item = $item->first();
        } else {
            $item = Cart::forceCreate([
                'product_id' => $request->product_id,
                'quantity' => 1,
            ]);
        }

        return response()->json([
            'quantity' => $item->quantity,
            'product' => $item->product,
        ]);
    }

    public function destroy($productId) {
        $item = Cart::where('product_id', $productId)->delete();

        return response(null, 200);
    }

    public function destroyAll() {
        Cart::truncate();
    }
}
