<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;


class BarangController extends Controller
{
    //
    public function BarangView(){
        $data['allDataBarang']=Barang::all();
        return view('backend.barang.view_barang', $data);
    }

    public function BarangAdd(){
        //$allDataUser=User::all();
        //$data['allDataUser']=User::all();
        return view('backend.barang.add_barang');
    }

    public function BarangStore(Request $request){

        // $validatedData=$request->validate([
        //     'nama' =>'required',
        //     'merk' =>'required',
        // ]);

        //dd($request);
        $data=new Barang();
        $data->name=$request->nama;
        $data->merk=$request->merk;
        $data->harga=$request->harga;
        $data->save();

        return redirect()->route('barang.view')->with('info','Tambah barang berhasil!');
    }

    public function BarangEdit($id) {
        $editData= Barang::find($id);
        return view('backend.barang.edit_barang', compact('editData'));
    }

    public function BarangUpdate(Request $request, $id) {

        // $validatedData=$request->validate([
        //     'nama' =>'required',
        //     'merk' =>'required',
        // ]);

        $data=Barang::find($id);
        $data->name=$request->nama;
        $data->merk=$request->merk;
        $data->harga=$request->harga;
        $data->save();

        return redirect()->route('barang.view')->with('info','Update barang berhasil!');
    }

    public function BarangDelete($id) {
        //dd('berhasil masuk controller user edit');
        $deleteData= Barang::find($id);
        $deleteData->delete();

        return redirect()->route('barang.view')->with('info','Delete user berhasil!');
    }
}
