<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('listas', 'api\ListaController');
Route::apiResource('tarefas', 'api\TarefaController');