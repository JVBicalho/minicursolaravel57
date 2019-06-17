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
    //Redireciona para a Rota de login
    return redirect()->route('login');
});
Auth::routes(['verify'=> true]);
/*
Declara as rotas de autenticação:

// Authentication Routes...
        $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
        $this->post('login', 'Auth\LoginController@login');
        $this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Rotas de Registro...

    $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    $this->post('register', 'Auth\RegisterController@register');

//Rotas para trocar senha
    $this->resetPassword();

//Rotas de Verificação de Email
     $this->emailVerification();
*/

Route::group(array('middleware'=>['auth','verified'],['namespace'=>'produto'],'as'=>'produto.','prefix'=>'produto'),function(){
    /*Route::get('/','')->name('index');*/
    Route::get('/cadastrar',function(){return view('forms.formCadastrar');})->name('add');
    Route::post('/cadastrar','ProdutoController@new')->name('add');
    Route::get('/{id}','ProdutoController@detalhes')->name('detalhes');
    Route::post('/{id}','ProdutoController@estoque')->name('estoque');
    Route::any('/d/{id}','ProdutoController@delete')->name('delete');

});
Route::get('/home', 'ProdutoController@index')->name('home');


