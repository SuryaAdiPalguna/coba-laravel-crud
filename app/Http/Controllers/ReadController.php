<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;

class ReadController extends Controller
{
    public function index()
    {
        return view('read', [
            'title' => 'Lihat Data',
            'content' => Data::all()
        ]);
    }
}
