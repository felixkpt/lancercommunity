<?php
namespace App\Information;
use Illuminate\Support\Facades\Config;
class SiteInfo {

    public static function config($key)
    {
        return Config::get('siteinfo')[$key];
    }

    public static function name() {
        return static::config('name');
    }
    public static function title() {
        return static::config('title');
    }
    public static function description() {
        return self::config('description');
    }
    
}