<?php

namespace App\Model;
use App\Model\Estoque;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    //
    use SoftDeletes;

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
