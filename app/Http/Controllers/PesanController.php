<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class PesanController extends Controller
{
    public function simpan(Request $request)
    {
        Pesan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
            'tanggal' => now()
        ]);

        return back()->with('success', 'Pesan berhasil dikirim');
    }
}