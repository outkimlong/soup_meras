<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $params = Category::paginate(5);
        return view('frontend.categories.index', compact('params'));
    }

    public function create()
    {
        return view('frontend.categories.create');
    }

    public function store(Request $request)
    {
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
        $params = Category::where('id', '=', $id)->first();
        return view('frontend.categories.edit', compact('params'));
    }

    public function update(Request $request, $id)
    {
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
