<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table='client';

    protected $fillable=[
        'name',
        'adress',
        'phone',
        'cin',
        'workspace'
    ];

    public function logements(){
        return $this->hasMany(Logement::class);
    }
}
