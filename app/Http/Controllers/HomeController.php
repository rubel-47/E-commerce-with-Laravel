<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.home');
        }
        else
        {
            return view('home.userpage');
        }
    }

    public function index()
    {
       $product=Product::paginate(3);
        return view('home.userpage',compact('product'));
    }
    public function product_details($id)
    {
        $product=product::find($id);
        return view('home.product_details',compact('product'));
    }
}
