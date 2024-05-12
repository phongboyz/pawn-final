<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use App\Models\App;
use App\Models\Pawn;
use App\Models\PawnDetail;
use Illuminate\Support\Facades\Auth;


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
        View::composer('*', function($view)
        {
            if (Auth::check()){
                $data_app = App::find(1);
                $count_pending = Pawn::where('status','p')->count();
                $data_pending = Pawn::where('status','p')->limit(3)->get();

                $role_arrs = explode(',',auth()->user()->rolename->permission);
                $data_role = [];
                foreach($role_arrs as $item){
                    $data_role += array($item=>$item);
                }

                View::share(['data_app'=>$data_app,'count_pending'=>$count_pending, 'data_pending'=>$data_pending, 'data_role'=>$data_role]);
            }
        });
    }
}