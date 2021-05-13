<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{



    protected $table = 'Pais';
    protected $primaryKey = 'pais_cod';

    protected $fillables = [
        'pais_nome'

    ];
}
