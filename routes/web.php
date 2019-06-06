<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();
Route::group(array('middleware'=>'auth',['namespace'=>'produto'],'as'=>'produto.','prefix'=>'produto'),function(){
    /*Route::get('/','')->name('index');*/
    Route::get('/cadastrar',function(){return view('forms.formCadastrar');})->name('add');
    Route::post('/cadastrar','ProdutoController@new')->name('add');
    Route::get('/{id}','ProdutoController@detalhes')->name('detalhes');
    Route::post('/{id}','ProdutoController@estoque')->name('estoque');
    Route::any('/d/{id}','ProdutoController@delete')->name('delete');

});
Route::get('/home', 'ProdutoController@index')->name('home');
