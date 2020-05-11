<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function perfil(){
      $id=Auth::user()->id;
      return view('Perfil.index',compact('id'));
    }
    public function UpdatePerfil(Request $request,$id){
      $user=User::findOrFail($id);
      $rules= $request->validate([
        'name' => 'required|String',
        'email' => 'required|email|distinct',
        'foto' => 'Image|dimensions:min_width=100,min_height=200',
      ]);
      if($foto = $request->file('foto')){
        $nombre = $foto->getClientOriginalName();
        $foto->move('img/avatars', $nombre);
        $user->avatar=$nombre;
      }
      $user->update($request->all());
      return redirect()->route('home')->with('update','Perfil actualizado con exito');
    }
}
