<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;

class UsersController extends Controller
{
    public function index(){
        $user=User::all();
        return view('paginacion',['user'=>$user]);
        
    }
    
    public function listProfesores(Request $request){
        
        $users=User::Name($request->get('nombre'))
            ->where('tipo','profesor')
             ->apellido($request->get('apellido'))
             ->tipo($request->get('tipo'))
             ->email($request->get('email'))
             ->orderBy('id', 'ASC')
             ->paginate(5);
       return view('usuario/profesores')->with('users',$users);
    }

        public function newUser(Request $request){
        $user=User::create($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        flash('Se ha creado el usuario ' . $user->nombre . ' exitosamente.', 'success');
        return redirect('/admin/usuarios');
    }

    public function getUpdate(Request $request){
    	if ($request->ajax()) 
    	{
    		$user=User::find($request->id);
    		return Response($user);	
    		}
    	} 

    public function newUpdate(Request $request){
    	if ($request->ajax()) {
    		$user=User::find($request->id);
    		$user->nombre=$request->nombre;
    		$user->apellido=$request->apellido;
    		$user->dni=$request->dni;
    		$user->email=$request->email;
    		$user->tipo=$request->tipo;
    		$user->save();

    		return Response($user);	
    		}
    	} 
    public function deleteUser(Request $request){
    	if ($request->ajax()) 
    	{
    		User::destroy($request->id);
    		return Response()->json(['sms'=>'Eliminado correctamente']);	
    		}
    } 
        
    public function profile(){
        return view('usuario/profile',array('user'=>Auth::user()));
        
    }
    
    public function update_avatar(Request $request){
        if($request->hasFile('avatar')){
            $avatar=$request->file('avatar');
            $filename =time().'.'.$avatar->getClientOriginalExtension();
            
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));
            $user =Auth::user();
            $user ->avatar =$filename;
            $user ->save();
        }
        
        return view('perfil', array('user'=> Auth::user()));
    }
} 