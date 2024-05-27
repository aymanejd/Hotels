<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use App\Models\Internaute;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $internautes = Internaute::has('reservations')->with('reservations.chambres')->get();
        return view('Reservation.show', compact('internautes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $internautes = Internaute::all();
        $chambres = Chambre::all();
        return view('Reservation.create', compact('internautes','chambres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string',
            'date_debut_sejour' => 'required|date',
            'date_fin_sejour' => 'required|date|after:date_debut_sejour',
            'internaute' => 'required|exists:internautes,id',
            'chambre_id' => 'required|exists:chambres,id',
        ]);
        $chambre=Chambre::findOrFail($request->chambre_id);
        $dateDebut = new \DateTime($request->date_debut_sejour);
    $dateFin = new \DateTime($request->date_fin_sejour);
    $difference = $dateDebut->diff($dateFin)->days;

        $reservation = new Reservation();
        $reservation->prixtotal = $difference*$chambre->prix_unitaire;

        $reservation->titre = $request->titre;
        $reservation->date_debut_sejour = $request->date_debut_sejour;
        $reservation->date_fin_sejour = $request->date_fin_sejour;
        $reservation->internaute_id = $request->internaute;
        $reservation->save();
        $reservation->chambres()->attach($request->chambre_id);
    
        return redirect()->route('reservations.index')->with('success', 'Reservation created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   /**
 * Show the form for editing the specified resource.
 */
public function edit(Reservation $reservation)
{
    $internautes = Internaute::all();
    $chambres = Chambre::all();
    return view('Reservation.edite', compact('reservation', 'internautes', 'chambres'));
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, Reservation $reservation)
{
    $request->validate([
        'titre' => 'required|string',
        'date_debut_sejour' => 'required|date',
        'date_fin_sejour' => 'required|date|after:date_debut_sejour',
        'internaute' => 'required|exists:internautes,id',
        'chambre_id' => 'required|exists:chambres,id',
    ]);
    $chambre=Chambre::findOrFail($request->chambre_id);
        $dateDebut = new \DateTime($request->date_debut_sejour);
    $dateFin = new \DateTime($request->date_fin_sejour);
    $difference = $dateDebut->diff($dateFin)->days;
    $reservation->titre = $request->titre;
    $reservation->prixtotal = $difference*$chambre->prix_unitaire;

    $reservation->date_debut_sejour = $request->date_debut_sejour;
    $reservation->date_fin_sejour = $request->date_fin_sejour;
    $reservation->internaute_id = $request->internaute;
    $reservation->save();

    $reservation->chambres()->sync([$request->chambre_id]);

    return redirect()->route('reservations.index')->with('success', 'Reservation updated successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {   $reservation->chambres()->detach($reservation);
        $reservation->delete();
        return redirect()->route('reservations.index')->with('warning', 'Reservation deleted successfully.');;

    }
}