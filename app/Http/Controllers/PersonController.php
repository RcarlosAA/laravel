<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $persona=Person::all();
        //dd($persona);
        return view('persona/persona',['persona'=>$persona]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('persona/crearPersona');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //dd($request->all());
        Person::create($request->all());
        return redirect()->route('persona.index')->with('success','Persona Creada Correctamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person): View
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person): View
    {
        
        
        //dd($person);
        //return view("edit", ["task" => $task]);
        return view('persona/editarPersona',['person' => $person]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person): RedirectResponse
    {
        //dd($request->all());
        //
        $person->update($request->all());
        return redirect()->route('persona.index')->with('success','Persona Actualizada Correctamente!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        $person->delete();
        return redirect()->route('persona.index')->with('success','Persona Eliminada Correctamente!');
    }
}
