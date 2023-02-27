<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;

class DeleteController extends Controller
{
    public function index(Data $data)
    {
        Data::destroy($data->id);

        return redirect('/read')->with('delete', 'Hapus Data Sukses');
    }
}
