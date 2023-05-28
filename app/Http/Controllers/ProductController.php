<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProductController extends Controller
{
    public function index(){
        // $data = Products::all();
        $data = DB::table('products')
            ->join('categories','products.categories_id','=','categories.id')
            ->select('products.*','categories.name as categories_name')->get();
        return view('dashboard.produk.produk')->with('data', $data);
    }

    public function create()
    {
        $cat = Categories::all();
        return view('dashboard.produk.create',compact('cat'));
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'img' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'categories_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'condition_scale' => 'required',
            'qty' => 'required',
            'year' => 'required',
        ]);

        $avatar = $request->file('img');
        $avatar->storeAs('public/img',$avatar->hashName());

        Products::create([
            'img' => $avatar->hashName(),
            'categories_id' => $request->categories_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'qty' => $request->qty,
            'condition_scale' => $request->condition_scale,
            'year' => $request->year,
            'created_by' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Ditambahkan!']);
    }

    public function show(string $id): View
    {
        $data = Products::find($id);

        return view('dashboard.produk.detail')->with('data', $data);
    }
    public function edit(string $id): View
    {
        $data = Products::findOrFail($id);
        $cat = Categories::all();

        return view('dashboard.produk.edit',compact(['data','cat']));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        // $this->validate($request, [
        //     'img' => 'image|mimes:jpg,jpeg,png|max:2048',
        //     'name' => 'required',
        //     'description' => 'required',
        //     'price' => 'required',
        //     'phone' => 'required',
        //     'password' => 'required',
        //     'email' => 'required',
        // ]);

        $products = Products::findOrFail($id);

        if ($request->hasFile('img')) {
            $avatar = $request->file('img');
            $avatar->storeAs('public/img',$avatar->hashName());

            Storage::delete('public/img/'.$products->avatar);

            $products->update([
                'img' => $avatar->hashName(),
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'qty' => $request->qty,
                'categories_id' => $request->categories_id,
                'condition_scale' => $request->condition_scale,
                'year' => $request->year,
                'status' => $request->status,
                'updated_at' => now(),
            ]);
        }else{
            $products->update([
                // 'avatar' => $avatar->hashName(),
                // 'img' => $avatar->hashName(),
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'qty' => $request->qty,
                'categories_id' => $request->categories_id,
                'condition_scale' => $request->condition_scale,
                'year' => $request->year,
                'status' => $request->status,
                'updated_at' => now(),
            ]);
        }
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $products = Products::findOrFail($id);

        //delete image
        Storage::delete('public/storage/avatar/'. $products->image);

        //delete post
        $products->delete();

        //redirect to index
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
