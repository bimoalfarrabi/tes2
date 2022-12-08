<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    //
    public function KaryawanView(){
        //$allDataUser=User::all();
        $data['allDataUser']=Karyawan::all();
        return view('backend.karyawan.view_karyawan', $data);
    }

    public function KaryawanAdd(){
        //$allDataUser=User::all();
        //$data['allDataUser']=User::all();
        return view('backend.karyawan.add_karyawan');
    }

    public function KaryawanStore(Request $request){

        $validatedData=$request->validate([
            'nik' =>'required|unique:karyawans',
            'nama' =>'required',
        ]);

        //dd($request);
        $data=new Karyawan();
        $data->nik=$request->nik;
        $data->namaKaryawan=$request->nama;
        $data->jabatanKaryawan=$request->jabatan;
        $data->save();

        return redirect()->route('karyawan.view')->with('info','Tambah karyawan berhasil!');
    }


    public function KaryawanEdit($id) {
        //dd('berhasil masuk controller user edit');
        $editData= Karyawan::find($id);
        return view('backend.karyawan.edit_karyawan', compact('editData'));
    }

    public function KaryawanUpdate(Request $request, $id){

        $validatedData=$request->validate([
            'nik' =>'required|unique:karyawans',
            'nama' =>'required',
        ]);

        //dd($request);
        $data=Karyawan::find($id);
        $data->nik=$request->nik;
        $data->name=$request->nama;
        // if($request->password!=""){
        //     $data->password=bcrypt($request->password);
        // }
        $data->save();

        return redirect()->route('karyawan.view')->with('info','Update karyawan berhasil!');
    }

    public function KaryawanDelete($id) {
        //dd('berhasil masuk controller user edit');
        $deleteData= Karyawan::find($id);
        $deleteData->delete();

        return redirect()->route('karyawan.view')->with('info','Delete karyawan berhasil!');
    }
}
