<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use Illuminate\Http\Request;

class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chambres=Chambre::all();
        return view("chambre.show",compact('chambres'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Chambre.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formfileds=$request->validate([
            'nom'=>'required|between:4,10|unique:chambres,nom',
            'type_chambre'=>'required',
            'prix_unitaire'=>'required|min:3|numeric',
        ]);
    
      Chambre::create($formfileds);
        
        return redirect()->route('chambres.index')->with('success','chambre creer avec succer ');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Chambre $chambre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chambre $chambre)
    {  
        return view("Chambre.edite",compact('chambre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $formfileds=$request->validate([
            'nom'=>'required|between:4,10',
            'type_chambre'=>'required',
            'prix_unitaire'=>'required|min:3',       
        ]);
        $chambre=Chambre::find($id);
        $chambre->update($formfileds);
        return redirect()->route('chambres.index')->with('success','chambre modifier avec succer ');;


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chambre $chambre)
    {
        $chambre->delete();
        return redirect()->route('chambres.index')->with('warning','chambre suprimer avec succer ');

    }
}