<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $params = Product::paginate(5);
        return view('frontend.products.index', compact('params'));
    }

    public function create()
    {
        return view('frontend.products.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $params = Product::where('id', '=', $id)->first();
        return view('frontend.products.edit', compact('params'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
