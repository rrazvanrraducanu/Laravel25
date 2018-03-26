<?php
Route::get('/', 'FlowersController@index');
Route::any('/search', 'FlowersController@search');
