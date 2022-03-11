<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use Illuminate\Http\Request;

/**
 * Class FichaController
 * @package App\Http\Controllers
 */
class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fichas = Ficha::paginate();

        return view('ficha.index', compact('fichas'))
            ->with('i', (request()->input('page', 1) - 1) * $fichas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ficha = new Ficha();
        return view('ficha.create', compact('ficha'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ficha::$rules);

        $ficha = Ficha::create($request->all());

        return redirect()->route('fichas.index')
            ->with('success', 'Ficha created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ficha = Ficha::find($id);

        return view('ficha.show', compact('ficha'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ficha = Ficha::find($id);

        return view('ficha.edit', compact('ficha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ficha $ficha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ficha $ficha)
    {
        request()->validate(Ficha::$rules);

        $ficha->update($request->all());

        return redirect()->route('fichas.index')
            ->with('success', 'Ficha updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ficha = Ficha::find($id)->delete();

        return redirect()->route('fichas.index')
            ->with('success', 'Ficha deleted successfully');
    }
}
