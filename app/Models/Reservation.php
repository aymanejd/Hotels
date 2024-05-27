<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public function internautes(){
        return $this->belongsTo(Internaute::class);
    }
    public function chambres(){
        return $this->belongsToMany(Chambre::class,'reservation_chambre');
    }
}