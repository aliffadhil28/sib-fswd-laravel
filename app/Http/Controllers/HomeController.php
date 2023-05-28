<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Products::paginate(3);
        return view('landing',compact('products'));
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

    public function showPenjual()
    {
        $penjual = User::all()->where('role', '=','penjual');

        return view('dashboard.penjual',compact('penjual'));
    }
    public function showPembeli()
    {
        $pembeli = User::all()->where('role', '=','pembeli');

        return view('dashboard.pembeli',compact('pembeli'));
    }
    public function showUsers()
    {
        $users = User::all();

        return view('dashboard.users',compact('users'));
    }

    public function showShoes()
    {
        $sepatu = Products::all()->where('categories_id', '=','1');

        return view('dashboard.kategori.sepatu',compact('sepatu'));
    }
    public function showItems()
    {
        $items = Products::all()->where('categories_id', '=','3');

        return view('dashboard.kategori.items',compact('items'));
    }
    public function showAccessories()
    {
        $aksesories = Products::all()->where('categories_id', '=','2');

        return view('dashboard.kategori.aksesoris',compact('aksesories'));
    }


    public function showProducts()
    {
        $product = Products::all();
        return view('dashboard.produk',compact('product'));
    }
}
