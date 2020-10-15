<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'color','owners','type','value','km','description',
    ];

         //função de acesso ao usuario
         public function user(){
            return $this->belongsTo('App\Models\User');
        }

        public function image(){
            return $this->hasOne('App\Models\Image');
        }
}
