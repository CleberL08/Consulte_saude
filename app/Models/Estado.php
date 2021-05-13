<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{

    protected $table = 'Estado';
    
    protected $primaryKey = 'est_cod'  ;

    protected $fillables = [
        'est_sgl',
        'est_nome',
        'pais_cod'
    ];
}
