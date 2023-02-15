<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index','store']]);
         $this->middleware('permission:category-create', ['only' => ['create','store']]);
         $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $params = Category::all();
        return view('frontend.categories.index', compact('params'));
    }

    public function create()
    {
        return view('frontend.categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name_kh' => 'required',
            'name_en' => 'required',
        ],
        [
            'name_kh.required' => '* Please enter category title khmer',
            'name_en.required' => '* Please enter category title english',
        ]);
        $params = $request->all();
        $params['status'] = $request->status == 'on' ? '1' : '0';
        Category::create($params);
        return redirect()->route('category.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $params = Category::where('id', '=', $id)->first();
        return view('frontend.categories.edit', compact('params'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,
        [
            'name_kh' => 'required',
            'name_en' => 'required',
        ], [
            'name_kh.required' => '* Please enter category title khmer',
            'name_en.required' => '* Please enter category title english',
        ]);
        $params = Category::where('id', '=', $id)->first();
        $req = $request->all();
        $req['status'] = $request->status == 'on' ? '1' : '0';
        $params->update($req);
        return redirect('category');
    }

    public function destroy($id)
    {
        $params = Category::find($id);
        $params->delete();
        return redirect('category');
    }
}
