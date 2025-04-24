<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phone extends Model
{
    Use HasFactory;
    protected $fillable = ['number', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class); //relacion 1 a 1 entre usuario y telefono
    }
    
}

