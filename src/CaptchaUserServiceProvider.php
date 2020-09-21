<?php

namespace Encore\CaptchaUser;

use Illuminate\Support\ServiceProvider;

class CaptchaUserServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(CaptchaUser $extension)
    {
        if (! CaptchaUser::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'laravel-catpcha');
        }

        if ($migrations = $extension->migrations()) {
            $this->loadMigrationsFrom($migrations);
        }

        $this->publishes([
            __DIR__.'/../resources/lang/en/admins.php' => resource_path('lang/en/admins.php'),
            __DIR__.'/../resources/lang/zh-CN/admins.php' => resource_path('lang/zh-CN/admins.php'),
            __DIR__.'/../resources/lang/zh-CN/validation.php' => resource_path('lang/zh-CN/validation.php'),
            __DIR__.'/../resources/lang/zh-CN/auth.php' => resource_path('lang/zh-CN/auth.php'),
        ], 'lang');

        $this->app->booted(function () {
            CaptchaUser::routes(__DIR__.'/../routes/web.php');
        });
    }
}