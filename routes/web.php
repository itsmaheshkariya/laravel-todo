<?php

Route::get('/',['uses'=>'TodoController@show','as'=>'todos.show']);
Route::post('/',['uses'=>'TodoController@create','as'=>'todos.create']);
Route::delete('/delete/{id}',['uses'=>'TodoController@delete','as'=>'todos.delete']);
Route::get('/{id}',['uses'=>'TodoController@showid','as'=>'todos.showid']);
