<?php

use Illuminate\Database\Seeder;

class Produto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('produto')->insert([
            'name'=>'parafuso',
            'descricao'=>'parafusos sextavado'
        ]);
        DB::table('produto')->insert([
            'name'=>'parafuso',
            'descricao'=>'parafusos sextavado'
        ]);
        DB::table('produto')->insert([
            'name'=>'parafuso',
            'descricao'=>'parafusos sextavado'
        ]);
        DB::table('produto')->insert([
            'name'=>'parafuso',
            'descricao'=>'parafusos sextavado'
        ]);
        DB::table('produto')->insert([
            'name'=>'parafuso',
            'descricao'=>'parafusos sextavado'
        ]);
        DB::table('produto')->insert([
            'name'=>'parafuso',
            'descricao'=>'parafusos sextavado'
        ]);
        DB::table('produto')->insert([
            'name'=>'parafuso',
            'descricao'=>'parafusos sextavado'
        ]);
        DB::table('produto')->insert([
            'name'=>'parafuso',
            'descricao'=>'parafusos sextavado'
        ]);
    }
}
