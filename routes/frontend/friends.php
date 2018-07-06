<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */

Route::get('/friends', 'FriendsController@index')->name('friendslist');
Route::get('/addFriends', 'FriendsController@addFriends')->name('addFriends');