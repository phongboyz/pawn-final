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

    //Pawn
    Route::get('/create-pawns', App\Livewire\Backend\Pawn\CreatePawnComponent::class)->name('create-pawn');
    Route::get('/pending-pawns', App\Livewire\Backend\Pawn\PendingPawnComponent::class)->name('pending-pawn');
    Route::get('/pending-pay-pawns', App\Livewire\Backend\Pawn\PendingPayPawnComponent::class)->name('pending-pay-pawn');
    Route::get('/all-pawns', App\Livewire\Backend\Pawn\AllPawnComponent::class)->name('all-pawn');
    Route::get('/movement-pawns', App\Livewire\Backend\Pawn\MovementPawnComponent::class)->name('movement-pawn');
    Route::get('/expire-pawns', App\Livewire\Backend\Pawn\ExpirePawnComponent::class)->name('expire-pawn');
    Route::get('/finish-pawns', App\Livewire\Backend\Pawn\FinishPawnComponent::class)->name('finish-pawn');
    Route::get('/cancel-pawns', App\Livewire\Backend\Pawn\CancelPawnComponent::class)->name('cancel-pawn');

    Route::get('/pawn-detail/{id}', App\Livewire\Backend\Pawn\Bill\ShowPawnDetailComponent::class)->name('pawn-detail');
    Route::get('/pdf-bill-pawn/{id}', [App\Http\Controllers\Pawn\BillPawnController::class, 'generatePDF'])->name('pdf-bill-pawn');
    Route::get('/pdf-bill-plan-pawn/{id}', [App\Http\Controllers\Pawn\BillPawnController::class, 'generatePlanPDF'])->name('pdf-bill-plan-pawn');
    Route::get('/pdf-bill-pay-pawn/{id}', [App\Http\Controllers\Pawn\BillPawnController::class, 'generatePayPDF'])->name('pdf-bill-pay-pawn');

    //Cost
    Route::get('/so-cost', App\Livewire\Backend\Cost\SoCostComponent::class)->name('so-cost');
    Route::get('/report-cost', App\Livewire\Backend\Cost\ReportCostComponent::class)->name('report-cost');

    //Pay
    Route::get('/pay-pawn/{id}', App\Livewire\Backend\Pawn\Pay\PayComponent::class)->name('pay-pawn');

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