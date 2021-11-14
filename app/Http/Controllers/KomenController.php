<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komen;
use Illuminate\Support\Facades\Auth;

class KomenController extends Controller
{
    public function store(Request $request)
    {
            $request->validate([
                'isi' => 'required',
            ]);

            $komen = new Komen;

            $komen->isi = $request->isi;
            $komen->user_id = Auth::id();
            $komen->postingan_id = $request->postingan_id;

            $komen->save();

            return redirect()->back();
    }

}
