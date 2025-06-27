<?php

namespace App\Http\Controllers;

use App\Models\President;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presidents = President::all();
        return view('president.index',compact('presidents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('president.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $presidents = new President();

        $presidents ->dni=$request->dni;
        $presidents ->nombre=$request->nombre;
        $presidents ->año=$request->año;
        $presidents ->fecha_nacimiento=$request->fecha_nacimiento;
        $presidents ->apellidos=$request->apellidos;
      
        $presidents->save();

        return redirect()->route('president.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(President $id)
    {
         $president = President::find($id);
       
        return view('president.show', compact('president'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(President $president)
    {
         return view('president.edit',compact('president'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, President $president)
    {
       
        $president->nombre = $request->nombre;
        $president->año = $request->año;
        $president->fecha_nacimiento = $request->fecha_nacimiento;
        $president->apellidos = $request->apellidos;
        $president->save();
    
        return redirect()->route('area.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(President $president)
    {
               $president->delete();

        return redirect()->route('president.index');
    }
}
