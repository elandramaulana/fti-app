<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function addBerita(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'desc' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Simpan data ke database
        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->desc = $request->desc;

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $berita->imagelink = $imageName;
        }

        $berita->save();

        return redirect('/dashboard')->with('success', 'Berita berhasil ditambahkan!');
    }
}
