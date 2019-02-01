<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('/movies', 'API\MovieController')->middleware('cors');

