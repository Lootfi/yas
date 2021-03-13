<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'SearchController@index');

Route::get('/results', 'SearchController@results')->name('results');
Route::post('search', 'SearchController@search')->name('submit-search');
Route::get('/channels/{channel}/{page?}', 'ChannelController@index')->name('channel');
