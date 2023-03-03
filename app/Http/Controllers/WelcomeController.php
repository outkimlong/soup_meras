<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\{Category, Product};
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function index()
    {
        $response = Category::with('Products')->get();
        return view('welcome', compact('response'));
    }

    public function create()
    {
        //
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
        //
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
