<?php

namespace App\Http\Controllers;

use App\Models\InventarioMike;
use Illuminate\Http\Request;

/**
 * Class InventarioMikeController
 * @package App\Http\Controllers
 */
class InventarioMikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventarioMikes = InventarioMike::paginate();

        return view('inventario-mike.index', compact('inventarioMikes'))
            ->with('i', (request()->input('page', 1) - 1) * $inventarioMikes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventarioMike = new InventarioMike();
        return view('inventario-mike.create', compact('inventarioMike'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(InventarioMike::$rules);

        $inventarioMike = InventarioMike::create($request->all());

        return redirect()->route('inventario-mikes.index')
            ->with('success', 'InventarioMike created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventarioMike = InventarioMike::find($id);

        return view('inventario-mike.show', compact('inventarioMike'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventarioMike = InventarioMike::find($id);

        return view('inventario-mike.edit', compact('inventarioMike'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  InventarioMike $inventarioMike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InventarioMike $inventarioMike)
    {
        request()->validate(InventarioMike::$rules);

        $inventarioMike->update($request->all());

        return redirect()->route('inventario-mikes.index')
            ->with('success', 'InventarioMike updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inventarioMike = InventarioMike::find($id)->delete();

        return redirect()->route('inventario-mikes.index')
            ->with('success', 'InventarioMike deleted successfully');
    }
}
