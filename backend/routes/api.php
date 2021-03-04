<?php

// Route::apiResource('listas', 'api\ListaController');
// Route::apiResource('tarefas', 'api\TarefaController');

Route::get('listas', 'Api\\ListaController@index');