<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cite extends Model
{
    use HasFactory;

    protected $table='cite';

    protected $fillable=[
        'libelle',
        'agence_id'
    ];
    
  
    public function agence(){
        return $this->belongsTo(Agence::class);
    }
    public function logements(){
        return $this->hasMany(Logement::class);
    }
    
}
