<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $products= Product::orderBy('id','DESC')->paginate(5);
        return view('admin.index',compact('products')) ->with('i', ($request->input('page', 1) - 1) * 5);
    }
}
