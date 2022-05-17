<?php

namespace App\Http\Controllers;

use App\Caso;
use Illuminate\Http\Request;
use App\Categoria;
use App\Estado;
use App\Abogado;

/**
 * Class CasoController
 * @package App\Http\Controllers
 */
class CasoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){

        
        $this->middleware('can:casos.create')->only('create');
        $this->middleware('can:casos.edit')->only('edit');
        
        $this->middleware('can:casos.destroy')->only('destroy');
        
    
    
    
    } 
    public function index()
    {
        $casos = Caso::paginate();

        return view('caso.index', compact('casos'))
            ->with('i', (request()->input('page', 1) - 1) * $casos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('categoria','id');
        $estados = Estado::pluck('estado','id');
        $abogados = Abogado::pluck('abogado','id');
        $caso = new Caso();
        return view('caso.create', compact('caso','categorias','estados','abogados',));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

   

        request()->validate(Caso::$rules);

        $caso = Caso::create($request->all());

        return redirect()->route('casos.index')
            ->with('success', 'Caso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caso = Caso::find($id);

        return view('caso.show', compact('caso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caso = Caso::find($id);

        $categorias = Categoria::pluck('categoria','id');
        $estados = Estado::pluck('estado','id');
        $abogados = Abogado::pluck('abogado','id');

        return view('caso.edit', compact('caso','categorias','estados','abogados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Caso $caso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caso $caso)
    {
        request()->validate(Caso::$rules);

        $caso->update($request->all());

        return redirect()->route('casos.index')
            ->with('success', 'Caso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caso = Caso::find($id)->delete();

        return redirect()->route('casos.index')
            ->with('success', 'Caso deleted successfully');
    }
}
