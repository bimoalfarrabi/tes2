<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function UserView(){
        //$allDataUser=User::all();
        $data['allDataUser']=User::all();
        return view('backend.user.view_user', $data);
    }

    public function UserAdd(){
        //$allDataUser=User::all();
        //$data['allDataUser']=User::all();
        return view('backend.user.add_user');
    }

    public function UserStore(Request $request){

        $validatedData=$request->validate([
            'email' =>'required|unique:users',
            'nama' =>'required',
        ]);

        //dd($request);
        $data=new User();
        $data->userType=$request->selectUser;
        $data->name=$request->nama;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->save();

        return redirect()->route('user.view')->with('info','Tambah user berhasil!');
    }


    public function UserEdit($id) {
        //dd('berhasil masuk controller user edit');
        $editData= User::find($id);
        return view('backend.user.edit_user', compact('editData'));
    }

    public function UserUpdate(Request $request, $id){

        $validatedData=$request->validate([
            'email' =>'required|unique:users',
            'nama' =>'required',
        ]);

        //dd($request);
        $data=user::find($id);
        $data->userType=$request->selectUser;
        $data->name=$request->nama;
        $data->email=$request->email;
        // if($request->password!=""){
        //     $data->password=bcrypt($request->password);
        // }
        $data->save();

        return redirect()->route('user.view')->with('info','Update user berhasil!');
    }
}
