<?php

namespace App\Http\Controllers;

use App\Pizzas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PizzasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['pizzas'] = Pizzas::paginate(10);

        return view('pizzas.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pizzas.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validaciones
            $campos = [
                'Nombre'=> 'required|string',
                'Precio'=> 'required|string',
                'Imagen'=> 'required|max:1000|mimes:jpg,png,jpeg',
                'Descripcion'=> 'required'
            ];
            $msj = ["required"=> 'El campo :attribute es requerido'];
            $this->validate($request,$campos,$msj); 


        //datos
        $datosPizza = request()->except('_token');

        if($request ->hasFile('Imagen')){
            $datosPizza['Imagen'] = $request->file('Imagen')->store('uploads','public');
        }


        Pizzas::insert($datosPizza);

        //return response()->json($datosPizza);
        return redirect('pizzas')->with('mensaje','¡Pizza agregada con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pizzas  $pizzas
     * @return \Illuminate\Http\Response
     */
    public function show(Pizzas $pizzas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pizzas  $pizzas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pizza = Pizzas::findOrFail($id);

        return view('pizzas.edit', compact('pizza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pizzas  $pizzas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosPizza = request()->except(['_token','_method']);

        if($request ->hasFile('Imagen')){
            $pizza = Pizzas::findOrFail($id);

            Storage::delete('public/'.$pizza->imagen);

            $datosPizza['Imagen'] = $request->file('Imagen')->store('uploads','public');
        }


        Pizzas::where('id','=',$id)->update($datosPizza);

        // $pizza = Pizzas::findOrFail($id);
        // return view('pizzas.edit', compact('pizza'));
        return redirect('pizzas')->with('mensaje','¡Pizza modificada con éxito!');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pizzas  $pizzas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pizza = Pizzas::findOrFail($id);

        if(Storage::delete('public/'.$pizza->imagen)){
            Pizzas::destroy($id);    
        }
        
        return redirect('pizzas')->with('mensaje','¡Pizza Eliminada!');;
    }
}
