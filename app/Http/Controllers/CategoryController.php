<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CategoryController extends Controller
{
    public function index(){
        $data = Categories::all();
        return view('dashboard.categories.index')->with('data', $data);
    }

    public function create()
    {
        return view('dashboard.categories.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        Categories::create([
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('categories.index')->with(['success' => 'Data Berhasil Ditambahkan!']);
    }

    public function show(string $id): View
    {
        $data = DB::table('products')
            ->join('categories','products.categories_id','=','categories.id')
            ->where('categories_id','=',$id)
            ->select('products.*','categories.name as categories_name')->get();

        return view('dashboard.categories.show')->with('data', $data);
    }
    public function edit(string $id): View
    {
        $data = Categories::findOrFail($id);

        return view('dashboard.categories.edit',compact('data'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $products = Categories::findOrFail($id);

        $products->update([
            'name' => $request->name,
            'updated_at' => now(),
        ]);
        return redirect()->route('categories.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        Categories::findOrFail($id)->delete();
        //redirect to index
        return redirect()->route('categories.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
