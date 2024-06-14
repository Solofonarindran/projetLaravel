<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
    use HasFactory;
    protected $table='terrain';
    protected $fillable=[
        'numero',
        'superficie',
        'unite'
    ];

    public function logements(){
        return $this->hasMany(Logement::class);    
    }
}
