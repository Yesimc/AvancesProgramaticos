<?php

get('/', ['as' => 'login', 'uses' => 'LoginController@login']);

post('/login', ['as' => 'login.post', 'uses' => 'LoginController@post']);

Route::group(['middleware' => 'auth'], function(){

    get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

    get('/materias/{id}/temas', ['as' => 'materia', 'uses' => 'Tema\TemaController@index']);

    /* API REST */

    get('/api/maestros/{id}/temas', 'Tema\TemaController@getTema');

    post('/api/maestros/{id}/temas', 'Tema\TemaController@postTema');

    get('/api/maestros/{id}/temas/subtemas', 'SubtemaController@getSubtema');

    post('/api/maestros/{id}/temas/subtemas', 'SubtemaController@postSubtema');
});