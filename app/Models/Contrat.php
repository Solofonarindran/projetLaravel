<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;

    protected $table='contrat';

    protected $fillable=[
        'minority',
        'majority',
        'duration',
        'libele'
    ];

    public function logements(){
        return $this->hasMany(Logement::class);
    }
}
