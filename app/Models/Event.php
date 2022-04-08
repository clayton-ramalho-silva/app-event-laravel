<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Dizendo para o laravel que vamos receber um array no items - induzindo um tipo
    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['date'];


    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
