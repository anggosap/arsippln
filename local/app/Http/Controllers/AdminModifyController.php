<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Arsip;
use App\Kategori;

class AdminModifyController extends Controller {

	public function index(){
		$arsips = Arsip::all();
		$kategoris = Kategori::all();
		return view('adminmodify', compact('kategoris', 'arsips'));
	}

	public function show($kode){
		$arsip = Arsip::where('kode', $kode)->first();
		$kategoris = Kategori::all();
		return view('adminupdate', compact('kategoris', 'arsip'));
	}

	public function delete($kode){
		$arsip = Arsip::where('kode', $kode)->delete();
		return redirect()->back();
	}

	public function update(Request $request){
		$this->validate($request, [
		    'kode' => 'required',
			'judul' => 'required',
			'tahun' => 'required',
			'kategori' => 'required',
			'rakbuku' => 'required',
			'deskripsi' => 'required',
		]);
		$data = Arsip::where('kode', $request->kode)
					->update(['kode' => $request->kode, 
						'judul' => $request->judul, 
						'tahun' => $request->tahun,
						'kategori' => $request->kategori,
						'rakbuku' => $request->rakbuku,
						'deskripsi' => $request->deskripsi
						]);
	    return redirect('/modify');
	}

	public function deletekategori($id){
		$kategori = Kategori::where('id_kategori', $id)->delete();
		return redirect()->back();
	}
}