<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    //
    protected $table ='estoque';
    protected $fillable = [
        'produto_id',
        'quantidade'
    ];

}
