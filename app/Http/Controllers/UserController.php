<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $data = User::all();

        return view('user.user')->with('data', $data);
    }

    public function getUser(){
        $user = User::all();
        return view('user.user')->with('user', $user);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'avatar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'name' => 'required',
            'address' => 'required',
            'role' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'email' => 'required',
        ]);

        $avatar = $request->file('avatar');
        $avatar->storeAs('public/avatar',$avatar->hashName());

        User::create([
            'avatar' => $avatar->hashName(),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => $request->password,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $data = User::find($id);

        return view('user.show')->with('data', $data);
    }
    public function edit(string $id): View
    {
        $data = User::findOrFail($id);

        return view('user.edit',compact('data'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'avatar' => 'image|mimes:jpg,jpeg,png|max:2048',
            // 'name' => 'required',
            // 'address' => 'required',
            // 'role' => 'required',
            // 'phone' => 'required',
            // 'password' => 'required',
            // 'email' => 'required',
        ]);

        $user = User::findOrFail($id);

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatar->storeAs('public/avatar',$avatar->hashName());

            Storage::delete('public/avatar/'.$user->avatar);

            $user->update([
                'avatar' => $avatar->hashName(),
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'password' => $request->password,
                // 'created_at' => now(),
                'updated_at' => now(),
            ]);
        }else{
            $user->update([
                // 'avatar' => $avatar->hashName(),
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'password' => $request->password,
                // 'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $user = User::findOrFail($id);

        //delete image
        Storage::delete('public/storage/avatar/'. $user->image);

        //delete post
        $user->delete();

        //redirect to index
        return redirect()->route('user.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
