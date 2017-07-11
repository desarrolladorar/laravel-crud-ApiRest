<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Alumno;
use App\Nota;
use Input;
use Redirect;

class notaController extends Controller
{
    public function index($id){

    	$nota = Nota::get();

    	$nota = Alumno::find($id)->notas;

    	return view('nota/index', ['nota' => $nota]);
    	
    }

    public function show($id)
    {
        $nota = new Nota;
        $notas = $nota->find($id);
        $alumnos = Alumno::get();
        return view('nota/editar', ['nota' => $notas], ['alumnos' => $alumnos] );
    }


public function listar(Request $request)
    {
      $alumnos= Alumno::get();
      return view('nota/nuevo', ['alumnos' => $alumnos]);   
    }



  public function store(Request $request)
    {
      //$alumnos= Alumno::get();
      //return view('nota/nuevo', ['alumnos' => $alumnos]);
     

      $data=[
            'curso' => Input::get('curso'),
            'nota' => Input::get('nota'),
            'alumno_id' => Input::get('alumno_id')  
        ];

      Nota::create($data);
       
       return redirect('/');
       
        
        
    }






   public function update(Request $request, $id)
    {
        
       Nota::where('id',$id)->update(['curso' => Input::get('curso'),'nota' => Input::get('nota')]);
      //return Redirect::route('nota_editar', ['nota_editar' => $id]);
     // return Redirect::route('alumno_nota', ['nota_editar' => $id]);
        return redirect('/');
    }

    public function destroy($id)
    {
        Nota::destroy($id);
        
        return redirect('/');
    }

    public function prueba()
    {
       
    
    

       
    }


     
   
}
