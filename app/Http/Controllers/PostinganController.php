<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Postingan;

class PostinganController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'isi' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg',
            'user_id' => 'required'
        ]);

        $namaGambar = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('post'),$namaGambar);

        $postingan = new Postingan;

        $postingan->isi = $request->isi;
        $postingan->user_id = Auth::id();
        $postingan->gambar = $namaGambar;

        $postingan->save();

        return redirect()->back();
    }
}
