<?php

namespace App\Http\Controllers;

use App\Models\Internaute;
use Illuminate\Http\Request;

class InternauteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $internautes=Internaute::all();
        return view("internaute.show",compact('internautes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("internaute.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formfileds=$request->validate([
            'nom'=>'required|between:4,10',
            'prenom'=>'required|unique:internautes',
            'adresse'=>'required|min:10|unique:internautes',
            'cin'=>'required|between:4,20|unique:internautes', 
        'date_naissance'=>'date|required'       
        ]);
       Internaute::create($formfileds);
        
        return redirect()->route('internautes.index')->with('success','internaute creer avec succer ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Internaute $internaute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Internaute $internaute)
    {  
        return view("internaute.edite",compact('internaute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $formfileds=$request->validate([
            'nom'=>'required|between:4,10',
            'prenom'=>'required',
            'adresse' => 'required|min:10',
            'cin'=>'required|between:4,20', 
        'date_naissance'=>'date|required'       
        ]);
        $internaute=Internaute::find($id);
        $internaute->update($formfileds);
        return redirect()->route('internautes.index')->with('success','internaute modifier avec succer ');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Internaute $internaute)
    {
        $internaute->delete();
        return redirect()->route('internautes.index')->with('warning','internaute suprimer avec succer ');
    }
}