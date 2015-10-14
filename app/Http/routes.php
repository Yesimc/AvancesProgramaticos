<?php

get('/', ['as' => 'login', 'uses' => 'LoginController@login']);

post('/login', ['as' => 'login.post', 'uses' => 'LoginController@post']);

get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);