<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;

class UpdateController extends Controller
{
    public function index(Data $data)
    {
        return view('update', [
            'title' => 'Ubah Data',
            'content' => $data
        ]);
    }

    public function update(Request $request, Data $data)
    {
        $validated = $request->validate([
            'nama' => ['required', 'max:255'],
            'nim' => ['required', 'max:10'],
            'kelas' => ['required']
        ]);

        Data::where('id', $data->id)->update($validated);

        return redirect('/read')->with('update', 'Ubah Data Sukses');
    }
}
