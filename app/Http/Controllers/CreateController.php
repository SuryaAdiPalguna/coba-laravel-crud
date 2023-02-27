<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;

class CreateController extends Controller
{
    public function index()
    {
        return view('create', [
            'title' => 'Tambah Data',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'max:255'],
            'nim' => ['required', 'max:10'],
            'kelas' => ['required']
        ]);

        Data::create($validated);

        return redirect('/read')->with('create', 'Tambah Data Sukses');
    }
}
