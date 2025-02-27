<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Password::defaults(static fn () => Password::min(6) // 6文字以上であること
        //     ->max(255) // 255文字以下であること
        //     ->mixedCase() // 大文字と小文字のアルファベットを含むこと
        //     ->symbols() // 記号を1文字以上含むこと
        //     ->numbers() // 数字を1文字以上含むこと
        //     ->uncompromised() // 漏洩済みパスワードでないこと
        // );
    }

    /**
     * Bootstrap any application services.
    */
    public function boot(): void
    {
      Password::defaults(function () {
        return Password::min(6) // 6文字以上であること
        ->max(255) // 255文字以下であること
        ->mixedCase() // 大文字と小文字のアルファベットを含むこと
        ->symbols() // 記号を1文字以上含むこと
        ->numbers() // 数字を1文字以上含むこと
        ->uncompromised(); // 漏洩済みパスワードでないこと
      });
    }
}
