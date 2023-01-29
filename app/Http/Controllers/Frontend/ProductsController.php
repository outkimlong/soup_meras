<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Product, Category};

class ProductsController extends Controller
{
    public function index()
    {
        $params = Product::paginate(5);
        return view('frontend.products.index', compact('params'));
    }

    public function create()
    {
        $params = Category::where('status', '=', 1)->get();
        return view('frontend.products.create', compact('params'));
    }

    public function store(Request $request)
    {
        dd($request);
        $params = $request->all();
        $params['status'] = $request->status == 'on' ? '1' : '0';
        
        Category::create($params);
        return redirect('category');
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
