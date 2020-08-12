<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request) {
    	//Recibir json 
    	$json = $request->input('json',null);
    	$paramsObject = json_decode($json);//objeto
    	$params = json_decode($json,true);//array se coloca el parametro true como segundo

    	//limpiar los datos que no tengan espacios ni adelante ni atras
    	//$params = array_map('trim', $params);

    	//Validar los datos con funcion de laravel 
    	$validate = \Validator::make($params, [
    		'name' 		=> 'required|alpha',
    		'surname' 	=> 'required|alpha',
    		'email'		=> 'required|email|unique:users',
    		'password'	=> 'required'
    	]);
    	if (!empty($params) && !empty($paramsObject)) {
    		if ($validate->fails()) {
				$data = array(
		    		'status' 	=> 'error', 
		    		'code'		=> 404,
		    		'message'	=> 'Error al crear el usuario',
		    		'errors'	=> $validate->errors()
		    	);
			}else {
				$data = array(
		    		'status' 	=> 'success', 
		    		'code'		=> 200,
		    		'message'	=> 'El usuario se ha creado correctamente'
		    	);
			}
    	}else {
    		$data = array(
	    		'status' 	=> 'error', 
	    		'code'		=> 400,
	    		'message'	=> 'Datos incorrectos'
	    	);
    	}
    	return response()->json($data, $data['code']);
    }
}
