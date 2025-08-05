<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('optimize-clear',function(){
    Artisan::command('optimize-clear',fn() => []);
    return 'limpiado';
});
Route::get('phpinfo',function(){
    return phpinfo();
});
