<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profile;
// use DB;
// use File;

class ProfileController extends Controller
{

	public function index (){
		$profile = Profile::where('user_id', Auth::id())->first();

        return view('profil.profile', compact('profile'));
	} 
	public function edit (){
		$profile = Profile::where('user_id', Auth::id())->first();

        return view('profil.edit', compact('profile'));

	} 
		public function update(Request $request, $id){
		$request->validate([
            'umur' => 'required',
            'alamat' => 'required',
            'bio' => 'required',
		]);

        $profile = Profile::find($id);

        $profile->umur = $request['umur'];
       	$profile->alamat = $request['alamat'];
       	$profile->bio = $request['bio'];

       	$profile->save();

       	return redirect('/profile');
       }


}
