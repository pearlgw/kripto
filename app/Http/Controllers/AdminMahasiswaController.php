<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.mahasiswa.index', [
            'user' => auth()->user()->name,
            'users' => User::where('role', '!=', 'admin')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mahasiswa.create', [
            'user' => auth()->user()->name
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nim' => 'required|max:14|min:14',
            'name' => 'required|max:255',
            'password' => 'required|min:5|max:255',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|unique:users|min:11|max:15',
            'alamat' => 'required',
            'image' => 'required|file|max:1024'
        ]);

        if($request->file('image'))
        {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        return redirect('/mahasiswa')->with('success', 'Berhasil Menambahkan Mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        return view('admin.mahasiswa.edit', [
            'student' => User::where('slug', $slug)->first(),
            'user' => auth()->user()->name
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $rules = [
            'nim' => 'required|max:14|min:14',
            'name' => 'required|max:255',
            'password' => 'required|min:5|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|min:11|max:15',
            'alamat' => 'required',
            'image' => 'required|file|max:1024'
        ];

        $validatedData = $request->validate($rules);
        if($request->file('image'))
        {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        User::where('slug', $slug)->update($validatedData);
        return redirect('/mahasiswa')->with('success', 'Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $mahasiswa)
    {
        User::destroy($mahasiswa->id);

        if ($mahasiswa->image) {
            Storage::delete($mahasiswa->image);
        }
        
        return redirect('/mahasiswa')->with('success', 'Data Telah Dihapus');
    }
}
