<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Product, Category};

class ProductsController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','store']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $params = Product::all();
        return view('frontend.products.index', compact('params'));
    }

    public function create()
    {
        $params = Category::where('status', '=', 1)->get();
        return view('frontend.products.create', compact('params'));
    }

    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name_kh' => 'required',
            'name_en' => 'required',
            'price' => 'required',
            'image' => 'required'
        ],
        [
            'name_kh.required' => '* Please enter product title khmer',
            'name_en.required' => '* Please enter product title english',
            'price.required' => '* Please enter product price',
            'image.required' => '* Please enter product image',
        ]);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $params = $request->all();
            $params['image'] = $path;
            $params['status'] = $request->status == 'on' ? '1' : '0';
            $product = Product::create($params);
            if ($product->save()) {
                return redirect()->route('product.index')->with('message', 'Product created');
            } else {
                return redirect()->route('product.index')->with('error', 'Something wrong');
            }
        }
        return redirect()->route('product.index')->with('error', 'Something wrong');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $categories = Category::where('status', '=', 1)->get();
        $params = Product::where('id', '=', $id)->first();
        return view('frontend.products.edit', compact('params', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,
        [
            'name_kh' => 'required',
            'name_en' => 'required',
            'price' => 'required',
            'image' => 'required'
        ],
        [
            'name_kh.required' => '* Please enter product title khmer',
            'name_en.required' => '* Please enter product title english',
            'price.required' => '* Please enter product price',
            'image.required' => '* Please enter product image',
        ]);
        $product = Product::find($id);
        $params = $request->all();
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $product->image = $path;
            $params['image'] = $path;
            $params['status'] = $request->status == 'on' ? '1' : '0';
            $product->update($params);
        }
        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        Storage::delete('public'.$product->image);
        $product->delete();
        return redirect('product');
    }
}
