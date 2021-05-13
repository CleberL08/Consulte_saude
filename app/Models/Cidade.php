<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{


    protected $table = 'Cidade';
    protected $primaryKey =  'cid_cod' ;

    protected $fillables = [
        'cid_nome',
        'est_cod'
    ];
}
