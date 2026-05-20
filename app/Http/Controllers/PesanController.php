<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class PesanController extends Controller
{
    public function simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'subjek' => 'required',
            'pesan' => 'required'
        ]);

        Pesan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
            'tanggal' => now()
        ]);

        return back()->with('success', 'Pesan berhasil dikirim');
    }

    public function tampil()
    {
        $pesans = Pesan::all();

        return view('data_pesan', compact('pesans'));
    }

    public function hapus($id)
    {
        Pesan::find($id)->delete();

        return back()->with('success', 'Data berhasil dihapus');
    }

    public function edit($id)
    {
        $pesan = Pesan::find($id);

        return view('edit_pesan', compact('pesan'));
    }

    public function update(Request $request, $id)
    {
        $pesan = Pesan::find($id);

        $pesan->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan
        ]);

        return redirect('/data_pesan')
            ->with('success', 'Data berhasil diupdate');
    }
}