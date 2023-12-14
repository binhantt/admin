<?php
// Trong ProductController
use Illuminate\Http\Request;

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $product = new Product([
        'name' => $request->get('name'),
        'image' => file_get_contents($request->file('image')->getRealPath()),
    ]);

    $product->save();

    return redirect('/products')->with('success', 'Product has been added');
}
