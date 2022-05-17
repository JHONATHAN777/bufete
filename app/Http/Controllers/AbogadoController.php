<?php

namespace App\Http\Controllers;

use App\Abogado;
use Illuminate\Http\Request;

/**
 * Class AbogadoController
 * @package App\Http\Controllers
 */
class AbogadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct(){

    
    $this->middleware('can:abogados.create')->only('create');
    $this->middleware('can:abogados.edit')->only('edit');
    
    $this->middleware('can:abogados.destroy')->only('destroy');
    



    } 
    public function index()
    {
        $abogados = Abogado::paginate();

        return view('abogado.index', compact('abogados'))
            ->with('i', (request()->input('page', 1) - 1) * $abogados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $abogado = new Abogado();
        return view('abogado.create', compact('abogado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Abogado::$rules);

        $abogado = Abogado::create($request->all());

        return redirect()->route('abogados.index')
            ->with('success', 'Abogado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $abogado = Abogado::find($id);

        return view('abogado.show', compact('abogado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $abogado = Abogado::find($id);

        return view('abogado.edit', compact('abogado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Abogado $abogado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abogado $abogado)
    {
        request()->validate(Abogado::$rules);

        $abogado->update($request->all());

        return redirect()->route('abogados.index')
            ->with('success', 'Abogado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $abogado = Abogado::find($id)->delete();

        return redirect()->route('abogados.index')
            ->with('success', 'Abogado deleted successfully');
    }
}
