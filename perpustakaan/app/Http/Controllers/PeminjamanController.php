<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        return view('peminjaman_buku');
    }
    public function hasil(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5|max:50',
            'jenis_kelamin' => 'required',
            'tanggal' => 'required|date',
            'tema' => 'required',            
            'isbn' => 'required|numeric'          
        ]);
        return view('hasil_peminjam', ['data' => $request]);
    }
}
