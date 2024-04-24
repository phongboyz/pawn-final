<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', App\Livewire\Auth\LoginComponent::class)->name('login');

Route::group(['middleware'=> 'auth'], function(){
    Route::get('/dashboards', App\Livewire\Backend\DashboardComponent::class)->name('dashboard');

    //Customer
    Route::get('/customers', App\Livewire\Backend\Customer\IndexComponent::class)->name('customer');

    //Product
    Route::get('/muads', App\Livewire\Backend\Product\Muad\IndexComponent::class)->name('muad');
    Route::get('/categorys', App\Livewire\Backend\Product\Category\IndexComponent::class)->name('category');
    Route::get('/products', App\Livewire\Backend\Product\IndexComponent::class)->name('product');

    //Setting
    Route::get('/currencies', App\Livewire\Backend\Currency\IndexComponent::class)->name('currency');

    //Address
    Route::get('/provinces', App\Livewire\Backend\Address\ProvinceComponent::class)->name('province');
    Route::get('/districts', App\Livewire\Backend\Address\DistrictComponent::class)->name('district');
    Route::get('/villages', App\Livewire\Backend\Address\VillageComponent::class)->name('village');
    

    //System
    Route::get('/roles', App\Livewire\Backend\Role\IndexComponent::class)->name('role');
    Route::get('/users', App\Livewire\Backend\User\UserComponent::class)->name('user');
    Route::get('/branchs', App\Livewire\Backend\Branch\IndexComponent::class)->name('branch');

    Route::get('/logout', App\Livewire\Auth\LoginComponent::class,'logout')->name('logout');
});