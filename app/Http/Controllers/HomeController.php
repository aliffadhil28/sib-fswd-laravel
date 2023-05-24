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

    public function showStaff()
    {
        $staff = User::all()->where('role', '=','staff');

        return view('dashboard.staff',compact('staff'));
    }
    public function showUsers()
    {
        $users = User::all();

        return view('dashboard.users',compact('users'));
    }

    public function showKategori1()
    {
        $product = Products::all()->where('category_id', '=','1');

        return view('dashboard.kategori.kategori_1',compact('product'));
    }
    public function showKategori2()
    {
        $product = Products::all()->where('category_id', '=','2');

        return view('dashboard.kategori.kategori_2',compact('product'));
    }
    public function showKategori3()
    {
        $product = Products::all()->where('category_id', '=','3');

        return view('dashboard.kategori.kategori_3',compact('product'));
    }
    public function showKategori4()
    {
        $product = Products::all()->where('category_id', '=','4');

        return view('dashboard.kategori.kategori_4',compact('product'));
    }
    public function showKategori5()
    {
        $product = Products::all()->where('category_id', '=','5');

        return view('dashboard.kategori.kategori_5',compact('product'));
    }
    public function showKategori6()
    {
        $product = Products::all()->where('category_id', '=','6');

        return view('dashboard.kategori.kategori_6',compact('product'));
    }
    public function showKategori7()
    {
        $product = Products::all()->where('category_id', '=','7');

        return view('dashboard.kategori.kategori_7',compact('product'));
    }
    public function showKategori8()
    {
        $product = Products::all()->where('category_id', '=','8');

        return view('dashboard.kategori.kategori_8',compact('product'));
    }
    public function showKategori9()
    {
        $product = Products::all()->where('category_id', '=','9');

        return view('dashboard.kategori.kategori_9',compact('product'));
    }
    public function showKategori10()
    {
        $product = Products::all()->where('category_id', '=','10');

        return view('dashboard.kategori.kategori_10',compact('product'));
    }
    public function showKategori11()
    {
        $product = Products::all()->where('category_id', '=','11');

        return view('dashboard.kategori.kategori_11',compact('product'));
    }

    public function showKategori12()
    {
        $product = Products::all()->where('category_id', '=','12');

        return view('dashboard.kategori.kategori_12',compact('product'));
    }

    public function showProducts()
    {
        $product = Products::all();
        return view('dashboard.produk',compact('product'));
    }
}
