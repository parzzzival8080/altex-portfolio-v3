<?php

Route::get('{any}', function () {
    return view('index');
})->where('any','.*');

// Route::get('/samplePrivacy', function ()
// {
//     return view('privacy');
// });