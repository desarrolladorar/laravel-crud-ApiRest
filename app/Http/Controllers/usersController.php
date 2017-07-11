<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Alumno;
use App\Nota;
use Input;
use Redirect;
use Log;

class usersController extends Controller
{
    public function index() {
    	$alumnos = Alumno::all() ->toArray();
    	return response() ->json($alumnos);
    }

    public function store(Request $request)
    {
    	try{
    		$alumnos = new Alumno([
    			'nombre'=>$request->input('nombre'),
    			'email'=>$request->input('email'),
    			]);

    		Log::info('alumnos stored');
    		$alumnos->save();
    		return response()->json(['status'=>true, 'Muchas gracias'], 200);

    	} catch (\Exception $e){
    		Log::critical("No se ha podido añadir: {$e->getCode()} , {$e->getLine()} , {$e->getMessage()}");
    		return response('Someting bad', 500 );
    	}
    }


    public function show($id)
    {
    	try{
    		$alumnos = Alumno::find($id);

    		if(!$alumnos){
    			return response()->json(['No existe...'], 404);
    		}
    		
    		return response()->json($alumnos, 200);

    	} catch (\Exception $e){
    		Log::critical("No se ha podido añadir: {$e->getCode()} , {$e->getLine()} , {$e->getMessage()}");
    		return response('Someting bad', 500 );
    	}
    }

   
     public function update(Request $request, $id)
    {
        try{
    		$alumnos = Alumno::find($id);

    		if(!$alumnos){
    			return response()->json(['No existe...'], 404);
    		}
    		
    		$alumnos->update($request->all());

    		return response(array(
                'error' => false,
                'message' =>'Alumno Modificado...',
               ),200);

    	} catch (\Exception $e){
    		Log::critical("No se ha podido añadir: {$e->getCode()} , {$e->getLine()} , {$e->getMessage()}");
    		return response('Someting bad', 500 );
    	}
    }


    public function destroy($id)
    {
    	try{
    		$alumnos = Alumno::find($id);

    		if(!$alumnos){
    			return response()->json(['No existe...'], 404);
    		}
    		
    		$alumnos->delete();

    		return response()->json('Usuario eliminado..', 200);

    	} catch (\Exception $e){
    		Log::critical("No se ha podido añadir: {$e->getCode()} , {$e->getLine()} , {$e->getMessage()}");
    		return response('Someting bad', 500 );
    	}
    }
}
