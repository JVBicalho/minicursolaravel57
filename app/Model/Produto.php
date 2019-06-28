<?php

namespace App\Model;
use App\Model\Estoque;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

//Declara que vamos usar o Uuid
use App\Traits\Uuids;


class Produto extends Model
{
    //
    use SoftDeletes;

    use Uuids;// Obriga a classe a usar o Uuid
    public $incrementing= false ; // Declara que não vamos usar o autoincremento

    protected $table='produto';
    protected $fillable =[
        'name',
        'descricao',
        'img'
    ];
    public function estoque(){
        return $this->hasMany(Estoque::class);
    }
}
