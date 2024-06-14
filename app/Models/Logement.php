<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\MustVerifyEmail;

//use Illuminate\Foundation\Auth\User as Authenticatable;

class Logement extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table='logement';

    protected $fillable = [
        'title',
        'numero',
        'typevente',
        'prix',
        'client_id',
        'cite_id',
        'agence_id',
        'terrain_id',
        'contrat_id',
        'compte',
        'path'
    
    ];

   

    /*relation*/

    public function cite(){
        return $this->belongsTo(Cite::class);
    }

    public function terrain(){
        return $this->belongsTo(Terrain::class);
    }

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function agence(){
        return $this->belongsTo(Agence::class);
    }
   
    public function abonnezs(){
        return $this->hasMany(Abonnez::class);
    }

    public function contrat(){
        return $this->belongsTo(Contrat::class);
    }
}
