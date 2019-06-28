<?php

namespace App\Model;

use App\Model\Produto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

//Declara que vamos usar o Uuid
use App\Traits\Uuids;

class Estoque extends Model
{
    //
    use SoftDeletes;

    use Uuids;// Obriga a classe a usar o Uuid
    public $incrementing= false ; // Declara que não vamos usar o autoincremento

    protected $table ='estoque';
    protected $fillable = [
        'produto_id',
        'quantidade'
    ];
    public function produto(){
        return $this->belongsTo(Produto::class);
    }
}
