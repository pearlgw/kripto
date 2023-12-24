<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class AdminKandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.kandidat.index', [
            'user' => auth()->user()->name,
            'candidates' => Candidate::all(),
            'image' => auth()->user()->image,
            'userr' => auth()->user(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kandidat.create', [
            'user' => auth()->user()->name,
            'students' => User::where('role', '!=', 'admin')->get(),
            'image' => auth()->user()->image,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'status' => 'required',
            'user_id_ketua' => 'required',
            'user_id_wakil' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'program_kerja' => 'required',
            'experience' => 'required',
        ]);

        $validatedData['visi'] = strip_tags($request->visi);
        $validatedData['misi'] = strip_tags($request->misi);
        $validatedData['program_kerja'] = strip_tags($request->program_kerja);
        $validatedData['experience'] = strip_tags($request->experience);

        Candidate::create($validatedData);

        return redirect('/kandidat')->with('success', 'Berhasil Menambahkan Kandidat');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        return view('admin.kandidat.show', [
            'candidate' => Candidate::where('slug', $slug)->firstOrFail(),
            'user' => auth()->user()->name,
            'userr' => auth()->user(),
            'image' => auth()->user()->image,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        return view('admin.kandidat.edit', [
            'kandidat' => Candidate::where('slug', $slug)->first(),
            'mahasiswa' => User::where('role', '!=', 'admin')->get(),
            'user' => auth()->user()->name,
            'image' => auth()->user()->image,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'status' => 'required',
            'user_id_ketua' => ['required', Rule::exists('users', 'id')],
            'user_id_wakil' => ['required', Rule::exists('users', 'id')],
            'visi' => 'required',
            'misi' => 'required',
            'program_kerja' => 'required',
            'experience' => 'required',
        ]);

        Candidate::where('slug', $slug)->update($validatedData);
        // Redirect back with a success message
        return redirect('/kandidat')->with('success', 'Updated berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Candidate::destroy($id);
        return redirect('/kandidat')->with('success', 'Data Telah Di hapus');
    }
}
