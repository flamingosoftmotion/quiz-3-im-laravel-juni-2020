<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArtikelModel;
use Illuminate\Support\Str;


class ArtikelController extends Controller
{
   public function index()
    {
    	$data_artikel = ArtikelModel::all();
    	return view('artikel.index', compact('data_artikel'));
    }

    public function create()
    {
    	return view('artikel.create');
    }

    public function store(Request $request)
    {
         $this->validate($request,[
            'judul' => 'required',
            'isi' => 'required',
            'tags' => 'required'
        ]);

        $data = ArtikelModel::create([
            'judul' => $request->get('judul'),
            'isi' => $request->get('isi'),
            'slug' => Str::slug($request->judul),
            'tags' => $request->get('tags')
        ]); 

		return redirect('/artikel')->with('success','Artikel berhasil terupload')->with('data', json_decode($data, true));;	
    }

    public function delete($id)
    {
        ArtikelModel::find($id)->delete();
        return redirect('/artikel')->with('success','artikel berhasil dihapus');
        }
    
    public function edit($id)
    {
        $data = ArtikelModel::findOrFail($id);
        return view('artikel.edit', compact(['data']));
    }

    public function update(Request $request, $id)
    {
        ArtikelModel::find($id)->update([
            'judul' => $request->get('judul'),
            'isi' => $request->get('isi'),
            'slug' => Str::slug($request->judul),
            'tags' => $request->get('tags')
        ]); 

        return redirect('/artikel')->with('success','artikel berhasil terupdate'); 
    }

    public function show($id)
    {
        $data = ArtikelModel::findOrFail($id);
        return view('artikel.show', compact(['data']));
    }
 
}
