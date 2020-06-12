<?php

namespace App\Providers;


use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        VerifyEmail::toMailUsing(function ($notifiable, $url){
            $mail = new \App\Mail\VerifyEmail($notifiable, $url);
            return $mail;
        });

        \Illuminate\Auth\Notifications\ResetPassword::toMailUsing(function ($notifiable, $token) {
            $mail = new \App\Mail\EmailReset($notifiable, url(route('password.reset', $token)));
            return $mail;
        });
    }
}
