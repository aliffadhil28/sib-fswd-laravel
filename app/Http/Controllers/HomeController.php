<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $products = DB::table('products')
            ->join('categories','products.categories_id','=','categories.id')
            ->select('products.*','categories.name as categories_name')->get();
            return view('landing',compact('products'));
        }
        return redirect()->route('login')->with(['message'=>'Please Login to Access Dashboard']);
    }

    public function showDashboard()
    {
        $products = Products::all();
        return view('dashboard.index',compact('products'));
    }

    public function showAdmin()
    {
        $admin = User::all()->where('role', '=','admin');

        return view('dashboard.admin',compact('admin'));
    }

    public function showStaff()
    {
        $staff = User::all()->where('role', '=','staff');

        return view('dashboard.staff',compact('staff'));
    }
    public function showUser()
    {
        $users = User::all()->where('role', '=','user');

        return view('dashboard.users',compact('users'));
    }
    public function showUsers()
    {
        $users = User::all();

        return view('dashboard.users',compact('users'));
    }

    public function showProducts()
    {
        $product = DB::table('products')
        ->join('categories','products.categories_id','=','categories.id')
        ->select('products.*','categories.name as categories_name')->get();
        return view('dashboard.produk',compact('product'));
    }

    public function detailProducts(string $id)
    {
        $data = Categories::find($id);
        return view('detail',compact('data'));
    }
}
