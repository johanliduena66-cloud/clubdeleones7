<?php

namespace App\Http\Controllers;

use App\User;
//use App\Role;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\Http\Requests\UserEditFormRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\CollectionDataTable;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

    public function index(Request $request)
    {
        if($request){
            $query=trim($request->get('search'));
            $users = User::where('name', 'LIKE', '%' . $query . '%')
            ->orderBy('id','asc')
            ->paginate(5);
            //->simplepaginate(5); //nos muestra dos botones antes y siguiente
            return view('usuarios.index', compact('users','query'));        
        }
//        $users = User::all();
  //      return view('usuarios.index', compact('users'));        
    }


    public function create()
    {
        return view('usuarios.create');
    }


    public function store(UserFormRequest $request)
    {
        $usuario=new User();
        $usuario->name=request('name');
        $usuario->email=request('email');
        $usuario->password=bcrypt(request('password'));        
        $usuario->save();
        return Redirect('/usuarios');
    }


    public function show($id)
    {
        $usuario = User::find($id);
        return view('usuarios.show', compact('usuario'));      
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('usuarios.edit', compact('user'));      

    }


    public function update(Request $request, $id)
    {
        $this->validate(request(), ['email' => ['required','email','max:255','unique:users,email,' . $id]]);

        $usuario=User::findorFail($id);
        
        $usuario->name=request('name');
        $usuario->email=request('email');

        $pass=$request->get('password');

        if ($pass!= null){
            $pass=Hash::make($request->password);
            $usuario->password=$pass;
        }else{
            unset($usuario->password);
        }

        $usuario->update();
        return Redirect('/usuarios');
    }


    public function destroy($id)
    {
        User::find($id)->delete();
        return Redirect('/usuarios');
    }
}
