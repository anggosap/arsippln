<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Arsip;
use App\Kategori;

class AdminCreateController extends Controller {

	public function index(){
		$kategoris = Kategori::all();
		return view('admincreate', compact('kategoris'));
	}

	public function createbuku(Request $request){
		$this->validate($request, [
		    'kode' => 'required',
			'judul' => 'required',
			'tahun' => 'required',
			'kategori' => 'required',
			'rakbuku' => 'required',
			'deskripsi' => 'required',
		]);
		$data = new Arsip;
		$data->kode = $request->kode;
		$data->judul = $request->judul; 
	    $data->tahun = $request->tahun;
	    $data->kategori = $request->kategori;
	    $data->rakbuku = $request->rakbuku;
	    $data->deskripsi = $request->deskripsi;
	    $data->save();

	    return redirect()->back();
	}

		public function createkategori(Request $request){
		$this->validate($request, [
		    'nama_kategori' => 'required',
		]);
		$data = new Kategori;
		$data->nama_kategori = $request->nama_kategori;
		$data->save();

		return redirect()->back();
	}
}