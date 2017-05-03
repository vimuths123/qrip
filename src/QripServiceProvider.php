<?php

namespace vimuths123\qrip;

use Illuminate\Support\ServiceProvider;

class QripServiceProvider extends ServiceProvider {

    public function register() {
        $this->app->bind('qrip', function ($app) {
            return new Qrip;
        });
    }

    public function boot() {
        // loading the routes file
        require __DIR__ . '/Http/routes.php';
    }

}
