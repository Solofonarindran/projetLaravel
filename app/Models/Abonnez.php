<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnez extends Model
{
    use HasFactory;
    protected $table="abonnez";
    protected $fillable=[
        'count',
        'mounth',
        'rest_acount',
        'logement_id'

    ];

    public function logement(){
        return $this->belongsTo(Logement::class);
    }
}
