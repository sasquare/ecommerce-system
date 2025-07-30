<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['role' => request()->attributes->get('role')]);
});