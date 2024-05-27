<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'type_chambre', 'prix_unitaire'
    ];
    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
}