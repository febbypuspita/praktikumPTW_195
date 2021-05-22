<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class penggunaController extends BaseController
{
	    public function lantaiparkir1() {
        $ruangparkir = DB::table('ruangparkir')->get();
		return view('lantai',['ruangparkir' => $ruangparkir]);
	}

	    public function lantaiparkir2() {
        $ruangparkir = DB::table('ruangparkir')->get();
		return view('lantai2',['ruangparkir' => $ruangparkir]);
	}
	
	   public function usertampil() {
		$user = DB::table('user')->get();
		return view('tampil',['user' => $user]);
	}		

	 public function hapususer($id) {
		DB::table('user')->where('username',$id)->delete();
		return redirect('user');
	}


	public function edituser($id) {	
		$user = DB::table('user')->where('username',$id)->get();
		return view('edit', ['user' => $user]);
	}
	public function ubahuser(Request $request)
{
	// update data pegawai
	DB::table('user')->where('username',$request->id)->update([
	 'password' => $request->password,

	 'namalengkap' => $request->namalengkap,
		'level' => $request->level
	]);
		return redirect('user');
}
}
