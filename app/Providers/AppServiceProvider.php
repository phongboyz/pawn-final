<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use App\Models\Pawn;
use App\Models\PawnDetail;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        $count_pending = Pawn::where('status','p')->count();
        $data_pending = Pawn::where('status','p')->limit(3)->get();
        View::share(['count_pending'=>$count_pending, 'data_pending'=>$data_pending]);
    }
}
