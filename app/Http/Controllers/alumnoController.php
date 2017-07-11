<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Alumno;
use App\Nota;
use Input;



class alumnoController extends Controller
{
    public function index(){
    	$alumnos = Alumno::get();
    	return view('alumno/index', ['alumnos' => $alumnos]);
    }

    public function show($id)
    {
        $alumno = new Alumno;
        $alumnos = $alumno->find($id);

        return view('alumno/editar', ['alumno' => $alumnos] );
    }

   

    public function update(Request $request, $id)
    {
        
       Alumno::where('id',$id)->update(['nombre' => Input::get('nombre'),'email' => Input::get('email')]);
        return redirect('/');
    }

    public function destroy($id)
    {
        Alumno::destroy($id);
        
        return redirect('/');
    }

     public function store(Request $request)
    {
        $data=[
            'nombre' => Input::get('nombre'),
            'email' => Input::get('email'),
        ];

        Alumno::create($data);

        return redirect('/');
    }
}
