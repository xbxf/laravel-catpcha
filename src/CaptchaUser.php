<?php

namespace Encore\CaptchaUser;

use Encore\Admin\Extension;

class CaptchaUser extends Extension
{
    public $name = 'laravel-catpcha';

    public $views = __DIR__.'/../resources/views';

    public $migrations = __DIR__.'/../database/migrations';
}