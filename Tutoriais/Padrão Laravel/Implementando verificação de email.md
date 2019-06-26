
Adicionar a implementação da verificação de email no User Model(App\User)
    "use Illuminate\Contracts\Auth\MustVerifyEmail"

adcionar na declaração do User 

    "class User extends Authenticatable implements MustVerifyEmail"

Se por acaso estiver usando uma tabela de usuarios diferente do padrão do Laravel 5.7 , então adicione a coluna "email_verified_at" na user  migration
    
    "$table->timestamp('email_verified_at')->nullable();"

Adicione o metodo verify na declararação das rotas de autenticação, no arquivo routes\web
    "Auth::routes(['verify' => true]);"

Adicione o middleware veryfied (verificado) as rotas que você deseja proteger

    Route::get('profile', function () {
        // Apenas usuarios com o email verificado pode acessar
    })->middleware('verified');

Para gerar as views nescessarias rode o seguinte comando

    php artisan make:auth

Temos que adicionar as configurações de conexão para o servidor de email, essas configurações ficam no arquivo ".env" e nos arquivos da pasta "config" .
Estou usando o mailtrap.io para testar o envio de email.

    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=seuusername
    MAIL_PASSWORD=suasenha
    MAIL_ENCRYPTION=null
