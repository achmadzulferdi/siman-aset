<?php

namespace App\Http\Controllers;

Use App\Models\Aset;
use Illuminate\Http\Request;

class AsetController extends Controller
{
   Public function index()
   {
    $asets = aset::all();
    return view('aset.index',compact(['asets']));

   }

   Public function create()
   {

    return view('aset.baru');
   }

   Public function store(Request $request)
   {
    $request->validate([
       'kode_brg'=>'required|min:15',
       'nama_brg'=>'required',
       'jenis_brg'=>'required',
       'merk_brg'=>'required',
       'type_brg'=>'required',
       'tahun'=>'required',
       'harga'=>'required',
       'kondisi'=>'required',
    ]);
    aset::create([
        'kode_brg'=>$request->kode_brg,
        'nama_brg'=>$request->nama_brg,
        'jenis_brg'=>$request->jenis_brg,
        'merk_brg'=>$request->merk_brg,
        'type_brg'=>$request->type_brg,
        'tahun'=>$request->tahun,
        'harga'=>$request->harga,
        'kondisi'=>$request->kondisi,
    ]);
        return redirect('/asets')->with('success','Data Aset berhasil ditambahkan.');
   }

   Public function edit($id) {
    $aset = aset::find($id);
     return view('aset.edit', compact(['aset']));
   }

    Public function update(Request $request, $id) {
    $request->validate([
        'kode_brg'=>'required|min:15',
        'nama_brg'=>'required',
        'jenis_brg'=>'required',
        'merk_brg'=>'required',
        'type_brg'=>'required',
        'tahun'=>'required',
        'harga'=>'required',
        'kondisi'=>'required',
     ]);
     $aset = aset::find($id);
     $aset ->update([
         'kode_brg'=>$request->kode_brg,
         'nama_brg'=>$request->nama_brg,
         'jenis_brg'=>$request->jenis_brg,
         'merk_brg'=>$request->merk_brg,
         'type_brg'=>$request->type_brg,
         'tahun'=>$request->tahun,
         'harga'=>$request->harga,
         'kondisi'=>$request->kondisi,
     ]);
         return redirect('/asets')->with('success','Data Aset berhasil diubah.');
    }

    Public function destroy($id){
        $aset = aset::find($id);
        $aset->delete();
        return redirect('/asets')->with('success','Data Aset berhasil dihapus.');
    }

}
