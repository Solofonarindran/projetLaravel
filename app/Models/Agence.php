<?php

namespace App\Models;

use App\Models\Cite;
use App\Models\Logement;
use App\Models\Responsable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agence extends Model
{
    
    use HasFactory;
    protected $table='agence';
    protected $fillable=[
        'libelle',
        'code',
        'province'
       
    ];

    public function responsables(){
        return $this->hasMany(Responsable::class);
    }
    
    public function cites(){

        return $this->hasMany(Cite::class);
    }

    public function logements(){
        return $this->hasMany(Logement::class);
    }
}

?>