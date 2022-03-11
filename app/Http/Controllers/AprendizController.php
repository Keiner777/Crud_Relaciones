<?php

namespace App\Http\Controllers;

use App\Models\Aprendiz;
use Illuminate\Http\Request;

// llamamos el modelo para mostar el nombre y el id en create 
use App\Models\Ficha;

/**
 * Class AprendizController
 * @package App\Http\Controllers
 */
class AprendizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {
        $aprendizs = Aprendiz::paginate();

        // obtenemos todos los datos de la tablas nuevamente, pero con la funcion sumar para la edad 
        $suma = Aprendiz::all()->sum('edad');

        // y luego la agregamos al compact para mostrarla en index 
        return view('aprendiz.index', compact('aprendizs','suma'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aprendiz = new Aprendiz();
        // obtenemos la el nombre y el id de la tabala ficha
        $fichas=Ficha::pluck('nombre','id');

        // y luego retornamos 
        return view('aprendiz.create', compact('aprendiz','fichas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Aprendiz::$rules);

        $aprendiz = Aprendiz::create($request->all());

        return redirect()->route('aprendiz.index')
            ->with('success', 'Aprendiz created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aprendiz = Aprendiz::find($id);

        return view('aprendiz.show', compact('aprendiz'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aprendiz = Aprendiz::find($id);

        // volveos a obtener el nombre y el id del modelo ficha para asi editar 
        $fichas=Ficha::pluck('nombre','id');
        return view('aprendiz.edit', compact('aprendiz','fichas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Aprendiz $aprendiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aprendiz $aprendiz)
    {
        request()->validate(Aprendiz::$rules);

        $aprendiz->update($request->all());

        return redirect()->route('aprendiz.index')
            ->with('success', 'Aprendiz updated successfully');

            // request()->validate(Ficha::$rules);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $aprendiz = Aprendiz::find($id)->delete();

        return redirect()->route('aprendiz.index')
            ->with('success', 'Aprendiz deleted successfully');
    }
}
