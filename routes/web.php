<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::get('/login', function () {
    return "Login";
});
Route::prefix("/app")->group(function () {
    Route::get('/clientes', function () {
        return "Clientes";
    });
    Route::get('/fornecedores', function () {
        return "Fornecedores";
    });
    Route::get('/produtos', function () {
        return "Produtos";
    });
});

Route::fallback(function () {
    echo 'A rota acessada não existe. Clique aqui para ir para página inicial';
});
