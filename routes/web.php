<?php

use App\Livewire\Mockups\HomeMock;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');


Route::livewire('/home-mock', HomeMock::class)->name('home-mock');
