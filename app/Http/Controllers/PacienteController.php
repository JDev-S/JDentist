<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PacienteController extends Controller
{
     /*CONSOLA PACIENTE*/
        public function listado_paciente()
	{
		$pacientes=DB::select('select * from paciente inner join clinica on clinica.id_clinica=paciente.id_clinica');
		return view('/sistema/Paciente/index',compact('pacientes'));
    }
    
        public function listado_expediente()
	{
		$pacientes=DB::select('select * from paciente inner join clinica on clinica.id_clinica=paciente.id_clinica');
		return view('/sistema/Paciente/expedientes',compact('pacientes'));
    }
    
    public function eliminar(Request $input)
    {
		$id=$input['id_paciente'];
        $query=DB::delete("delete from paciente where id_paciente=? ",[$id]);
		return redirect()->action('PacienteController@listado_paciente')->withInput();
	}
    
    public function agregar(Request $input)
    {
        $nombre=$input['nombre'];
        $apellidos=$input['apellidos'];
        $direccion=$input['direccion'];
        $telefono=$input['telefono'];
         $foto=$input['foto'];
        $correo=$input['correo'];
        $clinica=$input['clinica'];
        $antecedentes=$input['antecedentes'];
        $id="aa";
        
         $query=DB::insert('insert into paciente (id_paciente, nombre, apellidos, direccion, telefono, foto, email, marketing, id_clinica, antecedentes, factura) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )', [$id, $nombre, $apellidos, $direccion, $telefono, $foto, $correo, 0, $clinica, $antecedentes, 0]); 
        return redirect()->action('PacienteController@listado_paciente')->withInput();
    }
}
