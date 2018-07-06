<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/createList', 'ListController@createList')->name('createList');
Route::post('createList/send', 'ListController@send')->name('createList.send');

Route::get('/detailList/{id}', 'ListController@detailList')->name('detailList');
Route::get('/addItem/{id}', 'ListController@addItem')->name('addItem');
Route::post('addItem/send', 'ListController@addItemSend')->name('additem.send');

Route::get('/addContributor/{id}', 'ListController@addContributor')->name('addContributor');
Route::post('addContributor/send', 'ListController@addContributorSend')->name('addContributor.send');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
